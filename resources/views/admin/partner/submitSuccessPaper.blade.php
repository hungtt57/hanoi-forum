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
        .file-container {
            border-bottom: 1px solid rgb(221, 221, 221);
            padding-bottom: 20px;
            margin-bottom: 14px;
        }
    </style>
@endsection
@section('content')
    <h3>Submit papers</h3>

    @include('admin.flash_message')

    <form  class="form-horizontal">
        <div class="alert alert-success"> Successful submision! A confirmation has been sent to your email address.
            <p>Do you want to submit again? Click <a href="{{url('admin/submit-paper')}}">here.</a></p>
        </div>

        <div class="form-body">
            {{ csrf_field() }}

                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-md-3">Title of the paper</label>--}}
                    {{--<div class="col-md-6">--}}

                        {{--<input type="text" name="paper"--}}
                               {{--class="form-control"--}}
                               {{--value="{{old('paper',$user->title_of_full_paper)}}" disabled>--}}
                    {{--</div>--}}
                {{--</div>--}}
            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Papers</label>
                <div class="col-md-6">
                    @php $files = json_decode($user->paper,true); @endphp
                    @php $titlePaper = json_decode($user->title_paper,true); @endphp
                    @php $panelPaper = json_decode($user->panel_of_panel,true); @endphp
                    @foreach($files as $index => $file)
                        <div class="file-container">
                              <input type="text" class="form-control" value="{{(isset($titlePaper[$index])) ? $titlePaper[$index] : ''}}" disabled>
                            <a class="btn btn-primary green start" href="{{$user->$file}}"
                               download="" style="float: left;margin-right: 10px;margin-top: 10px"><i class="fa fa-download"></i><span>Download File</span>
                                <div class="clearfix"></div>
                            </a>
                            @if(isset($panelPaper[$index]) and $panelPaper[$index])
                                <input type="text"  class="form-control input-abstract" disabled value="{{\App\Models\User::$panelText[$panelPaper[$index]]}}">
                            @endif
                            <div class="clearfix"></div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
        <div class="form-actions">
            <div class="row" style="text-align: center">


            </div>
        </div>
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