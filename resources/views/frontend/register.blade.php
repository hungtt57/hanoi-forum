@extends('frontend.layouts.master')
@section('title','Home')
@push('styles')
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-lg-6 {
            padding-left: 0px;
        }
    </style>
@endpush
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Register</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">

                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        @include('admin.flash_message')
                        <form id="login-form" action="{{route('Frontend::postRegister')}}" method="post" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label " for="Name">Email</label>
                                <div class="controls">
                                    <input type="email" name="email" tabindex="1" class="form-control"
                                           value="{{old('email')}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" tabindex="2" class="form-control"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Password confirmation</label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" tabindex="2" class="form-control"
                                           placeholder="Password">
                            </div>

                            <div class="form-group clearfix">
                                <label class="control-label">File attachment</label>
                                <div class="controls">
                                    <input type="file" class="post-image form-control" name="file"
                                           rel="post_status_images">
                                </div>
                            </div>

                            <p>
                                Registration fee is USD100 and includes access to all sessions and side events, welcome
                                dinner, refreshments during the conference and conference materials.
                            </p>
                            <p>
                                Registration fee will be waived to delegates with accepted abstracts. Limited financial
                                assistance to support registration fee can be provided on a case-by-case basis. Please
                                indicate if you wish to apply for this assistance in the registration form.
                            </p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                               class="form-control btn btn-info " value="Register">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
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