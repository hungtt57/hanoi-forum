<nav class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar"
                    data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{url('/')}}"><img alt="" class="img-responsive" style="max-width: 110px"
                                                             src="/frontend/assets/img/logo2.png"></a>

        </div>

        <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
            <div class="nav-btn-wrap">

                <a class="" href="{{url('/')}}"><img alt="" src="/assets/img/hnforum.png" class="f-img"></a>
                <a href="{{url('/admin/login')}}" class="btn btn-primary pull-right">Login</a>
                <a href="{{url('/register')}}" class="btn btn-info pull-right"
                   style="margin-right:10px;background:#007f49;">Register</a>
            </div>
            <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
                <li class="hidden-sm hidden-md hidden-lg{{Request::is('/admin/login') ? 'active' : ''}}">
                    <a href="{{url('/admin/login')}}" title="Login">Login</a>
                </li>
                <li class="hidden-sm hidden-md hidden-lg {{Request::is('/register') ? 'active' : ''}}">
                    <a href="{{url('/register')}}" title="Register">Register</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="About" data-hover="dropdown"
                       data-animations="zoomIn">About <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('hanoi-forum')}}" title="Introduction">Hanoi Forum</a>
                        </li>
                        <li>
                            <a href="{{url('hanoi-forum-2018')}}" title="Hanoi Forum 2018">Hanoi Forum 2018</a>
                        </li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Program" data-hover="dropdown"
                       data-animations="zoomIn">Program <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('important-dates')}}" title="Important dates">Important dates</a>
                        </li>
                        <li>
                            <a href="{{url('forum-program')}}" title="Forum Program">Forum Program</a>
                        </li>
                        <li>
                            <a href="{{url('keynote-speakers')}}" title="Keynote Speakers">Keynote Speakers</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Organizers" data-hover="dropdown"
                       data-animations="zoomIn">Organizers <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{url('steering-committee')}}" title="Steering Committee">Steering Committee</a>
                        </li>
                        <li>
                            <a href="{{url('organizing-committee')}}" title="Organizing Committee">Organizing
                                Committee</a>
                        </li>
                        <li>
                            <a href="{{url('academic-committee')}}" title="Academic Committee">Academic Committee</a>
                        </li>
                        <li>
                            <a href="{{url('sponsors')}}" title="Academic Committee">Sponsors</a>
                        </li>

                    </ul>
                </li>


                <li class="{{Request::is('publication') ? 'active' : ''}}">
                    <a href="{{url('/publication')}}" title="Publication">Publication</a>
                </li>
                <li class="{{Request::is('news') ? 'active' : ''}}">
                    <a href="{{url('/news')}}" title="News">News</a>
                </li>
                <li>
                    <a href="{{url('/')}}" title="Multimedia">Multimedia</a>
                </li>
                <li>
                    <a href="{{url('/')}}" title="FAQ">FAQ</a>
                </li>
                <li>
                    <a href="{{url('/contact-us')}}" title="Contact Us">Contact Us</a>
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