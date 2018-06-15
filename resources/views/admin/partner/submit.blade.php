@extends('admin.layouts.master')

@section('style')
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/assets/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-lg-6 {
            padding-left: 0px;
        }
    </style>
@endsection
@section('content')
    <h3>Submit Abstract</h3>

    @include('admin.flash_message')

    <form action="{{route('Backend::postSubmit')}}" class="form-horizontal"
          method="POST" enctype="multipart/form-data">

        <div class="form-body">
            {{ csrf_field() }}
            <p>Please download the abstract template <a href="{{url('abstract-example.docx')}}" class="" target="_blank">here</a> and follow the instruction for submission.</p>

        @if(!$user->confirm_abstract)
              @if($user->reject_abstract)
                <div class="alert alert-danger">{{$user->reject_abstract}}</div>

            @endif
                <div class="form-group">
                    <label class="control-label col-md-3">Title of the paper*</label>
                    <div class="col-md-6">
                        <input type="text" name="title_of_paper"
                               class="form-control"
                               value="{{old('title_of_paper',$user->title_of_paper)}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 " for="Name">Abstract*</label>
                    <div class="col-md-6">
                        <div class="col-md-6">

                            <input type="file" class="post-image form-control" name="abstract"
                                   rel="post_status_images">
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 " for="Name">Submission to panel session*</label>
                      <div class="col-md-6">
                          <div class="col-md-6">

                              <select class="form-control" name="abstract_panel" >
                                  @foreach(\App\Models\User::$panelText as $key => $value)
                                      <option value="{{$key}}" @if($key == old('abstract_panel',@$user->abstract_panel)) selected @endif>{{$value}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div>


            @endif
            {{--@if($user->confirm_abstract and $user->confirm_paper == 0)--}}
              {{--@if($user->reject_paper)--}}
                {{--<div class="alert alert-danger">{{$user->reject_paper}}</div>--}}
            {{--@endif--}}
            {{--<div class="form-group">--}}
                {{--<label class="control-label col-md-3 " for="Name">Paper*</label>--}}
                {{--<div class="col-md-6">--}}
                    {{--<input type="file" class="post-image form-control" name="paper"--}}
                           {{--rel="post_status_images">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endif--}}
        </div>
        @if(!$user->confirm_abstract || !$user->confirm_paper)
        <div class="form-actions">
            <div class="row" style="text-align: center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn default">Reset</button>

            </div>
        </div>
        @endif
    </form>




@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script type="application/javascript">
      $(function () {
        $(".post-image").fileinput({
          'showUpload': false, 'previewFileType': 'any',
          'showCaption': false,
          // 'maxFileSize': '5120',
          'showUploadedThumbs': false,
          'allowedFileTypes': 'any'
        });
      });
    </script>


@endpush