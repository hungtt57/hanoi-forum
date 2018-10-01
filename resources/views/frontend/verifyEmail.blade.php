@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/8.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                {{--<h1 class="page-title">News</h1>--}}
            </div>
        </div>
    </header>

    <main class="sabbi-page-wrap" style="min-height: calc(100vh - 339px - 390px)">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>
                            @if($user and $user->apply == 1)
                                <p>Your account is now activated. You can submit your abstract by <a href="{{url('admin/login')}}" class="btn btn-primary ">Login</a> to your account or go back to the homepage <a href="{{url('/')}}">here</a></p>
                                @else
                                <p> Your account is now activated. You can <a href="{{url('admin/login')}}" class="btn btn-primary ">Login</a> to your account or go back to the homepage <a href="{{url('/')}}">here</a>. </p>
                                @endif


                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection