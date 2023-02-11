@extends('site.layouts.master')
@section('title')
<title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('page_class') global @endsection
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
<header class="lte-page-header lte-parallax-yes header-global">
    <div class="container">
        <div class="lte-header-h1-wrapper">
            <h1 class="header">{{App::isLocale('vi') ? 'Thị trường nước ngoài' : 'Our Global Presence'}}</h1>
        </div>

       @include('site.partials.bread_crumb2', ['vi' => 'Thị trường nước ngoài', 'en' => 'Our Global Presence'])

    </div>
</header>
<!-- <span></span> -->
<section id="sozo-main">
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

    <?php
    $note = App::isLocale('vi') ? 'Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.' :
        'Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations.';
    ?>


    <div class="container">
        @if($markets->count())
            <div class="our-global-carou" style="padding: 50px 0">
                <div id="big" class="owl-carousel owl-theme">
                    @foreach($markets as $market)
                        <div class="item">
                            <div class="cc-container">
                                <div class="c-name uk-text-8">
                                    @if(App::isLocale('vi')) {{$market->name}} @else {{$market->en_name}} @endif
                                </div>

                                <div class="note">
                                    @if(App::isLocale('vi')) {{$market->des}} @else {{$market->en_des}} @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div id="thumbs" class="owl-carousel owl-theme">
                    @foreach($markets as $market)
                        <div class="item">
                            <img src="{{ $market->image->path ?? '' }}" alt="">
                            <h4 class="h4 nation-name">@if(App::isLocale('vi')) {{$market->name}} @else {{$market->en_name}} @endif
                            </h4>
                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <div class="our-global-carou" style="padding: 50px 0">
                <div id="big" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="cc-container">
                            <div class="c-name uk-text-8">
                                @if(App::isLocale('vi')) Việt Nam @else Viet Nam @endif
                            </div>

                            <div class="note">
                                {{$note}}
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Lào @else Laos @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Singapore @else Singapore @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Philippines @else Philippines @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Indonesia @else Indonesia @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Hàn Quốc @else Korea @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Úc @else Australia @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>
                    <div class="item">
                        <div class="c-name uk-text-8">
                            @if(App::isLocale('vi')) Bangladesh @else Bangladesh @endif
                        </div>
                        <div class="note">
                            {{$note}}
                        </div>
                    </div>

                </div>
                <div id="thumbs" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('site/system/flags/vn.png') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) VIỆT NAM @else Vietnam @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/lao.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Lào @else Laos @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/singapore.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Singapore @else Singapore @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/philippin.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Philippines @else Philippines @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/indonesia.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Indonesia @else Indonesia @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/koreaflag.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Hàn Quốc @else Korea @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/australia_f.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Australia @else Australia @endif</h4>
                    </div>
                    <div class="item">
                        <img src="{{ asset('site/system/flags/banglades.jpg') }}" alt="">
                        <h4 class="h4 nation-name">@if(App::isLocale('vi')) Bangladesh @else Bangladesh @endif</h4>
                    </div>
                </div>
            </div>
        @endif

    </div>

</section>
<style>
#big .item {
    background: #fff;
    padding: 15px;
    margin: 25px;
    color: #000;
    border-radius: 3px;
    text-align: center;
}
#thumbs .item {
    background: #fff;
    height: auto;
    line-height: 70px;
    padding: 5px;
    margin: 2px;
    color: #444;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
    border: 1px solid #ddd;
}
.c-name {
    font-weight: bold;
    color: #000;
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
#thumbs .item h1 { font-size: 18px; }
#thumbs .current .item {
    background: #136c63;
    color: #fff;
}
h4.h4.nation-name {
    line-height: 32px;
    padding-top: 10px;
}
.owl-theme .owl-nav [class*='owl-'] { -webkit-transition: all .3s ease; transition: all .3s ease; }
.owl-theme .owl-nav [class*='owl-'].disabled:hover { background-color: #D6D6D6; }
#big.owl-theme { position: relative; }
#big.owl-theme .owl-next, #big.owl-theme .owl-prev {
    background: #fff;
    width: 22px;
    line-height: 40px;
    height: 40px;
    margin-top: -20px;
    position: absolute;
    text-align: center;
    top: 50%;
}
#big.owl-theme .owl-prev { left: 10px; }
#big.owl-theme .owl-next { right: 10px; }
#thumbs.owl-theme .owl-next, #thumbs.owl-theme .owl-prev { background:#333; }
</style>
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
    $(document).ready(function() {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
    navText: [
      '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
      '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ]
  })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
      items: 5,
      dots: true,
      nav: false,
      navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
      ],
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: 5,
      responsiveRefreshRate: 100,
      responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:4,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
      }
    })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});

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
