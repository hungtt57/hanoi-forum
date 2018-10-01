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
                <h1 class="page-title">{{trans('home.registration')}}</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                <li class="active"><a href="#">{{trans('home.registration')}}</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                        <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                            @php $article = \App\Models\Article::where('title','registration')->first(); @endphp
                            @if($article)
                                {!! $article->content !!}
                            @endif
                        </div>
                    </div>


                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection