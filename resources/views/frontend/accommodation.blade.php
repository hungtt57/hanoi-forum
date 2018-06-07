@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

        <header class="sabbi-page-header page-header-lg"
                style="background-image: url('{{url('frontend/anhbaiviet/faq.png')}}');
                        background-size: cover;
                        background-repeat: no-repeat;">
            <div class="page-header-content conternt-center">
                <div class="header-title-block">
                    <h1 class="page-title">Accommodation</h1>
                </div>
            </div>
        </header>

    <style>
        ol {
            list-style: decimal;
        }
    </style>
    <main class="sabbi-page-wrap">
        <div class="container">
            <section class="bio__holder">
                <div class="row">
                    <div class="content-page">
                        <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                            <div class="col-md-12">
                                @php $article = \App\Models\Article::where('title','accommodation')->first(); @endphp
                                @if($article)
                                    {!! $article->content !!}
                                @endif
                                {{--<ol>--}}
                                {{--<li>What should I do if I cannot m not able to register on the website?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Please make sure that you answer all the required questions in the registration form. If you still cannot register, please contact Hanoi Forum Secretariat at <a href="mailto:hanoiforum@vnu.edu.vn">hanoiforum@vnu.edu.vn</a> for assistance.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="2">Can I attend the Forum without registration?</li>--}}
                                {{--</ol>--}}

                                {{--<p>We want to make sure that you will get the best service possible. To help us do so, registration is required. You can register <a href="{{url('register')}}">here</a> on our website.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="3">Can I get financial support for registration?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Registration&nbsp;is&nbsp;free for presenters of accepted papers. Additionally, limited financial support for registration is available and on a first come first served basis.&nbsp;Priority is given to PhD students and early career researchers.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="4">What are included in the registration fee?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Registration fee includes participation in all forum activities, conference materials, welcome dinner, and refreshments during the forum.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="5">What should I do if I submit the abstract online?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Please make sure that you have registered online at Hanoi Forum website and use the verified your account to submit your abstract. Your abstract should be no more than 250 words. If you still cannot submit online, you can send your abstract directly to Hanoi Forum Secretariat via email at hanoiforum@vnu.edu.vn.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="6">I am not sure whether my research fits the Forum, should I submit an abstract?</li>--}}
                                {{--</ol>--}}

                                {{--<p>We encourage research that approach the Forum&rsquo;s theme from a variety of perspectives, and submission of other topics for consideration is welcome. Abstracts can be submitted through the Forum website at <a href="{{url('/')}}">{{url('/')}}</a>.</p>--}}

                                {{--<ol >--}}
                                {{--<li value="7">Can I apply for financial support for accommodation?</li>--}}


                                {{--</ol>--}}
                                {{--<p>Author of accepted papers can be provided with accommodation. Affordable options for short-term stay are also available nearby Hanoi Forum&rsquo;s venue. You can find further information <a href="#">here</a> on the website.</p>--}}
                                {{--<ol>--}}
                                {{--<li value="8">Where can I stay during the Forum?</li>--}}

                                {{--</ol>--}}

                                {{--<p>There are several high quality and beautiful hotels nearby the Forum venue. You can find further information <a href="#">here</a> on the website.</p>--}}
                                {{--<ol>--}}
                                {{--<li value="9">I am an invited speaker at Hanoi Forum 2018. Can I bring an accompanying person?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Yes, we welcome all interested participants. Please keep in mind that the accompanying person must register online and pay the registration fee.</p>--}}

                                {{--<ol>--}}
                                {{--<li value="10">Will the Forum offer pick-up service at the airport?</li>--}}
                                {{--</ol>--}}

                                {{--<p>Due to limited resources, we are unable to provide airport pick-up service to all delegates. You can conveniently get a taxi or a bus from Noi Bai international airport to Hanoi city center. Further information about transportation can be found <a href="#">here</a> on the website.</p>--}}

                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection