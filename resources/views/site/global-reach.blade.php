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
{{-- <link href="/site/css/k.css" rel="stylesheet" type="text/css"> --}}
<link href="/site/css/flickity.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<section id="sozo-main">
    <header class="lte-page-header lte-parallax-yes">
        <div class="container">
            <div class="lte-header-h1-wrapper">
                <h1 class="header">{{App::isLocale('vi') ? 'Danh mục đầu tư' : 'Invesments'}}</h1>
            </div>
           @include('site.partials.bread_crumb2', ['vi' => 'Danh mục đầu tư', 'en' => 'Invesments'])
        </div>
    </header>
    {{-- <div class="uk-section uk-background-dark uk-position-relative uk-overflow-hidden" style="padding-top: 0">
        <div class="uk-container">
            <div class="uk-position-map-bg uk-hidden@s">
                <img src="/site/system/inves/i3.jpg">
            </div>
            <div class="uk-background-wash-map uk-position-cover uk-hidden@s"></div>
            <p class="uk-light uk-margin-remove-top@s uk-margin-small-bottom uk-style-primary-l uk-text-4 uk-text-lh-4 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200" style="color: #fff; text-transform: uppercase"> {{App::isLocale('vi') ? 'Thị trường toàn cầu' : 'Our global expertise'}}</p>
            <img class="global-map" src="/site/system/mapp.jpg" uk-scrollspy="cls: uk-animation-fade; delay: 400;">
        </div>
    </div> --}}
    <section class="index-hot wow fadeIn" data-wow-delay="150ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="col-hot-wrap">
                        <div class="circle-widget-wrap">
                            <div class="lte-pos-top-center circle-line" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="lte-effects.default">
                                <div class="circle-widget-container">
                                    <div class="lte-spinning-atoms-sc lte-pos-top-center lte-opacity-0">
                                        <div class="lte-spinning-atom lte-spinning-atom-1"></div>
                                        <div class="lte-spinning-atom lte-spinning-atom-2"></div>
                                        <div class="lte-spinning-atom lte-spinning-atom-3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dns-widget-image wind-turbin lte-image-vane-blades" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                <div class="dns-widget-container">
                                    <div class="elementor-image">
                                        <img width="1024" height="1024" src="http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-1024x1024.png" class="attachment-large size-large dns-img" alt="" loading="lazy" srcset="http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-1024x1024.png 1024w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-150x150.png 150w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-300x300.png 300w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-768x768.png 768w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-140x140.png 140w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-110x110.png 110w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-290x290.png 290w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-100x100.png 100w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-360x360.png 360w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-480x480.png 480w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02-600x600.png 600w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/benefits_02.png 1200w" sizes="(max-width: 1024px) 100vw, 1024px">
                                    </div>
                                </div>
                            </div>
                            <div class="lte-image-vane dns-widget-image turbin-body" data-id="7c2eea2" data-element_type="widget" data-widget_type="image.default">
                                <div class="dns-widget-container">
                                    <div class="elementor-image">
                                        <img width="150" height="750" src="http://sunlux.like-themes.com/wp-content/uploads/2022/08/benefits_01-crop-small.png" class="attachment-full size-full dns-img" alt="" loading="lazy" srcset="http://sunlux.like-themes.com/wp-content/uploads/2022/08/benefits_01-crop-small.png 150w, http://sunlux.like-themes.com/wp-content/uploads/2022/08/benefits_01-crop-small-60x300.png 60w, http://sunlux.like-themes.com/wp-content/uploads/2022/08/benefits_01-crop-small-20x100.png 20w" sizes="(max-width: 150px) 100vw, 150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        .carousel-custom {
            padding: 150px 0;
        }

        @media all and (max-width: 768px) {
            .flickity-viewport {
                height: 300px;
            }
            .note {
                padding: 15px;
            }
            .carousel-custom {
                padding: 15px;
            }
            #sozo-main {
                padding-top: 0;
            }
            .global-map {
                margin-top: 30px;
            }
            .carousel-nation {
                padding-top: 35px;
            }
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
    <div class="uk-background-light uk-dark carousel-nation">
        <div class="carousel-custom">
            <div class="owl-carousel">
                <div class="carousel-cell thumb-carou" id="carousel-cell1" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/vn.png') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) VIỆT NAM @else Vietnam @endif</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell6" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/lao.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Lào @else Laos @endif</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell3" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/singapore.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Singapore @else Singapore @endif</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell2" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/philippin.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Philippines @else Philippines @endif</p>
                </div>

                <div class="carousel-cell thumb-carou" id="carousel-cell4" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/indonesia.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Indonesia @else Indonesia @endif</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell6" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/koreaflag.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Hàn Quốc @else Korea @endif</p>
                </div>
                <div class="carousel-cell thumb-carou" id="carousel-cell6" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/australia_f.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Australia @else Australia @endif</p>
                </div>

                <div class="carousel-cell thumb-carou" id="carousel-cell6" style="text-align: center; padding-top: 16px; font-weight: bold">
                    <img src="{{ asset('site/system/flags/banglades.jpg') }}" alt="">
                    <p class="uk-text-12">@if(App::isLocale('vi')) Bangladesh @else Bangladesh @endif</p>
                </div>

            </div>
            <div class="carousel carousel-main" data-flickity='{ "hash": true, "pageDots": false }'>

                <div class="carousel-cell cc1" id="carousel-cell1" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Việt Nam @else VietNam @endif
                        </div>

                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Lào @else Laos @endif
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell3" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            SINGAPORE
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell2" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            PHILIPPINES
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>

                <div class="carousel-cell cc1" id="carousel-cell4" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            INDONESIA
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>
                <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Hàn Quốc @else Korea @endif
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>

                <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            AUSTRALIA
                        </div>
                        <div class="note">
                            Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                        </div>
                    </div>
                </div>

                <div class="carousel-cell cc1" id="carousel-cell6" style="padding-top: 10px">
                    <div class="cc-container">
                        <div class="c-name uk-text-8">
                            Bangladesh
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
            autoPlay:3500,
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
