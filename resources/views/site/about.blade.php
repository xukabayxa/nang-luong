@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/site/css/about/custom.css" rel="stylesheet">
@endsection
@section('content')
    <section id="sozo-main" style="display: grid">
        <header class="lte-page-header lte-parallax-yes header-about">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">@if(App::isLocale('en')) About Us @else Về chúng tôi @endif</h1>
                </div>
                @include('site.partials.bread_crumb2', ['vi' => 'Về chúng tôi', 'en' => 'About Us'])

            </div>
        </header>
        <section class="about-block-1 about-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-text-wrap">
                            <div class="sec-title half">
                                <span>{{App::isLocale('vi') ? 'Giới thiệu' : 'Introduction' }}</span>
                                <h2 class="h1 mb-0 z-index-2 position-relative">@if(App::isLocale('en')) SUSTAINABLE DEVELOPMENT AND A NET ZERO EMISSIONS FUTURE @else PHÁT TRIỂN NĂNG LƯỢNG BỀN VỮNG @endif
                                </h2>
                            </div>
                            <div class="about-intro">
                                @if(App::isLocale('en'))
                                <p>Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations.
                                </p>
                                <h5 style="margin-bottom: 15px"><b>Realizing that strategy, we aim at the following goal:</b></h5>
                                <div>
                                <p>Develop, and invest in the construction and operation of renewable energy projects
                                </p> <br/>
                                <p>Increase investment scale in renewable energy projects from 100MW in 2021 to 500MW in 2023. Towards an investment portfolio with 1GW of renewable energy before or in 2025
                                </p> <br/>
                                <p>Research, apply, and invest in projects using new technologies such as Renewable Energy combined with battery storage / combined hydrogen production, .... when such technologies are financially and policy feasible
                                </p> <br/>
                                <p>Develop, invest in the construction and operation of green industrial zone projects – in which all electricity used for industrial production is renewable energy
                                </p>
                                @else
                                <p>Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.
                                </p>
                                <h5 style="margin-bottom: 15px"><b>Hiện thực hóa chiến lược đó, chúng tôi nhắm tới những mục tiêu sau đây:
                                </b></h5>
                                <div>
                                <p class="list">Phát triển, đầu tư xây dựng, và vận hành các dự án năng lượng tái tạo
                                </p> <br/>
                                <p class="list">Tăng quy mô danh mục dự án năng lượng tái tạo đầu tư từ 100MW năm 2021 lên 500MW trong năm 2023. Hướng tới danh mục đầu tư với quy mô 1GW năng lượng tái tạo trước hoặc trong năm 2025
                                </p> <br/>
                                <p class="list">Nghiên cứu, ứng dụng và đầu tư vào các dự án sử dụng công nghệ mới như Năng lượng tái tạo kết hợp pin lưu trữ/ kết hợp sản xuất hydrogen, …. khi các công nghệ đó khả thi về mặt tài chính và chính sách
                                </p> <br/>
                                <p class="list">Phát triển, đầu tư xây dựng và vận hành các dự án khu công nghiệp xanh – trong đó toán bộ nguồn điện sử dụng cho sản xuất công nghiệp là năng lượng tái tạo.
                                </p>
                                @endif
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-wrap">
                            <img width="837" height="800" src="{{ asset('site/img/about1.png') }}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{ asset('site/img/about1.png') }}" sizes="(max-width: 837px) 100vw, 837px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-block-2 about-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-wrap">
                            <img width="1024" height="1024" src="{{ asset('site/img/about_img_rt.jpeg') }}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{ asset('site/img/about_img_rt.jpeg') }}" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-text-wrap">
                            {{-- <div class="sec-title half">
                                <span>WHAT WE DO
                                </span>
                                <h2 class="h1 mb-0 z-index-2 position-relative">We are the largest suppliers of solar materials worldwide</h2>
                            </div> --}}
                            <div class="about-intro">
                                <div class="lte-heading">
                                    <div class="lte-heading-content">
                                        <h4 class="lte-header">@if(App::isLocale('en')) RT Energy was built and developed with the orientation to become a pioneer in the field of renewable energy and green industrial parks in the ASEAN before 2025, and in the world before 2030.@else RT Energy được xây dựng và phát triển với định hướng trở thành tập đoàn tiên phong
                                            trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh ở khu vực ASEAN trong năm 2025, và trên thế giới trước năm 2030 @endif
                                        </h4>
                                    </div>
                                </div>
                                <ul>
                                    @if(App::isLocale('en'))
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">01</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">Renewable energy and technology</span>
{{--                                                <span class="lte-descr">Enim pharetra, interdum aliquet augue non lobortis vitae. Dui, mauris egestas turpis egestas. At dictum metus nullam sit habitasse aliquam. A sagittis, phasellus eget in libero elementum egestas nascetur.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">02</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold"> Sustainable industrial park development </span>
{{--                                                <span class="lte-descr">Adipiscing neque, amet scelerisque nulla. Morbi faucibus facilisis sed in risus. Interdum sed egestas bibendum bibendum aenean purus tempor nisi, sit. Habitasse cras arcu morbi porttitor sit eleifend augue sed in.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text no-border">03</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">New reliable power system</span>
{{--                                                <span class="lte-descr">Scelerisque facilisis elementum orci accumsan. Ultrices elementum morbi nulla sed in vestibulum habitasse. Eu tellus diam quisque suscipit commodo. Turpis nunc molestie non euismod tempor.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    @else
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">01</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">Năng lượng tái tạo</span>
{{--                                                <span class="lte-descr">Enim pharetra, interdum aliquet augue non lobortis vitae. Dui, mauris egestas turpis egestas. At dictum metus nullam sit habitasse aliquam. A sagittis, phasellus eget in libero elementum egestas nascetur.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">02</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold"> Khu công nghiệp kết hợp năng lượng tái tạo </span>
{{--                                                <span class="lte-descr">Adipiscing neque, amet scelerisque nulla. Morbi faucibus facilisis sed in risus. Interdum sed egestas bibendum bibendum aenean purus tempor nisi, sit. Habitasse cras arcu morbi porttitor sit eleifend augue sed in.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text no-border">03</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">Năng lượng mới</span>
{{--                                                <span class="lte-descr">Scelerisque facilisis elementum orci accumsan. Ultrices elementum morbi nulla sed in vestibulum habitasse. Eu tellus diam quisque suscipit commodo. Turpis nunc molestie non euismod tempor.</span>--}}
                                            </span>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

@endsection
@push('scripts')
    <script type='text/javascript' src='/site/js/solar.js'
            id='solar-controlpanel-js'></script>
    <script   type='text/javascript' src='/site/js/solar-2.js' id='solar-jqcustom-js'></script>

@endpush
