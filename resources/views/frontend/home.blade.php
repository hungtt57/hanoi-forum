@extends('frontend.layouts.master')
@section('title','Home')

@push('styles')

    <style>


        .img-partners {
            max-width: 80px;
        }

        .box-partner {
            height: 160px;
        }

        .text-banner {
            text-align: center;
            font-size: 12px;
            font-weight: bold
        }

        .text-banner-top {
            font-weight: bold;
            text-align: center;
            font-size: 12px;
        }

        .img-t-2 {
            position: relative;
            margin-top: 9%;
        }
        .taitro a {
            color: inherit;
        }

        .ol-timeline {
            margin-top: 50px !important;
        }

        /*@media (min-width: 1281px) and (max-width: 1601px) {*/

        /*.seq-canvas > li {*/
        /*height: 80% !important;*/
        /*}*/

        /*}*/

        @media (min-width: 1025px) and (max-width: 1280px) {

            .img-partners {
                max-width: 80px;
            }

            #left, #right {
                height: 320px;
            }

            .img2 {
                height: 80px;
            }

            .img-s {
                margin-top: 15px;
            }

            .text-s {
                margin-top: 14px;
            }

        }

        @media (min-width: 320px) and (max-width: 480px) {

            .img-partners {
                max-width: 100px;
            }

            #left-b {
                margin-bottom: 10px;
            }

            .ol-timeline {
                margin-top: 80px !important;
            }

            .img-s-2 {
                max-width: 100px !important;
            }

            .text-banner {
                text-align: center;
                font-size: 15px;
                color: #0045D1;
                font-weight: bold
            }

            .text-banner-top {
                color: #0045D1;
                font-weight: bold;
                text-align: center;
                font-size: 15px;
            }

            .box-t-1 {
                margin-bottom: 15px;
            }

            .box-partner {
                height: 150px;
                margin-bottom: 8px;
            }

            /*.seq-canvas > li {*/
            /*filter: blur(5px) !important;*/
            /*-webkit-filter: blur(5px) !important;*/
            /*}*/

        }
    </style>

@endpush

@section('content')

    <section class="sabbbi-section home-info mt_35">
        <div class="container">
            <div class="row mt_30">

                <div class="col-sm-4" id="left-b">
                    <article class="sabbi-thumlinepost-card solitude-bg__x" id="left">
                        <a href="{{url('hanoi-forum')}}" style="color:inherit"><h2 class="entry-title ht-4">{{ trans('home.abouthanoiforum') }}</h2>
                            <div class="sabbi-thumlinepost-card-meta">

                                <p class="entry-text" style="text-align: justify">
                                    {{ trans('home.abouthanoiforum_text') }}

                                </p>
                                <div class="btn btn-unsolemn btn-action read-more" style="color: #32813E;">{{ trans('home.readmore') }}
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                {{--<div class="col-sm-4">--}}
                {{--<article class="sabbi-thumlinepost-card card-video solitude-bg__x">--}}
                {{--<figure class="sabbi-thumlinepost-card-figure">--}}
                {{--<a class="video-play" href="https://www.youtube.com/watch?v=qarc7AA4-wM"--}}
                {{--data-toggle="lightbox"><img src="/frontend/assets/img/thumbvideo.jpg" alt=""--}}
                {{--class="img-responsive img-thumpost"></a>--}}
                {{--<figcaption> Welcome message</figcaption>--}}
                {{--</figure>--}}
                {{--</article>--}}
                {{--</div>--}}
                <div class="col-sm-4">
                    <div class="education_timeline_wrap">
                        <ol class="ol-timeline">


                            <li class="tl-item with-icon">
                                <p><span class="item-section">{{ trans('home.08-10/11/2018') }}</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">{{ trans('home.forumdates') }}</h3>
                                </div>
                            </li>

                            <li class="tl-item with-icon">
                                <p><span class="item-section">{{ trans('home.15/09/2018') }}</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">{{ trans('home.deadlineforfullpapers') }}</h3>
                                </div>
                            </li>
                            <li class="tl-item with-icon">
                                <p><span class="item-section">{{ trans('home.15/07/2018') }}</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">{{ trans('home.notificationOfAbstractReviewResults') }}</h3>
                                </div>
                            </li>

                            <li class="tl-item with-icon">
                                <p><span class="item-section">{{ trans('home.30/06/2018') }}</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">{{ trans('home.deadlineForAbstracts') }}</h3>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->limit(3)->get(); @endphp
                @if($posts)
                    <div class="col-sm-4">

                        <article class="news-card sabbi-thumlinepost-card solitude-bg__x" id="right">
                            {{--<img src="/assets/img/hnforum.jpg" style="width: 100%">--}}
                            <h2 class="stage-title">{{ trans('home.latestEvents') }}</h2>
                            <ul class="list-unstyled lst_news_list" tabindex="0">
                                @foreach($posts as $post)
                                    <li class="lst_news_item">
                                        <h3 class="title mg_0"><a
                                                    href="{{url('post').'/'.str_slug($post->title).'-'.$post->id}}">{{$post->title}}</a>
                                        </h3>
                                        <div>
                                            @if(app()->isLocale('en'))
                                            <span class="date">{{$post->created_at->format('M d Y')}}</span>
                                                @else
                                                <span class="date">{{$post->created_at->format('d/m/Y')}}</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            {{--<a href="events.html" class="btn btn-unsolemn btn-action read-more">VIEW ALL</a>--}}
                        </article>
                    </div>
                @endif
            </div>
            <div class="row mt_30">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="row taitro" >
                            <div class="col-sm-6">
                                <div class="row">
                                    <h4 style="text-align: center; font-weight: bold">{{ trans('home.organizers_2') }}</h4>
                                    <a href="http://www.vnu.edu.vn/home/" target="_blank">
                                        <div class="col-sm-6">

                                            <img src="/frontend/assets/img/vnu.png" style="max-width: 80px"
                                                 class="img-responsive center-block img-s-2">
                                            <div style="margin-top: 10px">
                                                <p class="text-banner-top">{{ trans('home.vnu') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="http://www.kfas.or.kr/" target="_blank">
                                    <div class="col-sm-6">

                                        <img src="/frontend/assets/img/kfas_logo.jpg" style=""
                                             class="img-responsive center-block img-s">

                                        <p class="text-banner-top text-s" style="">{{ trans('home.koreaFoundation') }}</p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <h4 style="text-align: center; font-weight: bold">{{ trans('home.partners') }}</h4>
                                    <a href="https://www.most.gov.vn/en/Pages/home.aspx" target="_blank">
                                    <div class="col-sm-3 box-partner">

                                        <img src="/frontend/bkhvcn.png"
                                             class="img-responsive center-block img-partners ">

                                        <p class="text-banner">{{ trans('home.ministryOfScience') }}</p>

                                    </div>
                                    </a>
                                    <a href="http://www.monre.gov.vn/wps/portal/Trangchu/!ut/p/c5/04_SB8K8xLLM9MSSzPy8xBz9CP0os3hnd0cPE3MfAwMDT1dDA89AtyBjD3cfIyBfPxykwyzeAAdwNND388jPTdUvyM4rBwDpuoT1/dl3/d3/L2dBISEvZ0FBIS9nQSEh/" target="_blank">
                                    <div class="col-sm-3 box-partner">

                                        <img src="/frontend/btnvmt.png"
                                             class="img-responsive center-block img-partners ">
                                        <p class="text-banner"> {{ trans('home.ministryOfNaturalResources') }}</p>
                                    </div>
                                    </a>
                                    <a href="http://hanoi.gov.vn/home" target="_blank">
                                    <div class="col-sm-3 box-partner">

                                        <img src="/frontend/hanoi.png"
                                             class="img-responsive center-block img-partners ">
                                        <p class="text-banner">{{ trans('home.hanoiCommittee') }}</p>

                                    </div>
                                    </a>
                                    <a href="http://www.vast.ac.vn/en/" target="_blank">
                                    <div class="col-sm-3 box-partner">

                                        <img src="/frontend/vast.png" class="img-responsive center-block img2"
                                             style="max-height: 80px">

                                        <p class="text-banner">{{ trans('home.vnAcademy') }}</p>

                                    </div>
                                    </a>

                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                {{--<div class="row" style="margin-top: 15px">--}}
                {{--<div class="col-sm-12">--}}
                {{--<h3 style="text-align: center; color: #0045D1; font-weight: bold">PARTNERS</h3>--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-3 box-partner">--}}

                {{--<img src="/frontend/bkhvcn.png" class="img-responsive center-block img-partners ">--}}

                {{--<p class="text-banner">Ministry of Science and Technology</p>--}}

                {{--</div>--}}
                {{--<div class="col-sm-3 box-partner">--}}

                {{--<img src="/frontend/btnvmt.png" class="img-responsive center-block img-partners ">--}}
                {{--<p class="text-banner"> Ministry of Natural Resources and Environment</p>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 box-partner">--}}

                {{--<img src="/frontend/hanoi.png" class="img-responsive center-block img-partners ">--}}
                {{--<p class="text-banner">Hanoi Municipal People's Committee</p>--}}

                {{--</div>--}}
                {{--<div class="col-sm-3 box-partner" >--}}

                {{--<img src="http://smartindustry.vn/wp-content/uploads/logo/VAST.png" class="img-responsive center-block">--}}

                {{--<p class="text-banner" style="position: relative; bottom: -19px">VietNam Academy Of Science And Technology</p>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <hr>
            @include('frontend.panels')


        </div>
    </section>
    <!-- /.home-info -->
    {{--<section class="section-brand_quickfact section">--}}
    {{--<div class="container">--}}
    {{--<div class="brand_quickfact-wrap">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-10 col-sm-offset-1">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="brand_quickfact-content font-2 text-center">--}}
    {{--<div class="brand_quickfact-count_value">33</div>--}}
    {{--<div class="brand_quickfact-label">Journal Articles</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="brand_quickfact-content font-2 text-center">--}}
    {{--<div class="brand_quickfact-count_value">4.8</div>--}}
    {{--<div class="brand_quickfact-label">Million USD Grants Received</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="brand_quickfact-content font-2 text-center">--}}
    {{--<div class="brand_quickfact-count_value">13</div>--}}
    {{--<div class="brand_quickfact-label">Research members</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class="sabbi-section section-selected_publication">--}}
    {{--<div class="container">--}}
    {{--<div class="selected_pulication-wrap">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="entry-meta">--}}
    {{--<h2 class="stage-title">About Research Group</h2>--}}
    {{--<p class="entry-meta-text">Lorem ipsum dolor sit amet, con adipiscing elit. Etiam convallis elit id impedie. Quisq commodo ornare tortor Quiue bibendum. </p>--}}
    {{--<p class="entry-meta-text">magna vitae ex interdum cursus. Nullam lacinia pretium nibh, vitae imperdiet lacus tempor sit amet. Donec ultrices est nec tellus finibus facilisis. Nullam sodales justo id magna fringilla rutrum. Duis bibendum id eros congue bibendum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis elit id odio imperdiet feugiat.</p>--}}
    {{--<ul class="list-unstyled entry-meta-list list-style-round_item">--}}
    {{--<li>An Electrochemical Method for the Detection of Disease-Specific Exosomes,</li>--}}
    {{--<li>Jharda Yadav, Eseniia Ooriachek, Jazmul Jhaone,</li>--}}
    {{--<li>Kimli Yang , Dr. Rushmore</li>--}}
    {{--</ul>--}}
    {{--<p class="entry-meta-text">Lorem ipsum dolor sit amet, con adipiscing elit. Etiam convallis elit id impedie. Quisq commodo ornare tortor Quiue bibendum. magna vitae ex interdum cursus. Nullam lacinia pretium nibh.</p>--}}
    {{--<div class="action-wrap"><a href="#" class="btn btn-unsolemn btn-action read-more">View all Publications</a></div>--}}
    {{--</div><!-- /.entry-meta -->--}}
    {{--</div>--}}
    {{--<aside class="col-sm-8">--}}
    {{--<div class="paper_cut">--}}
    {{--<div class="pub-item with-icon">--}}
    {{--<div class="elem-wrapper">--}}
    {{--<i class="ion-ios-paper-outline"></i>--}}
    {{--</div>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title mb_0">(63) Dr.Rushmore, John doe, Sherlock Holmes, Farhadul Islam, Md Sawrka, Shojfai Gopalan, Erad Astian Lam, Yung-Fatsi Nolen, Muhammad J. A. Ihra, Kimli Yang.</h3>--}}
    {{--<div class="slc_des">--}}
    {{--<div class="authr">Cardiovascular disease in Africa: epidemiological profile and challenges</div>--}}
    {{--</div>--}}
    {{--<div class="description">--}}
    {{--<a class="link-with-icon" href="#" target="black"><i class="ion-ios-browsers-outline"></i>Publisher's website</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="pub-item with-icon">--}}
    {{--<div class="elem-wrapper">--}}
    {{--<i class="ion-ios-paper-outline"></i>--}}
    {{--</div>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title mb_0">(63) Dr.Rushmore, John doe, Sherlock Holmes, Farhadul Islam, Md Sawrka, Shojfai Gopalan, Erad Astian Lam, Yung-Fatsi Nolen, Muhammad J. A. Ihra, Kimli Yang.</h3>--}}
    {{--<div class="slc_des">--}}
    {{--<div class="authr">Antithrombotic therapy for patients with STEMI undergoing primary PCI</div>--}}
    {{--</div>--}}
    {{--<div class="description">--}}
    {{--<a class="link-with-icon" href="#" target="black"><i class="ion-ios-browsers-outline"></i>Publisher's website</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="pub-item with-icon">--}}
    {{--<div class="elem-wrapper">--}}
    {{--<i class="ion-ios-paper-outline"></i>--}}
    {{--</div>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title mb_0">(63) Dr.Rushmore, John doe, Sherlock Holmes, Farhadul Islam, Md Sawrka, Shojfai Gopalan, Erad Astian Lam, Yung-Fatsi Nolen, Muhammad J. A. Ihra, Kimli Yang.</h3>--}}
    {{--<div class="slc_des">--}}
    {{--<div class="authr">Haematopoietic stem cell transplantation for autoimmune diseases</div>--}}
    {{--</div>--}}
    {{--<div class="description">--}}
    {{--<a class="link-with-icon" href="#" target="black"><i class="ion-ios-browsers-outline"></i>Publisher's website</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- /.paper_cut -->--}}
    {{--</aside>--}}
    {{--</div>--}}
    {{--</div><!-- /.selected_pulication-wrap -->--}}
    {{--</div>--}}
    {{--</section><!-- /.section-selected_publication -->--}}
    {{--<section class="sabbi-section section-meet_the_team">--}}
    {{--<div class="container">--}}
    {{--<div class="row mb_30">--}}
    {{--<div class="col-sm-4">--}}
    {{--<article class="sabbi-thumlinepost-card solitude-bg__x profile-card">--}}
    {{--<figure class="sabbi-thumlinepost-card-figure">--}}
    {{--<img alt="" class="img-responsive img-thumpost" src="/frontend/assets/img/profile/rashmore.jpg">--}}
    {{--</figure>--}}
    {{--<h2 class="entry-title">Dr. Rushmore</h2>--}}
    {{--<div class="card_st_fix">--}}
    {{--<p class="entry-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis elit id odio imperdiet feugiat. Quisque commodo ornare tortor. Quisque bibendum magna vitae ex interdum cursus. Nullam lacinia pretium nibh, vitae imperdiet lacus tempor sit amet. Donec ultrices est nec tellus finibus facilisis. Nullam</p>--}}
    {{--<div class="action-wrap"><a href="professor.html" class="btn btn-unsolemn btn-action read-more">Read More</a></div>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-sm-offset-1">--}}
    {{--<div class="education_timeline_wrap">--}}
    {{--<ol class="ol-timeline">--}}
    {{--<li class="tl-item with-icon">--}}
    {{--<p><span class="item-section">March 20012</span></p>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title">California Conference</h3>--}}
    {{--<div class="description">California National University, California, USA</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="tl-item with-icon">--}}
    {{--<p><span class="item-section">March 2007</span></p>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title">PHD</h3>--}}
    {{--<div class="description">Kusan National University, Busan, South Korea</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="tl-item with-icon">--}}
    {{--<p><span class="item-section">September 1999</span></p>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title">MSc</h3>--}}
    {{--<div class="description">University of California, Davis, USA</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="tl-item with-icon">--}}
    {{--<p><span class="item-section">Augest 1998</span></p>--}}
    {{--<div class="content-wrapper">--}}
    {{--<h3 class="title">BSc (Hons)</h3>--}}
    {{--<div class="description">University of California, Davis, USA</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ol>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="profile-card profile-card-meta_center">--}}
    {{--<figure>--}}
    {{--<img class="img-responsive" src="/frontend/assets/img/profile/profile1.jpg" alt="sabbi-profile-pic">--}}
    {{--<figcaption>--}}
    {{--<h3 class="fig-title">Nai Nai Yung</h3>--}}
    {{--<div class="fig-meta">PHD Student</div>--}}
    {{--</figcaption>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="profile-card profile-card-meta_center">--}}
    {{--<figure>--}}
    {{--<img class="img-responsive" src="/frontend/assets/img/profile/profile2.jpg" alt="sabbi-profile-pic">--}}
    {{--<figcaption>--}}
    {{--<h3 class="fig-title">Jafar Juardar</h3>--}}
    {{--<div class="fig-meta">PHD Student</div>--}}
    {{--</figcaption>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="profile-card profile-card-meta_center">--}}
    {{--<figure>--}}
    {{--<img class="img-responsive" src="/frontend/assets/img/profile/profile3.jpg" alt="sabbi-profile-pic">--}}
    {{--<figcaption>--}}
    {{--<h3 class="fig-title">Susmita Sen</h3>--}}
    {{--<div class="fig-meta">PHD Student</div>--}}
    {{--</figcaption>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="profile-card profile-card-meta_center">--}}
    {{--<figure>--}}
    {{--<img class="img-responsive" src="/frontend/assets/img/profile/profile4.jpg" alt="sabbi-profile-pic">--}}
    {{--<figcaption>--}}
    {{--<h3 class="fig-title">Alex Machiavelli</h3>--}}
    {{--<div class="fig-meta">PHD Student</div>--}}
    {{--</figcaption>--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="action-wrap text-right-sm"><a href="ourteam.html" class="btn btn-unsolemn btn-action">View all</a></div>--}}
    {{--</div>--}}
    {{--</section><!-- /.section-meet_the_team -->--}}

@endsection