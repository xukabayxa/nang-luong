@extends('site.layouts.master')
@section('title')
<title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('css')
{{--
<link rel="stylesheet" href="/site/css/s1.css">--}}
{{--
<link rel="stylesheet" href="/site/css/slick.css">--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
<link href="/site/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="/site/css/k.css" rel="stylesheet" type="text/css">
<link href="/site/css/flickity.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div uk-sticky="animation: uk-animation-slide-top;">
    {{-- <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">--}}
        {{-- @include('site.partials.header')--}}
        {{-- </div>--}}
    <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
        @include('site.partials.header')
    </div>
</div>

<!-- <span></span> -->
<section id="sozo-main">


    <div class="uk-section uk-background-dark uk-position-relative uk-overflow-hidden" style="padding-top: 0">
        <div class="uk-container">
            <div class="uk-position-map-bg uk-hidden@s">
                <img src="/site/system/inves/i3.jpg">
            </div>
            <div class="uk-background-wash-map uk-position-cover uk-hidden@s"></div>
            <p class="uk-light uk-margin-remove-top@s uk-margin-small-bottom uk-style-primary-l uk-text-3 uk-text-lh-4 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200" style="color: #fff; text-transform: uppercase"> {{App::isLocale('vi') ? 'Thị trường toàn cầu' : 'Our global expertise'}}</p>
            <div class="uk-hidden@s uk-text-center uk-margin-medium-bottom" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200">
                <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="">
                    <span class="uk-color-tertiary uk-text-middle uk-margin-right">see our office locations</span>
                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary" uk-icon="icon: button-circle; ratio: 1"></span>
                </a>
            </div>
            <img class="uk-visible@s" src="/site/system/mapp.jpg" uk-scrollspy="cls: uk-animation-fade; delay: 400;">
        </div>
    </div>

    <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

        <div class="uk-position-cover">
            <div class="uk-cover-container">
                <video uk-cover loop muted playsinline uk-video="autoplay: inview">
                    <source src="/site/system/inves/i_3.mp4" type="video/mp4">
                </video>
                <canvas width="1600" height="900"></canvas>
            </div>

        </div>
        <div class="uk-background-gradient uk-position-cover"></div>
        <div class="uk-background-gradient-rev uk-position-cover"></div>


    </div>

    <style>
        @media screen and (min-width: 1200px) and (max-width: 1600px) {

            .nation1,
            .nation2 {
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

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
            .nation21 {
                margin-top: -100px;
            }

        }

        .flickity-viewport {
            height: 200px;
        }

        .cc1 {
            height: 100%;
            background: #0A2C48;
            color: #fff;
            padding: 150px 0;
            text-align: center;
        }

        .cc-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .c-name {
            font-weight: bold;
            color: #fff;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid var(--color-theme);
            transition: all .25s ease-out;
            opacity: 1;
            padding: 25px 0;
        }

        @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 1) {
            .note {
                /*padding: 120px;*/
            }
        }


        .note {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all .25s ease-out;
            opacity: 1;
        }
    </style>
    <div class="uk-background-light uk-dark">
        <div class="carousel-custom" style="padding-top: 150px; padding-bottom: 150px">
            <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>

                <div class="carousel-cell thumb-carou" id="carousel-cell1" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/vn.png') }}" alt="">
                    <p class="">VIỆT NAM</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell2" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/philippin.jpg') }}" alt="">
                    <p class="">PHILIPPINES</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell3" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/singapore.jpg') }}" alt="">
                    <p class="">SINGAPORE</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell4" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/indonesia.jpg') }}" alt="">
                    <p class="">INDONESIA</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell5" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/india.jpg') }}" alt="">
                    <p class="">ẤN ĐỘ</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell6" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/australia_f.jpg') }}" alt="">
                    <p class="">AUSTRALIA</p>
                </div>

            </div>
            <div class="carousel carousel-main" data-flickity='{ "hash": true, "pageDots": false }'>

                <div class="carousel-cell cc1" id="carousel-cell1" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            VIỆT NAM
                        </div>

                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell2" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            PHILIPPINES
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell3" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            SINGAPORE
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell4" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            INDONESIA
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell5" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            ẤN ĐỘ
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name">
                            AUSTRALIA
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
@endsection

@push('scripts')
{{-- <script src="/site/js/slick.min.js"> </script>--}}

@endpush

@section('script_custom')
<script type="text/javascript" src="/site/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js" type="text/javascript"></script>

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
