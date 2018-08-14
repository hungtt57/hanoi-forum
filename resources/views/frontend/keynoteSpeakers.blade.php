@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Keynote Speakers</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Keynote Speakers</a></li>
            </ol>
        </div>
    </div>
    <main class="sabbi-page-wrap">
        <div class="container">
            <style>

                .image-human img {
                    width: 200px;
                    margin-left: 10px;

                }
                .content-human {
                    text-align: justify;
                    margin-bottom: 10px;
                    border-bottom: 1px solid black;
                    padding-bottom: 10px;
                }
                @media (min-width: 480px) {
                    .image-human {
                        float: right;
                    }
                }

                @media (max-width: 479px) {
                    .image-human {
                        text-align: center;
                    }
                }
                .content-human ul li {
                    list-style: disc ;
                }
                .title-text {
                    text-align: center;
                    font-weight: bold;
                }
            </style>
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>
                            {{--<p class="title-text" style="font-size: 16px">Co-Chairs</p>--}}
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img class="" src="/frontend/keynote/helen.jpg" alt="">
                                </div>
                                <p><strong>HELEN CLARK</strong></p>
                                <p>Former Administrator of UNDP</p>
                                <p>Former Prime Minister of New Zealand</p>
                                <p>Helen Clark was Prime Minister of New Zealand for three successive terms from 1999–2008.  She was the first woman to be elected as Prime Minister in New Zealand.
                                </p>
                                <p>Throughout her tenure as Prime Minister, and as a Member of Parliament over 27 years, Helen Clark engaged widely in policy development and advocacy across the international, economic, social, environmental, and cultural spheres. She advocated strongly for New Zealand’s comprehensive program on sustainability and for tackling the problems of climate change. She was an active leader of her country’s foreign relations, engaging in a wide range of international issues. </p>
                                <p>In April 2009, Helen Clark became Administrator of the United Nations Development Programme. She was the first woman to lead the organisation, and served two terms there. At the same time, she was Chair of the United Nations Development Group, a committee consisting of all UN funds, programs, agencies, and departments working on development issues. As Administrator, she led UNDP to be ranked the most transparent global development organisation. She completed her tenure in 2017.
                                </p>
                                <p>Helen Clark came to the role of Prime Minister after an extensive parliamentary and ministerial career. Prior to entering the New Zealand Parliament, Helen Clark taught in the Political Studies Department of the University of Auckland, from which she earlier graduated with her BA and MA (Hons) degrees.
                                </p>
                                <p>Helen continues to be a strong voice for sustainable development, climate action, gender equality and women’s leadership, peace and justice, and action on non-communicable diseases and on HIV.
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img class="" src="/frontend/keynote/groff.jpg" alt="">
                                </div>
                                <p><strong>STEPHEN P. GROFF</strong></p>
                                <p>Stephen P. Groff is Vice-President (Operations 2) of the Asian Development Bank (ADB). He assumed office in October 2011.</p>
                                <p>Mr. Groff is responsible for the full range of ADB's operations in East Asia, Southeast Asia, and the Pacific. His mandate includes establishing strategic and operational priorities in his areas of responsibility, producing investment and technical assistance operations amounting to approximately $5 billion annually, managing an existing portfolio of about $31 billion, and leading about 650 staff.
                                </p>
                                <p> In addition, Mr. Groff supports ADB's President in managing ADB's overall operations, represents ADB in high-level multilateral fora, and contributes to managing its relationships with its 67 member country shareholders, other multilateral financial institutions, and key government, private sector, and civil society partners.

                                </p>
                                <p>Prior to joining ADB, Mr. Groff was Deputy Director for Development Cooperation at the Paris-based Organisation for Economic Co-operation and Development (OECD) where he led OECD's work on a wide range of development-related economic and political issues. He also served as OECD's envoy to the G20 Working Group on Development and was a member of the World Economic Forum's Global Agenda Council. Prior to this he was the Deputy Vice-President for Operations at the Washington-based Millennium Challenge Corporation (MCC), where he helped set up the agency and led MCC programs while advising the CEO on development issues, strategy, and policy. Prior to MCC, Mr. Groff held several staff positions at the ADB.  Before this, Mr. Groff was the deputy director and chief economist on a large U.S. Agency for International Development project designed to encourage private sector development in the southern Philippines, a Program Director for the U.S. Refugee Program, and a U.S. Peace Corps Volunteer.
                                </p>
                                <p>Mr. Groff has worked across Asia, Africa, and Latin America and writes regularly on development issues. He also serves on a number of advisory boards for development-related organizations.
                                </p>
                                <p>Mr. Groff holds a Master's degree in Public Administration from Harvard University and a Bachelor of Science degree in Environmental Biology from Yale University.
                                </p>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection