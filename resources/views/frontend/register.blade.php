@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Register</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">

                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        @include('admin.flash_message')
                        <form id="login-form" action="{{route('Frontend::postRegister')}}" method="post" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" name="email" tabindex="1" class="form-control" placeholder="Email"
                                       value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" tabindex="2" class="form-control"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" tabindex="2" class="form-control"
                                       placeholder="Password Confirm">
                            </div>
                            <p>
                                Registration fee is USD100 and includes access to all sessions and side events, welcome
                                dinner, refreshments during the conference and conference materials.
                            </p>
                            <p>
                                Registration fee will be waived to delegates with accepted abstracts. Limited financial
                                assistance to support registration fee can be provided on a case-by-case basis. Please
                                indicate if you wish to apply for this assistance in the registration form.
                            </p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                               class="form-control btn btn-info " value="Register">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection