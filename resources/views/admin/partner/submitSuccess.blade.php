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

    <form  class="form-horizontal">
        <div class="alert alert-success"> Successful submision! A confirmation has been sent to your email address.
            <p>Do you want to submit again.Click <a href="{{url('admin/submit')}}">here</a></p>
        </div>

        <div class="form-body">
            {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label col-md-3">Title of the paper</label>
                    <div class="col-md-6">

                        <input type="text" name="paper"
                               class="form-control"
                               value="{{old('paper',$user->title_of_paper)}}" disabled>
                    </div>
                </div>
            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Abstract</label>
                <div class="col-md-6">
                    <textarea name="abstract" disabled class="form-control" maxlength="250"
                                           rows="5">{{old('abstract',$user->abstract)}}</textarea>
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