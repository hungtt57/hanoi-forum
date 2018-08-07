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
        .post-image {
            margin-bottom: 5px;
        }
    </style>
@endsection
@section('content')
    <h3 style="margin-bottom: 20px">Submit Full-text Paper</h3>

    @include('admin.flash_message')

    <form action="{{route('Backend::postSubmitPaper')}}" class="form-horizontal"
          method="POST" enctype="multipart/form-data">

        <div class="form-body">
            {{ csrf_field() }}
            <h4>
                <b>Please download the full-text paper template <a href="{{url('Full paper template for Hanoi Forum 2018.docx')}}" class="" target="_blank">here</a> and <span style="text-decoration: underline">follow the instruction for submission</span>.</b>
            </h4>


                <div class="form-group">
                    <label class="control-label col-md-3">Title of the paper*</label>
                    <div class="col-md-6">
                        <input type="text" name="title_of_full_paper"
                               class="form-control"
                               value="{{old('title_of_full_paper',$user->title_of_full_paper)}}">
                    </div>
                </div>

            <div class="form-group">
                <label class="control-label col-md-3 " for="Name">Full-text Paper**</label>
                <div class="col-md-6">
                    <div class="col-md-6" id="list-file-abstract">
                        <div class="item-file row">
                            <div class="col-md-10">  <input type="file" class="post-image form-control" name="paper[]"></div>
                            <div class="col-md-2">    <button class="btn btn-danger remove-file" type="button" ><i class="fa fa-close"></i></button></div>

                        </div>

                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary" type="button" id="add-more-file"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
                  {{--<div class="form-group">--}}
                      {{--<label class="control-label col-md-3 " for="Name">Submission to panel session*</label>--}}
                      {{--<div class="col-md-6">--}}
                          {{--<div class="col-md-6">--}}

                              {{--<select class="form-control" name="paper_panel" >--}}
                                  {{--<option value="">Please choose panel</option>--}}
                                  {{--@foreach(\App\Models\User::$panelText as $key => $value)--}}
                                      {{--<option value="{{$key}}" @if($key == old('paper_panel',@$user->paper_panel)) selected @endif>{{$value}}</option>--}}
                                  {{--@endforeach--}}
                              {{--</select>--}}
                          {{--</div>--}}
                      {{--</div>--}}
                  {{--</div>--}}


        </div>
        {{--@if(!$user->confirm_abstract || !$user->confirm_paper)--}}
        <div class="form-actions">
            <div class="row" style="text-align: center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn default">Reset</button>

            </div>
        </div>
        {{--@endif--}}
    </form>




@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script >
      $(document).ready(function () {
        $(document).on('click','.remove-file',function (e) {
          e.preventDefault();
          $(this).parent().parent().remove();
        });
        $('#add-more-file').click(function (e) {
          e.preventDefault();
          $('#list-file-abstract').append(  '<div class="item-file row"> <div class="col-md-10">  <input type="file" class="post-image form-control" name="paper[]"></div> <div class="col-md-2">    <button class="btn btn-danger remove-file" type="button" ><i class="fa fa-close"></i></button></div> </div>');
        });
      });
    </script>


@endpush