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
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active"><a href="#">Academic Committee</a></li>
            </ol>
        </div>
    </div>
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
                                    <p><strong>Prof. Dr. MAI Trong Nhuan</strong></p>
                                    <p>Affiliation(s):</p>
                                    <ul>
                                        <li>Vice Chairman, Vietnam Panel on Climate change.
                                        </li>
                                        <li>Director, VNU Key lab of Geoenvironment and Climate change response.</li>
                                        <li>Director, Master’s program on Climate change and Development, Vietnam Japan University, VNU.</li>
                                    </ul>
                                    <p>Research areas: Climate Change  and disaster assessment and response; Natural resource and environment management; Sustainability Science.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img class="" src="/frontend/anh/park.jpg" alt="">
                                </div>
                                <p>
                                   <strong> President PARK In-kook</strong></p>
                                <p>Affiliation(s): President, Korea Foundation for Advanced Studies (KFAS).
                                </p>

                                <p>Research areas: Chinese language, literature and law.
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <p class="title-text">Committee members</p>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/vuminhgiang.jpg" alt="">
                                </div>

                                <p><strong>Prof. Dr. Sc. VU Minh Giang</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Chairman, VNU Council for Science and Training.</li>
                                    <li>Vice President, Council National for Cultural Heritage.</li>
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

                                <p><strong>Prof. Diana ÜRGE-VORSATZ</strong></p>

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
                                <p><strong>Emeritus Prof. Nils Roar SALTHUN</strong></p>

                                <p>Affiliation(s): Former Head of Department of Geosciences at the University of Oslo, Norway.</p>

                                <p>Research areas: Development and applications of hydrological models, Water resources management, Impacts of climate change impacts on water resources, Hydropower hydrology, Floods, Design flood estimation, Environmental information systems.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/cuonglevan.jpg" alt="">
                                </div>


                                <p><strong>Emeritus Prof. Cuong LE Van</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Paris School of Economics.</li>
                                    <li>Emeritus Research Director, French National for Scientific Research (CNRS).</li>
                                </ul>

                                <p>Research areas: Quantitative Methods, Macroeconomics and asset accumulation, Macroeconomics dynamics, General equilibrium.</p>

                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/hoangvanthang.jpg" alt="">
                                </div>
                                <p><strong>Dr. HOANG Van Thang</strong></p>

                                <p>Affiliation(s): Director General, VNU Central Institute for Natural Resources and Environmental Studies.</p>

                                <p>Research areas: Management and conservation of wetlands, Environmental planning, Biodiversity conservation, Sustainable development.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/truongquanghoc.jpg" alt="">
                                </div>
                                <p><strong>Prof. DSc. TRUONG Quang Hoc</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Chair, Training and Scientific Council of the Central Institute for Natural Resources and Environmental Studies (CRES), VNU.</li>
                                    <li>Advisory Council Member for the National Committee on Climate Change (VPCC).</li>
                                    <li>Advisory Council Member of Ministry of Natural Resources and Environment.</li>
                                    <li>Former Director of the Dept. of Scientific and Technological Management of VNU.</li>
                                    <li>Former Director of the Center of for Natural Resources and Environmental Studies (CRES), VNU.</li>

                                </ul>

                                <p>Research areas: Environmental Biology, Climate change, Sustainability Science.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/jungtaeyong.jpg" alt="">
                                </div>
                                <p><strong>Prof. JUNG Tae Yong</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Professor of Sustainable Development, Graduate School of International Studies, and Director, Center for Global Sustainability, Yonsei University, Republic of Korea.</li>
                                    <li>Principal Climate Change Specialist, East Asia Regional Department, Asian Development Bank (ADB), Philippines.</li>
                                    <li>Deputy Executive Director, Global Green Growth Institute (GGGI), Republic of Korea.</li>
                                </ul>

                                <p>Research areas: Sustainable development, Environment and Environmental policy, Energy, Climate change.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/phanvantan.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. PHAN Van Tan</strong></p>

                                <p>Affiliation(s): Professor, Department of Meteorology and Climate Change, Faculty of Hydrology, Meteorology and Oceanography, VNU University of Science.</p>

                                <p>Research areas: Regional Climate Modelling and Climate Change, Dynamical Seasonal Prediction.</p>

                                <div class="clearfix"></div>
                            </div>

                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/mimura.jpg" alt="">
                                </div>
                                <p><strong>Prof. Nobuo MIMURA</strong></p>

                                <p>Affiliation(s): President, Ibaraki University.</p>

                                <p>Research areas: : Impact Assessment of Global Warming and Climate Change, Adaptation Science for Global Environmental Change, Sustainability Science, Coastal Engineering. </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/yasuhara.jpg" alt="">
                                </div>
                                <p><strong>Emeritus Prof. Kazuya YASUHARA</strong></p>

                                <p>Affiliation(s): Professor Emeritus, Ibaraki University.</p>

                                <p>Research areas: : Geotechnical engineering, Geotechnical adaption to climate change. </p>

                                <div class="clearfix"></div>
                            </div>



                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/fink.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. Andreas H. FINK </strong></p>

                                <p>Affiliation(s): Karlsruhe Institute of Technology (KIT), Institute for Meteorology and Climate Research (IMK).</p>

                                <p>Research areas: : Dynamics and predictability of weather phenomena, Climate variability and change, Extreme weather and climate events, and regional climate modeling.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/tranthuc.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. TRAN Thuc</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Vice Chairman, The Vietnam Panel on Climate Change.</li>
                                    <li>Chairman, Vietnam National Committee for the International Hydrological Program (IHP).</li>

                                </ul>


                                <p>Research areas: : Hydrometeorology, environment, disaster risk reduction, and climate change.</p>

                                <div class="clearfix"></div>
                            </div>



                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/tranhongthai.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. TRAN Hong Thai</strong></p>

                                <p>Affiliation(s): Deputy General Director, Vietnam Meteorological and Hydrological Administration.</p>

                                <p>Research areas: : Climate change, water resources, environment, exploitations.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/hieutrung.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. NGUYEN Hieu Trung</strong></p>

                                <p>Affiliation(s): Director, Climate Change Research Institute (Dragon-Mekong Institute) – Can Tho University.</p>

                                <p>Research areas: : Integrated water resources management, land use dynamic, climate change adaptation, urban resilience.</p>

                                <div class="clearfix"></div>
                            </div>



                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/tranthodat.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. TRAN Tho Dat</strong></p>

                                <p>Affiliation(s): President, National Economics University.</p>

                                <p>Research areas: : Economic growth models, quality of growth, education and growth, economics of climate change, higher education financing, demand for money and monetary policy.

                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/kensuke.png" alt="">
                                </div>
                                <p><strong>Prof. Fukushi KENSUKE</strong></p>

                                <p>Affiliation(s): Integrated Research System for Sustainability Science (IR3S), The University of Tokyo Institute for Advanced Studies.</p>

                                <p>Research areas: : Environmental engineering, risk assessment, climate change effect, water resource, biological technology, membrane technology.
                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img  src="/frontend/anh/wiwa.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. Dr. Dawan WIWATTANADATE</strong></p>

                                <p>Affiliation(s): Director of EDS (Environment, Development and Sustainability) Program, Graduate School, Chulalongkorn University.</p>

                                <p>Research areas: : Energy and Materials Resource Recovery and Recycling, Climate Friendly Resources Utilization.
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