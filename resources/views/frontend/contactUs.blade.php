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
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/6.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endpush
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Contact us</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Contact us</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    @php  $user  = auth('backend')->user(); @endphp
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        @include('admin.flash_message')
                        @if (!session()->has('success'))
                            <form id="login-form" action="{{route('Frontend::postContactUs')}}" method="post"
                                  role="form"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label ">First name*</label>
                                    <div class="controls">
                                        <input type="text" name="first_name"
                                               value="{{($user) ? $user->first_name : ''}}"
                                               class="form-control"
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Surname*</label>
                                    <div class="controls">
                                        <input type="text" name="sur_name" value="{{($user) ? $user->last_name : ''}}"
                                               class="form-control"
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Title*</label>
                                    <div class="controls">
                                        <input type="text" name="title" value="{{($user) ? $user->title : ''}}"
                                               class="form-control"
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="Name">Email *</label>
                                    <div class="controls">
                                        <input type="email" name="email" value="{{($user) ? $user->email : ''}}"
                                               class="form-control">
                                    </div>
                                </div>

                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label ">Registration ID</label>--}}
                                    {{--<div class="controls">--}}
                                        {{--<input type="text" name="code"--}}
                                               {{--class="form-control"--}}
                                               {{--v value="{{($user) ? $user->code : ''}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label ">Issue</label>--}}
                                    {{--<div class="controls">--}}

                                        {{--<select class="form-control" name="issue" id="nationality">--}}
                                            {{--<option value="Accommodation"--}}
                                                    {{--@if('Accommodation' == old('issue')) checked @endif>Accommodation--}}
                                            {{--</option>--}}
                                            {{--<option value="Travel grant"--}}
                                                    {{--@if('Travel grant' == old('issue')) checked @endif>Travel grant--}}
                                            {{--</option>--}}
                                            {{--<option value="Abstract/paper submission"--}}
                                                    {{--@if('Abstract/paper submission' == old('issue')) checked @endif>--}}
                                                {{--Abstract/paper submission--}}
                                            {{--</option>--}}
                                            {{--<option value="Registration"--}}
                                                    {{--@if('Registration' == old('issue')) checked @endif>Registration--}}
                                            {{--</option>--}}
                                            {{--<option value="Academic issues"--}}
                                                    {{--@if('Academic issues' == old('issue')) checked @endif>Academic--}}
                                                {{--issues--}}
                                            {{--</option>--}}
                                            {{--<option value="Others" @if('Others' == old('issue')) checked @endif>Others--}}
                                            {{--</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label " for="Name">Subject</label>--}}
                                    {{--<div class="controls">--}}
                                        {{--<input type="text" name="subject" class="form-control"--}}
                                               {{--value="{{old('subject')}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group">
                                    <label class="control-label " for="Name">Question</label>
                                    <div class="controls">
                                    <textarea name="question" class="form-control"
                                              rows="5">{{old('question')}}</textarea>
                                    </div>
                                    {{--<p class="help-block">(Should not exceed 250 words)</p>--}}
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6 col-xs-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit"
                                                   tabindex="4"
                                                   class="form-control btn btn-info " value="Submit">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        @endif
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
//        $('#nationality').select2();
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