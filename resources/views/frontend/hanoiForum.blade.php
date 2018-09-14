@extends('frontend.layouts.master')
@section('title','Focus')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Hanoi forum</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Hanoi Forum</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">

                        <div class="content-page">
                            @php $article = \App\Models\Article::where('title','hanoi-forum')->first(); @endphp
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