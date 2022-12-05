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
                    <h1 class="header">About Us</h1>
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
                                <span>Introduction</span>
                                <h2 class="h1 mb-0 z-index-2 position-relative">SUSTAINABLE DEVELOPMENT AND A NET ZERO EMISSIONS FUTURE</h2>
                            </div>
                            <div class="about-intro">
                                <p>Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations.
                                </p>
                                <h5 style="margin-bottom: 15px"><b>Realizing that strategy, we aim at the following goal:</b></h5>
                                <div>
                                <p>Develop, and invest in the construction and operation of renewable energy projects
                                </p>
                                <p>Increase investment scale in renewable energy projects from 100MW in 2021 to 500MW in 2023. Towards an investment portfolio with 1GW of renewable energy before or in 2025
                                </p>
                                <p>Research, apply, and invest in projects using new technologies such as Renewable Energy combined with battery storage / combined hydrogen production, .... when such technologies are financially and policy feasible
                                </p>
                                <p>Develop, invest in the construction and operation of green industrial zone projects – in which all electricity used for industrial production is renewable energy
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-wrap">
                            <img width="837" height="800" src="http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01.png" class="attachment-large size-large" alt="" loading="lazy" srcset="http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01.png 837w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01-300x287.png 300w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01-768x734.png 768w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01-100x96.png 100w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01-480x459.png 480w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/facts_01-600x573.png 600w" sizes="(max-width: 837px) 100vw, 837px">
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
                            <img width="1024" height="1024" src="http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-1024x1024.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-1024x1024.jpg 1024w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-150x150.jpg 150w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-300x300.jpg 300w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-768x768.jpg 768w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-140x140.jpg 140w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-110x110.jpg 110w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-290x290.jpg 290w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-100x100.jpg 100w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-360x360.jpg 360w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-480x480.jpg 480w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1-600x600.jpg 600w, http://sunlux.like-themes.com/wp-content/uploads/2022/07/about_01-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px">
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
                                        <h4 class="lte-header">RT Energy was built and developed with the orientation to become a pioneer in the field of renewable energy and green industrial parks in the ASEAN before 2025, and in the world before 2030.
                                        </h4>
                                    </div>
                                </div>
                                <ul>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">01</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">Renewable energy and technology</span>
                                                <span class="lte-descr">Enim pharetra, interdum aliquet augue non lobortis vitae. Dui, mauris egestas turpis egestas. At dictum metus nullam sit habitasse aliquam. A sagittis, phasellus eget in libero elementum egestas nascetur.</span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text">02</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold"> Sustainable industrial park development </span>
                                                <span class="lte-descr">Adipiscing neque, amet scelerisque nulla. Morbi faucibus facilisis sed in risus. Interdum sed egestas bibendum bibendum aenean purus tempor nisi, sit. Habitasse cras arcu morbi porttitor sit eleifend augue sed in.</span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-xl-12 col-xs-12">
                                        <div class="lte-inner">
                                            <i class="lte-icon-text no-border">03</i>
                                            <span class="lte-icon-content">
                                                <span class="lte-header font-weight-bold">New reliable power system</span>
                                                <span class="lte-descr">Scelerisque facilisis elementum orci accumsan. Ultrices elementum morbi nulla sed in vestibulum habitasse. Eu tellus diam quisque suscipit commodo. Turpis nunc molestie non euismod tempor.</span>
                                            </span>
                                        </div>
                                    </li>
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
