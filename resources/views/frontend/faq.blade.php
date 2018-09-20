@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

        <header class="sabbi-page-header page-header-lg"
                style="background-image: url('{{url('frontend/anhbaiviet/faq.png')}}');
                        background-size: cover;
                        background-repeat: no-repeat;">
            <div class="page-header-content conternt-center">
                <div class="header-title-block">
                    <h1 class="page-title">{{trans('home.faq')}}</h1>
                </div>
            </div>
        </header>

    <style>
        ol {
            list-style: decimal;
        }
    </style>
        <div class="auth-breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                    <li><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                    <li class="active"><a href="#">{{trans('home.faq')}}</a></li>
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
                                @php $article = \App\Models\Article::where('title','faq')->first(); @endphp
                                @if($article)
                                    {!! $article->content !!}
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection