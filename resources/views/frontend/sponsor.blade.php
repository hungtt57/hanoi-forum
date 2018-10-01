@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/4.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">{{trans('home.sponsors')}}</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">{{trans('home.hone')}}</a></li>
                <li class="active"><a href="#">{{trans('home.sponsors')}}</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="col-md-12">

                            <a href="http://www.sk.co.kr/" target="_blank" >
                                <img src="/frontend/assets/img/SK.jpg" alt=""  style="max-width: 100%;    width: 300px;
    margin-bottom: 10px;">
                            </a>

                                <a href="http://kfas.or.kr/" target="_blank">
                                <img src="/frontend/assets/img/kfas_logo.jpg" alt=""  style="max-width: 100%">
                                </a>

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection