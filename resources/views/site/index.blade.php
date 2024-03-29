@extends('site.layouts.master')
@section('title')
<title>{{ ucfirst($_SERVER['HTTP_HOST']) . ' - '. $config->web_title }}</title>
@endsection
@section('css')
<link href="/site/css/home/custom-home.css" rel="stylesheet">
@endsection
@section('content')
<!-- <span></span> -->
<section id="sozo-main">
    <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">
        {{--style banner slick--}}
        <div class="uk-cover-container">
            <video uk-cover="" loop="" muted="" playsinline="" uk-video="autoplay: inview" class="uk-cover" preload="none" style="height: 850px; width: 1512px;">
                <source src="{{ $config->video }}" type="video/mp4">
            </video>
            <canvas width="100%" height="100vh"></canvas>
        </div>
        <div class="owl-carousel owl-theme slider-fade cardcontainer">
            @if($banners->count())
                @foreach($banners as $banner)
                    <div class="item bg-img cover-background theme-overlay-dark-blue" data-overlay-dark="55">
                        <div class="container h-100">
                            <div class="d-table w-100 h-100">
                                <div class="d-table-cell align-middle">
                                    <div class="row justify-content-center text-center position-relative">
                                        <div class="col-md-12 col-lg-12 col-xl-12 z-index-3 position-relative main-banner-area ">
                                    <span class="banner-icon d-none d-lg-block">
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </span>
                                            <p class="text-light-blue font-weight-800 display-29 display-lg-28 display-xl-26 mb-2 text-shadow uk-animation-scale-up">
                                            </p>
                                            <span class="card-border position-relative"></span>
                                            <h1 class="text-white display-19 display-sm-15 display-md-13 display-lg-4 display-xxl-3 mb-4 text-shadow uk-animation-slide-bottom">{{App::isLocale('vi') ? $config->slogan_vi : $config->slogan_en}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="item bg-img cover-background theme-overlay-dark-blue" data-overlay-dark="55" data-background="https://renumawp.websitelayout.net/wp-content/uploads/2022/01/slide-01.jpg" style="background-image: url(&quot;https://renumawp.websitelayout.net/wp-content/uploads/2022/01/slide-01.jpg&quot;);">
                    <div class="container h-100">
                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle">
                                <div class="row justify-content-center text-center position-relative">
                                    <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative main-banner-area ">
                                    <span class="banner-icon d-none d-lg-block">
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </span>
                                        <p class="text-light-blue font-weight-800 display-29 display-lg-28 display-xl-26 mb-2 text-shadow uk-animation-scale-up">As a world innovator in energy stockpiling.</p>
                                        <span class="card-border position-relative"></span>
                                        <h1 class="text-white display-19 display-sm-15 display-md-13 display-lg-4 display-xxl-3 mb-4 text-shadow uk-animation-slide-bottom">Evergreen Producer of Wind Energy</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img cover-background theme-overlay-dark-blue" data-overlay-dark="55" data-background="https://themes.webdevia.com/solar-wp/wp-content/uploads/2015/12/slide_3.jpg" style="background-image: url(&quot;https://themes.webdevia.com/solar-wp/wp-content/uploads/2015/12/slide_3.jpg&quot;);">
                    <div class="container h-100">
                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle">
                                <div class="row justify-content-center text-center position-relative">
                                    <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative main-banner-area ">
                                    <span class="banner-icon d-none d-lg-block">
                                        <i class="fa-solid fa-solar-panel"></i>
                                        </span>
                                        <p class="text-light-blue font-weight-800 display-29 display-lg-28 display-xl-26 mb-2 text-shadow uk-animation-scale-up">As a world innovator in energy stockpiling.</p>
                                        <span class="card-border position-relative"></span>
                                        <h1 class="text-white display-19 display-sm-15 display-md-13 display-lg-4 display-xxl-3 mb-4 text-shadow uk-animation-slide-bottom">{{App::isLocale('vi') ? 'RT - Năng Lượng Cho Tương Lai' : 'RT Producer of Wind Energy'}}</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-img cover-background theme-overlay-dark-blue" data-overlay-dark="55" data-background="https://renumawp.websitelayout.net/wp-content/uploads/2022/01/slide-03.jpg" style="background-image: url(&quot;https://renumawp.websitelayout.net/wp-content/uploads/2022/01/slide-03.jpg&quot;);">
                    <div class="container h-100">
                        <div class="d-table w-100 h-100">
                            <div class="d-table-cell align-middle">
                                <div class="row justify-content-center text-center position-relative">
                                    <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative main-banner-area ">
                                    <span class="banner-icon d-none d-lg-block">
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </span>
                                        <p class="text-light-blue font-weight-800 display-29 display-lg-28 display-xl-26 mb-2 text-shadow uk-animation-scale-up">Develop, and invest in the construction and operation of renewable energy projects
                                        </p>
                                        <span class="card-border position-relative"></span>
                                        <h1 class="text-white display-19 display-sm-15 display-md-13 display-lg-4 display-xxl-3 mb-4 text-shadow uk-animation-slide-bottom">SUSTAINABLE DEVELOPMENT AND A NET ZERO EMISSIONS FUTURE</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="lte-pos-top-center circle-line" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="lte-effects.default">
            <div class="circle-widget-container">
                <div class="lte-spinning-atoms-sc lte-pos-top-center lte-opacity-0">
                    <div class="lte-spinning-atom lte-spinning-atom-1"></div>
                    <div class="lte-spinning-atom lte-spinning-atom-2"></div>
                    <div class="lte-spinning-atom lte-spinning-atom-3"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-5 wow fadeIn" data-wow-delay="180ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
        @if(@$blockOne)
            <div class="container">
                <div class="row align-items-xxl-center">
                    <div class="col-lg-6 mb-2-9 mb-lg-0 wow fadeIn" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeIn;">
                        <div class="about-image">
                            <img src="{{@$blockOne ? ($blockOne->image->path ?? 'https://renumawp.websitelayout.net/wp-content/uploads/2022/04/about1-2.jpg') : 'https://renumawp.websitelayout.net/wp-content/uploads/2022/04/about1-2.jpg'}}" alt="{{App::isLocale('vi') ? 'VỀ CHÚNG TÔI' : 'ABOUT US'}}">
                            <div class="about-shape3"></div>
                            <div class="about-shape4"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
                        <div class="ps-lg-2-9 ps-xl-6 ps-xxl-9">
                            <div class="sec-title half">
                                <span>{{App::isLocale('vi') ? 'VỀ CHÚNG TÔI' : 'ABOUT US'}}</span>
                                <h2 class="h1 mb-0 z-index-2 position-relative"> {{App::isLocale('vi') ? $blockOne->title : $blockOne->title_en}}
                                </h2>
                            </div>

                                {!! App::isLocale('vi') ? $blockOne->body : $blockOne->body_en !!}

                            <div class="pt-2-3 border-top border-color-extra-light-gray d-sm-flex align-items-center contact-index">
                                <a class="btn-style2 medium mr-4" href="#"><i class="fa-solid fa-angle-right mr-4"></i>{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'Read More'}} </a>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="fa-solid fa-square-phone display-17 mr-4" style="color: #0F4C81"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="mb-0">{{App::isLocale('vi') ? 'Liên hệ với chúng tôi': 'Call us for help'}}</p>
                                        <h4 class="h5 mb-0">{{ $config->hotline }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <span class="about-shape1"></span>
        <span class="about-shape2"></span>
    </section>
    <section class="linh_vuc wow bounce" data-wow-delay="150ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadbounceeIn;">
        <div class="container">
            <div class="sec-title text-center">
                <span>{{App::isLocale('vi') ? 'Đầu tư kinh doanh' : 'Business investment'}}</span>
                <h2 class="h1 mb-0 z-index-2 position-relative">
                    {{App::isLocale('vi') ? 'Lĩnh Vực Kinh Doanh của RT Energy Group' : 'Business Investment Of RT Energy Group'}}
                </h2>
            </div>
            <div class="greenenergy_empty_space" data-heightmobile="10px" data-heighttablet="0" data-heightdesktop="0" style="height: 0px;"></div>
            <div class="row">
                @foreach($business as $b)
                    @if(App::isLocale('vi'))
                        <div class="wpb_column vc_column_container col-lg-4 col-sm-4">
                            <div class="vc_column-inner vc_custom_1452623145322">
                                <div class="wpb_wrapper">
                                    <div class="wd-section-blog-services text-center style-3 anim-on">
                                        <article class="layout-2 ">
                                            <div class="wd-blog-post nohover">
                                                <div class="svg-wrapper">
                                                    <svg width="172" height="210" xmlns="http://www.w3.org/2000/svg">
                                                        <rect height="166" width="166" class="shape"></rect>
                                                    </svg>
                                                    <div class="img-wrapper">
                                                        <img src="{{$b->image->path ?? ''}}" alt="icon">
                                                    </div>
                                                </div>
                                                <h4 class="wd-title-element">{{$b->businessVi->title}}</h4>
                                                <p>
                                                    {{$b->businessVi->description}}
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="wpb_column vc_column_container col-lg-4 col-sm-4">
                            <div class="vc_column-inner vc_custom_1452623145322">
                                <div class="wpb_wrapper">
                                    <div class="wd-section-blog-services text-center style-3 anim-on">
                                        <article class="layout-2 ">
                                            <div class="wd-blog-post nohover">
                                                <div class="svg-wrapper">
                                                    <svg width="172" height="210" xmlns="http://www.w3.org/2000/svg">
                                                        <rect height="166" width="166" class="shape"></rect>
                                                    </svg>
                                                    <div class="img-wrapper">
                                                        <img src="{{$b->image->path ?? ''}}" alt="icon">
                                                    </div>
                                                </div>
                                                <h4 class="wd-title-element">{{@$b->businessEn->title ?? ''}}</h4>
                                                <p>
                                                    {{@$b->businessEn->description ?? ''}}
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
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
                                        <img width="1024" height="1024" src="{{ asset('site/img/benefits_02.png') }}" class="attachment-large size-large dns-img" alt="" loading="lazy" srcset="{{ asset('site/img/benefits_02.png') }} 1024w, {{ asset('site/img/benefits_02.png') }} 150w, {{ asset('site/img/benefits_02.png') }} 300w, {{ asset('site/img/benefits_02.png') }} 768w, {{ asset('site/img/benefits_02.png') }} 140w, {{ asset('site/img/benefits_02.png') }} 110w, {{ asset('site/img/benefits_02.png') }} 290w, {{ asset('site/img/benefits_02.png') }} 100w, {{ asset('site/img/benefits_02.png') }} 360w, {{ asset('site/img/benefits_02.png') }} 480w, {{ asset('site/img/benefits_02.png') }} 600w, {{ asset('site/img/benefits_02.png') }} 1200w" sizes="(max-width: 1024px) 100vw, 1024px">
                                    </div>
                                </div>
                            </div>
                            <div class="lte-image-vane dns-widget-image turbin-body" data-id="7c2eea2" data-element_type="widget" data-widget_type="image.default">
                                <div class="dns-widget-container">
                                    <div class="elementor-image">
                                        <img width="150" height="750" src="{{ asset('site/img/benefits_01-crop-small.png') }}" class="attachment-full size-full dns-img" alt="" loading="lazy" srcset="{{ asset('site/img/benefits_01-crop-small.png') }} 150w, {{ asset('site/img/benefits_01-crop-small.png') }} 60w, {{ asset('site/img/benefits_01-crop-small.png') }} 20w" sizes="(max-width: 150px) 100vw, 150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner wow fadeIn" data-wow-delay="150ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
        <div class="container">
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
    </section>
</section>
@endsection
@push('scripts')
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
        slideSpeed: 3000,
        autoplay: true,
        autoplayTimeout: 80000,
        navText: [
            '<svg class="left" width="50" height="50" viewBox="0 0 24 24" style="left: -620"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
            '<svg class="right" width="50" height="50" viewBox="0 0 24 24" style="right: -620"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' /* icons from https://iconmonstr.com */
        ]
    });

</script>
@endpush
