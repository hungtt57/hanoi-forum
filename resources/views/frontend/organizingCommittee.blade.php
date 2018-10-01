@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/3.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">{{trans('home.organizingCommittee')}}</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                <li class="active"><a href="#">{{trans('home.organizingCommittee')}}</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <style>
                .bio__holder p {
                    margin: 0 0 0 0 ;
                }
            </style>
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div class="content-page">
                            @php $article = \App\Models\Article::where('title','organizingCommittee')->first(); @endphp
                            @if($article)
                                {!! $article->content !!}
                            @endif
                            {{--<p align="center"><strong>Chairman</strong></p>--}}

                            {{--<p><strong>NGUYEN Kim Son</strong><strong>,</strong> <strong>Assoc. Professor</strong></p>--}}

                            {{--<p>President</p>--}}
                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p align="center">&nbsp;</p>--}}

                            {{--<p><strong>PARK In Kook, Ph.D</strong></p>--}}

                            {{--<p>President</p>--}}
                            {{--<p>Korean Foundation for Advanced Studies.</p>--}}

                            {{--<p align="center">&nbsp;</p>--}}


                            {{--<p align="center"><strong>Commitee members</strong></p>--}}

                            {{--<p><strong>NGUYEN Thi Anh Thu</strong><strong>, Ph.D</strong></p>--}}
                            {{--<p>Director</p>--}}
                            {{--<p>Cooperation and Development Department</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}


                            {{--<p><strong>MAI Trong Nhuan, Professor</strong></p>--}}

                            {{--<p>Chairman, Council for Education Quality Assurance</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}


                            {{--<p><strong>VU Minh Giang, Professor</strong></p>--}}

                            {{--<p>Chairman, Council for Science and Training</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}
                            {{--<p><strong>PHAN Ngoc Minh, Professor</strong></p>--}}
                            {{--<p>Vice Chair</p>--}}
                            {{--<p>Vietnam Academy of Science and Technology.</p>--}}

                            {{--<p>&nbsp;</p>--}}

                            {{--<p><strong>DO Canh Duong, Assoc. Professor</strong></p>--}}

                            {{--<p>General Director, General Department of Geology and Minerals</p>--}}

                            {{--<p>Ministry of Natural Resources and Environment.</p>--}}

                            {{--<p>&nbsp;</p>--}}

                            {{--<p><strong>PHAM Hoang Mai, Ph.D</strong></p>--}}
                            {{--<p>Director</p>--}}
                            {{--<p>Department of Science, Education, Natural Resources and Environment</p>--}}
                            {{--<p>Ministry of Planning and Investment.</p>--}}

                            {{--<p>&nbsp;</p>--}}


                            {{--<p><strong>KENSUKE Fukushi</strong><strong>,</strong> <strong>Professor</strong></p>--}}

                            {{--<p>Professor, University of Tokyo.</p>--}}

                            {{--<p>&nbsp;</p>--}}



                            {{--<p><strong>TRAN Quoc Binh, PhD</strong></p>--}}

                            {{--<p>Chief, Office of the President</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}


                            {{--<p><strong>VU Van Tich, Assoc. Professor</strong></p>--}}
                            {{--<p>Director</p>--}}
                            {{--<p>Department of Science and Technology</p>--}}
                            {{--<p> Vietnam National University, Hanoi.</p>--}}
                            {{--<p>&nbsp;</p>--}}



                            {{--<p><strong>NGUYEN Hoang Oanh, PhD</strong></p>--}}
                            {{--<p>Vice President</p>--}}
                            {{--<p>Vietnam Japan University</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}

                            {{--<p><strong>NGUYEN Thi Hong Minh, PhD</strong></p>--}}

                            {{--<p>Dean, School of Interdisciplinary Studies</p>--}}

                            {{--<p>Vietnam National University, Hanoi.</p>--}}

                            {{--<p>&nbsp;</p>--}}



                            {{--<p><strong>Mary LEE</strong></p>--}}
                            {{--<p>Manager</p>--}}
                            {{--<p>International Academic Division</p>--}}
                            {{--<p>Korea Foundation for Advanced Studies.</p>--}}

                            {{--<p>&nbsp;</p>--}}





                            {{--<p><em> To be continued</em></p>--}}






                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection