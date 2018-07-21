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
    <h3>Submit Full Paper</h3>

    @include('admin.flash_message')

    <form action="{{route('Backend::postSubmitPaper')}}" class="form-horizontal"
          method="POST" enctype="multipart/form-data">

        <div class="form-body">
            {{ csrf_field() }}
            <p>
                <b>Please download the full paper template <a href="{{url('Full paper template for Hanoi Forum 2018.docx')}}" class="" target="_blank">here</a> and follow the instruction for submission.</b>
            </p>


                <div class="form-group">
                    <label class="control-label col-md-3">Title of the paper*</label>
                    <div class="col-md-6">
                        <input type="text" name="title_of_paper"
                               class="form-control"
                               value="{{old('title_of_full_paper',$user->title_of_full_paper)}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 " for="Name">Full Paper*</label>
                    <div class="col-md-6">
                        <div class="col-md-6">

                            <input type="file" class="post-image form-control" name="paper"
                                   rel="post_status_images">
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 " for="Name">Submission to panel session*</label>
                      <div class="col-md-6">
                          <div class="col-md-6">

                              <select class="form-control" name="paper_panel" >
                                  <option value="">Please choose panel</option>
                                  @foreach(\App\Models\User::$panelText as $key => $value)
                                      <option value="{{$key}}" @if($key == old('paper_panel',@$user->paper_panel)) selected @endif>{{$value}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div>


        </div>
        {{--@if(!$user->confirm_abstract || !$user->confirm_paper)--}}
        <div class="form-actions">
            <div class="row" style="text-align: center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn default">Reset</button>

            </div>
        </div>
        {{--@endif--}}
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