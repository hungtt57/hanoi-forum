<style>
    .language {
        display: inline-block;
    }
    .language img {
        width: 21px;
    }
</style>


<nav id="nav-site" class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{url('/')}}"><img alt="" class="img-responsive img-logo"
                                                             style="max-width: 320px"
                                                             src="/frontend/hnforum_logo.png"></a>

        </div>

        <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
            <div class="nav-btn-wrap">

                {{--<a class="" href="{{url('/')}}"><img alt="" src="/assets/img/hnforum.png" class="f-img"></a>--}}
                <ul class="list list-nostyle language pull-right">
                    <li>
                        <div class="dropdown " style="margin-right: 5px;">
                            <a href="{{url('/language/vn')}}" class="block site-lang-switch"
                               style="padding-left: 2px; padding-right: 2px; display: inline-block">
                                <img src="{{url('frontend/flag-vi.png')}}" class="flag">
                                <span class="hidden-xs"></span>

                            </a>
                            <a href="{{url('/language/en')}}"  class="block site-lang-switch"
                               style="padding-left: 2px; padding-right: 2px; display: inline-block">
                                <img src="{{url('frontend/flag-us.png')}}" class="flag">
                                <span class="hidden-xs"></span>

                            </a>
                        </div>
                    </li>
                </ul>
                <a href="{{url('/admin/login')}}" class="pull-right" style="font-weight: bold">{{ trans('home.login') }} </a>
                {{--<a href="{{url('/register')}}" class="pull-right" style="margin-right:10px; font-weight: bold">Register |</a>--}}
            </div>
            <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
                <li class="hidden-sm hidden-md hidden-lg{{Request::is('/admin/login') ? 'active' : ''}}">
                    <a href="{{url('/admin/login')}}" title="Login">{{ trans('home.login') }}</a>
                </li>
                {{--<li class="hidden-sm hidden-md hidden-lg {{Request::is('/register') ? 'active' : ''}}">--}}
                    {{--<a href="{{url('/register')}}" title="Register">Register</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{url('/')}}" title="{{trans('home.home')}}">{{trans('home.home')}}</a>

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="{{trans('home.about')}}" data-hover="dropdown"
                       data-animations="zoomIn">{{trans('home.about')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('hanoi-forum')}}" title="{{trans('home.hanoiForum')}}">{{trans('home.hanoiForum')}}</a>
                        </li>
                        <li>
                            <a href="{{url('hanoi-forum-2018')}}" title="{{trans('home.hanoiForum2018')}}">{{trans('home.hanoiForum2018')}}</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Program" data-hover="dropdown"
                       data-animations="zoomIn">{{trans('home.program')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('important-dates')}}" title="Important dates">{{trans('home.importantDates')}}</a>
                        </li>
                        <li>
                            <a href="{{url('forum-program')}}" title="Forum Program">{{trans('home.forumProgram')}}</a>
                        </li>
                        <li>
                            <a href="{{url('keynote-speakers')}}" title="Keynote Speakers">{{trans('home.keynoteSpeakers')}}</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="{{trans('home.organizers')}}" data-hover="dropdown"
                       data-animations="zoomIn">{{trans('home.organizers')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('steering-committee')}}" title="{{trans('home.steeringCommittee')}}">{{trans('home.steeringCommittee')}}</a>
                        </li>
                        <li>
                            <a href="{{url('organizing-committee')}}" title="{{trans('home.organizingCommittee')}}">{{trans('home.organizingCommittee')}}</a>
                        </li>
                        <li>
                            <a href="{{url('academic-committee')}}" title="{{trans('home.academicCommittee')}}">{{trans('home.academicCommittee')}}</a>
                        </li>
                        <li>
                            <a href="{{url('sponsors')}}" title="{{trans('home.sponsors')}}">{{trans('home.sponsors')}}</a>
                        </li>

                    </ul>
                </li>

                <li class="{{Request::is('call-deadlines') ? 'active' : ''}}">
                    <a href="{{url('/call-deadlines')}}" title="Calls & Deadlines">{{trans('home.calldeadlines')}}</a>
                </li>

                <li>
                    <a href="{{url('/registration')}}" title="Registration ">{{trans('home.registration')}} </a>
                </li>
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Plan Your Visit"
                       data-hover="dropdown"
                       data-animations="zoomIn">{{trans('home.planyourvisit')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('hanoi-experience')}}" title="Hanoi Experience">{{trans('home.hanoiexperience')}}</a>
                        </li>
                        <li>
                            <a href="{{url('about-and-around-vietnam')}}" title="About and Around Vietnam">{{trans('home.aboutandaroundvietnam')}}
                            </a>
                        </li>
                        @if(app()->isLocale('en'))
                        <li>
                            <a href="{{url('accommodation')}}" title="Accommodation">Accommodation</a>
                        </li>
                        <li>
                            <a href="{{url('forum-site-information')}}" title="Forum Site Information">Forum Site
                                Information</a>
                        </li>
                            @endif


                    </ul>
                </li>


                {{--<li class="{{Request::is('news') ? 'active' : ''}}">--}}
                    {{--<a href="{{url('/news')}}" title="News">{{ trans('home.news') }}</a>--}}
                {{--</li>--}}

                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Publications"
                       data-hover="dropdown"
                       data-animations="zoomIn">{{ trans('home.publications') }}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('publications/books')}}" title="Books">{{ trans('home.books') }}</a>
                        </li>

                        <li>
                            <a href="{{url('publications/journal-articles')}}" title="Journal Articles">{{ trans('home.journals') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('cvs')}}" title="Books">{{ trans('home.delegates') }}</a>
                        </li>
                        <li>
                            <a href="{{url('publications/gallery')}}" title="Gallery">{{ trans('home.gallery') }}
                            </a>
                        </li>


                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav><!-- /.navbar -->

@push('styles')
    <style>

        @media screen and (min-width: 992px) {
            .f-img {
                margin-left: 5%;
            }
        }

    </style>
@endpush