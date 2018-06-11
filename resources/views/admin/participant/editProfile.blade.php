@extends('admin.layouts.master')

@section('style')

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
        p {
            text-align: justify;
        }
    </style>
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <h3>Edit profile </h3>

    @include('admin.flash_message')
    <form action="{{ route('Backend::participants@edit', ['id' => $user->id])}}" class="form-horizontal" method="POST"
          enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-body">
                    {{ csrf_field() }}
                    <h4 class="page-title title-register">PERSONAL PARTICULARS</h4>
                    <div class="form-group">
                        <label class="col-md-3 control-label">First name*</label>
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control"
                                   placeholder=""
                                   value="{{old('first_name',@$user->first_name)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 ">Last name*</label>
                        <div class="col-md-6">
                            <input type="text" name="last_name" tabindex="2"
                                   class="form-control"
                                   value="{{old('last_name',@$user->last_name)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Profile picture</label>
                        <div class="col-md-6">
                            <input type="file" class="post-image form-control" id="image" name="image">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 ">Title* </label>
                        <div class="col-md-6">

                            <select class="form-control" name="title" >
                                @foreach(\App\Models\User::$titleText as $key => $value)
                                    <option value="{{$key}}" @if($value == old('title',@$user->title)) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 ">Affiliation*</label>
                        <div class="col-md-6">
                            <input type="text" name="affiliation" tabindex="2"
                                   class="form-control"
                                   value="{{old('affiliation',@$user->affiliation)}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 " for="Name">Email address*</label>
                        <div class="col-md-6">
                            <input type="email" name="email" @if(isset($user)) disabled @endif tabindex="1" class="form-control"
                                   value="{{old('email',@$user->email)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " for="Name">Password</label>
                        <div class="col-md-6">
                            <input type="password" name="password" tabindex="2" class="form-control"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " for="Name">Password confirmation*</label>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmation" tabindex="2"
                                   class="form-control"
                                   placeholder="Password">
                        </div>
                    </div>
                    {{--@php dd($user); @endphp--}}
                    <div class="form-group">
                        <label class="control-label col-md-3">Gender</label>
                        <div class="col-md-6">
                            <label class="radio-inline"><input type="radio" name="gender" value="2"
                                                               @if(old('gender',@$user->gender) == 2) checked @endif>Male</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="1"
                                                               @if(old('gender',@$user->gender) == 1) checked @endif>Female</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="0"
                                                               @if(@$user->gender == 0) checked @endif>Not
                                specify</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Nationality</label>
                        <div class="col-md-6">
                            @php $nations = \App\Models\Country::orderBy('nicename','desc')->get(); @endphp
                            <select class="form-control select2" name="nationality" id="nationality">
                                @foreach($nations as $nation)
                                    <option value="{{$nation->iso}}" @if($nation->iso === $user->nationality) selected @endif>{{$nation->nicename}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label  col-md-6"> Do you wish to submit an abstract and present at the
                            Forum?</label>
                        <div class="controls col-md-3">
                            <label class="radio-inline"><input type="radio" name="apply" value="1"
                                                               @if(old('apply',$user->apply) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="apply" value="0"
                                                               @if(old('apply',$user->apply) == 0) checked @endif>No</label>
                        </div>
                    </div>

                    <div class="applyContainer ">
                        <div class="form-group">
                            <label class="control-label  col-md-3">Resume/CV </label>

                            <div class="controls  col-md-6">
                                <input type="text" name="link_cv"
                                       class="form-control"
                                       value="{{old('link_cv',$user->link_cv)}}">
                                <p>Paste the link to your online CV here (preferably LinkedIN if available) </p>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label  col-md-3">Or upload a file</label>
                            <div class="controls col-md-6">

                                <div class="clearfix"></div>
                                <input type="file" class="post-image form-control" id="file" name="file">
                                <div class="clearfix"></div>
                                @if(isset($user) and $user->paper)
                                    <a class="btn btn-primary green start" href="{{$user->paper}}" download="{{$user->paper}}"
                                       style="float: left;margin-right: 10px;margin-top: 10px">
                                        <i class="fa fa-download"></i>
                                        <span>Download File</span>
                                        <div class="clearfix"></div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-6 col-md-offset-3" style="text-align: left">
                            For the sake of networking, we wish to share the information given above and/or Linkedin profiles among the delegates.
                            <br>
                            Do you agree to us sharing this information with the other delegates?</label>
                        <div class="controls col-md-6 col-md-offset-3">
                            <label class="radio-inline"><input type="radio" name="share_info" value="1"
                                                               @if(old('share_info',$user->share_info) == 1) checked @endif >Yes</label>
                            <label class="radio-inline"><input type="radio" name="share_info" value="0"
                                                               @if(old('share_info',$user->share_info) == 0 ) checked @endif>No</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-6 col-md-offset-3" style="text-align: left"> Could you please
                            let us know from which source(s) you knew about the Hanoi Forum 2018? (you can choose more
                            than
                            one option) *</label>
                        <div class="controls col-md-6 col-md-offset-3">

                            @foreach(\App\Models\User::$knowText as $key => $value)
                                @if($key == 3 || $key == 7)
                                    <p>
                                        <label class="radio-inline" style="width: 100%;padding-left: 0px">
                                            <input type="checkbox"
                                                   @if(old('know.'.$key.'.id') == $key and old('know.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(is_array($user->know) and isset($user->know[$key])) checked
                                                   @endif

                                                   @endif


                                                   name="know[{{$key}}][id]" value="{{$key}}"> {{$value}}
                                            (Please specify) :<input type="text"
                                                                     @if(is_array($user->know) && isset($user->know[$key]))  value="{{old('know.'.$key.'.content',$user->know[$key]['content'])}}"
                                                                     @else
                                                                     value="{{old('know.'.$key.'.content]')}}"
                                                                     @endif
                                                                     name="know[{{$key}}][content]">
                                        </label>
                                    </p>
                                @else
                                    <p>
                                        <label class="radio-inline" style="padding-left: 0px">
                                            <input type="checkbox" name="know[{{$key}}][id]"
                                                   @if(old('know.'.$key.'.id') == $key and old('know.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(is_array($user->know) and isset($user->know[$key])) checked
                                                   @endif

                                                   @endif

                                                   value="{{$key}}"> {{$value}}
                                        </label>
                                    </p>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <h4 class="page-title title-register">SPECIAL REQUIREMENTS</h4>
                    <div class="form-group">

                        <label class="control-label col-md-6 col-md-offset-3" style="text-align: left">Please indicate
                            if you need any special diet
                            requirements *:</label>
                        <div class="controls col-md-6 col-md-offset-3">
                            @foreach(\App\Models\User::$dietaryText as $key => $value)
                                @if($key != 4)
                                    <p>
                                        <label class="radio-inline">
                                            <input type="radio" name="dietary" value="{{$key}}"
                                                   @if(old('dietary',$user->dietary) == $key) checked
                                                    @endif
                                            > {{$value}}
                                        </label>
                                    </p>
                                @endif
                                @if($key == 4)
                                    <p>
                                        <label class="radio-inline" style="width: 100%;">
                                            <input type="radio" name="dietary" value="{{$key}}"
                                                   @if(old('dietary',$user->dietary) == $key ) checked @endif>
                                            Others (Please specify) : <input type="text"
                                                                             value="{{old('dietary_content',$user->dietary_content)}}"
                                                                             name="dietary_content">
                                        </label>
                                    </p>

                                @endif
                            @endforeach

                        </div>
                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-6 col-md-offset-3" style="text-align: left">Please indicate
                            if you have a disability and require
                            any special assistance during the forum (you can choose more than one option) * :</label>
                        <div class="controls col-md-6 col-md-offset-3">
                            @foreach(\App\Models\User::$indicateText as $key => $value)
                                @if($key != 4)
                                    <p>
                                        <label class="radio-inline" style="padding-left: 0px">
                                            <input type="checkbox"
                                                   @if(old('indicate.'.$key.'.id') == $key and old('indicate.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(is_array($user->indicate) and isset($user->indicate[$key])) checked
                                                   @endif

                                                   @endif


                                                   name="indicate[{{$key}}][id]" value="{{$key}}"

                                            > {{$value}}
                                        </label>
                                    </p>
                                @endif
                                @if($key == 4)
                                    <p>
                                        <label class="radio-inline" style="width: 100%;padding-left: 0px">
                                            <input type="checkbox"
                                                   @if(old('indicate.'.$key.'.id') == $key and old('indicate.'.$key.'.id') != null) checked
                                                   @else
                                                   @if(is_array($user->indicate) and isset($user->indicate[$key])) checked
                                                   @endif

                                                   @endif

                                                   name="indicate[{{$key}}][id]" value="{{$key}}"
                                            >
                                            Others (Please specify) : <input type="text"
                                                                             @if(is_array($user->indicate) && isset($user->indicate[$key]))  value="{{old('indicate.'.$key.'.content',$user->indicate[$key]['content'])}}"
                                                                             @else
                                                                             value="{{old('indicate.'.$key.'.content]')}}"
                                                                             @endif

                                                                             name="indicate[{{$key}}][content]">
                                        </label>
                                    </p>

                                @endif
                            @endforeach

                        </div>
                    </div>




                    <div class="form-group" style="text-align: justify">
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
                    @if($user->confirm != 1)
                        <div class="form-group">
                            <input type="checkbox" name="confirm" value="1"
                                   @if(old('confirm') == 1) checked @endif>I acknowledge that the information is
                            true and correct and that I have read, understood and agreed to the terms &
                            conditions outlined in the form above.
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row" style="text-align: center">


                @if(empty($user))
                    <button type="submit" class="btn btn-primary">Add</button>
                @else
                    <button type="submit" class="btn btn-primary">Update</button>

                @endif
                {{--<button type="button" class="btn default">Reset</button>--}}

            </div>
        </div>
    </form>




@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script type="application/javascript">
      $(function () {
//        $('input[name="apply"]').change(function () {
//          var value = $(this).val();
//
//          if (value == 1) {
//            $('.applyContainer').removeClass('hide');
//          } else {
//            $('.applyContainer').addClass('hide');
//          }
//        });
        $('input[name=need_support]').change(function () {
          var value = $(this).val();
//
          if(value == 1) {
            $('#kindSupport').removeClass('hide');
          }else {
            $('#kindSupport').addClass('hide');
          }
        });
        $("#file").fileinput({
          'showUpload': false,
          'showRemove': false,
          'previewFileType': 'any',
          'showCaption': false,
          'showUploadedThumbs': false,
        });
        $("#image").fileinput({
            @if(isset($user) and $user->image)
            'initialPreview': [
              '<img src="{{ $user->image }}" class="kv-preview-data file-preview-image" style="width:auto;height:160px;">'
            ],
            @endif
            'showUpload': false,
          'showRemove': false,
          'previewFileType': 'any',
          'showCaption': false,
          'showUploadedThumbs': false,
          'allowedFileTypes': ['image']
        });

      });
    </script>


@endpush