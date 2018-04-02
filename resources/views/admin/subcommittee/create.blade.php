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

    @if(empty($subcommittee))
        <h3>Add new subcommittee</h3>
    @else
        <h3>Edit subcommittee</h3>

    @endif
    @include('admin.flash_message')
    @if(empty($subcommittee))
        <form action="{{route('Backend::subcommittee@store')}}" class="form-horizontal" method="POST"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::subcommittee@update',['id' => $subcommittee->id])}}"
                      class="form-horizontal"
                      method="post" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                       value="{{old('name',@$subcommittee->name)}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-6">
                    <textarea class="form-control"
                              name="description">{{old('description',@$subcommittee->description)}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row" style="text-align: center">


                            @if(empty($subcommittee))
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