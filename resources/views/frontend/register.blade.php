@extends('frontend.layouts.master')
@section('title','Home')
@push('styles')
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
                        @include('admin2.flash_message')
                        <p>
                            Please fill in the following form, and click <b>Submit</b>.
                            You will receive an automatic email to confirm your registration.
                            If you do not receive the reply within 5 days, please contact us directly at <strong>hanoiforum@vnu.edu.vn</strong>.

                        </p>
                        <form id="login-form" action="{{route('Frontend::postRegister')}}" method="post" role="form"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label ">First name*</label>
                                <div class="controls">
                                    <input type="text" name="first_name" value="{{old('first_name')}}" tabindex="2"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Last name*</label>
                                <div class="controls">
                                    <input type="text" name="last_name" value="{{old('last_name')}}" tabindex="2"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Title*</label>
                                <div class="controls">
                                    <input type="text" name="title" value="{{old('title')}}" tabindex="2"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Affiliation*</label>
                                <div class="controls">
                                    <input type="text" name="affiliation" value="{{old('affiliation')}}" tabindex="2"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Email address*</label>
                                <div class="controls">
                                    <input type="email" name="email" tabindex="1" class="form-control"
                                           value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Password*</label>
                                <div class="controls">
                                    <input type="password" name="password" tabindex="2" class="form-control"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Password confirmation*</label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" tabindex="2"
                                           class="form-control"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Gender</label>
                                <div class="controls">
                                    <label class="radio-inline"><input type="radio" name="gender" value="2"
                                                                       @if(old('gender') == 2) checked @endif>Male</label>
                                    <label class="radio-inline"><input type="radio" name="gender" value="1"
                                                                       @if(old('gender') == 1) checked @endif>Female</label>
                                    <label class="radio-inline"><input type="radio" name="gender" value="0"
                                                                       @if(empty(old('gender'))) checked @endif>Not
                                        specify</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Nationality</label>
                                <div class="controls">
                                    @php $nations = \App\Models\Country::orderBy('nicename','desc')->get(); @endphp
                                    <select class="form-control" name="nationality" id="nationality">
                                        @foreach($nations as $nation)
                                        <option value="{{$nation->iso}}" @if($nation->iso == old('nationality')) checked @endif>{{$nation->nicename}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Link CV online</label>
                                <div class="controls">
                                    <input type="text" name="link_cv" tabindex="2"
                                           class="form-control"
                                          value="{{old('link_cv')}}">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="control-label">File attachment</label>
                                <div class="controls">
                                    <input type="file" class="post-image form-control" name="file"
                                           rel="post_status_images">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Abstract</label>
                                <div class="controls">
                                    <input type="text" name="abstract"
                                           class="form-control"
                                           value="{{old('abstract')}}">
                                </div>
                                <p class="help-block">(Should not exceed 250 words)</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="Name">Paper</label>
                                <div class="controls">
                                    <input type="text" name="paper"
                                           class="form-control"
                                           value="{{old('paper')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit"
                                               tabindex="4"
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
    <script src="/frontend/assets/js/select2.min.js"></script>


    <script type="application/javascript">
      $(function () {
        $('#nationality').select2();
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