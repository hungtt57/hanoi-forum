@extends('admin')
@section('style')
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
@endsection
@section('content')
    @include('admin.flash_message')
    @if(request()->input('type') == config('constants.INTRODUCTION'))
        <h3>Thêm bài tin tức mới</h3>
    @elseif (request()->input('type') == config('constants.TRAINING'))
        <h3>Thêm bài chính sách mới</h3>
    @endif
    <form action="{{route('Backend::post@store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-body">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-3 control-label">Tiêu đề</label>
                <div class="col-md-6">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Điền tiêu đề"
                           value="{{old('title')}}">
                </div>
            </div>

            {{--<input type="hidden" name="category_id" id="category_id">--}}
            {{--<div class="form-group clearfix">--}}
            {{--<label class="col-md-3 control-label">Danh mục</label>--}}
            {{--<div class="col-md-6">--}}
            {{--<div class="form-group">--}}
            {{--<div class="dropdown ht-list-filter-dropdown">--}}
            {{--<button class="form-control text-left dropdown-toggle" id="category_name" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
            {{--Chọn danh mục--}}
            {{--</button>--}}
            {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
            {{--<li class="pa-12">--}}
            {{--<div class="input-group">--}}
            {{--<input type="text" class="form-control border-square new_category" placeholder="Thêm danh mục tin tức mới" style="min-width: 200px">--}}
            {{--<span class="input-group-btn">--}}
            {{--<button class="btn btn-success create_new_category" type="button">Thêm</button>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--</li>--}}

            {{--<div id="list-categories">--}}
            {{--@if(count($categories) > 0)--}}
            {{--@foreach($categories as $category)--}}
            {{--<li class="single-option">--}}
            {{--<div class="single-option_label">--}}
            {{--<a href="" class="choose-category" data-id="{{ $category->id }}" data-name="{{ $category->name }}" >{{ $category->name }}</a>--}}
            {{--</div>--}}
            {{--<div class="single-option_actions">--}}
            {{--<a href="#editCategory" class="single-action edit-category" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-toggle="modal"><i class="fa fa-pencil-square"></i>Sửa</a>--}}
            {{--<a href="#" class="single-action remove-category" data-id="{{ $category->id }}"><i class="fa fa-trash"></i>Xóa</a>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--@endforeach--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="form-group clearfix">
                <label class="col-md-3 control-label">Ảnh đại diện</label>
                <div class="col-md-6">
                    <input type="file" class="post-image form-control" name="image"
                           rel="post_status_images">
                </div>
            </div>
            {{--<div class="form-group">--}}
            {{--<label class="col-md-3 control-label">Mô tả ngắn</label>--}}
            {{--<div class="col-md-6">--}}
            {{--<textarea class="form-control" placeholder="Điền mô tả ngắn "--}}
            {{--name="desc"> {{old('desc')}} </textarea>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <label class="col-md-3 control-label">Nội dung</label>
                <div class="col-md-6">
                    <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                              name="content">{{old('content')}} </textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-3 control-label">Trạng thái</label>
                <div class="col-md-6">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="status" value="0">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>


        </div>
        <div class="form-actions">
            <div class="row" style="text-align: center">

                <button type="submit" class="btn green">Thêm</button>
                <button type="button" class="btn default">Hủy</button>

            </div>
        </div>
    </form>




@endsection
@push('scripts')
    <script src="/assets/js/fileinput.min.js"></script>

    <script type="application/javascript">
      $(function () {
        $(".post-image").fileinput({
          'showUpload': false, 'previewFileType': 'any',
          'showCaption': false
        });
      });
    </script>



@endpush