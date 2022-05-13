@extends('site.layouts.master')
@section('title')
    <title>{{ ucfirst($_SERVER['HTTP_HOST']) . ' - '. $config->web_title }}</title>
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

        <div
            class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

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

                    .owl-prev, .owl-next {
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

                    .owl-prev svg, .owl-next svg {
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

                .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
                    background: #fff;
                }
            </style>
            {{--end--}}

            <div class="owl-carousel owl-theme">
                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/system/slide/s4.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta"
                                       href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->

                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/image/img2.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="" target="_blank"
                                       role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/owl-slide-->


                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/image/img1.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="" target="_blank"
                                       role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/owl-slide-->

                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/image/img8.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta"
                                       href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/image/img5.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta"
                                       href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-slide d-flex align-items-center cover"
                     style="background-image: url(/site/image/img4.jpg);">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title"></h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                    </div>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta"
                                       href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- <div class="owl-slide d-flex align-items-center cover" style="background-image: url(/site/system/8.jpg);">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-md-6 static">
                            <div class="owl-slide-text">
                                <h2 class="owl-slide-animated owl-slide-title"></h2>
                                <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                </div>
                                <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!--/owl-slide-->
            </div>

            <!-- other sections here -->


            {{--            <div class="uk-position-cover">--}}
            {{--                <div class="uk-cover-container">--}}
            {{--                                <video uk-cover loop muted playsinline uk-video="autoplay: inview">--}}

            {{--                                    <source src="https://www.agpgroup.com/app/uploads/2021/06/agp-homepage-video-v2-optim-1.mp4"   type="video/mp4">--}}
            {{--                                    <source src="/site/system/video.mp4" type="video/mp4">--}}
            {{--                                </video>--}}
            {{--                <!-- start of hero -->--}}

            {{--                    <!-- end of hero slider -->--}}
            {{--                    <canvas width="1600" height="900"></canvas>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="uk-background-gradient uk-position-cover"></div>--}}
            {{--            <div class="uk-background-gradient-rev uk-position-cover"></div>--}}


            {{--            <div class="uk-position-relative uk-container uk-container-medium  uk-section uk-padding-navbar-top"--}}
            {{--                 uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">--}}

            {{--                <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"--}}
            {{--                     uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">--}}
            {{--                    <div class="uk-animation-parent">--}}

            {{--                        <h1 class="uk-animation-item uk-style-primary-m uk-text-1 uk-width-large">--}}
            {{--                            Developing, investing & operating sustainable real assets </h1>--}}
            {{--                        <div class="uk-margin-top">--}}
            {{--                            <a class="uk-button uk-color-light uk-style-secondary-b " href="">--}}
            {{--                                <span class="uk-color-light uk-text-middle uk-margin-right">discover our three key investment themes</span>--}}
            {{--                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-light"--}}
            {{--                                      uk-icon="icon: button-circle; ratio: 1"></span>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="uk-scroller uk-container uk-text-center uk-position-bottom uk-position-large">--}}
            {{--                <a href="#scroll-target" uk-scroll>--}}
            {{--                <span class="uk-logo uk-icon uk-preserve" uk-icon="icon: arrow-in-circle; ratio: 1;">--}}
            {{--                    <img class="wind-icon" src="{{ asset('img/icons/wind-energy.png') }}" alt="">--}}
            {{--                </span>--}}
            {{--                    <br/>--}}
            {{--                    <span class="uk-style-secondary">scroll down</span>--}}
            {{--                </a>--}}
            {{--            </div>--}}
        </div>

        <div class="uk-background-light uk-section uk-dark">
            <div class="uk-container uk-container-xmedium">
                <div>
                    <div class="uk-grid uk-grid-large" uk-grid>
                        <div class="uk-width-45@m" uk-scrollspy="cls: uk-animation-slide-left-small; delay: 400;">
                            <div
                                class="uk-style-tertiary uk-text-uppercase uk-text-4 uk-text-lh-4  uk-style-hline uk-position-relative"
                                style="color: #0F4C81 !important">
                                Sustainable Development and a Net zero emissions future
                            </div>

                        </div>
                        <div class="uk-width-expand@m" uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                            <div class="uk-margin-3xmedium-bottom uk-text-8 uk-style-primary-l"
                                 style="color: #0F4C81 !important">
                                AGP exclusively invest in sustainable real assets across three key investment themes. We
                                evaluate our investment strategy against the United Nations Sustainable Development
                                Goals (SDGs) with the aim to accelerate the transition to a net zero emissions future.
                            </div>
                            <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="">
                                <span
                                    class="uk-color-tertiary uk-text-middle uk-margin-right"
                                    style="color: #0F4C81 !important">SDGS of key relevance</span>
                                <img class="wind-icon win-icon-right"
                                     src="{{ asset('img/icons/wind-energy-blue.png') }}"
                                     alt="win-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="uk-section uk-background-dark uk-light">--}}
        {{--            <div class="uk-container uk-container-medium uk-text-center">--}}
        {{--                <h1 class="uk-style-primary-l uk-text-3 uk-text-lh-4"--}}
        {{--                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">We exclusively invest in--}}
        {{--                    sustainable real assets <br/><span--}}
        {{--                        class="uk-style-primary">across three key investment themes</span></h1>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="uk-margin-top uk-margin-left uk-margin-right uk-margin-bottom uk-section-investments">
            <div class="uk-grid-collapse uk-child-width-expand@m" uk-grid
                 uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 400;">

                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="{{route('front.investments1')}}" class="uk-animation-zoom">
                        <div class="uk-cover-container ">
                            <img data-src="{{ asset('site/system/about_us/a1.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"
                                 title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"/>
                            <canvas width="533.33333333333" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div
                            class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    {{trans('message.renewable_energy')}}</h4>
                                <a class="uk-button uk-color-primary uk-style-secondary-b "
                                   href="{{route('front.investments1')}}">
                                    <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                    <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}"
                                         alt="win-icon">
                                </a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="{{route('front.investments2')}}" class="uk-animation-zoom">
                        <div class="uk-cover-container ">
                            <img data-src="{{ asset('site/system/about_us/a2.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled"
                                 title="iStock-1156913631-scaled"/>
                            <canvas width="533.33333333333" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div
                            class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    {{trans('message.sustainable_infrastructure')}}
                                </h4>
                                <a class="uk-button uk-color-primary uk-style-secondary-b "
                                   href="{{route('front.investments2')}}">
                                    <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                    <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}"
                                         alt="win-icon">
                                </a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="{{route('front.investments3')}}" class="uk-animation-zoom">
                        <div class="uk-cover-container ">
                            <img data-src="{{ asset('site/system/about_us/a4.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled"
                                 title="green-tech-scaled"/>
                            <canvas width="533.33333333333" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div
                            class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    {{trans('message.future_solution')}} <br/>
                                </h4>
                                <a class="uk-button uk-color-primary uk-style-secondary-b "
                                   href="{{route('front.investments3')}}/">
                                    <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                    <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy.png') }}"
                                         alt="win-icon">
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="{{ asset('site/system/home_1.jpg') }}" data-options="autostart:created;"
                     class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                     alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"
                     title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"/>
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
            }

            .homeIndustry-txt {
                margin-top: -30px;
                width: 100%;
            }

            .homeIndustry-title {
                color: var(--color-theme);
                /* text-transform: uppercase; */
                font-weight: 700;
                margin-bottom: 12px;
                margin-top: -32px;
            }

            .homeIndustry-desc {
                padding-left: 12px;
                border-left: 2px solid #0F4C81 ;
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
                height: 80px;
                padding-left: 12px;
                overflow: hidden;
                font-size: 13.5px;
                border-left: 2px solid #0F4C81 ;
            }

            .homeIndustry-item2 p {
                height: 80px;
                overflow: hidden;
                font-size: 13.5px;
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
                height: 280px;
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
                padding-top: 24px;
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
                color: #0F4C81 ;
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
                    margin-top: -370px;
                }

                .homeIndustry-title,  .homeIndustry-title2 {
                    margin-top: 24px;
                }


                .homeIndustry-intro, .homeIndustry-intro2 {
                    margin: 24px 0;
                }

                .homeIndustry-item,  .homeIndustry-item2{
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
                .homeIndustry-item p,  .homeIndustry-item2 p{
                    height: auto;
                    margin-bottom: 8px;
                }
                .homeIndustry-figure, .homeIndustry-figure2 {
                    margin: 0;
                    display: none;
                }
                .homeIndustry-nav, .homeIndustry-nav2 {
                    display: none;
                }

            }



        </style>

        <div class="homeIndustry-main" style="margin-top: 20px">
            <div class="homeIndustry-content">
                <div class="homeIndustry-txt">
                                        <h3 class="homeIndustry-title">{{App::isLocale('vi') ? 'Giới thiệu' : 'About us'}}</h3>
                                        <div class="homeIndustry-desc">
                                            {{App::isLocale('vi') ? ' Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo
                                            – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.' : 'Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations.'}}

                                        </div>
                    <div class="homeIndustry-intro">
                        <div class="homeIndustry-item active">
                            <h6>{{App::isLocale('vi') ? 'Giới thiệu chung' : 'Who We Are'}}</h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h1.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và lấy các giá trị được hiển thị. Việc thực thi mẫu sẽ đi qua cấu trúc và đặt con trỏ, được biểu thị bằng dấu chấm
                                '.' và được gọi là "dấu chấm", thành giá trị tại vị trí hiện tại trong cấu trúc khi quá trình thực thi diễn ra.' : ' Templates are executed by applying them to a data structure. Annotations in the template
                                refer to elements of the data structure (typically a field of a struct or a key in a
                                map) to control execution and derive values to be displayed. Execution of the template
                                walks the structure and sets the cursor, represented by a period '.' and called "dot",
                                to the value at the current location in the structure as execution proceeds.'}}
                            </p>
                            <a href="{{route('front.about')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                        <div class="homeIndustry-item">
                            <h6>{{App::isLocale('vi') ? 'Lĩnh vực hoạt động' : 'What We Do'}}</h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h2.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và lấy các giá trị được hiển thị. Việc thực thi mẫu sẽ đi qua cấu trúc và đặt con trỏ, được biểu thị bằng dấu chấm
                                '.' và được gọi là "dấu chấm", thành giá trị tại vị trí hiện tại trong cấu trúc khi quá trình thực thi diễn ra.' : ' Templates are executed by applying them to a data structure. Annotations in the template
                                refer to elements of the data structure (typically a field of a struct or a key in a
                                map) to control execution and derive values to be displayed. Execution of the template
                                walks the structure and sets the cursor, represented by a period '.' and called "dot",
                                to the value at the current location in the structure as execution proceeds.'}}
                            </p>
                            <a href="{{route('front.about2')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                        <div class="homeIndustry-item">
                            <h6>{{App::isLocale('vi') ? 'Bộ máy quản lý' : 'OUR TEAM'}}</h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h3.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và lấy các giá trị được hiển thị. Việc thực thi mẫu sẽ đi qua cấu trúc và đặt con trỏ, được biểu thị bằng dấu chấm
                                '.' và được gọi là "dấu chấm", thành giá trị tại vị trí hiện tại trong cấu trúc khi quá trình thực thi diễn ra.' : ' Templates are executed by applying them to a data structure. Annotations in the template
                                refer to elements of the data structure (typically a field of a struct or a key in a
                                map) to control execution and derive values to be displayed. Execution of the template
                                walks the structure and sets the cursor, represented by a period '.' and called "dot",
                                to the value at the current location in the structure as execution proceeds.'}}
                            </p>
                            <a href="{{route('front.about3')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                        <div class="homeIndustry-item">
                            <h6>{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'OUR PARTNER'}}</h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h4.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và lấy các giá trị được hiển thị. Việc thực thi mẫu sẽ đi qua cấu trúc và đặt con trỏ, được biểu thị bằng dấu chấm
                                '.' và được gọi là "dấu chấm", thành giá trị tại vị trí hiện tại trong cấu trúc khi quá trình thực thi diễn ra.' : ' Templates are executed by applying them to a data structure. Annotations in the template
                                refer to elements of the data structure (typically a field of a struct or a key in a
                                map) to control execution and derive values to be displayed. Execution of the template
                                walks the structure and sets the cursor, represented by a period '.' and called "dot",
                                to the value at the current location in the structure as execution proceeds.'}}
                            </p>
                            <a href="{{route('front.about4')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                    </div>
                </div>
                <div class="homeIndustry-figure">
                    <div class="homeIndustry-img active"
                         style="background-image:url(/site/image/img2.jpg);"></div>
                    <div class="homeIndustry-img"
                         style="background-image:url(/site/system/home/h2.jpg);"></div>
                    <div class="homeIndustry-img"
                         style="background-image:url(/site/system/home/h3.jpg);"></div>
                    <div class="homeIndustry-img"
                         style="background-image:url(/site/system/home/h4.jpg);"></div>
                </div>
            </div>
            <div class="homeIndustry-nav">
                <a href="{{route('front.about')}}"
                   class="homeIndustry-navItem industry-item active">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/image/img2.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt" >{{App::isLocale('vi') ? 'Giới thiệu chung' : 'WHO WE ARE'}}</div>
                </a>
                <a href="{{route('front.about2')}}"
                   class="homeIndustry-navItem industry-item">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/system/home/h2.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Lĩnh vực hoạt động' : 'WHAT WE DO'}}</div>
                </a>
                <a href="{{route('front.about3')}}"
                   class="homeIndustry-navItem industry-item">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/system/home/h3.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Bộ máy quản lý' : 'OUR TEAM'}}</div>
                </a>
                <a href="{{route('front.about4')}}"
                   class="homeIndustry-navItem industry-item">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(site/system/home/h4.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'OUR PARTNER'}}</div>
                </a>
            </div>
        </div>

        <br/>
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

        <div class="row" style="text-align: center; margin-bottom: 30px; margin-top: -10px; display: flex; justify-content: space-evenly">
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
                    <div class="homeIndustry-img2 active"
                         style="background-image:url(/site/system/home/z1.jpg);"></div>
                    <div class="homeIndustry-img2"
                         style="background-image:url(/site/system/home/z2.jpg);"></div>
                    <div class="homeIndustry-img2"
                         style="background-image:url(/site/system/home/z3.jpg);"></div>
                </div>
                <div class="homeIndustry-txt h-txt">
                    <h3 class="homeIndustry-title">{{App::isLocale('vi') ? 'Lĩnh vực đầu tư kinh doanh' : 'Business investment'}}</h3>
                    <div class="homeIndustry-desc"></div>
                    <div class="homeIndustry-intro">
                        <div class="homeIndustry-item2 active">
                            <h6>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}
                            </h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h5.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu
                                (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và'
                                :'So Awesome to see a thirty year old song presented in a modern style. The Singer is now in his late seventies and was very famous in germany since the 1960s. With his Band "The Rattles" he played in Hamburg in the Star Club. Yes, the same club and the same time when The Beatles played there. And they even shared some beer together.
'
                                }}

                            </p>
                            <a href="{{route('front.investments1')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                        <div class="homeIndustry-item2">
                            <h6>{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h6.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu
                                (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và'
                                :'So Awesome to see a thirty year old song presented in a modern style. The Singer is now in his late seventies and was very famous in germany since the 1960s. With his Band "The Rattles" he played in Hamburg in the Star Club. Yes, the same club and the same time when The Beatles played there. And they even shared some beer together.
'
                                }}

                            </p>
                            <a href="{{route('front.investments2')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                        <div class="homeIndustry-item2">
                            <h6>{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}
                                </h6>
                            <div class="imgDes">
                                <img src="/site/system/home/h7.jpg">
                            </div>
                            <p>
                                {{App::isLocale('vi') ? 'Các mẫu được thực thi bằng cách áp dụng chúng vào một cấu trúc dữ liệu. Chú thích trong mẫu đề cập đến các phần tử của cấu trúc dữ liệu
                                (thường là một trường của cấu trúc hoặc một khóa trong bản đồ) để kiểm soát việc thực thi và'
                                :'So Awesome to see a thirty year old song presented in a modern style. The Singer is now in his late seventies and was very famous in germany since the 1960s. With his Band "The Rattles" he played in Hamburg in the Star Club. Yes, the same club and the same time when The Beatles played there. And they even shared some beer together.
'
                                }}

                            </p>
                            <a href="{{route('front.investments3')}}" style="color: #0F4C81">{{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="homeIndustry-nav">
                <a href="{{route('front.investments1')}}"
                   class="homeIndustry-navItem2 industry-item active">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/system/home/z1.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</div>
                </a>
                <a href="{{route('front.investments2')}}"
                   class="homeIndustry-navItem2 industry-item">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/system/home/z2.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</div>
                </a>
                <a href="{{route('front.investments3')}}"
                   class="homeIndustry-navItem2 industry-item">
                    <div class="homeIndustry-navImg industryItem-img"
                         style="background-image:url(/site/system/home/z3.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt">{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}</div>
                </a>
            </div>
        </div>

{{--        <div--}}
{{--            class="uk-cover-container uk-height-1-1 uk-background-logo-wash uk-section uk-section-large uk-light uk-flex uk-flex-middle uk-height-feature">--}}
{{--            <div class="uk-background-primary-wash uk-position-cover"></div>--}}
{{--            <div class="uk-container uk-container-xmedium">--}}
{{--                <div class="uk-grid uk-grid-large uk-position-relative" uk-grid>--}}
{{--                    <div class="uk-width-45@m" uk-scrollspy="cls: uk-animation-slide-left-small; delay: 400;">--}}
{{--                    <span class="uk-visible@m uk-style-secondary-m uk-text-11 uk-lh-21 uk-style-vline">--}}
{{--                        <span class="meta">a net zero future</span>--}}
{{--                        <span class="vline"></span>--}}
{{--                    </span>--}}
{{--                        <div class="uk-style-tertiary uk-text-uppercase uk-text-2 uk-lh-62 uk-margin-small-bottom">--}}
{{--                            Our mission--}}
{{--                        </div>--}}

{{--                        <div class="uk-style-primary-l uk-text-9 uk-text-lh-2">--}}
{{--                            AGP builds businesses and sustainable real assets to drive a sustainable and net zero--}}
{{--                            greenhouse gas (GHG) emissions future.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="uk-width-expand@m" uk-scrollspy="cls: uk-animation-fade; delay: 700;">--}}
{{--                        <div class="uk-style-primary-l uk-text-10 uk-lh-32 uk-margin-xmedium-bottom">--}}
{{--                            AGP’s mandate is to stimulate, invest, develop, manage and operate sustainable real assets--}}
{{--                            that generate positive impact for people and the environment. We do this by focusing--}}
{{--                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;--}}
{{--                            transformative infrastructure assets that make positive contributions to satisfying the UN--}}
{{--                            SDGs.--}}
{{--                        </div>--}}
{{--                        <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="">--}}
{{--                            <span--}}
{{--                                class="uk-color-tertiary uk-text-middle uk-margin-right">how will we achieve it?</span>--}}
{{--                            <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"--}}
{{--                                  uk-icon="icon: button-circle; ratio: 1"></span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div
            class="uk-cover-container uk-height-1-1 uk-section uk-section-large uk-light uk-flex uk-flex-middle uk-height-feature">
            <div class="uk-background-primary-wash uk-position-cover"></div>
        </div>


        <div class="uk-position-relative uk-container uk-container-large uk-recent-posts">
            <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
                <div class="uk-style-secondary-m uk-text-11 uk-light" style="color: black">
                    latest news & energy insights
                </div>
                <div class="uk-style-line orange"></div>
            </div>


            <div uk-grid
                 class="uk-grid-large uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@m"
                 uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 320;">
                <div class="uk-feat-article">
                    <div>
                        <div class="uk-cover-container uk-margin-small-bottom">
                            <canvas width="460" height="370"></canvas>
                            <img data-src="{{ asset('site/system/about_us/a5.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                 title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/>
                        </div>
                        <div
                            class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                            <div>22.03.22</div>
                            <div></div>
                        </div>
                        <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                            AGP Sustainable Real Assets and Hartree Partners Announce US Expansion of Global Solar
                            Partnership </h4>
                        <a class="uk-button uk-color-teal uk-style-secondary-b " href="#">
                            <span class="uk-color-teal uk-text-middle uk-margin-right"
                                  style="color: #114D81 !important">Read Article</span>
                            <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy-blue.png') }}"
                                 alt="win-icon">
                        </a>
                    </div>

                </div>
                <div class="uk-feat-article">
                    <div>
                        <div class="uk-cover-container uk-margin-small-bottom">
                            <canvas width="460" height="370"></canvas>
                            <img data-src="{{ asset('site/system/about_us/a2.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="ASE-EAL-Header-Image.png?w=1024&h=505&scale"
                                 title="ASE-EAL-Header-Image.png?w=1024&h=505&scale"/>
                        </div>
                        <div
                            class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                            <div>11.03.22</div>
                            <div></div>
                        </div>
                        <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                            AMPYR Solar Europe signs deal with Edinburgh Airport to develop solar farm, battery and
                            electric vehicle infrastructure </h4>
                        <a class="uk-button uk-color-teal uk-style-secondary-b "
                           href="https://www.agpgroup.com/insights/ampyr-solar-europe-signs-deal-with-edinburgh-airport-to-develop-solar-farm-battery-and-electric-vehicle-infrastructure/">
                            <span class="uk-color-teal uk-text-middle uk-margin-right"
                                  style="color: #114D81 !important">Read Article</span>
                            <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy-blue.png') }}"
                                 alt="win-icon">
                        </a>
                    </div>

                </div>
                <div class="uk-feat-article">
                    <div>
                        <div class="uk-cover-container uk-margin-small-bottom">
                            <canvas width="460" height="370"></canvas>
                            <img data-src="{{ asset('site/system/about_us/a6.jpg') }}"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"
                                 title="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"/>
                        </div>
                        <div
                            class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                            <div>16.02.22</div>
                            <div></div>
                        </div>
                        <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                            AMPYR Solar Europe Secures €400 Million from CARVAL Investors to Develop and Construct
                            Pipeline of European Solar Assets </h4>
                        <a class="uk-button uk-color-teal uk-style-secondary-b "
                           href="https://www.agpgroup.com/insights/ampyr-solar-europe-secures-e400-million-from-carval-investors-to-develop-and-construct-pipeline-of-european-solar-assets/">
                            <span class="uk-color-teal uk-text-middle uk-margin-right"
                                  style="color: #114D81 !important">Read Article</span>
                            <img class="wind-icon win-icon-right" src="{{ asset('img/icons/wind-energy-blue.png') }}"
                                 alt="win-icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/sun_enegy.jpg"
                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                     class=" Sirv uk-utility-object-fit-cover " alt="cta-bg-scaled" title="cta-bg-scaled"/>
            </div>
            <div class="uk-text-center">
                <div class="uk-position-large uk-position-bottom" style="background: rgba(17, 77, 129,.6)">
                    <h4 class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-margin-small-bottom uk-margin-auto uk-width-1-2@m"
                        uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                        Partner with us to generate a positive impact for people and the environment </h4>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="{{route('front.contact')}}">
                            <span class="uk-color-tertiary uk-text-middle uk-margin-right">get in touch for a net zero future</span>
                            <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                                  uk-icon="icon: button-circle; ratio: 1"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .partner-row {
                background-color: #f0f0f0;
                height: 280px;
                margin-bottom: 50px;
            }


            @media only screen and (max-width: 1350px) and (min-width: 320px) {
                .partner-row {
                    height: auto;
                }
            }
        </style>



        <div class="uk-container uk-padding-medium-top partner-row">
            <div uk-grid="" class=" uk-flex-middle">
                <div class="uk-width-1-1  uk-text-center uk-footer-logos uk-first-column">
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="#" rel="noreferrer" target="_blank">

                            <img src="http://rt.dnsmedia.vn/site/system/partner/p1.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">

                        <a href="#" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p2.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p3.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p4.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p5.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href=" rel=" noreferrer"="" target="_blank">
                        <img src="http://rt.dnsmedia.vn/site/system/partner/p6.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p7.png" class="uk-width-footer-logo">
                        </a>
                    </div>

                </div>
            </div>


            <div uk-grid="" class=" uk-flex-middle">
                <div class="uk-width-1-1  uk-text-center uk-footer-logos uk-first-column">
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="#" rel="noreferrer" target="_blank">

                            <img src="http://rt.dnsmedia.vn/site/system/partner/p1.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">

                        <a href="#" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p2.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p3.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p4.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p5.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href=" rel=" noreferrer"="" target="_blank">
                        <img src="http://rt.dnsmedia.vn/site/system/partner/p6.png" class="uk-width-footer-logo">
                        </a>
                    </div>
                    <div class="uk-margin-medium-right uk-margin-bottom uk-display-inline-block">
                        <a href="" rel="noreferrer" target="_blank">
                            <img src="http://rt.dnsmedia.vn/site/system/partner/p7.png" class="uk-width-footer-logo">
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/home/i5.jpg" data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;" class="Sirv uk-utility-object-fit-cover sirv-image-loaded" referrerpolicy="no-referrer-when-downgrade" id="responsive-image-424658" alt="cta-bg-scaled" title="cta-bg-scaled" src="/site/system/sun_enegy.jpg" style="">
            </div>
            <div class="uk-text-center">
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script src="/libs/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
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
            slideSpeed: 20,
            autoplay: true,
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
