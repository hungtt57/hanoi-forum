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
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>
                            {{--<p class="title-text" style="font-size: 16px">Co-Chairs</p>--}}
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img class="" src="/frontend/keynote/helen.jpg" alt="">
                                </div>
                                <p><strong>HELEN CLARK</strong></p>
                                <p>Former Administrator of UNDP</p>
                                <p>Former Prime Minister of New Zealand</p>
                                <p>Helen Clark was Prime Minister of New Zealand for three successive terms from 1999–2008.  She was the first woman to be elected as Prime Minister in New Zealand.
                                </p>
                                <p>Throughout her tenure as Prime Minister, and as a Member of Parliament over 27 years, Helen Clark engaged widely in policy development and advocacy across the international, economic, social, environmental, and cultural spheres. She advocated strongly for New Zealand’s comprehensive program on sustainability and for tackling the problems of climate change. She was an active leader of her country’s foreign relations, engaging in a wide range of international issues. </p>
                                <p>In April 2009, Helen Clark became Administrator of the United Nations Development Programme. She was the first woman to lead the organisation, and served two terms there. At the same time, she was Chair of the United Nations Development Group, a committee consisting of all UN funds, programs, agencies, and departments working on development issues. As Administrator, she led UNDP to be ranked the most transparent global development organisation. She completed her tenure in 2017.
                                </p>
                                <p>Helen Clark came to the role of Prime Minister after an extensive parliamentary and ministerial career. Prior to entering the New Zealand Parliament, Helen Clark taught in the Political Studies Department of the University of Auckland, from which she earlier graduated with her BA and MA (Hons) degrees.
                                </p>
                                <p>Helen continues to be a strong voice for sustainable development, climate action, gender equality and women’s leadership, peace and justice, and action on non-communicable diseases and on HIV.
                                </p>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection