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

    @if(empty($post))
        <h3>Add new post</h3>
    @else
        <h3>Edit post </h3>

    @endif
    @include('admin.flash_message')
    @if(empty($post))
        <form action="{{route('Backend::post@store')}}" class="form-horizontal" method="POST"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::post@update',['id' => $post->id])}}" class="form-horizontal"
                      method="post" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Điền tiêu đề"
                                       value="{{old('title',@$post->title)}}">
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-6">
                                <input type="file" class="post-image form-control" name="image"
                                       rel="post_status_images">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Content</label>
                            <div class="col-md-6">
                                  <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                                            name="content">{{old('content',@$post->content)}} </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Content English</label>
                            <div class="col-md-6">
                              <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                              name="content_en">{{old('content_en',@$post->content_en)}} </textarea>
                            </div>
                        </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label">Meta title</label>
                        <div class="col-md-6">
                            <input type="text" name="meta_title" class="form-control" placeholder="Điền meta title"
                                   value="{{old('meta_title',@$post->meta_title)}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meta description</label>
                        <div class="col-md-6">
                    <textarea class="form-control" placeholder="Điền meta description"
                              name="meta_description">{{old('meta_description',@$post->meta_description)}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Meta keyword</label>
                        <div class="col-md-6">
                    <textarea class="form-control" placeholder="Điền miêu tả"
                              name="meta_keyword">{{old('meta_keyword',@$post->meta_keyword)}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-6">
                            <div class="mt-checkbox-inline">
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="status"
                                           @if(isset($post) and $post->status == 1) checked @endif>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>


                    </div>
                    <div class="form-actions">
                        <div class="row" style="text-align: center">


                            @if(empty($post))
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
                        $(".post-image").fileinput({
                          'showUpload': false, 'previewFileType': 'any',
                          'showCaption': false,
                            @if(isset($post) and $post->image)
                            'initialPreview': [
                              '<img src="{{ $post->image }}" class="kv-preview-data file-preview-image" style="width:auto;height:160px;">'
                            ],
                            @endif
                            'showUploadedThumbs': false,
                          'allowedFileTypes': ['image']
                        });
                      });
                    </script>



        @endpush