@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .book-list-meta {
            padding-left: 10px;
        }
    </style>
    <header class="sabbi-page-header-classic page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                {{--<h2 class="page-sub-title">Oloain Books</h2>--}}
                <h1 class="page-title">BOOKs</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">

        <section class="book-timeline-section">
            <div class="container">
                <div class="sabbi-book_timeline-segment">
                    <ul class="sabbi-book_timeline list-unstyled">
                        <li>
                            <span class="year">2018</span>
                            <ul class="book-list list-unstyled">
                                <li>
                                    <figure>
                                        <img src="/frontend/book/book1.png" alt="published books" class="img-responsive">
                                    </figure>
                                    <div class="book-list-meta">
                                        <h3 class="book-list-title">
                                            <a href="https://www.crcpress.com/Sustainable-Development-Goals-in-the-Republic-of-Korea/Jung/p/book/9781138478893">Sustainable Development Goals in the Republic of Korea</a>
                                        </h3>
                                        <div class="book-list-brand"><em>Edited by Tae Yong Jung </em></div>
                                        <p class="book-author">This book explores the attempts of South Korea in achieving the UN’s Sustainable Development Goals (SDGs) by 2030. It addresses six of the 17 goals ...
                                            <a target="_blank" href="https://www.crcpress.com/Sustainable-Development-Goals-in-the-Republic-of-Korea/Jung/p/book/9781138478893">[Read more]</a>
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span class="year">2018</span>
                            <ul class="book-list list-unstyled">
                                <li >
                                    <figure>
                                        <img src="/frontend/book/book2.png" alt="published books" class="img-responsive">
                                    </figure>
                                    <div class="book-list-meta">
                                        <h3 class="book-list-title"><a href="https://www.springer.com/gp/book/9781461461197" target="_blank">The Water-Food-Energy Nexus in the Mekong Region:
                                                Assessing Development Strategies Considering Cross-Sectoral and Transboundary Impacts</a> </h3>
                                        <div class="book-list-brand"><em>Edited by Alexander Smajgl and John Ward</em></div>
                                        <p class="book-author">This brief provides a cross-sectional analysis of development-directed investments in the wider Mekong region. The wider Mekong region includes Laos, Cambodia, Thailand, Vietnam, Myanmar, and the Chinese province of Yunnan…
                                            <a target="_blank" href="https://www.springer.com/gp/book/9781461461197">[Read more]</a></p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="year">2017</span>
                            <ul class="book-list list-unstyled">
                                <li >
                                    <figure>
                                        <img src="/frontend/book/book3.png" alt="published books" class="img-responsive">
                                    </figure>
                                    <div class="book-list-meta">
                                        <h3 class="book-list-title"><a href="https://www.adb.org/publications/pathways-low-carbon-development-viet-nam" target="_blank">Pathways to Low-Carbon Development for Viet Nam</a> </h3>
                                        <div class="book-list-brand"><em>Asian Development Bank </em></div>
                                        <p class="book-author">This study assesses how Viet Nam’s green growth objectives can be achieved through a detailed modeling approach that draws on extensive national stakeholder input to ensure alignment with sector plans and strategies...
                                            <a target="_blank" href="https://www.adb.org/publications/pathways-low-carbon-development-viet-nam">[Read more]</a></p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="year">2016</span>
                            <ul class="book-list list-unstyled">
                                <li>
                                    <figure>
                                        <img src="/frontend/book/book4.png" alt="published books" class="img-responsive">
                                    </figure>
                                    <div class="book-list-meta">
                                        <h3 class="book-list-title"><a href="https://www.adb.org/publications/nature-based-solutions-building-resilience-towns-cities-gms" target="_blank">Nature-Based Solutions for Building Resilience in Towns and Cities: Case Studies from the Greater Mekong Subregion</a> </h3>
                                        <div class="book-list-brand"><em>Asian Development Bank </em></div>
                                        <p class="book-author">Green infrastructure can play a significant role in offsetting losses from climate-related disasters and contribute to building resilience through rehabilitation and expansion of natural ecosystems within built areas...
                                            <a target="_blank" href="https://www.adb.org/publications/nature-based-solutions-building-resilience-towns-cities-gms">[Read more]</a></p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section><!-- /.book-timeline -->
    </main>
@endsection