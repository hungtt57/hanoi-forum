@extends('admin.layouts.master')

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

    @if(empty($banner))
        <h3>Add new banner</h3>
    @else
        <h3>Edit banner </h3>

    @endif
    @include('admin.flash_message')
    @if(empty($banner))
        <form action="{{route('Backend::banner@store')}}" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::banner@update',['id' => $banner->id])}}" class="form-horizontal"
                      method="post" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}

                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-6">
                                <input type="file" class="banner-image form-control" name="image"
                                       rel="banner_status_images">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Priority</label>
                            <div class="col-md-6">
                                <input type="number" name="order" class="form-control" id="order"

                                       value="{{old('order',@$banner->order)}}">
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row" style="text-align: center">


                            @if(empty($banner))
                                <button type="submit" class="btn btn-primary">Add</button>
                            @else
                                <button type="submit" class="btn btn-primary">Edit</button>

                            @endif
                            <button type="button" class="btn default">Reset</button>

                        </div>
                    </div>
                </form>




                @endsection
                @push('scripts')
                    <script src="/assets/js/fileinput.min.js"></script>

                    <script type="application/javascript">
                      $(function () {
                        $(".banner-image").fileinput({
                          'showUpload': false, 'previewFileType': 'any',
                          'showCaption': false,
                            @if(isset($banner) and $banner->image)
                            'initialPreview': [
                              '<img src="{{ $banner->image }}" class="kv-preview-data file-preview-image" style="width:auto;height:160px;">'
                            ],
                            @endif
                            'showUploadedThumbs': false,
                          'allowedFileTypes': ['image']
                        });
                      });
                    </script>



        @endpush