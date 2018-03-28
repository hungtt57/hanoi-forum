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
    <h3>Submit Abstract/Paper</h3>

    @include('admin.flash_message')

    <form action="{{route('Backend::postSubmit')}}" class="form-horizontal"
          method="POST" enctype="multipart/form-data">

        <div class="form-body">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Abstract*</label>
                <div class="col-md-6">
                    <textarea name="abstract" class="form-control" maxlength="250"
                                           rows="5">{{old('abstract')}}</textarea>
                </div>
            </div>
            {{--<div class="form-group">--}}
                {{--<label class="control-label col-md-3 " for="Name">Paper*</label>--}}
                {{--<div class="col-md-6">--}}
                    {{--<input type="file" class="post-image form-control" name="file"--}}
                           {{--rel="post_status_images">--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
        <div class="form-actions">
            <div class="row" style="text-align: center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn default">Reset</button>

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