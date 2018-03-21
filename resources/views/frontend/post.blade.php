@extends('frontend.layouts.master')
@section('title','Post')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">{{$post->title}}</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        {!! $post->content !!}
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection