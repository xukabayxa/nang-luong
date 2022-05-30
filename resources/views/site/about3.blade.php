@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/css/about3-custom.css" rel="stylesheet">
    <link href="/css/custom-template.css" rel="stylesheet">
    <link href="/css/solar-skin.css" rel="stylesheet">
    <link href="/css/css-2.css" rel="stylesheet">
    <link href="/css/css-3.css" rel="stylesheet">
@endsection
@section('content')
    <style>
        h3 {
            font-size: 20px;
            color: #0F4C81;
        }
    </style>
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>


    <style>
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 480px)
        and (-webkit-min-device-pixel-ratio: 2) {
            .vc_custom_1474870976953 {
                display: none;
            }

            .text-br {
                white-space: pre;
            }
        }

    </style>
    <section id="sozo-main" style="display: grid">
        <section class="main-title-section-wrapper default"
                 style="background:url(https://solarwp.wpengine.com/wp-content/uploads/2016/09/page-title-img.jpg)
           top left repeat;">
            <div class="container">
                <div class="main-title-section"><h1>{{App::isLocale('vi') ? 'Bộ máy quản lý' : 'Our Team'}}</h1></div>
                {{--                <div class="breadcrumb"><a href="https://solarwp.wpengine.com/">Home</a><span class="fa default"></span><span--}}
                {{--                        class="current">About Us</span></div>--}}
            </div>
        </section>
        <style>
            .conver-data {
                margin-bottom: 10px;
            }
            p{
                font-size: 16px;
            }
        </style>
        <div class="uk-container">
            <section id="primary" class="content-full-width">    <!-- #post-8 -->
                <div class="content-pane-wrap-body">

                    <div class="leader-body d-flex">
                        <div id="page-content-wrapper">
                            <div class="leader load-data active-show"
                                 path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/hoi-dong-quan-tri/hoi-dong-quan-tri"
                                 id="hoi-dong-quan-tri">
                                <div class="anchor-head"></div>

                                <style>
                                    @media only screen and (max-width: 768px) {
                                        .man-2 {
                                            padding-right: 0;
                                        }
                                        .man-1{
                                            height: 0;
                                        }
                                    }

                                    @media (min-width:1025px){
                                        .man-2 {
                                            padding-right: 30px;
                                        }
                                    }
                                </style>
                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-do-minh-phu"
                                         path="">
                                        <div class="body-leader man-2" style="margin-left: 0;">
                                            <div class="conver-data">
                                                @if(App::isLocale('vi'))
                                                    <div class="content-text" data-content="" style="padding: 0; color:#0F4C81">Ông<b> Saumya Swain<b></b></b></div>

                                                    <div class="detail-content-text" style="color:#0F4C81;">
                                                        Nhà đồng sáng lập và Chủ tịch RT Energy
                                                    </div>
                                                @else
                                                    <div class="content-text" data-content="" style="padding: 0; color:#0F4C81">Mr<b> Saumya Swain<b></b></b></div>

                                                    <div class="detail-content-text" style="color:#0F4C81;">
                                                        Co-Founder and Chairman of RT Energy
                                                    </div>
                                                @endif


                                            </div>

                                            @if(App::isLocale('vi'))
                                            <div class="detail-leader">
                                                <p>Trong gần 20 năm làm việc, ông Saumya Swain đã đảm nhận nhiều vị trí quan trọng về quản lý kinh doanh tại các công ty về bất động sản và công nghệ tại Hàn Quốc và nhiều nước trên thế giới. Đặc biệt, với hơn 10 năm kinh nghiệm trong lĩnh vực năng lượng tái tạo,  ông có đóng góp lớn trong việc phát triển Equis Energy- công ty sản xuất năng lượng tái tạo lớn nhất tại khu vực Châu Á - Thái Bình Dương với hơn 180 chi nhánh trong lĩnh vực năng lượng mặt trời, gió và phát điện hydro rộng khắp các quốc gia như Úc, Nhật, Ấn Độ và Philippines…
                                                </p>
                                            </div>
                                            <div>
                                                <p class="cong-tac">Quá trình công tác:</p>
                                                <ul>
                                                    <li>6/2020 đến nay: Sáng lập và điều hành RT Energy PTE LTD-Singapore</li>
                                                    <li>8/2019-5/2020: Cổ đông sáng lập, cố vấn cấp cao Indefol Solar</li>
                                                    <li>12/2012-12/2020: Giám đốc khu vực, Equis Energy
                                                    </li>
                                                </ul>
                                            </div>

                                            @else
                                                <div class="detail-leader">
                                                    <p>
                                                        During nearly 20 years of working, Mr. Saumya Swain has held many important positions in business management at real estate and technology companies in Korea and many countries around the world. In particular, with more than 10 years of experience in the field of renewable energy, he has made a great contribution to the development of Equis Energy - the largest renewable energy producer in the Asia-Pacific region with more than 180 branches in the field of solar, wind and hydrogen power generation across countries such as Australia, Japan, India and the Philippines...
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="cong-tac">Experience:</p>
                                                    <ul>
                                                        <li>6/2020 to present: Founding and operating RT Energy PTE LTD-Singapore
                                                        </li>
                                                        <li>8/2019-5/2020: Founding shareholder, senior advisor Indefol Solar</li>
                                                        <li>12/2012-12/2020: Regional Manager, Equis Energy

                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="img-leader"
                                             data-image="" style="">
                                            <img
                                                src="/site/img/a3.jpg">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="detail-data">
                                <div class="load-detail-data-leader">
                                    <div class="from-image-title">
                                        <div class="image-detail-leader">
                                            <img src="" id="image-leader" style="width: 100%;">
                                        </div>
                                        <div id="title-leader" style="color: #3f2b69; text-align: center;">

                                        </div>
                                        <div id="detail-title-leader" style="color: #3f2b69; text-align: center;">

                                        </div>
                                    </div>
                                    <div class="body-detail-data">
                                        <div id="sub-detail-title-leader" style="color: #3f2b69;">
                                            <h3></h3>
                                        </div>
                                        <div id="content-leader" style="text-align: justify;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="leader-body d-flex">
                        <div id="page-content-wrapper">
                            <div class="leader load-data active-show"
                                 path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/hoi-dong-quan-tri/hoi-dong-quan-tri"
                                 id="hoi-dong-quan-tri">
                                <div class="anchor-head"></div>

                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-do-minh-phu"
                                         path="">
                                        <div class="img-leader"
                                             data-image="">
                                            <img
                                                src="/site/img/a2.png">
                                        </div>
                                        <div class="body-leader">
                                            @if(App::isLocale('vi'))
                                                <div class="conver-data man-1">
                                                    <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color: #0F4C81 ">Ông <b>Tạ Anh Tuấn <b></b></b></div>
                                                    <div class="detail-content-text" style="color: #0F4C81 ">
                                                        Tổng Giám đốc RT Energy
                                                    </div>
                                                </div>
                                                <div class="detail-leader">
                                                    <p dir="ltr">
                                                        Tốt nghiệp Cao học Quản trị kinh doanh tại Trường kinh doanh Melbourne – trường đại học số 1 Châu Úc, ông Tạ Anh Tuấn đã trải qua nhiều vị trí lãnh đạo quản lý tại các tập đoàn, tổng công ty lớn trước khi gắn bó với lĩnh vực năng lượng tái tạo. Với mong muốn phát triển năng lượng sạch vì môi trường xanh và phát triển bền vững, ông luôn tiên phong trong việc hiện đại hóa quy trình quản lý, đảm bảo mọi hoạt động của RT  Energy theo các quy chuẩn quốc tế. Ông cũng đặt nhiều tâm huyết xây dựng RT Energy trở thành tập đoàn tiên phong trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh trong khu vực ASEAN và trên thế giới.
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="cong-tac">Quá trình công tác:</p>
                                                    <ul>
                                                        <li>Từ cuối năm 2021 đến nay: Tổng giám đốc, Adani Solar và Adani Wind Power Co.,Ltd</li>
                                                        <li>1/2020 đến nay: Tổng Giám đốc, đồng sáng lập RT Energy</li>
                                                        <li>9/2018: Cố vấn trưởng phát triển năng lượng tái tại Tập đoàn thép Đại Dũng</li>
                                                        <li>4/2015: Chủ tịch kiêm Tổng Giám đốc Công ty TNHH Đầu tư và phát triển Clavie</li>
                                                        <li>10/2011-3/2013: Giám đốc đại lý miền Bắc Công ty TNHH Honda Việt Nam</li>
                                                        <li>9/2010-9/2011: Giám đốc Nhà phân phối Công ty TNHH Unilever Việt Nam</li>
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="conver-data man-1">
                                                    <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color: #0F4C81 ">Mr. <b>Ta Anh Tuan <b></b></b></div>
                                                    <div class="detail-content-text" style="color: #0F4C81 ">
                                                        General Director of RT Energy
                                                    </div>
                                                </div>
                                                <div class="detail-leader">
                                                    <p dir="ltr">
                                                        Graduating with a Master of Business Administration from Melbourne Business School - the number 1 university in Australia, Mr. Ta Anh Tuan has experienced many leadership and management positions at large corporations and corporations before joining the company. renewable energy sector. With the desire to develop clean energy for the green environment and sustainable development, he has always been a pioneer in modernizing the management process, ensuring all activities of RT Energy in accordance with international standards. He also put a lot of effort into building RT Energy to become a pioneer in the field of renewable energy and green industrial zones in the ASEAN region and around the world.
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="cong-tac">Experience:</p>
                                                    <ul>
                                                        <li>From the end of 2021 to present: General Director, Adani Solar and Adani Wind Power Co.,Ltd
                                                        </li>
                                                        <li>January 2020 to present: CEO, co-founder of RT Energy
                                                        </li>
                                                        <li>September 2018: Renewable energy consultant at Dai Dung Steel Corporation
                                                        </li>
                                                        <li>April 2015: Chairman and General Director of Clavie Investment and Development Co., Ltd
                                                        </li>
                                                        <li>10/2011-3/2013: Dealer director in the North of Honda Vietnam Co., Ltd
                                                        </li>
                                                        <li>9/2010-9/2011: Distributor Director of Unilever Vietnam Co., Ltd</li>
                                                    </ul>
                                                </div>
                                            @endif


                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="detail-data">
                                <div class="load-detail-data-leader">
                                    <div class="from-image-title">
                                        <div class="image-detail-leader">
                                            <img src="" id="image-leader" style="width: 100%;">
                                        </div>
                                        <div id="title-leader" style="color: #3f2b69; text-align: center;">

                                        </div>
                                        <div id="detail-title-leader" style="color: #3f2b69; text-align: center;">

                                        </div>
                                    </div>
                                    <div class="body-detail-data">
                                        <div id="sub-detail-title-leader" style="color: #3f2b69;">
                                            <h3></h3>
                                        </div>
                                        <div id="content-leader" style="text-align: justify;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="leader-body d-flex">
                        <div id="page-content-wrapper">
                            <div class="leader load-data active-show"
                                 path=""
                                 id="hoi-dong-quan-tri">
                                <div class="anchor-head"></div>

                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-do-minh-phu"
                                         path="">
                                        <div class="body-leader man-2" style="margin-left: 0;">
                                            @if(App::isLocale('vi'))
                                                <div class="conver-data">
                                                    <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color:#0F4C81">Ông<b> Nguyễn Đức Dũng<b></b></b></div>
                                                    <div class="detail-content-text" style="color:#0F4C81;">
                                                        Phó Tổng giám đốc RT Energy
                                                    </div>
                                                </div>
                                                <div class="detail-leader">
                                                    <p>Ông Nguyễn Đức Dũng là doanh nhân dày dặn kinh nghiệm trong lĩnh vực tài chính và giáo dục, từng tham gia đầu tư, quản lý và phát triển nhiều công ty trong các lĩnh vực này, gần đây nhất là lĩnh vực năng lượng tái tạo.
                                                        Ông Dũng luôn tâm huyết với sứ mệnh thay đổi và phát triển những ngành nghề cũ với cách làm và công nghệ mới, với khát vọng đưa RT Energy thành một trong những tập đoàn hàng đầu trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh.
                                                        Ngoài việc tham gia hoạt động đầu tư và quản lý tại các công ty, ông Nguyễn Đức Dũng còn là một giảng viên cao cấp chuyên ngành Tài chính Quốc tế và Đầu tư Quốc tế của Khoa Kinh doanh Quốc tế - Học viện Ngân hàng từ năm 2014. Ông Nguyễn Đức Dũng nhận bằng Thạc sĩ Tài chính Đầu tư tại Đại học Monash, Úc. Trước đó, ông đã hoàn thành bằng Cử nhân Tài chính Ngân hàng với huy chương đồng về chất lượng học tập của trường Đại học London (Anh)

                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="cong-tac">Quá trình công tác:</p>
                                                    <ul>
                                                        <li>1/2020 đến nay: Phó Tổng giám đốc RT Energy
                                                        </li>
                                                        <li>1/2019 đến nay: Tổng giám đốc, Đồng sáng lập Novus Imperium Corporation </li>
                                                        <li>09/2014-12/2020: Giám đốc Tài chính và Tiếp thị Công ty Cổ phần Dược phẩm Hà Nội</li>
                                                        <li>09/2014 đến nay: Giảng viên cao cấp Khoa Kinh doanh Quốc tế - Học viện Ngân hàng – Ngân hàng Nhà nước Việt Nam
                                                        </li>
                                                        <li>09/2011 đến nay: Đồng sáng lập CGD Victory Education Group
                                                            11/2011-09/2014: Quản lý Đầu tư kinh doanh Lãi suất và Forex
                                                        </li>
                                                        <li>2010-11/2011: Kiểm toán viên Ernst and Young Vietnam
                                                        </li>
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="conver-data">
                                                    <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color:#0F4C81">Mr.<b> Nguyen Duc Dung<b></b></b></div>
                                                    <div class="detail-content-text" style="color:#0F4C81;">
                                                        Deputy General Director of RT Energy
                                                    </div>
                                                </div>
                                                <div class="detail-leader">
                                                    <p>Mr. Nguyen Duc Dung is an experienced businessman in the fields of finance and education, having participated in investing, managing and developing many companies in these fields, most recently in the field of renewable energy. .
                                                        He is always dedicated to the mission of changing and developing old industries with new ways and technologies, with the aspiration to turn RT Energy into one of the leading corporations in the field of renewable energy and industrial parks. green.
                                                        In addition to participating in investment and management activities at companies, Mr. Nguyen Duc Dung is also a senior lecturer majoring in International Finance and International Investment of the Faculty of International Business - Banking Academy.
                                                        <br>
                                                        Mr. Nguyen Duc Dung received a Master's degree in Investment Finance from Monash University, Australia. Before that, he completed a Bachelor of Banking and Finance with a bronze medal for academic quality from University College London (UK).
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="cong-tac">Experience:</p>
                                                    <ul>
                                                        <li>January 2020 to present: Deputy General Director of RT Energy</li>
                                                        <li>January 2019 to present: General Director, Co-Founder of Novus Imperium Corporation
                                                        </li>
                                                        <li>09/2014-12/2020: Finance and Marketing Director of Hanoi Pharmaceutical Joint Stock Company
                                                        </li>
                                                        <li>September 2014 to present: Senior Lecturer at Faculty of International Business - Banking Academy - State Bank of Vietnam
                                                        </li>
                                                        <li>September 2011 to present: Co-founder of CGD Victory Education Group
                                                        </li>
                                                        <li>11/2011-09/2014: Interest and Forex Business Investment Manager, Bank for Investment and Development of Vietnam
                                                        </li>
                                                        <li>2010-11/2011: Auditor Ernst and Young Vietnam
                                                        </li>
                                                    </ul>
                                                </div>
                                                @endif

                                        </div>
                                        <div class="img-leader"
                                             data-image="" style="">
                                            <img
                                                src="/site/img/a1.jpg">
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </div>
    </section>

@endsection
@push('scripts')
    <script type='text/javascript' src='/site/js/solar.js'
            id='solar-controlpanel-js'></script>
    <script type='text/javascript' src='/site/js/solar-2.js' id='solar-jqcustom-js'></script>

@endpush
