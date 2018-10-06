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
        .presentation input
       {
            position: inherit !important;
            margin-left: 10px !important;
        }
        .presentation .radio-inline
         {
            padding-left: 0px !important;
        }
        .programBook .radio-inline,
        .attendingForum .radio-inline,
        .presentationForum .radio-inline {
            padding-top: 0px;
        }
        /*p {*/
        /*text-align: justify;*/
        /*}*/
    </style>
    <link href="/assets/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <h3>Online service form </h3>

    @include('admin.flash_message')
    <form action="{{url('admin/partner/edit')}}" class="form-horizontal" method="POST"
          enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-body">
                    {{ csrf_field() }}

                    <div class="form-group">

                        <div class="col-md-12 attendingForum">
                            Will you be attending the forum?
                            <label class="radio-inline"><input type="radio" name="attendingForum" value="1"
                                                               @if(old('attendingForum',@$form->attendingForum) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="attendingForum" value="0"
                                                               @if(old('attendingForum',@$form->attendingForum) == 0) checked @endif>No</label>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12 presentationForum">
                            Will you have a presentation at the forum?
                            <label class="radio-inline"><input type="radio" name="presentationForum" value="1"
                                                               @if(old('presentationForum',@$form->presentationForum) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="presentationForum" value="0"
                                                               @if(old('presentationForum',@$form->presentationForum) == 0) checked @endif>No</label>
                        </div>
                    </div>

                    <div class="form-group presentation" >
                        <div class="col-md-9">
                            <label class="radio-inline">It is an oral presentation <input type="radio" name="presentation" value="1"
                                                               @if(old('presentation',@$form->presentation) == 1) checked @endif></label>
                            <label class="radio-inline"> or a poster presentation  <input type="radio" name="presentation" value="0"
                                                               @if(old('presentation',@$form->presentation) == 0) checked @endif></label>
                        </div>
                    </div>

                    <div class="form-group programBook">
                        <div class="col-md-12">
                            	Do you and your co-author(s) (if any) accept the abstract of your presentation
                            to be included in the forum’s program book?
                            <label class="radio-inline"><input type="radio" name="programBook" value="1"
                                                               @if(old('programBook',@$form->programBook) == 1) checked @endif>Yes</label>
                            <label class="radio-inline"><input type="radio" name="programBook" value="0"
                                                               @if(old('programBook',@$form->programBook) == 0) checked @endif>No</label>
                        </div>
                    </div>

                    <h4 class="page-title title-register">PERSONAL INFORMATIOn</h4>


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

                            <select class="form-control" name="title">
                                @foreach(\App\Models\User::$titleText as $key => $value)
                                    <option value="{{$key}}"
                                            @if($value == old('title',@$user->title)) selected @endif>{{$value}}</option>
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
                            <input type="email" name="email" @if(isset($user)) disabled @endif tabindex="1"
                                   class="form-control"
                                   value="{{old('email',@$user->email)}}">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-actions">
            <div class="row" style="text-align: center">


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
          if (value == 1) {
            $('#kindSupport').removeClass('hide');
          } else {
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