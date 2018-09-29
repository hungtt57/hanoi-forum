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
                    list-style: disc;
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
                            @php
                                $raw_locale = \Session::get('locale');

                            @endphp
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <p class="title-text" style="font-size: 16px">Đồng trưởng ban</p>
                            @else
                                <p class="title-text" style="font-size: 16px">Co-Chairs</p>
                            @endif
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/anh/maitrongnhuan.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TS. MAI Trong Nhuan</strong></p>
                                    <p>Tổ chức:</p>
                                    <ul>
                                        <li>Phó chủ tịch Ủy ban quốc gia về Biến đổi khí hậu.
                                        </li>
                                        <li>Giám đốc Phòng thí nghiệm trọng điểm Địa chất – Môi trường và ứng phó biến
                                            đổi khí hậu.
                                        </li>
                                        <li>Giám đốc chương trình Thạc sỹ Biến đổi khí hậu và Phát triển, trường Đại học
                                            Việt Nhật, ĐHQGHN.
                                        </li>
                                    </ul>
                                    <p>Lĩnh vực nghiên cứu: Biến đổi khí hậu; đánh giá thảm họa và ứng phó; quản lí tài
                                        nguyên thiên nhiên và môi trường; khoa học bền vững. </p>

                                    <div class="clearfix"></div>
                                </div>
                            @else
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
                                        <li>Director, Master’s program on Climate change and Development, Vietnam Japan
                                            University, VNU.
                                        </li>
                                    </ul>
                                    <p>Research areas: Climate Change and disaster assessment and response; Natural
                                        resource and environment management; Sustainability Science.</p>

                                    <div class="clearfix"></div>
                                </div>

                            @endif

                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/anh/park.jpg" alt="">
                                    </div>
                                    <p>
                                        <strong> Chủ tịch PARK In-kook</strong></p>
                                    <p>Tổ chức: Chủ tịch Quỹ Giáo dục Cao học Hàn Quốc

                                    </p>

                                    <p>Lĩnh vực nghiên cứu: ngôn ngữ Trung Quốc, văn học và luật.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                            @else
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
                            @endif
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <p class="title-text" style="font-size: 16px">Ủy viên</p>
                            @else
                                <p class="title-text" style="font-size: 16px">Committee Members</p>
                            @endif
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">
                                    <div class="image-human">
                                        <img src="/frontend/anh/vuminhgiang.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TSKH Vũ Minh Giang</strong></p>
                                    <p>Tổ chức:</p>
                                    <ul>
                                        <li>Chủ tịch Hội đồng Khoa học và Đào tạo, ĐHQGHN.
                                        </li>
                                        <li>Phó chủ tịch Hội đồng quốc gia về Di sản văn hóa.
                                        </li>
                                        <li>Chủ tịch Hội đồng cố vấn chuyên môn, Trung tâm hỗ trợ nghiên cứu Châu Á,
                                            ĐHQGHN.
                                        </li>
                                        <li>Thành viên của Hội đồng quốc gia về Khoa học và Công nghệ.
                                        </li>
                                        <li>Giám đốc chương trình Thạc sỹ Khoa học bền vững, Khoa các khoa học liên
                                            ngành, ĐHQGHN.
                                        </li>
                                        <li>Giám đốc chương trình Thạc sỹ Khu vực học, trường Đại học Việt Nhật, ĐHQGHN.
                                        </li>
                                    </ul>
                                    <p>Lĩnh vực nghiên cứu: Văn hóa và phát triển, lịch sử, Việt Nam học, khu vực
                                        học.</p>
                                    <div class="clearfix"></div>
                                </div>
                            @else
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/vuminhgiang.jpg" alt="">
                                    </div>

                                    <p><strong>Prof. Dr. Sc. VU Minh Giang</strong></p>

                                    <p>Affiliation(s):</p>

                                    <ul>
                                        <li>Chairman, VNU Council for Science and Training.</li>
                                        <li>Vice President, Council National for Cultural Heritage.</li>
                                        <li>Chairman of Academic Advisory Committee, Asia Research Centre, VNU.</li>
                                        <li>Member of the National Council for Science and Technology.</li>
                                        <li>Director, Master’s program on Sustainability Science, VNU School of
                                            Interdisciplinary Studies.
                                        </li>
                                        <li>Director, Master’s program on Area Studies, Vietnam Japan University, VNU.
                                        </li>
                                        <li>Vice President, National Cultural Heritage Council.</li>
                                    </ul>

                                    <p>Research areas: Cultural studies and development, History, Vietnam studies, Area
                                        studies.</p>

                                    <div class="clearfix"></div>
                                </div>
                            @endif

                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/anh/vuvantich.jpg" alt="">
                                    </div>
                                    <p>
                                        <strong>GS. Vũ Văn Tích</strong></p>
                                    <p>Tổ chức: Trưởng ban Khoa học Công nghệ, ĐHQGHN.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Địa chất, chuyên sâu về thạch học, kiến tạo và đồng vị.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                @else
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/anh/vuvantich.jpg" alt="">
                                    </div>
                                    <p>
                                        <strong> Assoc. Prof. VU Van Tich</strong></p>
                                    <p>Affiliation(s): Director, Science and Technology Department, VNU.
                                    </p>

                                    <p>Research areas: Geology specialised in petrography, tectonics, and isotopes.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                @endif


                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/diana.jpg" alt="">
                                    </div>

                                    <p><strong>GS. Diana ÜRGE-VORSATZ
                                        </strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Giáo sư khoa Khoa học Môi trường và chính sách, Đại học châu  u (CEU).

                                        </li>
                                        <li>Phó chủ tịch Nhóm làm việc III của Ủy ban liên chính phủ về biến đổi khí hậu.

                                        </li>
                                        <li>Trưởng nhóm, Nhóm thẩm định Mục tiêu 7 về đảm bảo tính bền vững, tin cậy, và hợp lý về giá cả trong nguồn cung năng lượng, của Mục tiêu Phát triển bền vững 2030 của Liên hợp quốc (2014).

                                        </li>
                                        <li>Thành viên Hội đồng khoa học của hội nghị cao cấp “Tương lai chung của chúng ta trong bối cảnh BĐKH”, tại Paris năm 2015.

                                        </li>
                                        <li>Đồng trưởng ban, Ban chỉ đạo khoa học của hội thảo “Phát triển thành phố và khoa học về biến đổi khí hậu” tại Edmonton, vào tháng 03/2018.

                                        </li>
                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Môi trường và năng lượng học.</p>


                                    <div class="clearfix"></div>
                                </div>

                            @else
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/diana.jpg" alt="">
                                    </div>

                                    <p><strong>Prof. Diana ÜRGE-VORSATZ</strong></p>

                                    <p>Affiliation(s):</p>

                                    <ul>
                                        <li>Professor, Dept. of Environmental Sciences and Policy, Central European
                                            University (CEU).
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
                                        <li>Co-chair, Scientific Steering Committee, Cities and Climate Change Science
                                            conference, Edmonton, March 2018.
                                        </li>
                                    </ul>

                                    <p>Research areas<strong>:</strong> Environmental and Energy Studies.</p>


                                    <div class="clearfix"></div>
                                </div>

                                @endif

                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/nils.jpg" alt="">
                                    </div>
                                    <p><strong>GS. Danh dự Nils Roar Salthun
                                        </strong></p>

                                    <p>Tổ chức: Nguyên trưởng khoa Khoa học địa chất, trường đại học Olso, Na uy.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Phát triển và ứng dụng mô hình thủy văn, quản lý nguồn nước, tác động của BĐKH lên nguồn nước, thủy văn, lũ lụt, hệ thống thông tin môi trường.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>
                                @else
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/nils.jpg" alt="">
                                    </div>
                                    <p><strong>Emeritus Prof. Nils Roar SALTHUN</strong></p>

                                    <p>Affiliation(s): Former Head of Department of Geosciences at the University of Oslo,
                                        Norway.</p>

                                    <p>Research areas: Development and applications of hydrological models, Water resources
                                        management, Impacts of climate change impacts on water resources, Hydropower
                                        hydrology, Floods, Design flood estimation, Environmental information systems.</p>

                                    <div class="clearfix"></div>
                                </div>
                                @endif
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/cuonglevan.jpg" alt="">
                                    </div>


                                    <p><strong>GS. Danh dự Lê Văn Cường</strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Trường Kinh tế Paris I.</li>
                                        <li>Giám đốc nghiên cứu danh dự, Viện nghiên cứu khoa học quốc gia Pháp (CNRS).
                                        </li>
                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Phương pháp định lượng, kinh tế vĩ mô và tích lũy tài sản, Mô hình vĩ mô động, cân bằng tổng quát.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>
                                @else
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/cuonglevan.jpg" alt="">
                                </div>


                                <p><strong>Emeritus Prof. Cuong LE Van</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Paris School of Economics.</li>
                                    <li>Emeritus Research Director, French National for Scientific Research (CNRS).</li>
                                </ul>

                                <p>Research areas: Quantitative Methods, Macroeconomics and asset accumulation,
                                    Macroeconomics dynamics, General equilibrium.</p>

                                <div class="clearfix"></div>
                            </div>
                            @endif
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/hoangvanthang.jpg" alt="">
                                    </div>
                                    <p><strong>TS. Hoàng Văn Thắng
                                        </strong></p>
                                    <p>Tổ chức: Giám đốc Viện Tài nguyên và Môi trường, ĐHQGHN
                                    </p>
                                    <p>Lĩnh vực nghiên cứu : Quản lý và bảo tồn vùng ngập mặn, quy hoạch môi trường, bảo tồn đa dạng sinh học, phát triển bền vững.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                @else
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/hoangvanthang.jpg" alt="">
                                </div>
                                <p><strong>Dr. HOANG Van Thang</strong></p>

                                <p>Affiliation(s): Director General, VNU Central Institute for Natural Resources and
                                    Environmental Studies.</p>

                                <p>Research areas: Management and conservation of wetlands, Environmental planning,
                                    Biodiversity conservation, Sustainable development.</p>

                                <div class="clearfix"></div>
                            </div>
                            @endif
                            @if($raw_locale != null and $raw_locale == 'vn')

                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/truongquanghoc.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TSKH Trương Quang Học
                                        </strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Chủ tịch Hội đồng Khoa học và Đào tạo, Viện Tài nguyên và Môi trường, ĐHQGHN.
                                        </li>
                                        <li>Thành viên Hội đồng tư vấn của Ủy ban quốc gia về biến đổi khí hậu.

                                        </li>
                                        <li>Thành viên Hội đồng tư vấn của Bộ Tài nguyên và Môi trường.
                                        </li>
                                        <li>Nguyên Trưởng ban Khoa học Công nghệ, ĐHQGHN.

                                        </li>
                                        <li>Nguyên Giám đốc Viện Tài nguyên và Môi trường, ĐHQGHN.

                                        </li>

                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: sinh học môi trường, biến đổi khí hậu, khoa học bền vững.</p>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/jungtaeyong.jpg" alt="">
                                    </div>
                                    <p><strong>GS. Jung Tae Yong</strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Giáo sư về phát triển bền vững, Khoa sau đại học về Quốc tế học; Giám đốc Trung tâm bền vững toàn cầu, Đại học Yonsei, Hàn Quốc.

                                        </li>
                                        <li>Chuyên gia chính về biến đổi khí hậu, khu vực Đông Á, Ngân hàng Phát triển châu Á (ADB).
                                        </li>
                                        <li>Phó giám đốc điều hành của Viện tăng trưởng xanh toàn cầu (GGGI), Hàn Quốc.

                                        </li>
                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Phát triển bền vững, môi trường và chính sách về môi trường, năng lượng, biến đổi khí hậu.</p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/phanvantan.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TS. Phan Văn Tân</strong></p>

                                    <p>Tổ chức: Giáo sư Khoa Khí tượng, Thủy văn và Hải dương học, ĐHQGHN.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Mô hình hóa khí hậu khu vực, biến đổi khí hậu, dự đoán mô hình động theo mùa.</p>

                                    <div class="clearfix"></div>
                                </div>
                                @else
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/truongquanghoc.jpg" alt="">
                                </div>
                                <p><strong>Prof. DSc. TRUONG Quang Hoc</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Chair, Training and Scientific Council of the Central Institute for Natural
                                        Resources and Environmental Studies (CRES), VNU.
                                    </li>
                                    <li>Advisory Council Member for the National Committee on Climate Change (VPCC).
                                    </li>
                                    <li>Advisory Council Member of Ministry of Natural Resources and Environment.</li>
                                    <li>Former Director of the Dept. of Scientific and Technological Management of
                                        VNU.
                                    </li>
                                    <li>Former Director of the Center of for Natural Resources and Environmental Studies
                                        (CRES), VNU.
                                    </li>

                                </ul>

                                <p>Research areas: Environmental Biology, Climate change, Sustainability Science.</p>

                                <div class="clearfix"></div>
                            </div>


                                <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/jungtaeyong.jpg" alt="">
                                </div>
                                <p><strong>Prof. JUNG Tae Yong</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Professor of Sustainable Development, Graduate School of International Studies,
                                        and Director, Center for Global Sustainability, Yonsei University, Republic of
                                        Korea.
                                    </li>
                                    <li>Principal Climate Change Specialist, East Asia Regional Department, Asian
                                        Development Bank (ADB), Philippines.
                                    </li>
                                    <li>Deputy Executive Director, Global Green Growth Institute (GGGI), Republic of
                                        Korea.
                                    </li>
                                </ul>

                                <p>Research areas: Sustainable development, Environment and Environmental policy,
                                    Energy, Climate change.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/phanvantan.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. PHAN Van Tan</strong></p>

                                <p>Affiliation(s): Professor, Department of Meteorology and Climate Change, Faculty of
                                    Hydrology, Meteorology and Oceanography, VNU University of Science.</p>

                                <p>Research areas: Regional Climate Modelling and Climate Change, Dynamical Seasonal
                                    Prediction.</p>

                                <div class="clearfix"></div>
                            </div>
                            @endif

                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/mimura.jpg" alt="">
                                    </div>
                                    <p><strong>GS. Nobuo Mimura
                                        </strong></p>

                                    <p>Tổ chức: Hiệu trưởng trường Đại học Irabaki, Nhật Bản.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Đánh giá tác động của quá trình nóng lên toàn cầu và biến đổi khí hậu, khoa học thích ứng với thay đổi môi trường toàn cầu, khoa học bền vững, kỹ thuật ven biển.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/yasuhara.jpg" alt="">
                                    </div>
                                    <p><strong>GS. Danh dự Kazuya Yasuhara</strong></p>

                                    <p>Tổ chức: Giáo sư danh dự trường Đại học Irabaki, Nhật Bản.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: kỹ thuật địa chất, thích ứng địa chất với biến đổi khí hậu.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/fink.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TS. Andreas H. Fink
                                        </strong></p>

                                    <p>Tổ chức: Viện công nghệ Karlsruhe (KIT), Viện nghiên cứu Khí tượng và Khí hậu (IMK), CHLB Đức.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Biến động và dự báo các hiện tượng thời tiết, biến đổi khí hậu, hiện tượng thời tiết và khí hậu cực đoan, mô hình hóa khí hậu khu vực.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/tranthuc.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TS. Trần Thục
                                        </strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Phó chủ tịch Ủy ban quốc gia về biến đổi khí hậu.
                                        </li>
                                        <li>Chủ tịch Ủy ban quốc gia về chương trình Thủy văn quốc tế.

                                        </li>

                                    </ul>


                                    <p> Lĩnh vực nghiên cứu: Thủy văn, môi trường, giảm thiểu rui ro thiên tai, biến đổi khí hậu.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>
                            @else
                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/mimura.jpg" alt="">
                                </div>
                                <p><strong>Prof. Nobuo MIMURA</strong></p>

                                <p>Affiliation(s): President, Ibaraki University.</p>

                                <p>Research areas: Impact Assessment of Global Warming and Climate Change, Adaptation
                                    Science for Global Environmental Change, Sustainability Science, Coastal
                                    Engineering. </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/yasuhara.jpg" alt="">
                                </div>
                                <p><strong>Emeritus Prof. Kazuya YASUHARA</strong></p>

                                <p>Affiliation(s): Professor Emeritus, Ibaraki University.</p>

                                <p>Research areas: Geotechnical engineering, Geotechnical adaption to climate
                                    change. </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/fink.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. Andreas H. FINK </strong></p>

                                <p>Affiliation(s): Karlsruhe Institute of Technology (KIT), Institute for Meteorology
                                    and Climate Research (IMK).</p>

                                <p>Research areas: Dynamics and predictability of weather phenomena, Climate variability
                                    and change, Extreme weather and climate events, and regional climate modeling.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/tranthuc.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. TRAN Thuc</strong></p>

                                <p>Affiliation(s):</p>

                                <ul>
                                    <li>Vice Chairman, The Vietnam Panel on Climate Change.</li>
                                    <li>Chairman, Vietnam National Committee for the International Hydrological Program
                                        (IHP).
                                    </li>

                                </ul>


                                <p>Research areas: Hydrometeorology, environment, disaster risk reduction, and climate
                                    change.</p>

                                <div class="clearfix"></div>
                            </div>
                            @endif

















                            @if($raw_locale != null and $raw_locale == 'vn')

                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/tranhongthai.jpg" alt="">
                                    </div>
                                    <p><strong>PGS. Trần Hồng Thái
                                        </strong></p>

                                    <p>Tổ chức: Phó Tổng cục trưởng Tổng cục Khí tượng Thủy văn Việt Nam.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Biến đổi khí hậu, quản lý nguồn nước, môi trường, khai thác tài nguyên.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/hieutrung.jpg" alt="">
                                    </div>
                                    <p><strong>PGS. Nguyễn Hiếu Trung
                                        </strong></p>

                                    <p>Tổ chức: Giám đốc Viện nghiên cứu biến đổi khí hậu, Đại học Cần Thơ.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Quản lý tài nguyên nước tích hợp, thay đổi trong mục đích sử dụng đất, thích ứng biến đổi khí hậu, đô thị chống chịu.
                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/tranthodat.jpg" alt="">
                                    </div>
                                    <p><strong>GS. TS. Trần Thọ Đạt
                                        </strong></p>

                                    <p>Tổ chức: Hiệu trưởng trường Đại học Kinh tế quốc dân.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Mô hình phát triển kinh tế, chất lượng của tăng trưởng, giáo dục và tăng trưởng kinh tế, kinh tế học của BĐKH, tài chính cho giáo dục đại học, chính sách tiền tệ.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/kensuke.png" alt="">
                                    </div>
                                    <p><strong>GS. Fukushi Kensuke
                                        </strong></p>

                                    <p>Tổ chức: Hệ thống nghiên cứu tích hợp cho khoa học bền vững (IR3S), Viện nghiên cứu cao cấp, Đại học Tokyo.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Kỹ thuật môi trường, đánh giá rủi ro, tác động của biến đổi khí hậu, quản lý nguồn nước, công nghệ sinh học và kỹ thuật membrane.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/wiwa.jpg" alt="">
                                    </div>
                                    <p><strong>PGS. TS. Dawan Wiwattanadate
                                        </strong></p>

                                    <p>Tổ chức: Giám đốc chương trình Thạc sỹ Môi trường, Phát triển và Bền vững, trường Đại học Chulalongkorn, Thái Lan.
                                    </p>

                                    <p>Lĩnh vực nghiên cứu: Năng lượng, phục hồi và vật liệu tái chế, sử dụng tài nguyên thân thiện với môi trường.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/smajgl.jpg" alt="">
                                    </div>
                                    <p><strong>PGS. Alex Smajgl
                                        </strong></p>

                                    <p>Tổ chức: </p>

                                    <ul>
                                        <li>Giám đốc điều hành Viện phát triển đồng bằng sông Me-kong

                                        </li>
                                        <li>Giám đốc điều hành Viện phát triển Úc.

                                        </li>
                                        <li>Phó Giáo sư, trường Đại học Deakin, Úc.
                                        </li>


                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Phát triển bền vững, thích ứng với biến đổi khí hậu, quản lý tài nguyên thiên nhiên, kinh tế môi trường, đô thị hóa.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/ellis.jpg" alt="">
                                    </div>
                                    <p><strong>TS. Michael A. Ellis
                                        </strong></p>

                                    <p>Tổ chức: </p>

                                    <ul>
                                        <li>Trưởng khoa Giám sát lưu vực sông, Viện Khảo sát địa chất Vương Quốc Anh.
                                        </li>
                                        <li>Tổng biên tập Tạp chí Tương lai trái đất.
                                        </li>


                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Phản ứng và khả năng phục hồi của môi trường trước tác động không kiểm soát và có kiểm soát của con người trong tương lai, hoạt động kiến tạo địa hình.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img src="/frontend/anh/takemoto.jpg" alt="">
                                    </div>
                                    <p><strong>TS. Akio Takemoto
                                        </strong></p>

                                    <p>Tổ chức:</p>

                                    <ul>
                                        <li>Chuyên gia cao cấp về môi trường, Ban dự án, Quỹ Môi trường toàn cầu, từ 01/2018 đến nay.

                                        </li>
                                        <li>Giám đốc Chiến lược quốc tế về biến đổi khí hậu, Bộ Môi trường Nhật Bản (07/2017-01/2018).

                                        </li>
                                        <li>Giám đốc phòng nghiên cứu và thông tin, Bộ Môi trường Nhật Bản (07/2017-07/2017).

                                        </li>
                                        <li>Giám đốc, Trưởng Ban thư ký mạng lưới châu Á – Thái Bình Dương về nghiên cứu sự thay đổi toàn cầu (07/2011-07/2014).

                                        </li>


                                    </ul>

                                    <p>Lĩnh vực nghiên cứu: Thích ứng và giảm thiểu tác động biến đổi khí hậu, tài chính cho ứng phó BĐKH.

                                    </p>

                                    <div class="clearfix"></div>
                                </div>
                                @else


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/tranhongthai.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. TRAN Hong Thai</strong></p>

                                <p>Affiliation(s): Deputy General Director, Vietnam Meteorological and Hydrological
                                    Administration.</p>

                                <p>Research areas: Climate change, water resources, environment, exploitations.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/hieutrung.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. NGUYEN Hieu Trung</strong></p>

                                <p>Affiliation(s): Director, Climate Change Research Institute (Dragon-Mekong Institute)
                                    – Can Tho University.</p>

                                <p>Research areas: Integrated water resources management, land use dynamic, climate
                                    change adaptation, urban resilience.</p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/tranthodat.jpg" alt="">
                                </div>
                                <p><strong>Prof. Dr. TRAN Tho Dat</strong></p>

                                <p>Affiliation(s): President, National Economics University.</p>

                                <p>Research areas: Economic growth models, quality of growth, education and growth,
                                    economics of climate change, higher education financing, demand for money and
                                    monetary policy.

                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/kensuke.png" alt="">
                                </div>
                                <p><strong>Prof. Fukushi KENSUKE</strong></p>

                                <p>Affiliation(s): Integrated Research System for Sustainability Science (IR3S), The
                                    University of Tokyo Institute for Advanced Studies.</p>

                                <p>Research areas: Environmental engineering, risk assessment, climate change effect,
                                    water resource, biological technology, membrane technology.
                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/wiwa.jpg" alt="">
                                </div>
                                <p><strong>Assoc. Prof. Dr. Dawan WIWATTANADATE</strong></p>

                                <p>Affiliation(s): Director of EDS (Environment, Development and Sustainability)
                                    Program, Graduate School, Chulalongkorn University.</p>

                                <p>Research areas: Energy and Materials Resource Recovery and Recycling, Climate
                                    Friendly Resources Utilization.
                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/smajgl.jpg" alt="">
                                </div>
                                <p><strong>Adj. Prof. Alex SMAJGL</strong></p>

                                <p>Affiliation(s): </p>

                                <ul>
                                    <li>Managing Director, Mekong Region Futures Institute.</li>
                                    <li>Managing Director, Sustainable Futures Institute Australia.</li>
                                    <li>Adjunct Professor, Deakin University, Australia.</li>

                                </ul>

                                <p>Research areas: Sustainable development, climate change adaptation, natural resources
                                    management, environmental economics, and urbanization.
                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/ellis.jpg" alt="">
                                </div>
                                <p><strong>Dr. Michael A. ELLIS </strong></p>

                                <p>Affiliation(s): </p>

                                <ul>
                                    <li>Head of Catchment Science and Observatories, British Geological Survey.</li>
                                    <li>Editor, Earth’s Future (an AGU/Wiley journal).</li>


                                </ul>

                                <p>Research areas: Environmental response and resilience to future forcings at human and
                                    planning time-scales, Coupling earth surface processes to the human process, Active
                                    tectonics and tectonic geomorphology, The Anthropocene, writ large.
                                </p>

                                <div class="clearfix"></div>
                            </div>


                            <div class="col-md-12 content-human">

                                <div class="image-human">
                                    <img src="/frontend/anh/takemoto.jpg" alt="">
                                </div>
                                <p><strong>Dr. Akio TAKEMOTO</strong></p>

                                <p>Affiliation(s): </p>

                                <ul>
                                    <li>Senior Environmental Specialist, Programs Unit, Global Environment Facility
                                        (GEF) (January 2018-).
                                    </li>
                                    <li>Director for International Strategy on Climate Change, Ministry of the
                                        Environment, Japan (July 2017 – January 2018).
                                    </li>
                                    <li>Director for Research and Information Office, Ministry of the Environment, Japan
                                        (July 2014- July 2017).
                                    </li>
                                    <li>Director, Secretariat of Asia-Pacific Network for Global Change Research (July
                                        2011 – July 2014).
                                    </li>


                                </ul>

                                <p>Research areas: climate change adaptation and mitigation, climate finance.
                                </p>

                                <div class="clearfix"></div>
                            </div>

                            @endif
                        </div>
                    </div>

                </div>
            </section><!-- /.bio__holder -->

        </div>

    </main>
@endsection