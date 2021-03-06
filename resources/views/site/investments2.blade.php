@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
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
                    <img
                        data-src="/site/system/home/j.jpg" src="/site/system/home/j.jpg"
                        data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                        class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled.jpg?w=1024&h=682&scale"
                        title="iStock-1156913631-scaled.jpg?w=1024&h=682&scale"/>
                    <canvas width="1600" height="900"></canvas>
                </div>

            </div>
            <div class="uk-background-gradient uk-position-cover"></div>
            <div class="uk-background-gradient-rev uk-position-cover"></div>


            <div class="uk-position-relative uk-container uk-container-medium  uk-section uk-padding-navbar-top"
                 uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">

                <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"
                     uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                    <div class="uk-animation-parent">

                        <h6 class="uk-animation-item uk-style-secondary uk-text-11 uk-margin-medium-bottom">
                             </h6>

                        <h1 class="uk-animation-item uk-style-primary-m uk-text-2 uk-lh-71 uk-width-medium" style="color: #fff">
{{--                            {{trans('message.sustainable_infrastructure')}}--}}
                            {{App::isLocale('vi') ? 'NĂNG LƯỢNG MỚI' : 'NEW ENERGY'}}
                        </h1>


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


        <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img
                    data-src=""
                    data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                    alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"
                    title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"/></div>
            <div class="uk-background-white-wash uk-position-cover"></div>
            <div class="uk-section uk-section-large uk-margin-auto uk-width-1-1">
                <div class="uk-container uk-container-xmedium">
                    <div class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-style-hline large uk-width-xmedium"
                         uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;" style="font-weight: normal; max-width: 1200px; font-size:26px; text-align: justify">

                        {{App::isLocale('vi') ? 'Đang nghiên cứu để triển khai' : 'Studying for implementation'}}

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
