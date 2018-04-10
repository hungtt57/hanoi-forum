@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

    <section class="sabbbi-section home-info mt_35">
        <div class="container">
            <div class="row mt_30">

                <div class="col-sm-4">
                    <article class="sabbi-thumlinepost-card solitude-bg__x">
                        <a href="{{url('hanoi-forum')}}" style="color:inherit"><h2 class="entry-title ht-4">About Hanoi
                                Forum</h2>
                            <div class="sabbi-thumlinepost-card-meta">

                                <p class="entry-text">
                                    Hanoi Forum is an international academic conference co-hosted by Vietnam National University, Hanoi (VNU) and Korea Foundation for Advanced Studies (KFAS). The general theme of Hanoi Forum is “Towards Sustainable Development”. Hanoi Forum aims at promoting the goal of inclusive and sustainable development for all.

                                </p>
                                <div class="btn btn-unsolemn btn-action read-more" style="color: #32813E;">Read
                                    More
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
                        <ol class="ol-timeline" style="margin-top: 50px !important;">


                            <li class="tl-item with-icon">
                                <p><span class="item-section">8 - 10 November 2018</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">Forum dates</h3>
                                </div>
                            </li>

                            <li class="tl-item with-icon">
                                <p><span class="item-section">15 September 2018</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">Deadline for full papers</h3>
                                </div>
                            </li>
                            <li class="tl-item with-icon">
                                <p><span class="item-section">15 July 2018</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">Notification of abstract review results</h3>
                                </div>
                            </li>

                            <li class="tl-item with-icon">
                                <p><span class="item-section">30 June 2018</span></p>
                                <div class="content-wrapper">
                                    <h3 class="title">Deadline for abstracts</h3>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                @php $posts = App\Models\Post::where('status',1)->orderBy('created_at','desc')->limit(5)->get(); @endphp
                @if($posts)
                    <div class="col-sm-4">
                        <article class="news-card sabbi-thumlinepost-card solitude-bg__x">
                            <h2 class="stage-title">Latest Events</h2>
                            <ul class="list-unstyled lst_news_list" tabindex="0">
                                @foreach($posts as $post)
                                    <li class="lst_news_item">
                                        <h3 class="title mg_0"><a
                                                    href="{{url('post').'/'.str_slug($post->title).'-'.$post->id}}">{{$post->title}}</a>
                                        </h3>
                                        <div>
                                            <span class="date">{{$post->created_at->format('M d Y')}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="events.html" class="btn btn-unsolemn btn-action read-more">VIEW ALL</a>
                        </article>
                    </div>
                @endif
            </div>
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