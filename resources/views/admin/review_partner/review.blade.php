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
        .doc {
            width: 100%;
            height: 600px;
        }
    </style>
@endsection
@section('content')
    <h3>Review Abstract/Paper</h3>

    @include('admin.flash_message')

    <form action="#" class="form-horizontal"
          method="POST" enctype="multipart/form-data">

        <div class="form-body">
            {{ csrf_field() }}
            @if(!$participant->confirm_abstract)
                <div class="form-group">
                    <label class="control-label col-md-3">Title of the paper*</label>
                    <div class="col-md-6">
                        <input type="text" name="title_of_paper"
                               class="form-control" disabled
                               value="{{old('paper',$participant->title_of_paper)}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 " for="Name">Abstract*</label>
                    {{--<div class="col-md-6">--}}
                    {{--<textarea name="abstract" class="form-control" maxlength="250" disabled--}}
                              {{--rows="5">{{old('abstract',$participant->abstract)}}</textarea>--}}
                    {{--</div>--}}
                    <div class="col-md-6">
                        <iframe  class="doc" src="https://docs.google.com/gview?url={{url($participant->abstract)}}&embedded=true"></iframe>
                    </div>
                </div>

                <div class="form-group">

                </div>
            @endif
            @if($participant->confirm_abstract)
                <div class="form-group">
                    <label class="control-label col-md-3 " for="Name">Paper*</label>
                    <div class="col-md-6">
                        @if(isset($participant) and $participant->file)
                            <a class="btn btn-primary green start" href="{{$participant->file}}"
                               download="{{$participant->file}}"
                               style="float: left;margin-right: 10px;margin-top: 10px">
                                <i class="fa fa-download"></i>
                                <span>Download File</span>
                                <div class="clearfix"></div>
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>

    </form>

    <div class="form-actions" style="margin-bottom: 10px">
        <div class="row" style="text-align: center">

            <button class="btn btn-primary" id="comfirm-button">Confirm</button>
            <button class="btn btn-danger" id="reject-button">Reject</button>

        </div>
    </div>
    <div id="confirm" class="hidden">
        <form action="{{route('Backend::reviewPartner@confirm')}}" class="form-horizontal"
              method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$participant->id}}">
            {{--<div class="form-group">--}}
                {{--<label class="control-label col-md-3">Subcommittee</label>--}}
                {{--<div class="col-md-6">--}}
                    {{--@php $subs = \App\Models\Subcommittee::orderBy('id','desc')->get(); @endphp--}}
                    {{--<select class="form-control select2" name="sub" id="sub" style="width: 100%" required>--}}
                        {{--@foreach($subs as $sub)--}}
                            {{--<option value="{{$sub->id}}">{{$sub->name}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Comment </label>
                <div class="col-md-6">
                    <textarea name="comment" class="form-control" maxlength="250" required
                              rows="5"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <div class="row" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div id="reject" class="hidden">
        <form action="{{route('Backend::reviewPartner@reject')}}" class="form-horizontal"
              method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$participant->id}}">
            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Reject reason </label>
                <div class="col-md-6">
                    <textarea name="reject_reason" class="form-control" maxlength="250" required
                              rows="5"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <div class="row" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

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
      $("#comfirm-button").click(function () {
        $('#confirm').removeClass('hidden');
        $('#reject').addClass('hidden');
      });
      $("#reject-button").click(function () {
        $('#reject').removeClass('hidden');
        $('#confirm').addClass('hidden');
      });
    </script>


@endpush