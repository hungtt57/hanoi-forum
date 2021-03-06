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

        .title-register {
            background: #007f49;
            padding: 5px;
            text-align: center;
            color: white;
        }

        .file-input-new .btn-primary.btn-file {
            background-color: #007f49;
        }

        #login-submit {
            background-color: #007f49;
        }

        p {
            text-align: justify;
        }
    </style>
@endpush
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/4.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Register Form </h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">

                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        @include('admin.flash_message')
                        @if(\Carbon\Carbon::now() < Carbon\Carbon::createFromDate(2018,11,2))
                        @if(!session()->has('hideform'))
                            <form id="login-form" action="{{route('Frontend::postRegister')}}" method="post" role="form"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h4 class="page-title title-register">PERSONAL PARTICULARS</h4>
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
                                    <label class="control-label ">Title*</label>
                                    <div class="controls">
                                        <select class="form-control" name="title">
                                            @foreach(\App\Models\User::$titleText as $key => $value)
                                                <option value="{{$key}}"
                                                        @if($value == old('title')) selected @endif>{{$value}}</option>
                                            @endforeach
                                        </select>
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
                                        <input type="email" name="email" class="form-control"
                                               value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Password*</label>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Password confirmation*</label>
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
                                                        @if($nation->iso == old('nationality')) selected @endif>{{$nation->nicename}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="control-label"> Do you wish to submit an abstract and present at the
                                        Forum?</label>
                                    <div class="controls">
                                        <label class="radio-inline"><input type="radio" name="apply" value="1"
                                                                           @if(old('apply') == 1) checked
                                                                           @endif  @if(empty(old('apply'))) checked @endif>Yes</label>
                                        <label class="radio-inline"><input type="radio" name="apply" value="0"
                                                                           @if(old('apply') == 0 and !empty(old('apply'))) checked @endif>No</label>
                                    </div>
                                </div>
                                {{--<input type="hidden" name="apply" value="1">--}}
                                <div class="applyContainer">
                                    <div class="form-group">
                                        <label class="control-label ">Resume/CV </label>
                                        <p class="control-label ">Paste the link to your online CV here (preferably
                                            LinkedIN if available) </p>
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

                                    <label class="control-label"> For the sake of networking, we wish to share the
                                        information given above and/or Linkedin profiles among the delegates. Do you
                                        agree to us sharing this information with the other delegates? *</label>
                                    <div class="controls">
                                        <label class="radio-inline"><input type="radio" name="share_info" value="1"
                                                                           @if(old('share_info') == 1) checked
                                                                           @endif  @if(empty(old('share_info'))) checked @endif >Yes</label>
                                        <label class="radio-inline"><input type="radio" name="share_info" value="0"
                                                                           @if(old('share_info') == 0 and !empty(old('share_info'))) checked @endif>No</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label"> Could you please let us know from which source(s) you
                                        knew about the Hanoi Forum 2018? (you can choose more than one option) *</label>
                                    <div class="controls">
                                        @foreach(\App\Models\User::$knowText as $key => $value)
                                            @if($key == 3 || $key == 7)
                                                <p>
                                                    <label class="radio-inline" style="width: 100%;padding-left: 0px">
                                                        <input type="checkbox" name="know[{{$key}}][id]"
                                                               @if(old('know.'.$key.'.id') == $key and old('know.'.$key.'.id') != null) checked @endif
                                                               value="{{$key}}"> {{$value}} (Please specify) :<input
                                                                type="text"
                                                                value="{{old('know.'.$key.'.content')}}"
                                                                style="width: 60%"
                                                                name="know[{{$key}}][content]">
                                                    </label>
                                                </p>
                                            @else
                                                <p>
                                                    <label class="radio-inline" style="padding-left: 0px">

                                                        <input type="checkbox" name="know[{{$key}}][id]"    @if(old('know.'.$key.'.id') == $key and old('know.'.$key.'.id') != null) checked @endif
                                                               value="{{$key}}"> {{$value}}
                                                    </label>
                                                </p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <h4 class="page-title title-register">SPECIAL REQUIREMENTS</h4>
                                <div class="form-group">

                                    <label class="control-label">Please indicate if you need any special diet
                                        requirements *:</label>
                                    <div class="controls">
                                        @foreach(\App\Models\User::$dietaryText as $key => $value)
                                            @if($key != 4)
                                                <p>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="dietary" value="{{$key}}"
                                                               @if(old('dietary') == $key) checked
                                                                @endif
                                                        > {{$value}}
                                                    </label>
                                                </p>
                                            @endif
                                            @if($key == 4)
                                                <p>
                                                    <label class="radio-inline" style="width: 100%;">
                                                        <input type="radio" name="dietary" value="{{$key}}"
                                                               @if(old('dietary') == $key ) checked @endif>
                                                        Others (Please specify) : <input type="text"
                                                                                         value="{{old('dietary_content')}}"
                                                                                         style="width: 60%"
                                                                                         name="dietary_content">
                                                    </label>
                                                </p>

                                            @endif
                                        @endforeach

                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="control-label">Please indicate if you have a disability and require
                                        any special assistance during the forum (you can choose more than one option) *
                                        :</label>
                                    <div class="controls">
                                        @foreach(\App\Models\User::$indicateText as $key => $value)
                                            @if($key != 4)
                                                <p>

                                                    <label class="radio-inline" style="padding-left: 0px">
                                                        <input type="checkbox" name="indicate[{{$key}}][id]"
                                                               value="{{$key}}"
                                                               @if(old('indicate.'.$key.'.id') == $key and old('indicate.'.$key.'.id') != null) checked @endif
                                                        > {{$value}}
                                                    </label>
                                                </p>
                                            @endif
                                            @if($key == 4)
                                                <p>
                                                    <label class="radio-inline" style="width: 100%;padding-left: 0px">

                                                        <input type="checkbox" name="indicate[{{$key}}][id]"  value="{{$key}}"  @if(old('indicate.'.$key.'.id') == $key) checked @endif
                                                        >
                                                        Others (Please specify) : <input type="text"
                                                                                         value="{{old('indicate.'.$key.'.content')}}"
                                                                                         style="width: 60%"
                                                                                         name="indicate[{{$key}}][content]">
                                                    </label>
                                                </p>

                                            @endif
                                        @endforeach

                                    </div>
                                </div>


                                <div class="form-group">
                                    <h4 class="page-title title-register"> LETTER OF INVITATION <span
                                                style="font-size: 14px !important;">(Presenters may also require such
                                        letter)</span></h4>
                                    <p>Should you require a formal invitation letter for your VISA application, please
                                        write in to us at hanoiforum@vnu.edu.vn.</p>
                                    <h4 class="page-title title-register">Entry VISA</h4>
                                    <p>Consular information for foreigners traveling to Vietnam can be found at <a
                                                href="https://evisa.xuatnhapcanh.gov.vn/en_US/trang-chu-ttdt"
                                                target="_blank">Vietnam Immigration Department</a>.
                                        Passport holders of <a target="_blank"
                                                               href="https://lanhsuvietnam.gov.vn/Lists/BaiViet/B%C3%A0i vi%E1%BA%BFt/DispForm.aspx?List=dc7c7d75-6a32-4215-afeb-47d4bee70eee&ID=306">listed
                                            countries</a> are exempted from obtaining a visa to enter Vietnam for a
                                        designated number of days.
                                        <b>Should you need to apply for a visa to enter Vietnam, please contact us at
                                            hanoiforum@vnu.edu.vn for further support.</b></p>
                                    <h4 class="page-title title-register">IMPORTANT NOTE</h4>
                                    <p>
                                        By filling up this registration form, I hereby agree and consent that my
                                        personal data provided in this form may be collected, used, processed and
                                        disclosed by VNU for the purposes of processing my registration, in accordance
                                        with all related legislation by Vietnamese Government. In respect of disclosure,
                                        I understand that VNU may disclose my personal data to third parties (which may
                                        be in or outside of Vietnam) where necessary for such purposes.

                                    </p>
                                    <p>
                                        I understand that photography and videography may be conducted during the Hanoi
                                        Forum 2018 and I consent to VNU taking photographs and videos of myself and
                                        using the same for the purposes of event reporting, marketing, publicity, and
                                        media/social media. I further consent to VNU disclosing such photographs and
                                        videos to third party media entities (whether in Vietnam or otherwise) for
                                        publicity purposes and VNU may identify me by name.

                                    </p>
                                    <p> All photography, audio and video recording may be used by Vietnam National
                                        University, Hanoi, for education, marketing, promotional and/or publication
                                        purposes. If you do not wish to have your image recorded or published, for
                                        compelling and legitimate grounds relating to your particular situation, please
                                        email to hanoiforum@vnu.edu.vn.</p>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="confirm" value="1"
                                           @if(old('confirm') == 1) checked @endif>I acknowledge that the information is
                                    true and correct and that I have read, understood and agreed to the terms &
                                    conditions outlined in the form above.
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
                        @endif

                            @else
                            <p>Registration for Hanoi Forum 2018 has been closed. Please contact us at hanoiforum@vnu.edu.vn should you have any question or request assistance.</p>
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
        $('#nationality').select2();
        $(".post-image").fileinput({
          'showUpload': false, 'previewFileType': 'any',
          'showCaption': false,
          // 'maxFileSize': '5120',
          'showUploadedThumbs': false,
          'allowedFileTypes': 'any'
        });
//        $('input[name="apply"]').change(function () {
//          var value = $(this).val();
//
//          if(value == 1) {
//            $('.applyContainer').removeClass('hide');
//          }else {
//            $('.applyContainer').addClass('hide');
//          }
//        });

        $('input[name=need_support]').change(function () {
          var value = $(this).val();
//
          if (value == 1) {
            $('#kindSupport').removeClass('hide');
          } else {
            $('#kindSupport').addClass('hide');
          }
        });

      });
    </script>


@endpush