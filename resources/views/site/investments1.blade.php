@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection

@section('css')
    <link href="/css/inves-custom.css" rel="stylesheet">
    <link href="/css/grid-inves.scss" rel="stylesheet">
    <link href="/css/inves-custom-2.css" rel="stylesheet">
    <link href="/css/addons.css" rel="stylesheet">

@endsection

@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>
    <!-- <span></span> -->
    <section id="sozo-main">
        <div
            class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <img data-src="/site/system/inves/i_1.jpg"
                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                         class=" Sirv uk-utility-object-fit-cover "
                         src="/site/system/inves/i_1.jpg"
                         alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled.jpg?w=1024&h=684&scale"
                         title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled.jpg?w=1024&h=684&scale"/>
                    <canvas width="1600" height="900"></canvas>
                </div>

            </div>
            <div class="uk-background-gradient uk-position-cover"></div>
            <div class="uk-background-gradient-rev uk-position-cover"></div>

            <div class="uk-position-relative uk-container uk-container-medium  uk-section uk-padding-navbar-top"
                 uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;" style="height: 480px">

                <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"
                     uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                    <div class="uk-animation-parent">



                    </div>
                </div>
            </div>

            <div class="uk-scroller uk-container uk-text-center uk-position-bottom uk-position-large">
                <a href="#scroll-target" uk-scroll>
                    <span class="uk-logo uk-icon uk-preserve" uk-icon="icon: arrow-in-circle; ratio: 1;"></span><br/>
                    <span class="uk-style-secondary"></span>
                </a>
            </div>


        </div>

        <style>
            .container {
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                max-width: 1240px;
            }

            @media screen and (max-width: 768px){
                #field-tab-2 {
                    padding-top: 90px;
                }
            }


        </style>

        <div id="field-page" class="section-page section" style="background-color: #0e1b2f">
{{--            <div class="section-head">--}}
{{--                <h1 class="section-title">Lĩnh vực hoạt động</h1>--}}
{{--            </div>--}}

            <div class="tab-content">
                <div class="tab-pane  active" id="field-tab-2" data-slug="nang-luong-tai-tao" style="">
                    <div class="tech-intro">
                        <div class="text-information" style="margin: 0">
                            <div class="container">
                                <div class="text-content">
                                    <div class="intro-title">Năng lượng tái tạo</div>
{{--                                    <div class="intro-desc">--}}
{{--                                        <p>Trong lĩnh vực năng lượng tái tạo, TTVN Group đã đầu tư thành công và đưa vào vận hành thương mại 3 nhà máy điện mặt trời gồm: Nhà máy ĐMT Hòa Hội (tỉnh Phú Yên), Nhà máy ĐMT Bình Nguyên (tỉnh Quảng Ngãi) và Nhà máy ĐMT Cát Hiệp (tỉnh Bình Định) với tổng công suất 357MWp, đưa TTVN Group trở thành một trong 3 doanh nghiệp hàng đầu Việt Nam chiếm gần 8% thị phần phát điện tái tạo của cả nước. Bên cạnh các dự án điện năng lượng mặt trời trên mặt đất, thời gian gần đây, TTVN Group đã mở rộng sang đầu tư xây dựng các dự án điện gió và điện mặt trời trên mái, mục tiêu phát triển khoảng 200MW điện gió và 50MW điện mặt trời trên mái trong giai đoạn từ nay đến 2021.Ngoài ra, hướng phát triển các dự án điện - khí LNG cũng đang được khảo sát, nghiên cứu.</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="tech-thumb">
                            <div class="container">
{{--                                <img src="https://www.ttvngroup.vn/static/common/img/icon_image/6b4da98376771eb5b913714d2f170410.svg" class="img-fluid">--}}
                            </div>
                        </div>
                    </div>

                    <div class="tech-frame">
                        <div class="tech-bg">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1519.2 1264">
                                <defs><style>.cls-1{fill:#f6f7f6;}.cls-2{fill:rgba(255,255,255,.1);}</style></defs>

                                <rect class="cls-2" width="1519" height="1219.8704246414" style="transform: rotate(36.00583969091385deg) translate(34%, -66.3268191274918px);"></rect>
                                <rect class="cls-2" width="1219.8704246414" height="1219.8704246414" style="transform: rotate(36.00583969091385deg) translate(70%, -232.1438669462213px);"></rect>

                                <polygon class="cls-1" points="0 40 1519.2 1104 1519.2 1264 0 1519.2 0 40"></polygon>
                            </svg>
                        </div>
                        <div class="container">
                            <div class="tech-list">
                                <div class="tech-column-one">
                                    <div class="tech-item">
                                        <div class="tech-line"></div>
                                        <img src="https://www.ttvngroup.vn/static/common/img/icon_image/f930a29728517737ce62ada64bbd1856.svg" class="img-fluid tech-item-icon">
                                        <div class="tech-item-title">Năng lượng xanh cho cuộc sống xanh</div>
                                        <div class="tech-item-desc">Trong bối cảnh các nguồn nhiên liệu hóa thạch có hạn và đang bị cạn kiệt dần sau khi đã bị khai thác quá mức, cùng với phát thải từ việc sử dụng các nguồn năng lượng này đang ảnh hưởng nghiêm trọng đến môi trường thì việc sử dụng các nguồn năng lượng xanh thay thế càng trở nên cấp thiết hơn bao giờ hết. Đây là xu thế tất yếu và mạnh mẽ, cũng là điều được Chính phủ các quốc gia đặc biệt quan tâm.
                                            Sở hữu khí hậu nhiệt đới với đường bờ biển dài và số giờ nắng quanh năm lớn, Việt Nam là quốc gia có tiềm năng lớn về năng lượng tái tạo. Đồng thời với các mục tiêu năng lượng xanh đầy tham vọng, Việt Nam có nhiều cơ hội trở thành quốc gia dẫn đầu toàn cầu về năng lượng tái tạo trong tương lai.
                                        </div>
                                    </div>
                                    <div class="tech-item tech-item-down">
                                        <div class="tech-line"></div>
                                        <img src="https://www.ttvngroup.vn/static/common/img/icon_image/c3836d34114a580cc5fc7a09e8e245ab.svg" class="img-fluid tech-item-icon">
                                        <div class="tech-item-title">Mạnh mẽ bứt phá, vươn tầm khu vực và thế giới
                                        </div>
                                        <div class="tech-item-desc">Đối tác đồng hành với RT Energy trong quá trình đầu tư xây dựng các dự án năng lượng tái tạo là những tập đoàn năng lượng lớn đến từ Hoa Kỳ, Italia, Singapore, Trung Quốc… Đây đều là những tập đoàn giàu kinh nghiệm, đã triển khai nhiều dự án lớn ở các nước trên thế giới.
                                            Với uy tín, vị thế và tiềm lực của mình cùng quyết tâm mạnh mẽ, RT Energy đang từng bước hiện thực hóa mục tiêu trở thành tập đoàn tiên phong trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh ở khu vực Asean trong năm 2025, và trên thế giới trước năm 2030.
                                        </div>
                                    </div>
                                </div>

                                <div class="tech-column-two">
                                    <div class="tech-item item-only-thumb text-center">
                                        <img src="https://www.ttvngroup.vn/static/common/img/icon_image/3321b26a079ca8d772f5008b3a2cdfe5.svg" class="img-fluid">
                                    </div>
                                    <div class="tech-item">
                                        <div class="tech-line"></div>
                                        <img src="https://www.ttvngroup.vn/static/common/img/icon_image/7e2b25e88de3ad7a579af8b525b2d797.svg" class="img-fluid tech-item-icon">
                                        <div class="tech-item-title">Lợi ích bền vững cho cộng đồng</div>
                                        <div class="tech-item-desc">Sử dụng nguồn năng lượng tái tạo để sản xuất điện mang lại hiệu quả cao hơn nhiều so với sử dụng năng lượng thông thường, lại phát thải ít carbon, không gây tác động xấu đến môi trường và sức khỏe con người. Hơn nữa, các dự án phát triển năng lượng tái tạo còn đem lại nguồn thu lớn cho ngân sách nhà nước, giải quyết việc làm cho người dân địa phương nơi có dự án, qua đó góp phần thúc đẩy kinh tế-xã hội phát triển
                                        </div>
                                    </div>
                                </div>
                                <div class="tech-column-three" style="">
{{--                                    <img src="https://www.ttvngroup.vn/static/common/img/icon_image/3321b26a079ca8d772f5008b3a2cdfe5.svg" class="img-fluid">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="ctl00_divCenter" class="middle-fullwidth">

            <div class='clearfix Module Module-88'>
                <div class='ModuleContent'>
                    <section class="clearfix activity-page">
                        <div class="container">
                            <h1 class="pagetitle">Dự án đầu tư</h1>
                            <div class="list-activity">
                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href=""
                                               target="_self" title="">
                                                <img src="/site/system/inves/i_1.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href="https://www.fico.com.vn/linh-vuc-hoat-dong/san-xuat-xi-mang-va-san-pham-sau-xi-mang"
                                                           target="_self"
                                                           title="Sản xuất xi măng và sản phẩm sau xi măng">Dự án điện gió Adani Phước Minh</a></div>
                                                    <div class="activitydesc">

                                                            <pre>
                                                         Quy mô: công suất 27.2 MW, diện tích 30ha
                                                            Tổng vốn đầu tư: 1150 tỷ đồng
                                                            Nhà cung cấp: GE
                                                            Nhà thầu: PowerChina VietNam Limited Company
                                                            Tư vấn thiết kế: Henste engineering- Singapore)
                                                            Tư vấn giám sát: Rina
                                                            COD: 2/2021</pre>

                                                       </div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6 push-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href=""
                                               target="_self" title="">
                                                <img src="/site/system/slide/s4.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 pull-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href=""
                                                           target="_self"
                                                           title="Sản xuất kinh doanh vật liệu hoàn thiện">Dự án điện mặt trời Adani Phước Minh</a></div>
                                                    <div class="activitydesc">
                                                        <pre>
                                                            Quy mô: công suất 50MW, diện tích 60 ha
                                                            Tổng vốn đầu tư: 1000 tỷ đồng
                                                            Nhà cung cấp: JA
                                                            - Nhà thầu: PECC1  và Rina
                                                            - Bên tư vấn, giám sát: Rina
                                                             COD: 9/2020
                                                        </pre>
                                                    </div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>


                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href=""
                                               target="_self"
                                               title="n">
                                                <img src="/site/system/inves/i_3_3.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href=""
                                                           target="_self"
                                                           title="Cụm dự án điện mặt trời áp mái – tỉnh Bình Phước">Cụm dự án điện mặt trời áp mái – tỉnh Bình Phước</a></div>
                                                    <div class="activitydesc">
                                                       <pre>
                                                           Công suất 23 MW, tổng mức đầu tư 360 tỷ đồng
                                                       </pre>
                                                    </div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6 push-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href="https://www.fico.com.vn/linh-vuc-hoat-dong/kinh-doanh-thuong-mai-vat-lieu-xay-dung-1"
                                               target="_self" title="">
                                                <img src="/site/system/inves/ic.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 pull-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href="https://www.fico.com.vn/linh-vuc-hoat-dong/kinh-doanh-thuong-mai-vat-lieu-xay-dung-1"
                                                           target="_self"
                                                           title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">Dự án điện mặt trời đa mục tiêu tại tỉnh Khánh Hòa</a></div>
                                                    <div class="activitydesc"><p>
                                                            Công suất 317MW, tổng mức đầu tư dự kiến – 4.400 tỷ đồng
                                                        </p></div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href=""
                                               target="_self" title="">
                                                <img src="/site/system/slide/s5.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href=""
                                                           target="_self"
                                                           title="Xây lắp hạ tầng &amp; kinh doanh bất động sản">Dự án điện gió tại tỉnh Tiền Giang </a></div>
                                                    <div class="activitydesc">
                                                        Giang 535 MW tổng mức đầu tư dự kiến: 21.000 tỷ đồng
                                                    </div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <div class="row flex flex-wrap mrb-xs-15 mrb-md- mrb-lg-50 wow fadeInUp">
                                    <div class="col-xs-12 col-lg-6 push-lg-6">
                                        <div class="activitycol">
                                            <a class="img"
                                               href=""
                                               target="_self" title="">
                                                <img src="/site/system/inves/i_3_1.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-6 pull-lg-6 flex-center bg1">
                                        <div class="activitycol">
                                            <figure>
                                                <figcaption>
                                                    <div class="activityname">
                                                        <a href=""
                                                           target="_self"
                                                           title="">Dự án điện gió AH1, AH2 tại tỉnh Bến Tre </a></div>
                                                    <div class="activitydesc"><p>
                                                            100MW, tổng mức đầu tư dự kiến: 4800 tỷ đồng
                                                        </p></div>
                                                    <a class="viewmore"
                                                       href="{{route('front.post')}}"
                                                       target="_self"
                                                       title="KINH DOANH THƯƠNG MẠI VẬT LIỆU XÂY DỰNG">{{App::isLocale('vi') ? 'Chi tiết' : 'Read more'}}</a>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>

{{--        <div class="uk-section uk-background-dark uk-light">--}}
{{--            <div class="uk-container uk-container-medium">--}}
{{--                <div class="uk-child-width-1-2@m" uk-grid>--}}


{{--                  --}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
@endsection
