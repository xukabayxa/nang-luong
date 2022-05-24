@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('css')
    {{--    <link rel="stylesheet" href="/site/css/s1.css">--}}
    {{--    <link rel="stylesheet" href="/site/css/slick.css">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet"
          type="text/css">
    <link href="/site/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/site/css/k.css" rel="stylesheet" type="text/css">
    <link href="/site/css/flickity.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        {{--        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">--}}
        {{--            @include('site.partials.header')--}}
        {{--        </div>--}}
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <!-- <span></span> -->
    <section id="sozo-main">


        <div class="uk-section uk-background-dark uk-position-relative uk-overflow-hidden">
            <div class="uk-container">
                <div class="uk-position-map-bg uk-hidden@s">
                    <img src="/site/system/inves/i3.jpg">
                </div>
                <div class="uk-background-wash-map uk-position-cover uk-hidden@s"></div>
                <p class="uk-light uk-margin-remove-top@s uk-margin-small-bottom uk-style-primary-l uk-text-3 uk-text-lh-4 uk-text-center"
                   uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200" style="color: #fff"> {{App::isLocale('vi') ? 'Thị trường toàn cầu' : 'Our global expertise'}}</p>
                <div class="uk-hidden@s uk-text-center uk-margin-medium-bottom"
                     uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200">
                    <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                       href="">
                        <span class="uk-color-tertiary uk-text-middle uk-margin-right">see our office locations</span>
                        <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                              uk-icon="icon: button-circle; ratio: 1"></span>
                    </a>
                </div>
                <img class="uk-visible@s"
                     src="/site/system/mapp.jpg"
                     uk-scrollspy="cls: uk-animation-fade; delay: 400;">
            </div>
        </div>

        <div
            class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <video uk-cover loop muted playsinline uk-video="autoplay: inview">
                        <source src="/site/system/inves/i_3.mp4"
                                type="video/mp4">
                    </video>
                    <canvas width="1600" height="900"></canvas>
                </div>

            </div>
            <div class="uk-background-gradient uk-position-cover"></div>
            <div class="uk-background-gradient-rev uk-position-cover"></div>


        </div>

        <style>


            @media screen
            and (min-width: 1200px)
            and (max-width: 1600px) {
                .nation1, .nation2 {
                    margin-top: -200px;
                    padding: 0;
                }

                .nation {
                    margin-top: -100px;
                }

                .nation21 {
                    padding: 0;
                }

                .uk-margin-bottom2 {
                    margin-bottom: 0;
                }
            }

            @media only screen
            and (min-device-width: 320px)
            and (max-device-width: 480px)
            and (-webkit-min-device-pixel-ratio: 2) {
                .nation21 {
                    margin-top: -100px;
                }

            }

            /*.note {*/
            /*    margin-left: 25px;*/
            /*    margin-right: 25px;*/
            /*    font-size: 16px;*/
            /*    font-family: 'Roboto';*/
            /*    text-align: center;*/
            /*}*/

            .flickity-viewport {
                height: 200px;
            }

            .cc1 {
                height: 100%;
                background: #0A2C48;
                color: #fff;
            }

            .c-name {
                font-weight: bold;
                color: #0A2C48;
                top: 0;
                width: 100%;
                height: 42px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(255, 255, 255, .85);
                border-bottom: 1px solid var(--color-theme);
                position: absolute;
                transition: all .25s ease-out;
                opacity: 1;
            }

            .note {
                padding-left: 120px;
                padding-right: 120px;
                min-height: 200px;;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                transition: all .25s ease-out;
                opacity: 1;
            }
        </style>
        <div class="uk-background-light uk-dark">
            <div class="uk-container" style="padding-top: 30px; padding-bottom: 30px">
                <div class="carousel carousel-main" data-flickity='{ "hash": true, "pageDots": false }'>

                    <div class="carousel-cell cc1" id="carousel-cell1" style="padding-top: 10px">
                        <div class="c-name">
                            VIỆT NAM
                        </div>

                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>

                    <div class="carousel-cell cc1" id="carousel-cell2" style="padding-top: 10px">
                        <div class="c-name">
                            PHILIPPINES
                        </div>
                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>
                    <div class="carousel-cell cc1" id="carousel-cell3" style="padding-top: 10px">
                        <div class="c-name">
                            SINGAPORE
                        </div>
                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>
                    <div class="carousel-cell cc1" id="carousel-cell4" style="padding-top: 10px">
                        <div class="c-name">
                            INDONESIA
                        </div>
                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>
                    <div class="carousel-cell cc1" id="carousel-cell5" style="padding-top: 10px">
                        <div class="c-name">
                            ẤN ĐỘ
                        </div>
                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>
                    <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                        <div class="c-name">
                            AUSTRALIA
                        </div>
                        <div class="note">
                            Cùng chung lo lắng với chị A.H., chị N.T.T.H. (Hà Đông) cũng cho con gái 5 tuổi đi học tiền
                            tiểu học, giáo viên một kèm một. Chị đăng ký cho con học khóa 40 buổi, mỗi tuần 4 buổi, mỗi
                            buổi 200.000 đồng. Như vậy, mỗi tháng, chị chi 3,2 triệu đồng cho con đi học.
                            Tuy nhiên, chị thấy học phí này là hợp lý.
                            Theo chị tìm hiểu, một số lớp thu phí đến 300.000 đồng/buổi.
                        </div>
                    </div>
                </div>

                <div class="carousel carousel-nav"
                     data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>

                    <div class="carousel-cell thumb-carou" id="carousel-cell1"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">VIỆT NAM</p></div>
                    <div class="carousel-cell thumb-carou" id="carousel-cell2"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">PHILIPPINES</p>
                    </div>
                    <div class="carousel-cell thumb-carou" id="carousel-cell3"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">SINGAPORE</p>
                    </div>
                    <div class="carousel-cell thumb-carou" id="carousel-cell4"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">INDONESIA</p>
                    </div>
                    <div class="carousel-cell thumb-carou" id="carousel-cell5"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">ẤN ĐỘ</p></div>
                    <div class="carousel-cell thumb-carou" id="carousel-cell6"
                         style="text-align: center; padding-top: 16px; font-weight: bold"><p class="">AUSTRALIA</p>
                    </div>

                </div>

                {{--                <div class="partnerMain" style="position: inherit;top: inherit;transform: none; ">--}}
                {{--                    <div class="container">--}}
                {{--                        <div class="partnerList">--}}
                {{--                            <div class="partner-slider">--}}
                {{--                                <div class="component-partner">--}}
                {{--                                    <div class="slick-list" style="padding: 0px;">--}}
                {{--                                        <div class="slick-track" style="opacity: 1; width: 8928px; transform: translate3d(-5766px, 0px, 0px);">--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="0" aria-hidden="true"  role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/watg1-1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/watg-1.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="1" aria-hidden="true"  role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/aedas1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/aedas.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="2" aria-hidden="true"  role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/callison1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/callison.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="3" aria-hidden="true"  role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/arcadis1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/arcadis.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="4" aria-hidden="true"  role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/steelmain1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/steelmain.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="5" aria-hidden="true"  role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/dark1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/dark.png" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="partnerItem slick-slide" data-slick-index="6" aria-hidden="true"  role="tabpanel" id="slick-slide06" aria-describedby="slick-slide-control06" style="width: 186px;">--}}
                {{--                                                <img class="partnerItem-logo" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/tylin1.png" alt="">--}}
                {{--                                                <img class="partnerItem-logoHover" src="https://www.sungroup.com.vn/wp-content/uploads/2017/07/tylin.png" alt="">--}}
                {{--                                            </div--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <ul class="slick-dots" style="" role="tablist">--}}
                {{--                                        <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 10" >1</button></li>--}}
                {{--                                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 10">2</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 10" >3</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 10" >4</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 10" >5</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 10" >6</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control06" aria-controls="slick-slide06" aria-label="7 of 10" >7</button></li>--}}
                {{--                                        <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control07" aria-controls="slick-slide07" aria-label="8 of 10" >8</button></li>--}}

                {{--                                    </ul>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="partnerNav">--}}
                {{--                                <div class="partnerNav-first"></div>--}}
                {{--                                <div id="partner-sliderNav">--}}
                {{--                                    <div class="slideNavPrev slideNavItem slideNavArr slick-arrow" aria-disabled="false" style=""></div>--}}
                {{--                                    <div class="slideNavNext slideNavItem slideNavArr slick-arrow" aria-disabled="false" style=""></div>--}}
                {{--                                </div>--}}
                {{--                                <div class="partnerNav-last"></div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="container">--}}
                {{--                        <div class="partnerContent">--}}
                {{--                            <div class="partnerContent-list">--}}
                {{--                                <div class="slick-list draggable">--}}
                {{--                                    <div class="slick-track" style="opacity: 1; width: 36720px;">--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="0" aria-hidden="true"  style="width: 765px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">WATG</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>Với hơn 70 năm kinh nghiệm, WATG và Wimberly Interiors đã trở thành nhà tư vấn thiết kế hàng đầu thế giới bao gồm các giải pháp thiết kế về kiến trúc, cảnh quan và nội thất cho các điểm du lịch, nghỉ dưỡng và đô thị.</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="1" aria-hidden="true"  style="width: 765px; position: relative; left: -765px; top: 0px; z-index: 998; opacity: 0;">--}}
                {{--                                            <h2 class="partnerContent-title">Aedas</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>Aedas được thành lập năm 1985 bởi Keith Griffiths tại Hong Kong. Aedas là một trong những công ty kiến trúc quốc tế hàng đầu thế giới. Lĩnh vực của Aedas là cung cấp dịch vụ về kiến trúc, thiết kế nội thất, thiết kế cảnh quan, đô thị, quy hoạch tổng thể và đồ hoạ. Kinh nghiệm Aedas bao gồm khu phước hợp, văn phòng, cửa hàng bán lẻ, nhà ở, khách sạn, cơ sở hạ tầng, giáo dục, văn hoá và tái định cư</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="2" aria-hidden="true"  style="width: 765px; position: relative; left: -1530px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">CallisonRTKL</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>CallisonRTKL là công ty kiến trúc, quy hoạch và thiết kế toàn cầu được hình thành từ cuộc sáp nhập vào tháng 10 năm 2015 của Callison và RTKL Associates, cả hai đều là các công ty con của Arcadis NV.</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="3" aria-hidden="true"  style="width: 765px; position: relative; left: -2295px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">Arcadis</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>Arcadis là một công ty tư vấn thiết kế và quản lý toàn cầu có trụ sở tại Zuidas, Amsterdam, Hà Lan được thành lập năm 1868. Arcadis chuyên tư vấn thiết kế toàn cầu cho các tài sản thiên nhiên và xây dựng</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="4" aria-hidden="true"  style="width: 765px; position: relative; left: -3060px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">Steelman Partners</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>Thành lập vào năm 1987, Steelman Partners đã từng được tạp chí Architectural Record Magazine xếp vào công ty kiến trúc lớn thứ 91 trong danh sách 500 công ty thiết kế hàng đầu trên toàn thế giới.</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="5" aria-hidden="true"  style="width: 765px; position: relative; left: -3825px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">DarkHorse Architecture</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>Dark Horse là đơn vị tư vấn thiết kế nội thất đã hợp tác cùng Sun Group trong các dự án Premier Residences Phu Quoc Emerald Bay và Premier Village Phu Quoc Resort với phong cách mang xu hướng mới của ngành du lịch nghỉ dưỡng thế giới.</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="partnerContent-item slick-slide" data-slick-index="6" aria-hidden="true"  style="width: 765px; position: relative; left: -4590px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;">--}}
                {{--                                            <h2 class="partnerContent-title">T.Y.LIN</h2>--}}
                {{--                                            <div class="partnerContent-txt">--}}
                {{--                                                <p>T.Y.Lin International (TYLIN) có trụ sở chính tại San Francisco chuyên về thiết kế cầu đường và công trình kiến trúc đặc biệt.</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>
        </div>

    </section>
@endsection

@push('scripts')
    {{--    <script src="/site/js/slick.min.js"> </script>--}}

@endpush

@section('script_custom')
    <script type="text/javascript" src="/site/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"
            type="text/javascript"></script>

    <script type="text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script type="text/javascript" src="https://unpkg.com/flickity-hash@1/hash.js"></script>

    <script>

        $('.carousel-main').flickity({
            // options
            pageDots: true,
            setGallerySize: false,
            // autoPlay:true,

        });
        //
        // $('.carousel-nav').flickity({
        //     // options
        //     setGallerySize: false
        //
        // });


        $(document).ready(function () {
            var $carousel = $(".carousel");
            $carousel.flickity({'adaptiveHeight': true});
            $carousel.flickity({'prevNextButtons': false});
        });
    </script>
    <script>

        // jQuery(document).ready(function() {
        //     $('.partner-slider .component-partner').slick({
        //         draggable: false,
        //         arrows: true,
        //         dots: true,
        //         autoplay: true,
        //         autoplaySpeed: 10000,
        //         infinite: false,
        //         adaptiveHeight: false,
        //         slidesToShow: 5,
        //         slidesToScroll: 1,
        //         centerMode: true,
        //         centerPadding: '0px',
        //         focusOnSelect: true,
        //         asNavFor: '.partnerContent-list',
        //         // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        //         // touchThreshold: 100
        //         appendArrows: $('#partner-sliderNav'),
        //         // appendDots: $('.homeIntro-slideNav'),
        //         prevArrow: '<div class="slideNavPrev slideNavItem slideNavArr"></div>',
        //         nextArrow: '<div class="slideNavNext slideNavItem slideNavArr"></div>',
        //         responsive: [
        //             {
        //                 breakpoint: 640,
        //                 settings: {
        //                     slidesToShow: 3,
        //                     slidesToScroll: 2,
        //                 }
        //             },
        //         ]
        //     });
        //
        //     $('.partnerContent-list').not('.slick-initialized').slick({
        //         draggable: true,
        //         arrows: false,
        //         dots: false,
        //         autoplay: true,
        //         autoplaySpeed: 10000,
        //         infinite: false,
        //         fade: true,
        //         adaptiveHeight: false,
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //         asNavFor: '.partnerList .component-partner',
        //         // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        //         // touchThreshold: 100
        //         // appendArrows: $('.homeBanner-nav'),
        //         // appendDots: $('.homeIntro-slideNav'),
        //         // prevArrow: '<i class="slideNavPrev slideNavItem fal fa-chevron-circle-up"></i>',
        //         // nextArrow: '<i class="slideNavNext slideNavItem fal fa-chevron-circle-down"></i>',
        //     });
        //
        //     $('.partner-slider .component-partner').slick('slickGoTo', 2);
        //     $('.partnerNav-first').click(function() {
        //         $('.partner-slider .component-partner').slick('slickGoTo', "0");
        //     })
        //     $('.partnerNav-last').click(function() {
        //         var getLastSlide = $('.partner-slider .component-partner .partnerItem').length;
        //         console.log(getLastSlide);
        //         $('.partner-slider .component-partner').slick('slickGoTo', getLastSlide);
        //     })
        // })

    </script>
@endsection
