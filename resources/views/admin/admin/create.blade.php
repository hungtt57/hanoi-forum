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

    @if(empty($admin))
        <h3>Add new admin</h3>
    @else
        <h3>Edit admin </h3>

    @endif
    @include('admin.flash_message')
    @if(empty($admin))
        <form action="{{route('Backend::admin@store')}}" class="form-horizontal" method="POST"
              enctype="multipart/form-data">
            @else
                <form action="{{route('Backend::admin@update',['id' => $admin->id])}}" class="form-horizontal"
                      method="POST" enctype="multipart/form-data">
                    @endif
                    <div class="form-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 " for="Name">Email address*</label>
                            <div class="col-md-6">
                                <input type="email" name="email" @if(isset($admin)) disabled @endif tabindex="1" class="form-control"
                                       value="{{old('email',@$admin->email)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">First name</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control"
                                       placeholder=""
                                       value="{{old('first_name',@$admin->first_name)}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 ">Last name</label>
                            <div class="col-md-6">
                                <input type="text" name="last_name" tabindex="2"
                                       class="form-control"
                                       value="{{old('last_name',@$admin->last_name)}}">
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


                            @if(empty($admin))
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