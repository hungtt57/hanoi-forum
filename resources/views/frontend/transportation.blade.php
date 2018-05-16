@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

        <header class="sabbi-page-header page-header-lg"
                style="background-image: url('{{url('frontend/anhbaiviet/faq.png')}}');
                        background-size: cover;
                        background-repeat: no-repeat;">
            <div class="page-header-content conternt-center">
                <div class="header-title-block">
                    <h1 class="page-title">Transportation</h1>
                </div>
            </div>
        </header>

    <style>
        ol {
            list-style: decimal;
        }
    </style>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                        <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                            <div class="col-md-12">
                                @php $article = \App\Models\Article::where('title','transportation')->first(); @endphp
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