@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>

        .image-human img {
            width: 150px;

        }
        .content-human {
            margin-bottom: 10px;
            border-bottom: 1px solid black;
            padding-bottom: 10px;
        }
        @media (min-width: 480px) {
            .image-human {
                float: right;
            }
        }

        @media (max-width: 479px) {
            .image-human {
                text-align: center;
            }
        }
        .content-human ul li {
            list-style: disc ;
        }
        .title-text {
            text-align: center;
            font-weight: bold;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title"> Policy Dialogue 1: Sustainable development of Mekong Delta responding to Climate change</h1>
            </div>
        </div>
    </header>
    {{--<div class="auth-breadcrumb-wrap">--}}
        {{--<div class="container">--}}
            {{--<ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">--}}
                {{--<li><a href="{{url('/')}}">Home</a></li>--}}
                {{--<li class="active"><a href="#"> Policy Dialogue 1: Sustainable development of Mekong Delta responding to Climate change--}}
                    {{--</a></li>--}}
            {{--</ol>--}}
        {{--</div>--}}
    {{--</div>--}}
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                    <div class="content-page">
                        @php $article = \App\Models\Article::where('title','policy1')->first(); @endphp
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