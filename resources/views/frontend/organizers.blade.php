@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/3.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Organizers</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Organizers</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="content-page">
                            <h1 dir="ltr"><b id="docs-internal-guid-d256cacd-424c-5843-0204-ead9e8d81452">ORGANIZERS</b></h1>

                            <h2 dir="ltr"><span id="docs-internal-guid-d256cacd-424c-5843-0204-ead9e8d81452">Steering Committee</span></h2>
                            &nbsp;
                            <h2 dir="ltr"><span id="docs-internal-guid-d256cacd-424c-5843-0204-ead9e8d81452">Organizing Committee </span></h2>

                            <h2 dir="ltr"><span id="docs-internal-guid-d256cacd-424c-5843-0204-ead9e8d81452">Academic Committee </span></h2>
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection