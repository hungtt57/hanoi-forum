@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">Academic Committee</h1>
            </div>
        </div>
    </header>
    <main class="sabbi-page-wrap">
        <div class="container">
            <style>

                .image-human img {
                    width: 150px;

                }
                .content-human {
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
                            <p class="title-text">Co-Chairs</p>
                            <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/anh/maitrongnhuan.jpg" alt="">
                                    </div>
                                    <p><strong>MAI Trong Nhuan, </strong>Professor</p>
                                    <p>Affiliation(s):</p>
                                    <ul>
                                        <li>Member of the National Steering Committee for International Integration of
                                            Education, Science, and Technology.
                                        </li>
                                        <li>Chairman, the VNU Council for Education Quality Assurance.</li>
                                    </ul>
                                    <p>Research areas: Earth science, Environment, Climate change, Sustainable
                                        development.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img class="" src="/frontend/anh/park.jpg" alt="">
                                </div>
                                <p><strong>PARK In Kook</strong></p>
                                <p>Affiliation(s): President, Korean Foundation for Advanced Studies (KFAS)
                                </p>

                                <p>Research areas: Chinese language, literature and law</p>
                                <div class="clearfix"></div>
                            </div>

                            <p class="title-text">Committee members</p>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/vuminhgiang.jpg" alt="">
                                </div>

                                <p><strong>VU Minh Giang, </strong>Professor</p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Chairman, VNU Council for Science and Training.</li>
                                    <li>Chairman of Academic Advisory Committee, Asia Research Centre, VNU.</li>
                                    <li>Member of the National Council for Science and Technology.</li>
                                    <li>Director, Master’s program on Sustainability Science, VNU School of Interdisciplinary Studies.</li>
                                    <li>Director, Master’s program on Area Studies, Vietnam Japan University, VNU.</li>
                                    <li>Vice President, National Cultural Heritage Council.</li>
                                </ul>

                                <p>Research areas: Cultural studies and development, History, Vietnam studies, Area studies.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/diana.jpg" alt="">
                                </div>

                                <p><strong>Diana &Uuml;rge-Vorsatz, </strong>Professor</p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Professor, Dept. of Environmental Sciences and Policy, Central European University (CEU).
                                    </li>
                                    <li>Vice Chair of Working Group III, the Intergovernmental Panel on Climate
                                        Change (IPCC).
                                    </li>
                                    <li>Leader, Scientific review of Sustainable Development Goal &ldquo;7&rdquo; in
                                        the new UN Development goals development process (Ensure access to
                                        affordable, reliable, sustainable, and modern energy for all&rdquo;), 2014.
                                    </li>
                                    <li>Member of the Scientific Committee of the high-level conference, &ldquo;Our
                                        Common Future under Climate Change&rdquo;, Paris, 2015.&nbsp;
                                    </li>
                                    <li>Co-chair, Scientific Steering Committee, Cities and Climate Change Science conference, Edmonton, March 2018.</li>
                                </ul>

                                <p>Research areas<strong>:</strong> Environmental and Energy Studies.</p>


                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/nils.jpg" alt="">
                                </div>
                                <p><strong>Nils Roar Salthun</strong><strong>, </strong>Emeritus Professor</p>

                                <p>Affiliation(s): former Head of Department of Geosciences at the University of
                                    Oslo, Norway.</p>

                                <p>Research areas: Development and applications of hydrological models, Water
                                    resources management, Impacts of climate change impacts on water resources,
                                    Hydropower hydrology, Floods, Design flood estimation, Environmental information
                                    systems.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/cuonglevan.jpg" alt="">
                                </div>


                                <p><strong>Cuong LE-Van</strong><strong>, </strong>Emeritus Professor</p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Paris School of Economics.</li>
                                    <li>Emeritus Research Director, French National for Scientific Research (CNRS).</li>
                                </ul>

                                <p>Research areas: Quantitative Methods, Macroeconomics and asset accumulation,
                                    Macroeconomics dynamics, General equilibrium.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/hoangvanthang.jpg" alt="">
                                </div>
                                <p><strong>HOANG Van Thang, </strong>Professor</p>

                                <p>Affiliation(s): Director, VNU Centre Institute for Natural Resources and
                                    Environmental Studies.</p>

                                <p>Research areas: Management and conservation of wetlands, Environmental planning,
                                    Biodiversity conservation, Sustainable development.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/truongquanghoc.jpg" alt="">
                                </div>
                                <p><strong>TRUONG Quang Hoc, </strong>Professor</p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Deputy Head of Vietnam Association for Conservation of Nature and
                                        Environment.
                                    </li>
                                    <li>Member of VNU - Centre Institute for Natural Resources
                                        and Environmental Studies.
                                    </li>
                                </ul>

                                <p>Research areas: Science of Sustainability, Sustainable Development.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/jungtaeyong.jpg" alt="">
                                </div>
                                <p><strong>JUNG Tae Yong, </strong>Professor</p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Professor of Sustainable Development, Graduate School of International Studies, Yonsei University.</li>
                                    <li>Former Director, Energy Modelling Division, Korea Energy Economics Institute.</li>
                                    <li>Former Project Leader in Climate Policy Project, Institute for Global Environmental Strategies of Japan.</li>
                                    <li>Institute for Global Environmental Strategies of Japan.</li>
                                </ul>

                                <p>Research areas: Sustainable development, Environment and Environmental policy, Energy, Climate change.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/phanvantan.png" alt="">
                                </div>
                                <p><strong>PHAN Van Tan, </strong>Professor</p>

                                <p>Affiliation(s): Professor, Faculty of Hydrology, Meteorology and Oceanography, VNU University of Science.</p>

                                <p>Research areas: Meteorology, Climate change.</p>

                                <div class="clearfix"></div>
                            </div>



                            <p><em> To be continued</em></p>
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection