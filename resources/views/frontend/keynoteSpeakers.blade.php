@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
    <style>
        .sabbi-page-header {
            background-image: url({{url('frontend/anhbanner/1.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <header class="sabbi-page-header page-header-lg">
        <div class="page-header-content conternt-center">
            <div class="header-title-block">
                <h1 class="page-title">{{trans('home.keynoteSpeakers')}}</h1>
            </div>
        </div>
    </header>
    <div class="auth-breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
                <li><a href="{{url('/')}}">{{trans('home.home')}}</a></li>
                <li class="active"><a href="#">{{trans('home.keynoteSpeakers')}}</a></li>
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
                .name-human {
                    color : #32813E;
                    font-size: 18px;
                }
                .nghieng {
                    font-style: italic;
                }
            </style>
            <section class="bio__holder">
                <div class="row">
                    <div class="col-md-8 col-sm-5 col-md-offset-2 col-xs-12">
                        <div>
                            {{--<p class="title-text" style="font-size: 16px">Co-Chairs</p>--}}
                            @php
                                $raw_locale = \Session::get('locale');

                                    @endphp
                            @if($raw_locale != null and $raw_locale == 'vn')
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/keynote/helen.jpg" alt="">
                                    </div>
                                    <p class="name-human"><strong>HELEN CLARK</strong></p>
                                    <p>Nguyên Tổng Giám đốc điều hành Chương trình phát triển Liên hợp quốc.</p>
                                    <p>Cựu Thủ tướng New Zealand.
                                    </p>
                                    <p>Bà Helen Clark từng giữ vị trí Thủ tướng New Zealand trong ba nhiệm kỳ liên tiếp từ năm 1999 đến năm 2008. Bà cũng là người phụ nữ đầu tiên được bầu vào chức vụ này ở New Zealand.
                                    </p>
                                    <p>Trong chín năm, ba nhiệm kỳ, với tư cách là người đứng đầu đất nước, cũng như trong hơn 27 năm với vai trò là một Nghị sỹ Quốc hội, Bà Helen đã tham gia sâu rộng vào các hoạt động vận động và phát triển chính sách trên nhiều lĩnh vực: kinh tế, xã hội, môi trường và văn hóa ở cấp độ quốc gia và quốc tế. Bà chủ trương mạnh mẽ cho chương trình toàn diện của New Zealand về phát triển bền vững và giải quyết các vấn đề liên quan đến biến đổi khí hậu. Bà còn là một nhà lãnh đạo tích cực trong công tác đối ngoại, giúp gia tăng sự ảnh hưởng của New Zealand đến các vấn đề của cộng đồng quốc tế.
                                    </p>
                                    <p>
                                        Vào tháng 4 năm 2009, bà Helen Clark trở thành Tổng Giám đốc điều hành của Chương trình Phát triển Liên hợp quốc. Đây là lần đầu tiên tổ chức toàn cầu quan trọng này được lãnh đạo bởi một người phụ nữ trong suốt hai nhiệm kỳ, tám năm. Cùng lúc đó, bà cũng là Chủ tịch Nhóm phát triển Liên Hợp Quốc, một ủy ban có thành viên là tất cả các quỹ, chương trình, cơ quan và các phòng ban của Liên Hợp Quốc đang làm việc về các vấn đề phát triển. Với cương vị Tổng Giám đốc điều hành, bà Helen đã dẫn dắt Chương trình Phát triển Liên hợp quốc trở thành tổ chức phát triển minh bạch nhất trên thế giới. Bà đã kết thúc nhiệm kỳ của mình vào năm 2017.

                                    </p>
                                    <p>Bà Helen Clark trở thành Thủ tướng New Zealand sau khi nắm giữ nhiều vai trò quan trọng trong Quốc hội và Nội các của nước này. Trước khi bước chân vào chính trường, Bà Helen Clark giảng dạy tại khoa Chính trị học của Đại học Auckland, nơi bà đã theo học bậc cử nhân và thạc sỹ.
                                    </p>
                                    <p>Bà Helen luôn ủng hộ mạnh mẽ các chính sách về phát triển bền vững, hành động vì khí hậu, bình đẳng giới và vai trò lãnh đạo của phụ nữ, hòa bình và công lý, và hành động đối với các bệnh không lây nhiễm và HIV.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/keynote/groff.jpg" alt="">
                                    </div>
                                    <p class="name-human"><strong>STEPHEN P. GROFF</strong></p>
                                   <p>Ông Stephen P. Groff hiện đang là Phó Giám đốc phụ trách khu vực Đông Á, Đông Nam Á và Thái Bình Dương của Ngân hàng Phát triển châu Á (ADB). Ông bắt đầu đảm nhận chức vụ này từ tháng 10 năm 2011.
                                   </p>
                                    <p>Ông Stephen chịu trách nhiệm thiết lập hoạt động chiến lược và ưu tiên trong lĩnh vực mình phụ trách, vận hành các hoạt động đầu tư và hỗ trợ kỹ thuật lên tới xấp xỉ 5 tỷ USD mỗi năm, quản lý một danh mục đầu tư hiện có với trị giá khoảng 31 tỷ USD với 650 nhân viên dưới quyền.
                                    </p>
                                    <p>Ông Stephen còn đóng vai trò hỗ trợ Giám đốc ADB trong việc quản lý tổng thể các hoạt động của tổ chức, đại diện cho cơ quan này ở các cuộc gặp cấp cao đa phương, góp phần củng cố mối quan hệ với 67 quốc gia thành viên, các tổ chức tài chính đa phương và các cơ quan chính phủ, khu vực tư nhân, và đối tác xã hội dân sự chủ chốt.
                                    </p>
                                    <p>Trước khi gia nhập ADB, ông Groff là Phó Giám đốc Hợp tác Phát triển tại Tổ chức Hợp tác và Phát triển Kinh tế (OECD) ở Paris, nơi ông phụ trách các hoạt động kinh tế và chính trị liên quan đến phát triển. Ông cũng là đặc sứ của OECD tại Nhóm công tác về Phát triển G20 và là thành viên của Hội đồng Chương trình nghị sự toàn cầu của Diễn đàn Kinh tế Thế giới (WEF). Trước đó, ông là Phó Chủ tịch điều hành tại Công ty Thách thức thiên niên kỷ Millennium Challenge Corporation (MCC) tại thủ đô Washington, nơi ông phụ trách việc xây dựng kế hoạch hoạt động, và điều hành các chương trình của công ty, bên cạnh vai trò tư vấn cho Giám đốc điều hành về các vấn đề phát triển, chiến lược và chính sách. Trước khi làm việc cho MCC, ông Groff đã nắm giữ một số vị trí tại Ngân hàng châu Á ADB. Trước đó, ông Groff là Phó Giám đốc và kinh tế trưởng của một dự án phát triển lớn của Cơ quan Phát triển Hoa Kỳ (USAID), được thiết kế để khuyến khích sự phát triển của khu vực tư nhân ở miền Nam Philippines, là Giám đốc Chương trình người tị nạn ở Hoa Kỳ, và là tình nguyện viên của chương trình tình nguyện Peace Corp. của Ngoại giao đoàn Hoa Kỳ.
                                    </p>
                                    <p>Ông Groff có kinh nghiệm làm việc ở nhiều quốc gia thuộc châu Á, châu Phi và Mỹ Latinh. Ông thường xuyên có các bài viết về các vấn đề phát triển. Hiện nay, ông cũng là thành viên Ban cố vấn của một số tổ chức phát triển.
                                    </p>
                                    <p>Ông Groff có bằng Thạc sỹ Quản trị Công của Đại học Harvard và bằng Cử nhân Khoa học Sinh học Môi trường của Đại học Yale.
                                    </p>
                                    <p class="nghieng">Nguồn: Ngân hàng Phát triển Châu Á.</p>
                                    <div class="clearfix"></div>
                                </div>

                            @else
                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/keynote/helen.jpg" alt="">
                                    </div>
                                    <p class="name-human"><strong>HELEN CLARK</strong></p>
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
                                    <p class="name-human"><strong>STEPHEN P. GROFF</strong></p>
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
                                    <p class="nghieng">Source: Asian Development Bank</p>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="col-md-12 content-human">

                                    <div class="image-human">
                                        <img class="" src="/frontend/keynote/sokona.jpg" alt="">
                                    </div>
                                    <p class="name-human"><strong>Dr Youba Sokona</strong></p>
                                    <p><strong>Vice-Chair of the Intergovernmental Panel on Climate Change (IPCC)</strong></p>
                                    <p>Dr Sokona is currently Special Advisor for Sustainable Development at the South Centre.</p>
                                    <p>With over 35 years of experience addressing energy, environment and sustainable development in Africa. Reflecting his status, Dr Sokona was elected Vice-Chair of the Intergovernmental Panel on Climate Change (IPCC) in October 2015.
                                    </p>
                                    <p>Prior to this, Dr Sokona was Co-Chair of IPCC Working Group III on the mitigation of climate change for the Fifth Assessment Report after serving as a Lead Author since 1990. In addition to these achievements, Dr Sokona has a proven track record of organisational leadership and management, for example, leading the conception, development and initiating the Africa Renewable Energy Initiative, as the first Coordinator of the African Climate Policy Centre (ACPC) and as Executive Secretary of the Sahara and the Sahel Observatory (OSS). Dr Sokona’s advice is highly sought after, and as such, he is affiliated with numerous boards and organisations, including Honorary Professor at the University College London (UCL), Member of Science Advisory Committee of the International Institute for Applied Systems Analysis (IIASA), Member of the Advisory Board of the Payne Institute at the Colorado School of Mines, and as a Special Advisor to the African Energy Leaders Group. In short, Dr Sokona is a global figure, with deep technical knowledge, extensive policy experience and an unreserved personal commitment to African led development.</p>

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