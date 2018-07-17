@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title"> Science, technology and education for climate change response and sustainability </h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="content-page">

                            @php $article = \App\Models\Article::where('title','scienceTechnology')->first(); @endphp
                            @if($article)
                                {!! $article->content !!}
                            @endif


                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->
            @include('frontend.panels')

        </div>

    </main>
@endsection