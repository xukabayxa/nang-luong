@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
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
                   uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200"> {{App::isLocale('vi') ? 'Thị trường toàn cầu' : 'Our global expertise'}}</p>
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

        <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

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
                and (max-width: 1600px)
                 {
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
                    .nation21{
                      margin-top: -100px;
                    }

                }

        </style>
        <div class="uk-background-light uk-dark">

            <div class="uk-container uk-container-medium uk-padding-large-bottom nation" >
                <div class="uk-child-width-1-2@s uk-flex uk-flex-middle uk-grid uk-grid-large" uk-grid="" uk-height-match=".uk-oval">

                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right uk-oval uk-circle-feature-container uk-first-column">
                        <div class="uk-width-large uk-scrollspy-inview uk-animation-slide-right-small" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;" style="">
                            <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-bottom2" style="padding-left: 140px; margin-bottom: 0">
                                <img src="/site/system/mvn.png" style="height: 170px">
                            </div>

                        </div>
                        <span class="uk-icon uk-preserve uk-position-center uk-oval-red uk-circle-feature uk-scrollspy-inview" uk-scrollspy="cls: uk-animation-draw; delay: 700;" uk-icon="icon: half-circle; ratio: 1" style="">
                            <svg viewBox="0 0 482 645" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="645" style="height: 200px">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g id="Who-we-are" transform="translate(-332.000000, -1000.000000)" stroke="#EC6278" stroke-width="2">
                                    <g id="Group-17" transform="translate(333.286008, 1001.820590)">
                                        <path d="M0.751662914,40.9573792 C47.170655,14.8750781 100.731763,0 157.767131,0 C335.050536,0 478.767131,143.716595 478.767131,321 C478.767131,498.283405 335.050536,642 157.767131,642 C100.423648,642 46.5920648,626.963773 0,600.618938" id="Oval-Copy-5" transform="translate(239.383565, 321.000000) rotate(-180.000000) translate(-239.383565, -321.000000) "></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </span>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 600;" class="uk-scrollspy-inview uk-animation-fade nation21">
                        <div class="uk-style-primary-l uk-text-10 uk-text-lh-1 uk-margin-small-bottom uk-width-large">
                            AGP’s mandate is to stimulate, develop, invest, manage and operate sustainable real assets
                            that generate positive impact for people and the environment. We do this by focusing
                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;
                            transformative infrastructure assets that make positive contributions to satisfying the UN
                            SDGs.
                        </div>
                    </div>

                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right uk-oval uk-circle-feature-container uk-first-column nation1" >
                        <div class="uk-width-large uk-scrollspy-inview uk-animation-slide-right-small" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;" style="">
                            <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-bottom2" style="padding-left: 140px; margin-bottom: 0">
                                <img src="/site/system/phi21.png" style="height: 170px">
                            </div>

                        </div>
                        <span class="uk-icon uk-preserve uk-position-center uk-oval-red uk-circle-feature uk-scrollspy-inview" uk-scrollspy="cls: uk-animation-draw; delay: 700;" uk-icon="icon: half-circle; ratio: 1" style="">
                            <svg viewBox="0 0 482 645" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="645" style="height: 200px">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g id="Who-we-are" transform="translate(-332.000000, -1000.000000)" stroke="#EC6278" stroke-width="2">
                                    <g id="Group-17" transform="translate(333.286008, 1001.820590)">
                                        <path d="M0.751662914,40.9573792 C47.170655,14.8750781 100.731763,0 157.767131,0 C335.050536,0 478.767131,143.716595 478.767131,321 C478.767131,498.283405 335.050536,642 157.767131,642 C100.423648,642 46.5920648,626.963773 0,600.618938" id="Oval-Copy-5" transform="translate(239.383565, 321.000000) rotate(-180.000000) translate(-239.383565, -321.000000) "></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </span>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 600;"  class="nation2 nation21" >
                        <div class="uk-style-primary-l uk-text-10 uk-text-lh-1 uk-margin-small-bottom uk-width-large">
                            AGP’s mandate is to stimulate, develop, invest, manage and operate sustainable real assets
                            that generate positive impact for people and the environment. We do this by focusing
                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;
                            transformative infrastructure assets that make positive contributions to satisfying the UN
                            SDGs.
                        </div>
                    </div>


                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right uk-oval uk-circle-feature-container uk-first-column nation1" >
                        <div class="uk-width-large uk-scrollspy-inview uk-animation-slide-right-small" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;" style="">
                            <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-bottom2" style="padding-left: 140px; margin-bottom: 0">
                                <img src="/site/system/phi21.png" style="height: 170px">
                            </div>

                        </div>
                        <span class="uk-icon uk-preserve uk-position-center uk-oval-red uk-circle-feature uk-scrollspy-inview" uk-scrollspy="cls: uk-animation-draw; delay: 700;" uk-icon="icon: half-circle; ratio: 1" style="">
                            <svg viewBox="0 0 482 645" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="645" style="height: 200px">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g id="Who-we-are" transform="translate(-332.000000, -1000.000000)" stroke="#EC6278" stroke-width="2">
                                    <g id="Group-17" transform="translate(333.286008, 1001.820590)">
                                        <path d="M0.751662914,40.9573792 C47.170655,14.8750781 100.731763,0 157.767131,0 C335.050536,0 478.767131,143.716595 478.767131,321 C478.767131,498.283405 335.050536,642 157.767131,642 C100.423648,642 46.5920648,626.963773 0,600.618938" id="Oval-Copy-5" transform="translate(239.383565, 321.000000) rotate(-180.000000) translate(-239.383565, -321.000000) "></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </span>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 600;"  class="nation2 nation21" >
                        <div class="uk-style-primary-l uk-text-10 uk-text-lh-1 uk-margin-small-bottom uk-width-large">
                            AGP’s mandate is to stimulate, develop, invest, manage and operate sustainable real assets
                            that generate positive impact for people and the environment. We do this by focusing
                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;
                            transformative infrastructure assets that make positive contributions to satisfying the UN
                            SDGs.
                        </div>
                    </div>



                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right uk-oval uk-circle-feature-container uk-first-column nation1" >
                        <div class="uk-width-large uk-scrollspy-inview uk-animation-slide-right-small" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;" style="">
                            <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-bottom2" style="padding-left: 140px; margin-bottom: 0">
                                <img src="/site/system/phi21.png" style="height: 170px">
                            </div>

                        </div>
                        <span class="uk-icon uk-preserve uk-position-center uk-oval-red uk-circle-feature uk-scrollspy-inview" uk-scrollspy="cls: uk-animation-draw; delay: 700;" uk-icon="icon: half-circle; ratio: 1" style="">
                            <svg viewBox="0 0 482 645" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="482" height="645" style="height: 200px">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g id="Who-we-are" transform="translate(-332.000000, -1000.000000)" stroke="#EC6278" stroke-width="2">
                                    <g id="Group-17" transform="translate(333.286008, 1001.820590)">
                                        <path d="M0.751662914,40.9573792 C47.170655,14.8750781 100.731763,0 157.767131,0 C335.050536,0 478.767131,143.716595 478.767131,321 C478.767131,498.283405 335.050536,642 157.767131,642 C100.423648,642 46.5920648,626.963773 0,600.618938" id="Oval-Copy-5" transform="translate(239.383565, 321.000000) rotate(-180.000000) translate(-239.383565, -321.000000) "></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </span>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 600;"  class="nation2 nation21" >
                        <div class="uk-style-primary-l uk-text-10 uk-text-lh-1 uk-margin-small-bottom uk-width-large">
                            AGP’s mandate is to stimulate, develop, invest, manage and operate sustainable real assets
                            that generate positive impact for people and the environment. We do this by focusing
                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;
                            transformative infrastructure assets that make positive contributions to satisfying the UN
                            SDGs.
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection
