@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/8.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">{{ trans('home.forumProgram') }}</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">{{ trans('home.forumProgram') }}</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="col-md-12">
                            <a href="{{url('frontend/forum_program.pdf')}}">Hanoi Forum 2018 Agenda</a><br>
                            <a href="/Hanoi-Forum-2018-keynotes.zip" download="">Hanoi Forurm 2018 Keynote Speeches</a>
                            {{--@php $article = \App\Models\Article::where('title','forum-program')->first(); @endphp--}}
                            {{--@if($article)--}}
                                {{--{!! $article->content !!}--}}
                            {{--@endif--}}
                            {{--<p>Detailed schedule will be updated on August 30th, 2018.</p>--}}

                            {{--<p>&nbsp;</p>--}}

                            {{--<table border="0" cellpadding="0" cellspacing="0">--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>Thursday, November 8</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>9:00 &ndash; 21:00</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Registration</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;height:17px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;height:17px;">--}}
                                        {{--<p>18:00 &ndash; 20:30</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;height:17px;">--}}
                                        {{--<p>Welcome reception</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>Friday, November 9</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>9:00 &ndash; 12:00</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Opening ceremony &amp; keynote addresses</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>13:30 &ndash; 17:45</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Panel sessions</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;height:22px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;height:22px;">--}}
                                        {{--<p>18:00 &ndash; 20:30</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;height:22px;">--}}
                                        {{--<p>Welcome dinner</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>Saturday, November 10</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>9:00 &ndash; 12:00</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Policy Dialogues</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Poster Presentation</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="width:198px;">--}}
                                        {{--<p>&nbsp;</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:123px;">--}}
                                        {{--<p>12:00 &ndash; 12:30</p>--}}
                                    {{--</td>--}}
                                    {{--<td style="width:280px;">--}}
                                        {{--<p>Closing Ceremony</p>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection