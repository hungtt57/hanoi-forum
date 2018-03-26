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
    </style>
@endsection
@section('content')

    @if(empty($reviewer))
        <h3>Add new reviewer</h3>
    @else
        <h3>Edit reviewer </h3>

    @endif
    @include('admin.flash_message')
    @if(empty($reviewer))
        <form action="{{route('Backend::reviewer@store')}}" class="form-horizontal" method="POST"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::reviewer@update',['id' => $reviewer->id])}}" class="form-horizontal"
                      method="POST" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 " for="Name">Email address*</label>
                            <div class="col-md-6">
                                <input type="email" name="email" @if(isset($reviewer)) disabled @endif tabindex="1" class="form-control"
                                       value="{{old('email',@$reviewer->email)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">First name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control"
                                       placeholder=""
                                       value="{{old('first_name',@$reviewer->first_name)}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 ">Last name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" tabindex="2"
                                       class="form-control"
                                       value="{{old('last_name',@$reviewer->last_name)}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 " for="Name">Password*</label>
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

                    </div>
                    <div class="form-actions">
                        <div class="row" style="text-align: center">


                            @if(empty($reviewer))
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