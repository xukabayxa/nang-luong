@extends('site.layouts.master')
@section('title')
<title>{{ ucfirst($_SERVER['HTTP_HOST']) . ' - '. $config->web_title }}</title>
@endsection
@section('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script href="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="/site/css/home/custom-home.css" rel="stylesheet">
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
        <div class="owl-carousel owl-theme">
            @if(count($banners))
                @foreach($banners as $banner)
                    <img src="{{$banner->image->path ?? ''}}" alt="">
                @endforeach
            @else
                <img src="{{ asset('site/system/slide/s1.jpg') }}" alt="">
                <img src="{{ asset('site/system/slide/s2.jpg') }}" alt="">
                <img src="{{ asset('site/system/slide/s4.jpg') }}" alt="">
            @endif
        </div>
    </div>
    <div id="lazy_load">

    <div class="uk-background-light uk-section uk-dark">
        <div class="uk-container uk-container-xmedium">
            <div>
                <div class="uk-grid uk-grid-large" uk-grid>
                    <div class="uk-width-45@m" uk-scrollspy="cls: uk-animation-slide-left-small; delay: 400;">
                        <div class="uk-style-tertiary uk-text-uppercase uk-text-6 uk-text-lh-6  uk-style-hline uk-position-relative" style="color: #0F4C81 !important; font-weight: bold">
                            {{App::isLocale('vi') ? 'PHÁT TRIỂN NĂNG LƯỢNG BỀN VỮNG' : "Sustainable Development and a Net zero emissions future"}}
                        </div>

                    </div>
                    <div class="uk-width-expand@m" uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <div class="uk-margin-3xmedium-bottom uk-text-8 uk-style-primary-l" style="color: #0F4C81 !important; text-align: justify">
                            {{App::isLocale('vi') ? 'Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo
                            – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.'
                            : "Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations."}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
        <div class="uk-position-cover uk-cover-container">
            <canvas width="1600" height="708"></canvas>
            <img data-src="{{ asset('site/system/home_1.jpg') }}" data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover " alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale" title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale" />
        </div>
        <div class="uk-background-white-wash uk-position-cover"></div>
    </div>


    <div class="homeIndustry-main" >
        <div class="homeIndustry-content">
            <div class="homeIndustry-txt">
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

    <br/>


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
                <h3 class="homeIndustry-title uk-text-8 uk-text-lh-6 ">{{App::isLocale('vi') ? 'Lĩnh vực đầu tư kinh doanh' : 'Business investment'}}</h3>
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
                <div class="homeIndustry-navTxt industryItem-txt uk-text-8">{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</div>

                <a href="{{route('front.investments3')}}" class="homeIndustry-navItem2 industry-item">
                    <div class="homeIndustry-navImg industryItem-img" style="background-image:url(/site/system/home/z3.jpg);"></div>
                    <div class="homeIndustry-navTxt industryItem-txt uk-text-8">{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}</div>
                </a>
            <a href="{{route('front.investments2')}}" class="homeIndustry-navItem2 industry-item">
                <div class="homeIndustry-navImg industryItem-img" style="background-image:url(/site/system/home/z2.jpg);"></div>
                <div class="homeIndustry-navTxt industryItem-txt uk-text-8">{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</div>
            </a>

        </div>
    </div>

    <div class="uk-cover-container uk-height-1-1 uk-section uk-section-large uk-light uk-flex uk-flex-middle uk-height-feature">
        <div class="uk-background-primary-wash uk-position-cover"></div>
    </div>


    <div class="uk-position-relative uk-container uk-container-large uk-recent-posts">
        <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
            <div class="uk-style-secondary-m uk-text-6 uk-text-lh-6 uk-light" style="color: black">
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

    </div>

    <br>

    <div style="margin-top: 60px" class="uk-container uk-container-large ">
        <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
            <div class="uk-style-secondary-m uk-text-6 uk-text-lh-6 uk-light" style="color: black">
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

    <div id="delay_load" class="uk-position-relative uk-margin-medium uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center" style="margin: 0">
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
