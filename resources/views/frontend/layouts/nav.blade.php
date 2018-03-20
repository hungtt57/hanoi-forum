<nav class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html"><img alt="" class="img-responsive"
                                                           src="/frontend/assets/img/site-logo.png"></a>
        </div>
        <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
            <div class="nav-btn-wrap">
                <a href="{{url('/admin/login')}}" class="btn btn-primary pull-right">Login</a>
                <a href="{{url('/register')}}" class="btn btn-info pull-right" style="margin-right:10px">Register</a>
            </div>
            <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
                <li class="{{Request::is('/') ? 'active' : ''}}">
                    <a href="{{url('/')}}" title="Home">Home</a>
                </li>
                <li class="{{Request::is('about') ? 'active' : ''}}">
                    <a href="{{url('/about')}}" title="About">About</a>
                </li>
                <li class="{{Request::is('program') ? 'active' : ''}}">
                    <a href="{{url('/program')}}" title="Program">Program</a>
                </li>
                <li  class="{{Request::is('organizers') ? 'active' : ''}}">
                    <a href="{{url('/organizers')}}" title="Organizers">Organizers</a>
                </li>
                <li  class="{{Request::is('publication') ? 'active' : ''}}">
                    <a href="{{url('/publication')}}" title="Publication">Publication</a>
                </li>
                <li  class="{{Request::is('news') ? 'active' : ''}}">
                    <a href="{{url('/news')}}" title="News">News</a>
                </li>
                <li>
                    <a href="{{url('/')}}" title="Multimedia">Multimedia</a>
                </li>
                <li>
                    <a href="{{url('/')}}" title="FAQ">FAQ</a>
                </li>
                <li>
                    <a href="{{url('/')}}" title="Contact Us">Contact Us</a>
                </li>
                {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="People"  data-hover="dropdown" data-animations="zoomIn">People <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li>--}}
                {{--<a href="professor.html" title="Dr Rushmore">Dr. Rushmore</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="ourteam.html" title="Our Team">Our Team</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}

            </ul>
        </div>
    </div>
</nav><!-- /.navbar -->