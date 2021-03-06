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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @stack('styles')


    <style>
        .sabbi-page-header .page-title {
            font-size: 26px !important;
        }
        @media (min-width: 1025px) and (max-width: 1280px) {
            .img-logo {
                width: 60%;
            }

            #menu-main-nav {
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
        .content-page {
            text-align: justify;
        }
        .footer-c3 {
            margin-left: 10px;
        }

        .fix-nav .img-logo {
            max-width: 160px !important;
        }
        .fix-nav .nav-btn-wrap {
            margin-top: 0px !important;
            max-height: 30px;
        }
        .fix-nav .navbar-nav>li>a {
            padding-top: 5px !important;
            padding-bottom: 5px !important;
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
<style>
    footer .widget-title {
        text-transform: uppercase;
    }

    footer .widget-title a {
        color: inherit !important;
    }
</style>
<footer class="section-footer mt_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                    {{--<header>--}}
                        {{--<a class="footer-brand" href="index.html"><img alt="" class="img-responsive" src="assets/img/site-logo.png"></a>--}}
                    {{--</header>--}}
                    {{--<address>--}}
                        {{--<h3 class="entry-title">Address</h3>--}}
                        {{--<div class="address-entry">--}}
                            {{--<p class="__adtext">Hanoi Forum Secretariat</p>--}}
                            {{--<p class="__ad-num">R1006, Administration Building</p>--}}
                            {{--<p class="__ad-num">Vietnam National University, Hanoi</p>--}}
                            {{--<p class="__ad-num">144 Xuan Thuy Rd., Cau Giay dist.</p>--}}
                        {{--</div>--}}
                    {{--</address>--}}
                    <section class="widget widget_sec">
                        <div class="widget-main">
                            <h2 class="widget-title">{{trans('home.address')}}</h2>
                            <ul class="list list-unstyled list-footer-nav">
                                <li>{!! trans('home.address_detail') !!}
                                </li>

                            </ul>
                        </div>
                    </section>
                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title">{{trans('home.contactInfo')}}</h2>
                        <ul class="list list-unstyled list-footer-nav">
                            <li><a >{{ trans('home.tel') }}: (84) 24 39983856</a></li>
                            <li><a >Email: hanoiforum@vnu.edu.vn</a></li>


                        </ul>
                    </div>
                </section>


            </div>
            <div class="col-sm-3">

                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title">{{ trans('home.program') }}</h2>
                        <ul class="list list-unstyled list-footer-nav">
                            <li><a href="{{url('important-dates')}}">{{ trans('home.importantDates') }}</a></li>
                            <li><a href="{{url('forum-program')}}">{{ trans('home.forumProgram') }}</a></li>
                            <li><a href="{{url('keynote-speakers')}}">{{ trans('home.keynoteSpeakers') }}</a></li>

                        </ul>
                    </div>
                </section>

                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title"><a href="{{url('/faq')}}"> {{ trans('home.faqs') }}</a><span style="text-transform: none !important;"></span></h2>

                    </div>
                </section>

                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title"><a href="{{url('/contact-us')}}"> {{ trans('home.contactus') }} </a></h2>

                    </div>
                </section>


            </div>
            <div class="col-sm-3">
                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title">{{ trans('home.organizers') }}</h2>
                        <ul class="list list-unstyled list-footer-nav">
                            <li><a href="{{url('steering-committee')}}">{{  trans('home.steeringCommittee') }}</a></li>
                            <li><a href="{{url('organizing-committee')}}">{{  trans('home.organizingCommittee') }}</a></li>
                            <li><a href="{{url('academic-committee')}}">{{  trans('home.academicCommittee') }}</a></li>
                            {{--<li><a href="{{url('sponsors')}}">Sponsors</a></li>--}}
                        </ul>
                    </div>
                </section>


                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title"><a href="{{url('visa')}}"> {{ trans('home.visaToVietnam') }} </a></h2>
                    </div>
                </section>




            </div>
            <div class="col-sm-3">
                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title">{{  trans('home.planyourvisit') }}</h2>
                        <ul class="list list-unstyled list-footer-nav">
                            <li><a href="{{url('hanoi-experience')}}">{{  trans('home.hanoiexperience') }}</a></li>
                            <li><a href="{{url('about-and-around-vietnam')}}">{{  trans('home.aboutandaroundvietnam') }}</a></li>
                            @if(app()->isLocale('en'))
                            <li><a href="{{url('accommodation')}}">Accommodation</a></li>
                            <li><a href="{{url('forum-site-information')}}">Forum Site Information</a></li>
                                @endif

                        </ul>
                    </div>
                </section>
                <section class="widget widget_sec">
                    <div class="widget-main">
                        <h2 class="widget-title"><a href="{{url('transportation')}}">{{ trans('home.transportation') }} </a></h2>
                        <ul class="list list-unstyled list-footer-nav">
                            {{--<li><a href="">From-and-to Noi Bai airport</a></li>--}}
                            {{--<li><a href="">Around Hanoi city</a></li>--}}

                        </ul>
                    </div>
                </section>




            </div>
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


<style>
    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }
    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }


</style>

<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>









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
<script>
  // ===== Scroll to Top ====
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
    if ($(this).scrollTop() > 0) {
      $('#nav-site').addClass('fix-nav')
    }else {
      $('#nav-site').removeClass('fix-nav')
    }

  });
  $('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 300);
  });

</script>
</body>


</html>





