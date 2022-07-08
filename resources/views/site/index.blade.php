@extends('site.layouts.master')
@section('title')
<title>{{ ucfirst($_SERVER['HTTP_HOST']) . ' - '. $config->web_title }}</title>
@endsection
@section('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
@section('content')
<div uk-sticky="animation: uk-animation-slide-top;">
    <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
        @include('site.partials.header')
    </div>
</div>

<div>

</div>
<!-- <span></span> -->
<section id="sozo-main">

    <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

        {{--style banner slick--}}
        <style>
            :root {
                --main-white-color: white;
                --main-black-color: black;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .static {
                position: static;
            }

            .cover {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .owl-carousel .owl-slide {
                position: relative;
                height: 100vh;
                background-color: lightgray;
            }

            .owl-carousel .owl-slide-animated {
                transform: translateX(20px);
                opacity: 0;
                visibility: hidden;
                transition: all 0.05s;
            }

            .owl-carousel .owl-slide-animated.is-transitioned {
                transform: none;
                opacity: 1;
                visibility: visible;
                transition: all 0.5s;
            }

            .owl-carousel .owl-slide-title.is-transitioned {
                transition-delay: 0.2s;
            }

            .owl-carousel .owl-slide-subtitle.is-transitioned {
                transition-delay: 0.35s;
            }

            .owl-carousel .owl-slide-cta.is-transitioned {
                transition-delay: 0.5s;
            }

            .owl-carousel .owl-dots,
            .owl-carousel .owl-nav {
                position: absolute;
            }

            .owl-carousel .owl-dots .owl-dot,
            .owl-carousel .owl-nav [class*="owl-"]:focus {
                outline: none;
            }

            .owl-carousel .owl-dots .owl-dot span {
                background: transparent;
                border: 1px solid var(--main-black-color);
                transition: all 0.2s ease;
            }

            /*.owl-carousel .owl-dots .owl-dot:hover span,*/
            /*.owl-carousel .owl-dots .owl-dot.active span {*/
            /*    background: var(--main-black-color);*/
            /*}*/

            .owl-carousel .owl-nav {
                left: 50%;
                top: 50%;
                transform: translateX(-50%);
                margin: 0;
                position: absolute;
                margin-top: 0;
                width: 100%;
            }

            .owl-carousel .owl-nav svg {
                opacity: 0.3;
                transition: opacity 0.3s;
                position: relative;
            }

            .owl-carousel .owl-nav button:hover svg {
                opacity: 1;
            }

            .owl-carousel .owl-nav [class*="owl-"]:hover {
                background: transparent;
            }

            section {
                display: none;
            }

            @media screen and (max-width: 575px) {
                .owl-carousel .owl-nav {
                    top: 5%;
                }

                .owl-carousel .owl-nav svg {
                    width: 24px;
                    height: 24px;
                }

                .owl-prev,
                .owl-next {
                    width: 15px;
                    height: 100px;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    display: block !important;
                    border: 0px solid black;
                }

                .owl-prev {
                    left: -20px;
                }

                .owl-next {
                    right: -20px;
                }

                .owl-prev svg,
                .owl-next svg {
                    transform: scale(2, 5);
                    color: #ccc;
                }
            }

            .owl-carousel .owl-dots {
                display: block;
                margin-top: -20px;
                text-align: center;
                width: 100%;
            }

            .owl-carousel .owl-dots .owl-dot.active {
                /*background: #fff;*/
            }

            .owl-theme .owl-dots .owl-dot.active span,
            .owl-theme .owl-dots .owl-dot:hover span {
                background: #fff;
            }
        </style>
        {{--end--}}

        <div class="owl-carousel owl-theme">
            <img src="{{ asset('site/system/slide/s1.jpg') }}" alt="">
            <img src="{{ asset('site/system/slide/s2.jpg') }}" alt="">
            <img src="{{ asset('site/system/slide/s4.jpg') }}" alt="">
            {{-- <img src="{{ asset('site/system/slide/s6.jpg') }}" alt=""> --}}
        </div>
    </div>

    <div class="uk-background-light uk-section uk-dark">
        <div class="uk-container uk-container-xmedium">
            <div>
                <div class="uk-grid uk-grid-large" uk-grid>
                    <div class="uk-width-45@m" uk-scrollspy="cls: uk-animation-slide-left-small; delay: 400;">
                        <div class="uk-style-tertiary uk-text-uppercase uk-text-4 uk-text-lh-4  uk-style-hline uk-position-relative" style="color: #0F4C81 !important; font-weight: bold">
                            {{App::isLocale('vi') ? 'PHÁT TRIỂN NĂNG LƯỢNG BỀN VỮNG' : "Sustainable Development and a Net zero emissions future"}}
                        </div>

                    </div>
                    <div class="uk-width-expand@m" uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <div class="uk-margin-3xmedium-bottom uk-text-8 uk-style-primary-l" style="color: #0F4C81 !important; text-align: justify">
                            {{App::isLocale('vi') ? 'Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo
                            – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.'
                            : "Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations."}}
                        </div>
                        {{-- <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="">--}}
                            {{-- <span--}} {{-- class="uk-color-tertiary uk-text-middle uk-margin-right" --}} {{-- style="color: #0F4C81 !important; font-size: 1rem">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</span>--}}
                                {{-- <img class="wind-icon win-icon-right" --}} {{-- src="{{ asset('img/icons/wind-energy-blue.png') }}" --}} {{-- alt="win-icon">--}}
                                {{-- </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="uk-section uk-background-dark uk-light">--}}
        {{-- <div class="uk-container uk-container-medium uk-text-center">--}}
            {{-- <h1 class="uk-style-primary-l uk-text-3 uk-text-lh-4" --}} {{-- uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">We exclusively invest in--}}
                {{-- sustainable real assets <br />
                <span--}} {{-- class="uk-style-primary">across three key investment themes</span>
            </h1>--}}
            {{-- </div>--}}
        {{-- </div>--}}

    {{-- <div class="uk-margin-top uk-margin-left uk-margin-right uk-margin-bottom uk-section-investments">--}}
        {{-- <div class="uk-grid-collapse uk-child-width-expand@m" uk-grid--}} {{-- uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 400;">--}}

            {{-- <div class="uk-text-left uk-mega-menu-item items-1">--}}
                {{-- <a href="{{route('front.investments1')}}" class="uk-animation-zoom">--}}
                    {{-- <div class="uk-cover-container ">--}}
                        {{-- <img data-src="{{ asset('site/system/about_us/a1.jpg') }}" --}} {{-- data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" --}} {{-- class=" Sirv uk-utility-object-fit-cover " --}} {{-- alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled" --}} {{-- title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled" />--}}
                        {{-- <canvas width="533.33333333333" height="720"></canvas>--}}
                        {{-- <div class="uk-background-gradient-mega-menu uk-position-cover"></div>--}}
                        {{-- </div>--}}
                    {{-- <div--}} {{-- class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">--}}
                        {{-- <div class="uk-position-bottom uk-padding-xmedium">--}}
                            {{-- <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">--}}
                                {{-- {{trans('message.renewable_energy')}}</h4>--}}
                            {{-- <a class="uk-button uk-color-primary uk-style-secondary-b " --}} {{-- href="{{route('front.investments1')}}">--}}
                                {{-- <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>--}}
                                {{-- <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}" --}} {{-- alt="win-icon">--}}
                                {{-- </a>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}
            {{-- </a>--}}
            {{-- </div>--}}

        {{-- <div class="uk-text-left uk-mega-menu-item items-1">--}}
            {{-- <a href="{{route('front.investments2')}}" class="uk-animation-zoom">--}}
                {{-- <div class="uk-cover-container ">--}}
                    {{-- <img data-src="{{ asset('site/system/home/j.jpg') }}" --}} {{-- data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" --}} {{-- class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled" --}} {{-- title="iStock-1156913631-scaled" />--}}
                    {{-- <canvas width="533.33333333333" height="720"></canvas>--}}
                    {{-- <div class="uk-background-gradient-mega-menu uk-position-cover"></div>--}}
                    {{-- </div>--}}
                {{-- <div--}} {{-- class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">--}}
                    {{-- <div class="uk-position-bottom uk-padding-xmedium">--}}
                        {{-- <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">--}}
                            {{-- {{trans('message.sustainable_infrastructure')}}--}}
                            {{-- </h4>--}}
                        {{-- <a class="uk-button uk-color-primary uk-style-secondary-b " --}} {{-- href="{{route('front.investments2')}}">--}}
                            {{-- <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>--}}
                            {{-- <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}" --}} {{-- alt="win-icon">--}}
                            {{-- </a>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
        {{-- </a>--}}
        {{-- </div>--}}

    {{-- <div class="uk-text-left uk-mega-menu-item items-1">--}}
        {{-- <a href="{{route('front.investments3')}}" class="uk-animation-zoom">--}}
            {{-- <div class="uk-cover-container ">--}}
                {{-- <img data-src="{{ asset('site/system/home/j2.jpg') }}" --}} {{-- data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" --}} {{-- class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled" --}} {{-- title="green-tech-scaled" />--}}
                {{-- <canvas width="533.33333333333" height="720"></canvas>--}}
                {{-- <div class="uk-background-gradient-mega-menu uk-position-cover"></div>--}}
                {{-- </div>--}}
            {{-- <div--}} {{-- class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">--}}
                {{-- <div class="uk-position-bottom uk-padding-xmedium">--}}
                    {{-- <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">--}}
                        {{-- {{trans('message.future_solution')}} <br />--}}
                        {{-- </h4>--}}
                    {{-- <a class="uk-button uk-color-primary uk-style-secondary-b " --}} {{-- href="{{route('front.investments3')}}/">--}}
                        {{-- <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>--}}
                        {{-- <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}" --}} {{-- alt="win-icon">--}}
                        {{-- </a>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
        <div class="uk-position-cover uk-cover-container">
            <canvas width="1600" height="708"></canvas>
            <img data-src="{{ asset('site/system/home_1.jpg') }}" data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover " alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale" title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale" />
        </div>
        <div class="uk-background-white-wash uk-position-cover"></div>
    </div>

    <style>
        .homeIndustry-main {
            /*background: url(/site/system/home_2.png);*/
            background-size: 100% auto;
            background-repeat: no-repeat;
            padding: 64px 32px 42px;
            position: relative;
            left: 50%;
            top: 11%;
            transform: translateX(-50%);
            width: 100%;
            height: max-content;
            max-width: 1120px;
            margin-top: 0;
            overflow: hidden;
        }

        .homeIndustry-content {
            display: flex;
            padding-bottom: 35px;
        }

        /*.homeIndustry-txt {*/
        /*    margin-top: -40px;*/
        /*    width: 100%;*/
        /*}*/

        .homeIndustry-title {
            color: var(--color-theme);
            /* text-transform: uppercase; */
            font-weight: 700;
            margin-bottom: 12px;
            margin-top: -32px;
        }

        .homeIndustry-desc {
            /*padding-left: 12px;*/
            /*border-left: 2px solid #0F4C81;*/
            font-family: 'Roboto', sans-serif;
            font-size: 1.375em;
            color: #0F4C81;
        }

        .homeIndustry-intro {
            margin: 20px 0 20px;
            position: relative;
            min-height: 150px;
        }

        .homeIndustry-item {
            position: absolute;
            opacity: 0;
            transition: all .75s ease-out;
            filter: blur(10px);
            transform: scale(1.5);
            pointer-events: none;
        }

        .homeIndustry-item2 {
            position: absolute;
            opacity: 0;
            transition: all .75s ease-out;
            filter: blur(10px);
            transform: scale(1.5);
            pointer-events: none;

        }

        .homeIndustry-item h6 {
            color: var(--color-theme);
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 24px;
        }

        .homeIndustry-item2 h6 {
            color: var(--color-theme);
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 24px;
        }

        .homeIndustry-item p {
            height: 100px;
            padding-left: 12px;
            overflow: auto;
            font-size: 13.5px;
            border-left: 2px solid #0F4C81;
        }

        .homeIndustry-item pre {
            width: 520px;
            height: 100px;
            padding-left: 12px;
            overflow: auto;
            font-size: 13.5px;
            border-left: 2px solid #0F4C81;
        }

        .homeIndustry-item2 p {
            height: 150px;
            overflow: hidden;
            font-family: 'Roboto', sans-serif;
            font-size: 1.375em;
            color: #0F4C81;
        }

        .homeIndustry-item a {
            text-transform: uppercase;
            background: url(../img/icon-linkArrow.png);
            background-position: right center;
            background-repeat: no-repeat;
            padding: 0 40px 0 0;
        }

        .homeIndustry-item2 a {
            text-transform: uppercase;
            background: url(../img/icon-linkArrow.png);
            background-position: right center;
            background-repeat: no-repeat;
            padding: 0 40px 0 0;
        }

        .homeIndustry-figure {
            width: 100%;
            margin: -44px 0 0 48px;
            border-radius: 30px 0;
            position: relative;
            z-index: 10;
        }

        .homeIndustry-figure2 {
            margin-top: -60px;
            width: 100%;
            height: 280px;
            border-radius: 30px 0;
            position: relative;
            z-index: 10;
        }

        .homeIndustry-img {
            background-color: #DDD;
            border-radius: 30px 0;
            height: 100%;
            width: 100%;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            opacity: 0;
            transition: var(--transition-smooth);
            filter: blur(10px);
            transform: scale(.75);
        }

        .homeIndustry-img2 {
            background-color: #DDD;
            border-radius: 30px 0;
            height: 100%;
            width: 100%;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            opacity: 0;
            transition: var(--transition-smooth);
            filter: blur(10px);
            transform: scale(.75);
        }

        .homeIndustry-img.active {
            opacity: 1;
            transform: none;
            filter: none;
        }

        .homeIndustry-img2.active {
            opacity: 1;
            transform: none;
            filter: none;
        }

        .homeIndustry-nav {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            padding-top: 35px;
            border-top: 1px solid #252426;
            box-shadow: inset 0 2px 0 #414042;
        }

        .industry-item {
            color: #0F4C81;
            text-align: center;
            display: flex;
            justify-content: center;
            position: relative;
            background-color: transparent;
            transition: all .15s ease-out;
        }

        .homeIndustry-navItem {
            height: 260px;
            width: 23%;
        }

        .homeIndustry-navItem2 {
            height: 260px;
            width: 33%;
        }

        .industryItem-img {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #000;
            background-size: cover;
            background-position: center;
            transition: all .15s ease-out;
            position: relative;
            overflow: hidden;
        }

        .industryItem-txt {
            width: 100%;
            height: 42px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, .85);
            border-bottom: 1px solid var(--color-theme);
            position: absolute;
            bottom: 0;
            transition: all .25s ease-out;
            opacity: 1;
        }

        .homeIndustry-navItem:hover {
            padding: 8px;
        }

        .homeIndustry-navItem2:hover {
            padding: 8px;
        }

        .industry-item:hover {
            background: url(../img/industry-leafBg.png);
            background-size: 100% 100%;
            padding: 8px;
            color: #0F4C81;
        }

        .homeIndustry-item.active {
            opacity: 1;
            filter: none;
            transform: none;
            pointer-events: auto;
        }

        .homeIndustry-item2.active {
            opacity: 1;
            filter: none;
            transform: none;
            pointer-events: auto;
        }

        .imgDes {
            display: none;
        }

        .h-txt {
            margin-left: 34px;
        }

        @media screen and (max-width: 640px) {
            .homeIndustry-main {
                margin-top: 24px;
                padding: 0 15px;
                background: none;
                left: 0;
                transform: none;
                height: auto;
                width: 100%;
                overflow: visible;
                background: url(../img/patternBg-4.png);
            }

            .imgDes {
                display: block;
            }

            .h-txt {
                margin-left: 0;
            }

            .uk-recent-posts {
                margin-top: -440px;
            }

            .homeIndustry-title,
            .homeIndustry-title2 {
                margin-top: 24px;
            }


            .homeIndustry-intro,
            .homeIndustry-intro2 {
                margin: 24px 0;
            }

            .homeIndustry-item,
            .homeIndustry-item2 {
                position: relative;
                opacity: 1;
                filter: none;
                transform: none;
                pointer-events: auto;
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 1px solid rgba(0, 0, 0, .2);
                box-shadow: 0 1px 0 0 rgb(255 255 255 / 10%);
            }

            .homeIndustry-item p,
            .homeIndustry-item2 p {
                height: auto;
                margin-bottom: 8px;
                font-size: 16px;
            }

            .homeIndustry-figure,
            .homeIndustry-figure2 {
                margin: 0;
                display: none;
            }

            .homeIndustry-nav,
            .homeIndustry-nav2 {
                display: none;
            }

        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            .homeIndustry-desc {
                font-size: 16px;
            }

            .uk-feat-article {
                margin-bottom: 20px;
            }
        }


        @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) {
            .chongchong {
                margin-top: -90px;
            }
        }

        @media only screen and (max-width: 768px) {
            .homeIndustry-txt {
                margin-top: -60px;
            }
            .chongchong {
                margin-top: -60px;
            }
        }

        @media (min-width:1025px){
            .homeIndustry-txt {
                margin-top: -30px;
            }
        }

    </style>

    <div class="homeIndustry-main" >
        <div class="homeIndustry-content">
            <div class="homeIndustry-txt">
{{--                <h3 class="homeIndustry-title">{{App::isLocale('vi') ? 'Giới thiệu' : 'About us'}}</h3>--}}
                <div class="homeIndustry-desc" style="text-align: justify">
                    @if(App::isLocale('vi'))
                            Hiện thực hóa chiến lược đó, chúng tôi nhắm tới những mục tiêu sau đây:
                    <ul style="margin-top: 10px">
                        <li>Phát triển, đầu tư xây dựng, và vận hành các dự án năng lượng tái tạo</li>
                        <li>Tăng quy mô danh mục dự án năng lượng tái tạo đầu tư từ 100MW năm 2021 lên 500MW trong năm 2023. Hướng tới danh mục đầu tư với quy mô 1GW năng lượng tái tạo trước hoặc trong năm 2025</li>
                        <li>Nghiên cứu, ứng dụng và đầu tư vào các dự án sử dụng công nghệ mới như Năng lượng tái tạo kết hợp pin lưu trữ/ kết hợp sản xuất hydrogen, …. khi các công nghệ đó khả thi về mặt tài chính và chính sách</li>
                        <li>Phát triển, đầu tư xây dựng và vận hành các dự án khu công nghiệp xanh – trong đó toán bộ nguồn điện sử dụng cho sản xuất công nghiệp là năng lượng tái tạo.</li>
                    </ul>

                    @else
                        Realizing that strategy, we aim at the following goal:
                        <ul style="margin-top: 10px">
                            <li>Develop, and invest in the construction and operation of renewable energy projects</li>
                            <li>Increase investment scale in renewable energy projects from 100MW in 2021 to 500MW in 2023. Towards an investment portfolio with 1GW of renewable energy before or in 2025</li>
                            <li>Research, apply, and invest in projects using new technologies such as Renewable Energy combined with battery storage / combined hydrogen production, .... when such technologies are financially and policy feasible</li>
                            <li>Develop, invest in the construction and operation of green industrial zone projects – in which all electricity used for industrial production is renewable energy</li>
                        </ul>
                    @endif

                </div>
                <div class="homeIndustry-intro">
                    <div class="homeIndustry-item active">
                        {{-- <h6>{{App::isLocale('vi') ? 'Giới thiệu chung' : 'Who We Are'}}</h6>--}}
                        <div class="imgDes">
                            <img src="/site/system/home/h1.jpg">
                        </div>

                        <a href="{{route('front.about')}}" style="color: #0F4C81; font-weight: bold">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="homeIndustry-figure">
                <div class="homeIndustry-img active" style="background-image:url(/site/image/img2.jpg);"></div>
                <div class="homeIndustry-img" style="background-image:url(/site/system/home/h2.jpg);"></div>
                <div class="homeIndustry-img" style="background-image:url(/site/system/home/h3.jpg);"></div>
                <div class="homeIndustry-img" style="background-image:url(/site/system/home/h4.jpg);"></div>
            </div>
        </div>
    </div>

    <br />
    <style>
        .wind-icon2 {
            top: 50%;
            left: 50%;
            width: 32px;
            height: 32px;
            -webkit-animation: spin 4s linear infinite;
            -moz-animation: spin 4s linear infinite;
            animation: spin 2s linear infinite;
            transform: none;
        }
    </style>

    <div class="row chongchong" style="text-align: center; margin-bottom: 50px; display: flex; justify-content: space-evenly">
        <div>
            <img class="wind-icon2 win-icon-right" src="/img/icons/wind-energy-blue.png" alt="win-icon">
        </div>
        <div>
            <img class="wind-icon2 win-icon-right" src="/img/icons/wind-energy-blue.png" alt="win-icon">
        </div>
        <div>
            <img class="wind-icon2 win-icon-right" src="/img/icons/wind-energy-blue.png" alt="win-icon">
        </div>
    </div>

    <div class="homeIndustry-main">
        <div class="homeIndustry-content">
            <div class="homeIndustry-figure2">
                <div class="homeIndustry-img2 active" style="background-image:url(/site/system/home/z1.jpg);"></div>
                <div class="homeIndustry-img2" style="background-image:url(/site/system/home/z3.jpg);"></div>
                <div class="homeIndustry-img2" style="background-image:url(/site/system/home/z2.jpg);"></div>
            </div>
            <div class="homeIndustry-txt h-txt" style="width: 100%">
                <h3 class="homeIndustry-title">{{App::isLocale('vi') ? 'Lĩnh vực đầu tư kinh doanh' : 'Business investment'}}</h3>
                <div class="homeIndustry-desc"></div>
                <div class="homeIndustry-intro" style="text-align: justify">
                    <div class="homeIndustry-item2 active">
                        <h6>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}
                        </h6>
                        <div class="imgDes">
                            <img src="/site/system/home/h5.jpg">
                        </div>
                        <p>
                            {{App::isLocale('vi') ? 'RT Energy luôn đổi mới, sáng tạo, nhanh chóng thích ứng với những thay đổi của thị trường nhằm tạo ra sự khác biệt và hiệu quả cao trong các lĩnh vực đầu tư kinh doanh'
                            :'RT Energy always innovates, creates, adapts quickly to market changes to make a difference and high efficiency in the fields of business investment.

                            '
                            }}

                        </p>
                        <a href="{{route('front.investments1')}}" class="v-detail" style="color: #0F4C81; font-weight: bold">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="homeIndustry-item2">
                        <h6>{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}
                        </h6>
                        <div class="imgDes">
                            <img src="/site/system/home/h7.jpg">
                        </div>
                        <p>
                            {{App::isLocale('vi') ? 'RT Energy luôn đổi mới, sáng tạo, nhanh chóng thích ứng với những thay đổi của thị trường nhằm tạo ra sự khác biệt và hiệu quả cao trong các lĩnh vực đầu tư kinh doanh'
                            :'RT Energy always innovates, creates, adapts quickly to market changes to make a difference and high efficiency in the fields of business investment.

                            '
                            }}

                        </p>
                        <a href="{{route('front.investments3')}}" style="color: #0F4C81; font-weight: bold">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="homeIndustry-item2">
                        <h6>{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</h6>
                        <div class="imgDes">
                            <img src="/site/system/home/h6.jpg">
                        </div>
                        <p>
                            {{App::isLocale('vi') ? 'RT Energy luôn đổi mới, sáng tạo, nhanh chóng thích ứng với những thay đổi của thị trường nhằm tạo ra sự khác biệt và hiệu quả cao trong các lĩnh vực đầu tư kinh doanh'
                             :'RT Energy always innovates, creates, adapts quickly to market changes to make a difference and high efficiency in the fields of business investment.

                             '
                             }}

                        </p>
                        <a href="{{route('front.investments2')}}" style="color: #0F4C81; font-weight: bold">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="homeIndustry-nav">
            <a href="{{route('front.investments1')}}" class="homeIndustry-navItem2 industry-item active">
                <div class="homeIndustry-navImg industryItem-img" style="background-image:url(/site/system/home/z1.jpg);"></div>
                <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</div>

                <a href="{{route('front.investments3')}}" class="homeIndustry-navItem2 industry-item">
                    <div class="homeIndustry-navImg industryItem-img" style="background-image:url(/site/system/home/z3.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}</div>
                </a>
            <a href="{{route('front.investments2')}}" class="homeIndustry-navItem2 industry-item">
                <div class="homeIndustry-navImg industryItem-img" style="background-image:url(/site/system/home/z2.jpg);"></div>
                <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</div>
            </a>

        </div>
    </div>

    <div class="uk-cover-container uk-height-1-1 uk-section uk-section-large uk-light uk-flex uk-flex-middle uk-height-feature">
        <div class="uk-background-primary-wash uk-position-cover"></div>
    </div>


    <div class="uk-position-relative uk-container uk-container-large uk-recent-posts">
        <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
            <div class="uk-style-secondary-m uk-text-11 uk-light" style="color: black">
                {{App::isLocale('vi') ? 'Tin tức' : 'News'}}
            </div>
            <div class="uk-style-line orange"></div>
        </div>


        <div uk-grid class="uk-grid-large uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@m" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 320;">
            @foreach($news as $post)
                <div class="uk-feat-article">
                    <div>
                        <div class="uk-cover-container uk-margin-small-bottom">
                            <canvas width="460" height="370"></canvas>
                            <img data-src="{{ $post->image->path ?? ''}}" data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" class=" Sirv uk-utility-object-fit-cover " alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale" title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale" />
                        </div>
                        <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                            <div>22.03.22</div>
                            <div></div>
                        </div>
                        <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                            {{ $post->name }} </h4>
                        <a class="uk-button uk-color-teal uk-style-secondary-b " href="{{route('front.post', $post->slug)}}">
                            <span class="uk-color-teal uk-text-middle uk-margin-right" style="color: #114D81 !important"> {{App::isLocale('vi') ? 'Chi tiết' : 'Read Article '}}</span>
                            <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy-blue.png') }}" alt="win-icon">
                        </a>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    <style>
        .partner-row {
            background-color: #f0f0f0;
            height: 280px;
            margin-bottom: 50px;
            margin-top: 50px;
        }


        @media only screen and (max-width: 1350px) and (min-width: 320px) {
            .partner-row {
                height: auto;
            }
        }
    </style>

    </div>

    <style>
        h2 {
            text-align: center;
            padding: 20px;
        }

        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>

    <br>

    <div style="margin-top: 60px" class="uk-container uk-container-large ">
        <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
            <div class="uk-style-secondary-m uk-text-11 uk-light" style="color: black">
                {{App::isLocale('vi') ? 'Đối tác tiêu biểu' : 'Partner'}}
            </div>
            <div class="uk-style-line orange"></div>
        </div>
        <section class="customer-logos slider">
            <div class="slide"><img src="/site/system/partner3/1.png"></div>
            <div class="slide"><img src="/site/system/partner3/21.png"></div>
            <div class="slide"><img src="/site/system/partner3/3.png"></div>
            <div class="slide"><img src="/site/system/partner3/4.png"></div>
            <div class="slide"><img src="/site/system/partner3/5.png"></div>
            <div class="slide"><img src="/site/system/partner3/6.png"></div>
            <div class="slide"><img src="/site/system/partner3/7.png"></div>
            <div class="slide"><img src="/site/system/partner3/8.png"></div>
            <div class="slide"><img src="/site/system/partner3/9.png"></div>
            <div class="slide"><img src="/site/system/partner3/10.png"></div>
            <div class="slide"><img src="/site/system/partner3/11.png"></div>
            <div class="slide"><img src="/site/system/partner3/12.png"></div>
            <div class="slide"><img src="/site/system/partner3/13.png"></div>
            <div class="slide"><img src="/site/system/partner3/14.png"></div>
        </section>
    </div>






    <div class="uk-position-relative uk-margin-medium uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center" style="margin: 0">
        <div class="uk-position-cover uk-cover-container">
            <canvas width="1600" height="708"></canvas>
            <img data-src="/site/system/home/i5.jpg" data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" class="Sirv uk-utility-object-fit-cover sirv-image-loaded" referrerpolicy="no-referrer-when-downgrade" id="responsive-image-424658" alt="cta-bg-scaled" title="cta-bg-scaled" src="/site/system/home/i5.jpg" style="">
        </div>
        <div class="uk-text-center">
        </div>
    </div>

</section>
@endsection
@push('scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/libs/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
</script>
<script>
    $(".owl-carousel").on("initialized.owl.carousel", () => {
            setTimeout(() => {
                $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
                $("section").show();
            }, 50);
        });

        const $owlCarousel = $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            slideSpeed: 450,
            autoplay: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            autoplayTimeout: 2000,
            navText: [
                '<svg class="left" width="50" height="50" viewBox="0 0 24 24" style="left: -620"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
                '<svg class="right" width="50" height="50" viewBox="0 0 24 24" style="right: -620"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' /* icons from https://iconmonstr.com */
            ]
        });

</script>

<script>
    $('.homeIndustry-navItem:nth-child(1), .homeIndustry-img:nth-child(1), .homeIndustry-item:nth-child(1)').addClass('active');

        $('.homeIndustry-navItem').mouseover(function () {
            $('.homeIndustry-navItem').not(this).removeClass('active');
            $(this).addClass('active');
            var homeIndustryIndex = $(this).index() + 1;
            $('.homeIndustry-img, .homeIndustry-item').removeClass('active');
            $('.homeIndustry-img:nth-child(' + homeIndustryIndex + '), .homeIndustry-item:nth-child(' + homeIndustryIndex + ')').addClass('active');
        });

        $('.homeIndustry-navItem2:nth-child(1), .homeIndustry-img2:nth-child(1), .homeIndustry-item2:nth-child(1)').addClass('active');

        $('.homeIndustry-navItem2').mouseover(function () {
            $('.homeIndustry-navItem2').not(this).removeClass('active');
            $(this).addClass('active');
            var homeIndustryIndex = $(this).index() + 1;
            $('.homeIndustry-img2, .homeIndustry-item2').removeClass('active');
            $('.homeIndustry-img2:nth-child(' + homeIndustryIndex + '), .homeIndustry-item2:nth-child(' + homeIndustryIndex + ')').addClass('active');
        });

</script>


@endpush
