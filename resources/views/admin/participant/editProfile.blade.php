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


                    <h4 class="page-title title-register">SPONSORSHIP</h4>
                    <div class="form-group">
                        <p>
                            We may be able to provide some forms of support for participants to attend the
                            Hanoi Forum 2018 depending on (i) the relevance of their papers to the
                            conference's thematic topics as well as the papers’ quality, which will be
                            assessed by our Academic Committee members, and (ii) our funding availability.
                        </p>
                        <p>
                            If your abstract is accepted, you will be invited to submit a full paper, and
                            will be considered to receive sponsorship should you need one. Please indicate
                            in the form below what kind of support you may need. We will be in touch to
                            inform you of the result of this consideration.
                        </p>
                        <p>
                            We encourage interested participants to seek for alternative sources of funding to attend the forum while awaiting the result.
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Do you need any support to attend the Hanoi Forum 2018?</label>
                        <div class="controls">
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" name="need_support" value="0"
                                           @if(old('need_support',$user->need_support) == 0) checked
                                            @endif
                                    > No
                                </label>
                            </p>
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" name="need_support" value="1"
                                           @if(old('need_support',$user->need_support) == 1 )) checked @endif
                                    > Yes
                                </label>
                            </p>

                        </div>
                    </div>
                    <div id="kindSupport" class="form-group @if(old('need_support',$user->need_support) == 0)) hide @endif">
                        <label class="control-label">If yes, what kind of support do you need to attend the forum? </label>
                        <div class="controls">
                            @foreach(\App\Models\User::$kindSupportText as $key => $value)
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="kind_support" value="{{$key}}"
                                               @if(old('kind_support',$user->kind_support) == $key ) checked @endif
                                        > {{$value}}
                                    </label>
                                </p>
                            @endforeach
                        </div>
                    </div>
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