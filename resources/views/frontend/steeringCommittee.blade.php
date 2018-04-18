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
                <h1 class="page-title">Steering Committee</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <p class="title-text">Co-Chairs</p>
                        <p><strong>Assoc. Prof. Nguyen Kim Son, VNU, Vietnam</strong></p>
                        <p><strong>Mr. Park In Kook, KFAS, South Korea</strong></p>

                    </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection