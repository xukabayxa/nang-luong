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
        <div class="container">
            <section id="primary" class="content-full-width">    <!-- #post-8 -->
                <div class="content-pane-wrap-body">

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
                                                src="/site/system/man.jpg">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color: #0F4C81 ">Ông <b>Tạ Anh Tuấn <b></b></b></div>
                                                <div class="detail-content-text" style="color: #0F4C81 ">
                                                    Tổng Giám đốc RT Energy
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Hơn 10 năm làm việc trong lĩnh vực đầu tư tài
                                                    chính và quản trị doanh nghiệp, ông đã đảm nhận nhiều vị trí quan trọng trong công tác quản lý, điều hành các hoạt động hợp tác, liên kết cũng như các hoạt động thị trường vốn.

                                                </p>.
                                            </div>
                                            <div>
                                                <p>Quá trình công tác:</p>
                                                <ul>
                                                    <li>1/2020 đến nay: Tổng Giám đốc, đồng sáng lập RT Energy</li>
                                                    <li>9/2018: Cố vấn trưởng phát triển năng lượng tái tại Tập đoàn thép Đại Dũng</li>
                                                    <li>4/2015: Chủ tịch kiêm Tổng Giám đốc Công ty TNHH Đầu tư và phát triển Clavie</li>
                                                    <li>10/2011-3/2013: Giám đốc đại lý miền Bắc Công ty TNHH Honda Việt Nam</li>
                                                    <li>9/2010-9/2011: Giám đốc Nhà phân phối Công ty TNHH Unilever Việt Nam</li>
                                                </ul>
                                            </div>
                                            <div>

                                            </div>
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

{{--                    <style>--}}
{{--                        @media screen--}}
{{--                        and (min-device-width: 1200px)--}}
{{--                        and (max-device-width: 1600px)--}}
{{--                        and (-webkit-min-device-pixel-ratio: 1) {--}}
{{--                            .img-leader2 {--}}
{{--                                margin-left: 40px;--}}
{{--                            }--}}
{{--                        }--}}

{{--                        @media only screen--}}
{{--                        and (min-device-width: 320px)--}}
{{--                        and (max-device-width: 480px)--}}
{{--                        and (-webkit-min-device-pixel-ratio: 2) {--}}
{{--                            .img-leader2 {--}}
{{--                                margin-left: 0;--}}
{{--                            }--}}
{{--                        }--}}


{{--                    </style>--}}
                    <div class="leader-body d-flex">
                        <div id="page-content-wrapper">
                            <div class="leader load-data active-show"
                                 path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/hoi-dong-quan-tri/hoi-dong-quan-tri"
                                 id="hoi-dong-quan-tri">
                                <div class="anchor-head"></div>

                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-do-minh-phu"
                                         path="">
                                        <div class="body-leader" style="margin-left: 0; padding-right: 30px">
                                            <div class="conver-data">
                                                <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color:#0F4C81">Ông<b> Saumya Swain<b></b></b></div>
                                                <div class="detail-content-text" style="color:#0F4C81;">
                                                    Nhà đồng sáng lập và Chủ tịch điều hành RT Energy
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Trong gần 20 năm làm việc, ông Saumya Swain đã đảm nhận nhiều vị trí quan trọng về quản lý kinh doanh tại các công ty về bất động sản và công nghệ tại Hàn Quốc và nhiều nước trên thế giới. Đặc biệt, với hơn 10 năm kinh nghiệm trong lĩnh vực năng lượng tái tạo,  ông có đóng góp lớn trong việc phát triển Equis Energy- công ty sản xuất năng lượng tái tạo lớn nhất tại khu vực Châu Á - Thái Bình Dương với hơn 180 chi nhánh trong lĩnh vực năng lượng mặt trời, gió và phát điện hydro rộng khắp các quốc gia như Úc, Nhật, Ấn Độ và Philippines…
                                                </p>
                                            </div>
                                            <div>
                                                <p>Quá trình công tác:</p>
                                                <ul>
                                                    <li>6/2020 đến nay: Sáng lập và điều hành RT Energy PTE LTD-Singapore</li>
                                                    <li>8/2019-5/2020: Giám đốc quản lý Indefol Solar</li>
                                                    <li>12/2012-12/2020: Làm việc trong lĩnh vực năng lượng tái tạo tại Equis Energy</li>
                                                </ul>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div class="img-leader"
                                             data-image="" style="">
                                            <img
                                                src="/site/system/man.jpg">
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
                                                src="/site/system/man.jpg">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="content-text" data-content="Ông Đỗ Minh Phú" style="padding: 0; color:#0F4C81">Ông<b> Nguyễn Dũng <b></b></b></div>
                                                <div class="detail-content-text">
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Hơn 10 năm làm việc trong lĩnh vực đầu tư tài
                                                    chính và quản trị doanh nghiệp, ông đã đảm nhận nhiều vị trí quan trọng trong công tác quản lý, điều hành các hoạt động hợp tác, liên kết cũng như các hoạt động thị trường vốn.

                                                </p>
                                            </div>
                                            <div>
                                                <p>Quá trình công tác:</p>
                                                <ul>
                                                    <li>1/2020 đến nay: Đồng sáng lập, Giám đốc điều hành Công ty cổ phần Novus Imperium </li>
                                                    <li>9/2014-12/2020: Giám đốc tiếp thị và Tài chính Công ty cổ phần dược phẩm Hà Nội</li>
                                                    <li>9/2014: Giảng viên cao cấp Học viện Ngân hàng</li>
                                                </ul>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="leader load-data"
                                 path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-kiem-soat/ban-kiem-soat"
                                 id="ban-kiem-soat">
                                <div class="anchor-head"></div>

                                <div class="data-title group-title" data-title="BAN KIỂM SOÁT">
                                    <h3>
                                        BAN KIỂM SOÁT
                                    </h3>
                                </div>

                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-nguyen-thi-bao"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-kiem-soat/nguyen-thi-bao">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/dc585565-242e-4cf9-87f6-43676a778cf7/Nguyen-Thi-Bao.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-dc585565-242e-4cf9-87f6-43676a778cf7-nLunkPo">
                                            <img
                                                src="/wps/wcm/connect/dc585565-242e-4cf9-87f6-43676a778cf7/Nguyen-Thi-Bao.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-dc585565-242e-4cf9-87f6-43676a778cf7-nLunkPo">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Bà Nguyễn Thị Bảo">Bà <b>Nguyễn
                                                        Thị Bảo<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Trưởng Ban Kiểm soát
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;">
                                                    Bà Nguyễn Thị Bảo được bổ nhiệm vị trí Trưởng&nbsp;Ban Kiểm soát
                                                    nhiệm kỳ 2018-2023.</p>

                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;">
                                                    Bà Nguyễn Thị Bảo là Cố vấn cao cấp Hội đồng Quản trị TPBank từ
                                                    tháng 4/2012. Trước đây bà từng đảm nhiệm nhiều vị trí quan trọng
                                                    như Phó Giám đốc Sở giao dịch Ngân hàng Ngoại thương Việt Nam
                                                    (Vietcombank), Trưởng phòng Thẩm định đầu tư và chứng khoán của
                                                    Vietcombank.</p>

                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    Bà Nguyễn Thị Bảo là Thạc sỹ Quản trị kinh doanh, Trường Đại học Tự
                                                    do Bruxelle, Vương quốc Bỉ, tại Hà Nội</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-kiem-soat/nguyen-thi-bao"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-thi-thu-nguyet"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-kiem-soat/nguyen-thi-thu-nguyet">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/4b63daab-2592-4dcb-97aa-e5c7d44469b5/Nguyen-Thi-Thu-Nguyet.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-4b63daab-2592-4dcb-97aa-e5c7d44469b5-nIQXtaS">
                                            <img
                                                src="/wps/wcm/connect/4b63daab-2592-4dcb-97aa-e5c7d44469b5/Nguyen-Thi-Thu-Nguyet.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-4b63daab-2592-4dcb-97aa-e5c7d44469b5-nIQXtaS">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Bà Nguyễn Thị Thu Nguyệt">Bà <b>Nguyễn
                                                        Thị Thu Nguyệt<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Thành viên Ban Kiểm soát không chuyên trách
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">&nbsp;</p>

                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;">
                                                    Bà Nguyễn Thị Thu Nguyệt được bổ nhiệm vị trí Thành viên BKS không
                                                    chuyên trách nhiệm kì 2018 – 2023</p>

                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;">
                                                    Bà&nbsp;Nguyễn Thị Thu Nguyệt đang giữ chức vụ Tổng Giám đốc - Công
                                                    ty Cổ phần Quản lý Quỹ Đầu tư FPT.</p>

                                                <p dir="ltr"
                                                   style="margin: 0px 0px 10px; line-height: 1.5; color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    Bà Nguyễn Thị Thu Nguyệt là Thạc sỹ Luật Quốc tế - Trường Đại học
                                                    Quốc Gia Hà Nội.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-kiem-soat/nguyen-thi-thu-nguyet"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-thai-duy-nghia"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-kiem-soat/thai-duy-nghia">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/b9e462a4-1458-41b9-b3d1-4ca1cee4dba9/Thai-Duy-Nghia.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b9e462a4-1458-41b9-b3d1-4ca1cee4dba9-nIQXwid">
                                            <img
                                                src="/wps/wcm/connect/b9e462a4-1458-41b9-b3d1-4ca1cee4dba9/Thai-Duy-Nghia.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b9e462a4-1458-41b9-b3d1-4ca1cee4dba9-nIQXwid">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Thái Duy Nghĩa">Ông<b> Thái
                                                        Duy Nghĩa<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Thành viên Ban Kiểm soát
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr"><span
                                                        style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">Ông Thái Duy Nghĩa được bầu là Thành viên Ban Kiểm soát &nbsp;nhiệm kỳ 2013-2018.</span><br
                                                        style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    <br style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    <span
                                                        style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">Ông Thái Duy Nghĩa gia nhập TPBank từ tháng 06/2008 và từng đảm nhiệm nhiều vị trí: Trưởng phòng Kiểm soát nội bộ và Quản lý chất lượng, Trưởng phòng kiểm soát trực tiếp, Phó trưởng ban Kiểm toán nội bộ. Hiện tại ông đang là thành viên chuyên trách của Ban Kiểm soát, Ngân hàng Tiên Phong.&nbsp;</span><br
                                                        style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    <br style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">
                                                    <span
                                                        style="color: rgb(75, 75, 75); font-family: MyriadProRegular, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;">Ông tốt nghiệp khoa Tài chính – Tín dụng, Học viện Ngân hàng</span>
                                                </p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-kiem-soat/thai-duy-nghia"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(".leader-box").each(function () {
                                            var content = $(this).find('.body-leader .content-text').data('content');
                                            var firstContent = content.substring(0, 3);
                                            var secondContent = content.substring(3);
                                            if (firstContent == "Ông" || firstContent == "Bà ") {
                                                var subContent = firstContent + "<b>" + secondContent + "<b>";
                                                $(this).find('.body-leader .content-text').html(subContent);
                                            } else {
                                                $(this).find('.body-leader .content-text').html("<b>" + content + "<b>");
                                            }
                                            var path = $(this).attr("path");
                                            if (path != undefined) {
                                                path = path.replace('/tpbank_data/sa-website', '');
                                                path = path.replace('/vn/', '/');
                                                $(this).find('a').attr('href', path);
                                            }
                                        });

                                    </script>
                                </div>

                            </div>
                            <div class="leader load-data"
                                 path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/ban-dieu-hanh"
                                 id="ban-dieu-hanh">
                                <div class="anchor-head"></div>

                                <div class="data-title group-title" data-title="BAN ĐIỀU HÀNH">
                                    <h3>
                                        BAN ĐIỀU HÀNH
                                    </h3>
                                </div>

                                <div class="group-body" style="overflow: hidden;">
                                    <div class="leader-box" id="group-nguyen-hung"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-hung">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/bdcd7b32-d7be-451c-abc6-586a1dda8770/Nguyen-Hung.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-bdcd7b32-d7be-451c-abc6-586a1dda8770-nWbwAIS">
                                            <img
                                                src="/wps/wcm/connect/bdcd7b32-d7be-451c-abc6-586a1dda8770/Nguyen-Hung.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-bdcd7b32-d7be-451c-abc6-586a1dda8770-nWbwAIS">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Hưng">Ông<b> Nguyễn
                                                        Hưng<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Tổng Giám đốc
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Nguyễn Hưng được bổ nhiệm chức Tổng Giám đốc Ngân hàng
                                                    TMCP&nbsp;Tiên Phong từ ngày 04/07/2012. Ông Nguyễn Hưng có hơn 20
                                                    năm kinh nghiệm làm quản lý cấp cao trong lĩnh vực Tài chính ngân
                                                    hàng.</p>

                                                <p dir="ltr">Từng tốt nghiệp Học viện Ngân hàng và là Thạc sĩ Quản trị
                                                    kinh doanh chuyên ngành Thương mại điện tử, North Central
                                                    University, Hoa Kỳ, ông Nguyễn Hưng từng đảm nhiệm nhiều chức vụ
                                                    quản lý chủ chốt như: Tổng Giám đốc Ngân hàng Việt Nam Thịnh Vượng
                                                    (VPBank) từ 04/2009 đến 06/2012, giữ nhiều chức vụ quản lý tại Ngân
                                                    hàng TMCP Kỹ Thương Việt Nam (Techcombank) trong thời gian từ năm
                                                    2000 đến năm 2009.</p>

                                                <p dir="ltr">Với những đóng góp quan trọng trong việc tái cơ cấu TPBank
                                                    trở thành&nbsp;một ngân hàng lành mạnh, hoạt động hiệu quả hàng đầu
                                                    hiện nay, ông&nbsp;Nguyễn Hưng đã được Thống đốc NHNN Việt Nam tặng
                                                    Bằng khen cho&nbsp;cá nhân đã có thành tích xuất sắc trong việc
                                                    triển khai thực hiện Đề án&nbsp;“Cơ cấu lại hệ thống các tổ chức tín
                                                    dụng giai đoạn 2011-2015</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-hung"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-truong-thi-hoang-lan"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/truong-thi-hoang-lan">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/69e2b718-a67e-4916-9760-fb815801f0f5/%E1%BA%A2nh+web+c+Ho%C3%A0ng+Lan-23.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-69e2b718-a67e-4916-9760-fb815801f0f5-o30lhYD">
                                            <img
                                                src="/wps/wcm/connect/69e2b718-a67e-4916-9760-fb815801f0f5/%E1%BA%A2nh+web+c+Ho%C3%A0ng+Lan-23.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-69e2b718-a67e-4916-9760-fb815801f0f5-o30lhYD">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Bà Trương Thị Hoàng Lan">Bà <b>Trương
                                                        Thị Hoàng Lan<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Đầu tư và Khách hàng doanh nghiệp lớn
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Bà Trương Thị Hoàng Lan gia nhập TPBank từ tháng 02/2011.
                                                    Trải qua nhiều vị trí quản lý cấp cao tại TPBank, bà Hoàng Lan được
                                                    bổ nhiệm chức danh Giám đốc Khối Đầu tư và Ngân hàng lưu ký từ tháng
                                                    5/2015.&nbsp;Đến tháng 12/2016, bà Hoàng Lan được bổ nhiệm chức danh
                                                    Giám đốc Khối Đầu tư và Khách hàng Doanh nghiệp lớn.</p>

                                                <p dir="ltr">Tháng 09/2014, Bà Trương Thị Hoàng Lan đã vinh dự được
                                                    Thống đốc NHNN tặng Bằng khen cho cá nhân “Đã có thành tích xuất sắc
                                                    góp phần hoàn thành nhiệm vụ Ngân hàng 2012-2013”.</p>

                                                <p dir="ltr">Bà Hoàng Lan đã có hơn 12 năm kinh nghiệm trong lĩnh vực
                                                    tài chính ngân hàng. Trước khi gia nhập TPBank, bà từng giữ vị trí
                                                    Tổng Giám đốc công ty chứng khoán Việt Tín.</p>

                                                <p dir="ltr">Bà Hoàng Lan là cử nhân ngành Khoa học quản lý tại Đại học
                                                    Thăng Long.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/truong-thi-hoang-lan"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-dinh-van-chien"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/dinh-van-chien">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/b0422a69-84c9-4174-8e06-b872b23e54e7/Dinh-Van-Chien.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b0422a69-84c9-4174-8e06-b872b23e54e7-o2O3do2">
                                            <img
                                                src="/wps/wcm/connect/b0422a69-84c9-4174-8e06-b872b23e54e7/Dinh-Van-Chien.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b0422a69-84c9-4174-8e06-b872b23e54e7-o2O3do2">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Đinh Văn Chiến">Ông<b> Đinh
                                                        Văn Chiến<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Ngân hàng cá nhân
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Đinh Văn Chiến được bổ nhiệm chức danh Giám đốc Khối
                                                    Ngân hàng Cá nhân từ ngày 04/12/2013. Từ tháng 4/2016, Ông Chiến
                                                    được bổ nhiệm chức danh PTGĐ phụ trách khối Ngân hàng cá nhân).</p>

                                                <p dir="ltr">Trước khi gia nhập TPBank, ông Chiến có bề dày hơn 18 năm
                                                    kinh nghiệm làm việc trong các lĩnh vực Tài chính ngân hàng và
                                                    Marketing, đảm nhiệm nhiều vị trí khác nhau tại các tổ chức trong
                                                    nước và quốc tế như: Phó Giám đốc Trung tâm Thẻ, Giám đốc Dự án Thẻ
                                                    Visa/ Master, Vietcombank; Giám đốc Marketing tại Công ty Johnson
                                                    &amp; Johnson Việt Nam; Quản lý cao cấp tại Ngân hàng OCBC
                                                    (Singapore) mảng Dịch vụ Tư vấn tài chính cá nhân toàn cầu; Giám đốc
                                                    Trung tâm Phát triển Sản phẩm thuộc Khối Ngân hàng bán lẻ tại VPBank
                                                    từ năm 2011.</p>

                                                <p dir="ltr">Ông Chiến là Cử nhân Đại học Ngoại thương; Thạc sỹ Tài
                                                    chính Ngân hàng tại trường ĐH Notre Dame, Indiana, Hoa Kỳ theo
                                                    chương trình học bổng Fulbright.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/dinh-van-chien"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-viet-anh"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-viet-anh">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/f4cebf1d-d23b-4e95-8484-727e88b82916/Nguyen-Viet-Anh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-f4cebf1d-d23b-4e95-8484-727e88b82916-nWgPdHQ">
                                            <img
                                                src="/wps/wcm/connect/f4cebf1d-d23b-4e95-8484-727e88b82916/Nguyen-Viet-Anh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-f4cebf1d-d23b-4e95-8484-727e88b82916-nWgPdHQ">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Việt Anh">Ông<b>
                                                        Nguyễn Việt Anh<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Nguồn vốn &amp; Thị trường tài chính
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Nguyễn Việt Anh được bổ nhiệm làm Phó Tổng Giám đốc,
                                                    Giám đốc Khối Nguồn vốn và Thị trường tài chính tiền tệ từ tháng
                                                    03/2011.</p>

                                                <p dir="ltr">Ông Việt Anh là Thạc sỹ Quản trị Kinh doanh, Đại học Tổng
                                                    hợp bang Washington, Hoa Kỳ. Trước đó, ông tốt nghiệp Đại học Quốc
                                                    gia Hà Nội và Học viện Quan hệ Quốc tế.</p>

                                                <p dir="ltr">Trước khi tham gia Ngân hàng Tiên Phong, Ông Việt Anh đã có
                                                    hơn 10 năm kinh nghiệm làm việc tại Techcombank và đảm nhiệm các vị
                                                    trí quan trọng như: Quyền Giám đốc Khối Quản lý Nguồn vốn và Giao
                                                    dịch Thị trường Tài chính; Tổng Giám đốc công ty Quản lý quỹ Kỹ
                                                    Thương; Giám đốc Trung tâm Ngoại hối và Sản phẩm Phái sinh; Giám đốc
                                                    Trung tâm Giao dịch Hàng hóa và Quản lý Sàn&nbsp;Giao dịch; Trưởng
                                                    Phòng Quản lý và Kinh doanh Tiền tệ, Ngoại hối.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-viet-anh"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-khuc-van-hoa"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/khuc-van-hoa">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/7895be1f-e3c6-4b52-bb96-cf988b07001d/Khuc-Van-Hoa.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-7895be1f-e3c6-4b52-bb96-cf988b07001d-nWgPK.e">
                                            <img
                                                src="/wps/wcm/connect/7895be1f-e3c6-4b52-bb96-cf988b07001d/Khuc-Van-Hoa.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-7895be1f-e3c6-4b52-bb96-cf988b07001d-nWgPK.e">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Khúc Văn Họa">Ông<b> Khúc
                                                        Văn Họa<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Ngân hàng Doanh nghiệp
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Khúc Văn Họa được bổ nhiệm chức danh Phó Tổng Giám đốc
                                                    kiêm Giám&nbsp;đốc Khối Bán hàng và Kênh Phân phối từ ngày
                                                    15/09/2012. Từ tháng 6/2015, ông Họa được bổ nhiệm chức danh Phó
                                                    Tổng Giám đốc kiêm Giám đốc khối Ngân hàng doanh nghiệp.<br>
                                                    <br>
                                                    Ông Họa là Thạc sỹ Quản trị kinh doanh tại Trung tâm Pháp Việt đào
                                                    tạovề Quản lý (CFVG). Trước khi gia nhập TPBank, ông Họa từng đảm
                                                    nhiệm nhiều chức vụ quản lý quan trọng tại Ngân hàng TMCP Kỹ thương
                                                    Việt Nam (Techcombank) và Ngân hàng Quân Đội (MB) như: Phó Giám đốc
                                                    Khối Quản trị Rủi ro, Giám đốc Trung tâm tín dụng SME, Giám đốc Vùng
                                                    của Techcombank, Phó Giám đốc Khối Khách hàng doanh nghiệp lớn của
                                                    MB.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/khuc-van-hoa"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-pham-dong-anh"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/pham-dong-anh">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/3d602f0f-fbe3-46a8-9547-d8df89e05728/Pham-Dong-Anh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-3d602f0f-fbe3-46a8-9547-d8df89e05728-nWgQp.M">
                                            <img
                                                src="/wps/wcm/connect/3d602f0f-fbe3-46a8-9547-d8df89e05728/Pham-Dong-Anh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-3d602f0f-fbe3-46a8-9547-d8df89e05728-nWgQp.M">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Phạm Đông Anh">Ông<b> Phạm
                                                        Đông Anh<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc khối vận hành
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Phạm Đông Anh gia nhập Ngân hàng Tiên Phong năm 2007 từ
                                                    những ngày đầu thành lập dự án.</p>

                                                <p dir="ltr">Năm 2010, ông Đông Anh được bổ nhiệm Giám đốc Cao cấp phụ
                                                    trách Nghiệp vụ. Tháng 04/2011 được bổ nhiệm Phó Tổng Giám đốc và
                                                    phụ trách Khối Nghiệp vụ, Khối Nguồn lực và Phát triển Mạng
                                                    lưới.</p>

                                                <p dir="ltr">Từ tháng 8/2012 đến nay, ông Đông Anh là Phó Tổng Giám đốc
                                                    kiêm Giám đốc khối Vận hành.</p>

                                                <p dir="ltr">Tháng 9/2014, ông Phạm Đông Anh đã&nbsp; vinh dự được Thống
                                                    đốc NHNN tặng Bằng khen cho cá nhân “Đã có thành tích xuất sắc góp
                                                    phần hoàn thành nhiệm vụ Ngân hàng 2012-2013”</p>

                                                <p dir="ltr">Tốt nghiệp Khoa Tài chính - Ngân hàng, Đại học Kinh tế Quốc
                                                    dân và khoa Tiếng Anh,&nbsp; Đại học Hà nội, trước khi gia nhập
                                                    TPBank, ông Đông Anh đã có 14 năm làm việc tại Ngân hàng VID Public
                                                    Bank và giữ các vị trí Quản lý Cấp cao như: Giám đốc Chi nhánh VID
                                                    Public Bank Hải Phòng, Giám đốc Sở Giao dịch VID Public Bank Hà
                                                    Nội.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/pham-dong-anh"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-bui-quang-cuong"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/bui-quang-cuong">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/b8a9b163-6a39-4e72-b90a-931891c0ddae/Bui-Quang-Cuong.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b8a9b163-6a39-4e72-b90a-931891c0ddae-o2O844s">
                                            <img
                                                src="/wps/wcm/connect/b8a9b163-6a39-4e72-b90a-931891c0ddae/Bui-Quang-Cuong.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-b8a9b163-6a39-4e72-b90a-931891c0ddae-o2O844s">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Bùi Quang Cương">Ông<b> Bùi
                                                        Quang Cương<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Công nghệ thông tin
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Bùi Quang Cương gia nhập Ngân hàng từ thời gian đầu
                                                    thành lập dự án tháng 05/2007.</p>

                                                <p dir="ltr">Ông Cương từng giữ các chức vụ quan trọng như: Giám đốc
                                                    Trung tâm CNTT, Quyền Giám đốc Trung tâm Thẻ và Ngân hàng Điện tử
                                                    của TPBank. Hiện tại, ông Cương đảm nhiệm vị trí Giám đốc Khối Công
                                                    nghệ Thông tin (CNTT).</p>

                                                <p dir="ltr">Tháng 9/2014, ông Bùi Quang Cương vinh dự được Thống đốc
                                                    NHNN tặng Bằng khen cho cá nhân “Đã có thành tích xuất sắc góp phần
                                                    hoàn thành nhiệm vụ Ngân hàng 2012-2013”.</p>

                                                <p dir="ltr">Ông Cương có hơn 22 năm kinh nghiệm trong lĩnh vực ngân
                                                    hàng và CNTT. Trước khi gia nhập TPBank, ông từng đảm nhiệm các vị
                                                    trí như Giám đốc Trung tâm phần mềm, Công ty 3C; Trưởng phòng tin
                                                    học, Ngân hàng VID Public Bank.</p>

                                                <p dir="ltr">Ông Cương là Cử nhân Khoa học, Đại học Tổng hợp Hà Nội</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/bui-quang-cuong"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-hong-quan"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-hong-quan">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/6cfac0e3-5fd2-49be-b6c2-fc4f807aeae7/Nguyen-Hong-Quan+%281%29.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-6cfac0e3-5fd2-49be-b6c2-fc4f807aeae7-nWgRPzG">
                                            <img
                                                src="/wps/wcm/connect/6cfac0e3-5fd2-49be-b6c2-fc4f807aeae7/Nguyen-Hong-Quan+%281%29.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-6cfac0e3-5fd2-49be-b6c2-fc4f807aeae7-nWgRPzG">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Hồng Quân">Ông<b>
                                                        Nguyễn Hồng Quân<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Quản trị rủi ro
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Nguyễn Hồng Quân được bổ nhiệm là Phó Tổng Giám đốc
                                                    kiêm Giám đốc Khối Quản trị rủi ro của TPBank từ ngày 01/02/2012.
                                                    Trước khi gia nhập TPBank, ông Quân đã có hơn 15 năm kinh nghiệm làm
                                                    việc trong lĩnh vực tài chính ngân hàng và đảm nhiệm các vị trí quan
                                                    trọng trong các ngân hàng thương mại và ngân hàng đầu tư. Ông từng
                                                    là Giám đốc Quản trị Rủi ro, Phó Giám đốc về Tuân thủ và Kiểm soát
                                                    nội bộ, Citibank Việt Nam; Quyền Tổng Giám đốc Công ty Chứng Khoán
                                                    An Bình.&nbsp;<br>
                                                    <br>
                                                    Ông Quân là Thạc sĩ Quản trị Kinh doanh cao cấp&nbsp;(EMBA) tại Học
                                                    viện Công nghệ Châu Á (AIT). Trước đó, ông tốt nghiệp ngành Thương
                                                    mại Quốc tế, Đại học Ngoại Thương Hà Nội và là Kỹ sư Kinh tế, khoa&nbsp;Kinh
                                                    tế Vận tải, Đại học Giao thông Hà Nội.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-hong-quan"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-le-hong-nam"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/le-hong-nam">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/c174cd03-eb3c-4af4-8e6d-0b305c025592/Le-Hong-Nam.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-c174cd03-eb3c-4af4-8e6d-0b305c025592-nWgSlG7">
                                            <img
                                                src="/wps/wcm/connect/c174cd03-eb3c-4af4-8e6d-0b305c025592/Le-Hong-Nam.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-c174cd03-eb3c-4af4-8e6d-0b305c025592-nWgSlG7">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Lê Hồng Nam">Ông<b> Lê Hồng
                                                        Nam<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Phó TGĐ - Giám đốc Khối Tín dụng
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Lê Hồng Nam gia nhập TPBank vào tháng 01/2009&nbsp;với
                                                    vị&nbsp;trí Giám đốc chi nhánh TP. HCM. Tháng 03/2012, ông được bổ
                                                    nhiệm Phó Tổng Giám đốc - phụ trách khu vực phía Nam; sau đó được bổ
                                                    nhiệm vào vị trí Phó Tổng Giám đốc kiêm Giám đốc Khối Tín dụng.</p>

                                                <p dir="ltr">Tốt nghiệp Thạc&nbsp;sỹ Kinh tế, ông Nam có hơn 20 năm kinh
                                                    nghiệm làm việc trong lĩnh vực Tài chính - Ngân hàng và đã trải qua
                                                    các vị trí quản&nbsp;lý cấp cao tại các Tổ chức Tín dụng trong và
                                                    ngoài nước như: Trưởng phòng Tín dụng &amp; Đầu tư Hội Sở - Ngân
                                                    hàng LD Shinhan Vina; Giám đốc chi nhánh TP. HCM - Ngân hàng TMCP
                                                    Dầu khí Toàn Cầu; Phó Tổng Giám đốc - Ngân hàng TMCP Phát triển Mê
                                                    Kông.</p>

                                                <p dir="ltr">Năm 2016, ông Lê Hồng Nam đã vinh dự được Thống đốc NHNN
                                                    tặng bằng khen cá nhân "Đã có thành tích xuất sắc góp phần hoàn
                                                    thành nhiệm vụ Ngân hàng 2014 - 2015.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/le-hong-nam"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-dinh-thi-hang-huong"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/dinh-thi-hang-huong">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/7185f057-f24a-4e1a-82cb-479e6c820c1b/Dinh-Thi-Hang-Huong.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-7185f057-f24a-4e1a-82cb-479e6c820c1b-nWgThpW">
                                            <img
                                                src="/wps/wcm/connect/7185f057-f24a-4e1a-82cb-479e6c820c1b/Dinh-Thi-Hang-Huong.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-7185f057-f24a-4e1a-82cb-479e6c820c1b-nWgThpW">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Bà Đinh Thị Hằng Hương">Bà <b>Đinh
                                                        Thị Hằng Hương<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Giám Đốc Khối Bán Trực Tiếp
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Bà Đinh Thị Hằng Hương gia nhập TPBank từ tháng 02/2015. Bà
                                                    được bổ nhiệm chức danh Phó Giám đốc Khối Ngân hàng cá nhân từ tháng
                                                    3/2018 phụ trách mảng Quản lý bán hàng và phát triển kinh doanh bảo
                                                    hiểm. Đến tháng 04/2019, bà Hương được bổ nhiệm là Giám đốc Khối Bán
                                                    Trực tiếp.</p>

                                                <p dir="ltr">Trước đó, bà Hằng Hương đã có nhiều năm kinh nghiệm quản
                                                    lý, phát triển kinh doanh trong nghành tài chính ngân hàng và đảm
                                                    nhiệm nhiều vị trí quan trọng như: Giám đốc trung tâm Quản lý và
                                                    Phát triển kinh doanh Bán trực tiếp, Giám đốc Quản lý kinh doanh
                                                    khối NHCN của MaritimeBank, Giám đốc kinh doanh vùng Hà Nội, kênh
                                                    trực tiếp công ty tài chính Prudential Finance.</p>

                                                <p dir="ltr">Bà là cử nhân ngành Kinh tế tại Đại học Quốc Gia Hà
                                                    Nội.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/dinh-thi-hang-huong"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-lam-hoang"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-lam-hoang">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/3d7556f9-f859-4097-afb1-6581817dc582/Nguyen-Lam-Hoang.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-3d7556f9-f859-4097-afb1-6581817dc582-nWgTTim">
                                            <img
                                                src="/wps/wcm/connect/3d7556f9-f859-4097-afb1-6581817dc582/Nguyen-Lam-Hoang.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-3d7556f9-f859-4097-afb1-6581817dc582-nWgTTim">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Lâm Hoàng">Ông<b>
                                                        Nguyễn Lâm Hoàng<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Giám đốc Khối Tài Chính
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Nguyễn Lâm Hoàng được bổ nhiệm chức vụ Giám đốc Khối
                                                    Tài chính&nbsp;từ ngày tháng&nbsp;04/2019.</p>

                                                <p dir="ltr">Trước đó, ông đã có nhiều năm kinh nghiệm trong lĩnh vực
                                                    tài chính ngân hàng và đảm nhiệm nhiều chức vụ quản lý quan trọng
                                                    tại Techcombank như: Trưởng phòng Kế hoạch Tổng hợp; Giám đốc Bán lẻ
                                                    miền Bắc thuộc Khối Dịch vụ khách hàng Tài chính cá nhân; Trưởng Dự
                                                    án SSP miền Bắc kiêm Phó Giám đốc Trung tâm SSE, Khối S&amp;D; Giám
                                                    đốc Trung tâm Bán, Khối S&amp;D. Giám đốc Khối Bán Trực Tiếp tại
                                                    TPBank</p>

                                                <p dir="ltr">Ông Hoàng là Thạc sỹ Quản trị Kinh doanh, Trung tâm Pháp
                                                    Việt đào tạo về quản lý (CFVG).</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-lam-hoang"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-huu-thanh"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-huu-thanh">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/f04a9856-3425-4924-9cd4-dafc4e4f9f6c/Nguyen-Huu-Thanh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-f04a9856-3425-4924-9cd4-dafc4e4f9f6c-nWgUt2Z">
                                            <img
                                                src="/wps/wcm/connect/f04a9856-3425-4924-9cd4-dafc4e4f9f6c/Nguyen-Huu-Thanh.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-f04a9856-3425-4924-9cd4-dafc4e4f9f6c-nWgUt2Z">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Hữu Thanh">Ông<b>
                                                        Nguyễn Hữu Thanh<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Giám đốc khối Pháp chế, Giám sát và xử lý nợ
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr"
                                                   style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in">
                                                    <span
                                                        style="font-family:&quot;Helvetica&quot;,sans-serif;color:#4B4B4B">Ông Nguyễn Hữu Thanh gia nhập TPBank từ tháng 5/2011, được bổ nhiệm chức danh Giám đốc Khối Pháp chế, Giám sát và Xử lý nợ từ ngày 16/6/2014.<o:p></o:p></span>
                                                </p>

                                                <p dir="ltr" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in;
font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2;text-align:
start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;
text-decoration-style: initial;text-decoration-color: initial;word-spacing:
0px"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#4B4B4B">Ông Thanh có hơn 15 năm kinh nghiệm trong lĩnh vực Pháp chế ngân hàng. Trước khi gia nhập TPBank, ông Thanh từng làm việc tại Ngân hàng Nhà nước, sau đó giữ vị trí Phó phòng Pháp chế và Kiểm soát tuân thủ tại Techcombank.<o:p></o:p></span>
                                                </p>

                                                <p dir="ltr" style="margin-top:0in;margin-right:0in;margin-bottom:7.5pt;margin-left:0in;
text-align:justify;font-variant-ligatures: normal;font-variant-caps: normal;
orphans: 2;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial;
text-decoration-style: initial;text-decoration-color: initial;word-spacing:
0px"><span style="font-family:&quot;Helvetica&quot;,sans-serif;color:#4B4B4B">Ông Thanh là Thạc sỹ Luật, Viện Nhà nước và Pháp luật; Thạc sỹ Chính sách công, Đại học Tsukuba, Nhật Bản<o:p>.</o:p></span>
                                                </p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-huu-thanh"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leader-box" id="group-nguyen-xuan-thanh"
                                         path="/tpbank_data/sa-website/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-xuan-thanh">
                                        <div class="img-leader"
                                             data-image="/wps/wcm/connect/fab79655-ccb5-47e5-9523-5b907c248cb4/a+THanh+nh%C3%A2n+s%E1%BB%B1-01.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-fab79655-ccb5-47e5-9523-5b907c248cb4-o30ldZy">
                                            <img
                                                src="/wps/wcm/connect/fab79655-ccb5-47e5-9523-5b907c248cb4/a+THanh+nh%C3%A2n+s%E1%BB%B1-01.png?MOD=AJPERES&amp;CACHEID=ROOTWORKSPACE-fab79655-ccb5-47e5-9523-5b907c248cb4-o30ldZy">
                                        </div>
                                        <div class="body-leader">
                                            <div class="conver-data">
                                                <div class="push-data"><h3></h3></div>
                                                <div class="content-text" data-content="Ông Nguyễn Xuân Thanh">Ông<b>
                                                        Nguyễn Xuân Thanh<b></b></b></div>
                                                <div class="detail-content-text">
                                                    Giám Đốc Khối Quản Trị Nguồn Nhân Lực
                                                </div>
                                            </div>
                                            <div class="detail-leader">
                                                <p dir="ltr">Ông Nguyễn Xuân Thanh gia nhập TPBank từ tháng 06/2014 với
                                                    vị trí Giám đốc Khối Quản trị Nguồn Nhân lực. Trước đó, ông Thanh đã
                                                    có hơn 14 năm kinh nghiệm trong lĩnh vực Quản trị Nguồn nhân lực tại
                                                    Techcombank và VPBank ở các vị trí quan trọng như: Giám đốc Nhân sự,
                                                    Giám đốc Đào tạo. Gần đây nhất, ông Thanh giữ chức vụ Giám đốc Nhân
                                                    sự tại Ngân hàng TMCP Phát triển Thành phố Hồ Chí Minh (HDBank). Ông
                                                    Thanh là Cử nhân Kinh tế Lao động, Đại học Kinh tế Quốc dân.</p>

                                            </div>
                                            <div class="link">
                                                <a href="/ve-tpbank/ban-lanh-dao/ban-dieu-hanh/nguyen-xuan-thanh"
                                                   class="show-detail">Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(".leader-box").each(function () {
                                            var content = $(this).find('.body-leader .content-text').data('content');
                                            var firstContent = content.substring(0, 3);
                                            var secondContent = content.substring(3);
                                            if (firstContent == "Ông" || firstContent == "Bà ") {
                                                var subContent = firstContent + "<b>" + secondContent + "<b>";
                                                $(this).find('.body-leader .content-text').html(subContent);
                                            } else {
                                                $(this).find('.body-leader .content-text').html("<b>" + content + "<b>");
                                            }
                                            var path = $(this).attr("path");
                                            if (path != undefined) {
                                                path = path.replace('/tpbank_data/sa-website', '');
                                                path = path.replace('/vn/', '/');
                                                $(this).find('a').attr('href', path);
                                            }
                                        });

                                    </script>
                                </div>

                            </div>
                            <script>
                                $('#hoi-dong-quan-tri').addClass('active-show');
                                $('.sub-menu-mobile .list-sub-menu #group-hoi-dong-quan-tri').addClass('active-show-color');
                                var subMenu = $('.sub-menu');
                                $(".leader.load-data").each(function () {
                                    var title = $('.active-show').find('.data-title.group-title').data('title');
                                    $(".push-data h3").first().html(title);
                                    $("#name-title-content").html(title);
                                    var current = $(this);
                                    var path = $(this).attr("path");
                                    var fullPath = "/wps/wcm/connect" + path + "?source=library&srv=cmpnt&cmpntid=2476f9de-4995-4235-8c84-5e4b884c66cb";

                                    $.ajax({
                                        type: "GET",
                                        url: fullPath,
                                        async: false,
                                        success: function (text) {
                                            current.find(".group-body").html(text);
                                        }
                                    });
                                });

                                function myFunction(e) {
                                    $('.detail-data').removeClass('active-show');
                                    $('.load-data').removeClass('active-show');
                                    $('.sub-menu-active').removeClass('active-show-color');
                                    $('#' + e).addClass('active-show');
                                    $('.' + e).addClass('active-show-color');
                                    var title = $('.active-show').find('.data-title.group-title').data('title');
                                    $(".push-data:first-child h3").html(title);
                                    $("#name-title-content").html(title);
                                }

                                function showDetail(e) {
                                    $('.load-data').removeClass('active-show');
                                    $('.detail-data').addClass('active-show');
                                    var content = $('#' + e).find('.body-leader .detail-leader').html();
                                    var title = $('#' + e).find('.body-leader .content-text').html();
                                    var detailTitle = $('#' + e).find('.body-leader .detail-content-text').html();
                                    var image = $('#' + e).find('.img-leader').data('image');
                                    $('#image-leader').attr("src", image);
                                    $('#title-leader').html(title);
                                    $('#detail-title-leader').html(detailTitle);
                                    $('#sub-detail-title-leader h3').html(detailTitle);
                                    $('#content-leader').html(content);
                                }

                                $('.show-detail').click(function () {
                                    var title = $(this).data('title');
                                    var subtitle = $(this).data('subtitle');
                                    var image = $(this).data('image');
                                    var content = $('.detail-leader').html();

                                })
                            </script>

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
