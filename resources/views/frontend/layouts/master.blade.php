<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700"
          rel="stylesheet">

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


    <style>
        @media (min-width: 1025px) and (max-width: 1280px) {
            .img-logo {
                width: 60%;
            }
            #menu-main-nav{
                font-size: 9px !important;
            }
        }
        @media (min-width: 1400px) {
            .container {
                width: 1600px;
            }
        }

        @media (max-width: 468px) {
            .navbar-brand img {
              max-height: 52px;
            }
        }

        #menu-main-nav {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
        }
    </style>


    <script>
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-116562676-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body class="auth-theme-rashmore">
<!--[if lt IE 8]>

<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>

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
            <div class="col-sm-6">
                <div class="footer-site-info">
                    <header>

                        {{--<a class="footer-brand" href="http://vnu.edu.vn/home/"><img alt="" class="img-responsive"--}}
                        {{--style="max-width: 90px"--}}
                        {{--src="/frontend/assets/img/site-logo.png"></a>--}}

                    </header>
                    <address>
                        <h3 class="entry-title">Contact Information</h3>
                        <div class="row">
                            <div class="col-sm-6"><div class="address-entry">
                                    <p class="__adtext">Hanoi Forum Secretariat</p>
                                    <p class="__ad-num">R1006, Administration Building</p>
                                    <p class="__ad-num">Vietnam National University, Hanoi</p>
                                    <p class="__ad-num">144 Xuan Thuy, Cau Giay</p>
                                    <p class="__ad-num">Tel: (84) 24 37547670 - Ext: 723</p>
                                    <p class="__ad-num">Email: hanoiforum@vnu.edu.vn</p>
                                </div></div>
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="address-entry">--}}
                                    {{--<p class="__adtext">Hanoi Forum Secretariat</p>--}}
                                    {{--<p class="__ad-num">R1006, Administration Building</p>--}}
                                    {{--<p class="__ad-num">Vietnam National University, Hanoi</p>--}}
                                    {{--<p class="__ad-num">144 Xuan Thuy, Cau Giay</p>--}}
                                    {{--<p class="__ad-num">Tel: (84) 24 37547670 - Ext: 723</p>--}}
                                    {{--<p class="__ad-num">Email: hanoiforum@vnu.edu.vn</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>


                    </address>
                    {{--<footer class="contact-info">--}}
                    {{--<h3 class="entry-title">Contact Information</h3>--}}
                    {{--<p class="__ci_num">Call: <span>+61(07)373 53921</span></p>--}}
                    {{--<p class="__ci_num">Email: <span>rushmore@mail.com</span></p>--}}
                    {{--</footer>--}}
                </div>
            </div>

            {{--<div class="col-sm-3">--}}
                {{--<div class="footer-site-info">--}}
                    {{--<header>--}}

                        {{--<a class="footer-brand" href="http://vnu.edu.vn/home/"><img alt="" class="img-responsive"--}}
                        {{--style="max-width: 90px"--}}
                        {{--src="/frontend/assets/img/site-logo.png"></a>--}}

                    {{--</header>--}}
                    {{--<address>--}}
                        {{--<h3 class="entry-title">Phone and Email</h3>--}}

                    {{--</address>--}}
                    {{--<footer class="contact-info">--}}
                    {{--<h3 class="entry-title">Contact Information</h3>--}}
                    {{--<p class="__ci_num">Call: <span>+61(07)373 53921</span></p>--}}
                    {{--<p class="__ci_num">Email: <span>rushmore@mail.com</span></p>--}}
                    {{--</footer>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-9">--}}
                {{--<div class="row">--}}
                    {{--<div class="footer-site-info col-xs-12">--}}
                        {{--<h3 class="entry-title">Co-hosts</h3>--}}
                        {{--<div class="row pull-left hidden-xs">--}}
                            {{--<a href="https://www.vnu.edu.vn/home/" target="_blank">--}}
                                {{--<img style="max-width: 90px" src="/frontend/assets/img/vnu.png" alt="">--}}
                            {{--</a>--}}
                            {{--<a href="http://kfas.or.kr/" target="_blank">--}}
                                {{--<img style="max-width: 360px;margin-left:10px" src="/frontend/assets/img/kfas_logo.jpg"--}}
                                     {{--alt="">--}}
                            {{--</a>--}}

                        {{--</div>--}}
                        {{--<div class="row  hidden-sm hidden-md hidden-lg " style="text-align: center">--}}
                            {{--<a href="https://www.vnu.edu.vn/home/" target="_blank">--}}
                                {{--<img style="max-width: 70px" src="/frontend/assets/img/vnu.png" alt="">--}}
                            {{--</a>--}}

                            {{--<a href="http://kfas.or.kr/" target="_blank">--}}
                                {{--<img style="max-width: 140px;margin-left:20px" src="/frontend/assets/img/kfas_logo.jpg"--}}
                                     {{--alt=""></a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row " id="partner">--}}
                    {{--<div class="footer-site-info col-xs-12">--}}
                        {{--<h3 class="entry-title">Partners</h3>--}}
                        {{--<div class="row pull-left hidden-xs" id="partner">--}}
                            {{--<a href="https://www.most.gov.vn/vn/Pages/Trangchu.aspx" target="_blank">--}}
                                {{--<img style="max-width: 90px" src="/frontend/bkhvcn.png" alt="">--}}
                            {{--</a>--}}
                            {{--<a href="http://www.monre.gov.vn" target="_blank">--}}
                                {{--<img style="max-width: 90px" src="/frontend/btnvmt.png" alt=""></a>--}}
                            {{--<a href="http://hanoi.gov.vn/home" target="_blank">--}}
                                {{--<img style="max-width: 90px" src="/frontend/hanoi.png" alt=""></a>--}}
                            {{--<a href="http://www.vast.ac.vn/en/" target="_blank">--}}
                                {{--<img style="max-width: 200px" src="/frontend/vastlogo.png" alt="">--}}
                            {{--</a>--}}

                        {{--</div>--}}
                        {{--<div class="row  hidden-sm hidden-md hidden-lg " style="text-align: center" id="partner">--}}
                            {{--<a href="https://www.most.gov.vn/vn/Pages/Trangchu.aspx" target="_blank" class="partner-footer">--}}
                                {{--<img style="max-width: 70px" src="/frontend/bkhvcn.png" alt="">--}}
                            {{--</a>--}}

                            {{--<a href="http://www.monre.gov.vn" target="_blank"   class="partner-footer">--}}
                                {{--<img style="max-width: 70px" src="/frontend/btnvmt.png" alt=""></a>--}}
                            {{--<a href="http://hanoi.gov.vn/home" target="_blank"   class="partner-footer">--}}
                                {{--<img style="max-width: 70px" src="/frontend/hanoi.png" alt=""></a>--}}
                            {{--<a href="http://www.vast.ac.vn/en/" target="_blank"  class="partner-footer">--}}
                                {{--<img style="max-width: 120px" src="/frontend/vastlogo.png" alt="">--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        </div>
        <div id="site-footer-bar" class="footer-bar mt_30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="widget_black_studio_tinymce" id="black-studio-tinymce-4">
                            <div class="copyright">Copyright@Hanoi Forum. All rights reserved</div>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        {{--<div class="powredby">Developed and Managed by: hinKeu</div>--}}
                    </div>
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

<script>
    function resizeHeaderOnScroll() {

    }

    window.addEventListener('scroll', resizeHeaderOnScroll);
</script>
</body>


</html>





