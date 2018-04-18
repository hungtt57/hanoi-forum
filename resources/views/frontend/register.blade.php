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
                        @include('admin.flash_message')

                        <form id="login-form" action="{{route('Frontend::postRegister')}}" method="post" role="form"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label ">First name*</label>
                                <div class="controls">
                                    <input type="text" name="first_name" value="{{old('first_name')}}"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Last name*</label>
                                <div class="controls">
                                    <input type="text" name="last_name" value="{{old('last_name')}}"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Title* (Prof., Dr., Mrs., Ms., Mr.,....)</label>
                                <div class="controls">
                                    <input type="text" name="title" value="{{old('title')}}"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Affiliation*</label>
                                <div class="controls">
                                    <input type="text" name="affiliation" value="{{old('affiliation')}}"
                                           class="form-control"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Email address*</label>
                                <div class="controls">
                                    <input type="email" name="email"  class="form-control"
                                           value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " >Password*</label>
                                <div class="controls">
                                    <input type="password" name="password" class="form-control"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label " >Password confirmation*</label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation"
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
                                            <option value="{{$nation->iso}}"
                                                    @if($nation->iso == old('nationality')) select2 @endif>{{$nation->nicename}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="control-label"> Do you wish to submit an abstract and present at the Forum?</label>
                                <div class="controls">
                                    <label class="radio-inline"><input type="radio" name="apply" value="1"
                                                                       @if(old('apply') == 1) checked @endif  @if(empty(old('apply'))) checked @endif>Yes</label>
                                    <label class="radio-inline"><input type="radio" name="apply" value="0"
                                                                       @if(old('apply') == 0 and !empty(old('apply'))) checked @endif>No</label>
                                </div>
                            </div>
                            {{--<input type="hidden" name="apply" value="1">--}}
                            <div class="applyContainer @if(old('apply') == 0 and !empty(old('apply'))) hide @endif" >
                                <div class="form-group">
                                    <label class="control-label ">Resume/CV </label>
                                    <p class="control-label " >Paste the link to your online CV here (preferably LinkedIN if available) </p>
                                    <div class="controls">
                                        <input type="text" name="link_cv"
                                               class="form-control"
                                               value="{{old('link_cv')}}">
                                    </div>
                                    <p>Or upload a file</p>
                                    <div class="controls">
                                        <input type="file" class="post-image form-control" name="file"
                                               rel="post_status_images">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">

                                <label class="control-label">  For the sake of networking, we wish to share the information given above and/or Linkedin profiles among the delegates. Do you agree to us sharing this information with the other delegates?</label>
                                <div class="controls">
                                    <label class="radio-inline"><input type="radio" name="share_info" value="1"
                                                                       @if(old('share_info') == 1) checked @endif  @if(empty(old('share_info'))) checked @endif >Yes</label>
                                    <label class="radio-inline"><input type="radio" name="share_info" value="0"
                                                                       @if(old('share_info') == 0 and !empty(old('share_info'))) checked @endif>No</label>
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
        $('input[name="apply"]').change(function () {
          var value = $(this).val();

          if(value == 1) {
            $('.applyContainer').removeClass('hide');
          }else {
            $('.applyContainer').addClass('hide');
          }
        });
      });
    </script>


@endpush