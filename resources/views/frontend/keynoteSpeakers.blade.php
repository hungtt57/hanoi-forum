@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Keynote Speakers</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Keynote Speakers</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                        <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                            <div class="col-md-12">
                                To be updated in July
                            </div>
                        </div>
                    </div>


                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection