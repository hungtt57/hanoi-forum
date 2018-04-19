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

    @if(empty($article))
        <h3>Add new article</h3>
    @else
        <h3>Edit article </h3>

    @endif
    @include('admin.flash_message')
    @if(empty($article))
        <form action="{{route('Backend::article@store')}}" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::article@update',['id' => $article->id])}}" class="form-horizontal"
                      method="post" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-6">
                                <select name="title" id=""  @if(isset($article)) disabled @endif class="form-control">
                                    @foreach(\App\Models\Article::$typeText  as $key => $value)
                                        <option value="{{$key}}" @if(isset($article)) selected @endif>{{$value}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Content</label>
                            <div class="col-md-6">
                    <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                              name="content">{{old('content',@$article->content)}} </textarea>
                            </div>
                        </div>


                    </div>
                    <div class="form-actions">
                        <div class="row" style="text-align: center">


                            @if(empty($article))
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



@endpush