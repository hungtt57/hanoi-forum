
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>@yield('title','Ha nội Forum')</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="/frontend/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">

    <!-- Tools -->
    <link href="/frontend/assets/tools/sequence/css/sequence-theme.basic.css" rel="stylesheet" media="all">
    <link href="/frontend/assets/tools/dropdownhover/css/animate.min.css" rel="stylesheet">
    <link href="/frontend/assets/tools/dropdownhover/css/bootstrap-dropdownhover.min.css" rel="stylesheet">

    <!-- site spec -->
    <link href="/frontend/assets/tools/lightbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="/frontend/assets/css/main.css" rel="stylesheet">
    <link href="/frontend/assets/css/style.css" rel="stylesheet">
    <script src="/frontend/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    @stack('styles')
</head>
<body class="auth-theme-rashmore">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header class="sabbi-site-head">
    @include('frontend.layouts.nav')
    @if(Request::is('/'))
        @include('frontend.layouts.banner')
        @endif
</header><!-- /.sabbi-site-head -->

    @yield('content')
<footer class="section-footer mt_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-site-info">
                    <header>
                        <a class="footer-brand" href="index.html"><img alt="" class="img-responsive" style="max-width: 90px" src="/frontend/assets/img/site-logo.png"></a>
                    </header>
                    <address>
                        <h3 class="entry-title">Contact Information</h3>
                        <div class="address-entry">
                            <p class="__adtext">Hanoi Forum Secretariat</p>
                            <p class="__ad-num">R1006, Administration Building</p>
                            <p class="__ad-num">Vietnam National University, Hanoi</p>
                            <p class="__ad-num">144 Xuan Thuy, Cau Giay</p>
                            <p class="__ad-num">Tel: (84) 24 37547670 - Ext: 723</p>
                            <p class="__ad-num">Email: hanoiforum@vnu.edu.vn</p>
                        </div>
                    </address>
                    {{--<footer class="contact-info">--}}
                        {{--<h3 class="entry-title">Contact Information</h3>--}}
                        {{--<p class="__ci_num">Call: <span>+61(07)373 53921</span></p>--}}
                        {{--<p class="__ci_num">Email: <span>rushmore@mail.com</span></p>--}}
                    {{--</footer>--}}
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-2">
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title">Resarch groups</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">Biology</a></li>
                                    <li><a href="#">Chemistryl</a></li>
                                    <li><a href="#">Geology</a></li>
                                    <li><a href="#">Physics</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title">Publication</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">Dr. Rushmore</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Alumni</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-5">
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title">People</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">Books Chapter</a></li>
                                    <li><a href="#">Journal Article</a></li>
                                    <li><a href="#">Guest Editor</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title">Services</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">Editorial Services</a></li>
                                    <li><a href="#">University Services</a></li>
                                    <li><a href="#">Professonal Services</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="footer-site-info">
                    <address>
                        <h3 class="entry-title">Latest Events</h3>
                        <ul class="event-list list-unstyled">
                            <li>
                                <h4 class="title"><a href="events_single.html">Study Tour and Christmas Trip</a></h4>
                                <div class="date">21st June 2016</div>
                            </li>
                            <li>
                                <h4 class="title"><a href="events_single.html">Mid Year Lab Party and Summer vacation</a></h4>
                                <div class="date">21st June 2016</div>
                            </li>
                            <li>
                                <h4 class="title"><a href="events_single.html">Science Award 2015-2016</a></h4>
                                <div class="date">21st June 2016</div>
                            </li>
                        </ul>
                        <div class="action-wrap"><a href="events.html" class="btn btn-unsolemn btn-action">View all Events</a></div>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div id="site-footer-bar" class="footer-bar mt_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="widget_black_studio_tinymce" id="black-studio-tinymce-4">
                        <div class="copyright">Copyright 2017 -</div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="powredby">Developed and Managed by: hinKeu</div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /.section-footer -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
  window.jQuery || document.write('<script src="/frontend/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<!-- tools -->
<script src="/frontend/assets/tools/sequence/js/imagesloaded.pkgd.min.js"></script>
<script src="/frontend/assets/tools/sequence/js/hammer.min.js"></script>
<script src="/frontend/assets/tools/sequence/js/sequence.min.js"></script>
<script src="/frontend/assets/tools/lightbox/ekko-lightbox.min.js"></script>
<script src="/frontend/assets/tools/dropdownhover/js/bootstrap-dropdownhover.min.js"></script>

<!-- site-spec -->
<script src="/frontend/assets/js/vendor/bootstrap.min.js"></script>
<script src="/frontend/assets/js/plugins.js"></script>
<script src="/frontend/assets/js/main.js"></script> <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
@stack('scripts')

</body>


</html>





