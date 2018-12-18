@extends('frontend.layouts.master')
@section('title','Post')
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
           
                <h1 class="page-title">{{$post->title}}</h1>
              
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">{{$post->title}}</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">

                        @php
                            $raw_locale = \Session::get('locale');

                        @endphp
                        @if($raw_locale != null and $raw_locale == 'vn')
                        {!! $post->content !!}
                            @else
                            {!! $post->content_en !!}
                        @endif
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection
