@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/css/solar-skin.css" rel="stylesheet">
    <link href="/site/css/solar1.css" rel="stylesheet">
    <link href="/site/css/solar2.css" rel="stylesheet">
    <link href="/site/css/about/custom-about4.css" rel="stylesheet">


@endsection
@section('content')
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <section id="sozo-main" style="display: grid">
        <section class="main-title-section-wrapper default"
                 style="background:url(https://solarwp.wpengine.com/wp-content/uploads/2016/09/page-title-img.jpg)
           top left repeat;">
            <div class="container">
                <div class="main-title-section"><h1>{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'Strategic Partnership'}}</h1></div>
            </div>
        </section>

        <div id="main"><!-- ** Container ** -->
            <div class="uk-container">
                <section id="primary" class="content-full-width">                <!-- #post-6198 -->
                    <div id="post-6198" class="post-6198 page type-page status-publish hentry"></div><!-- #post-6198 -->
                    <div class="dt-sc-clear"></div>

                    <!-- Portfolio Template -->
                    <div class="dt-sc-portfolio-sorting type2" style="background: #0A2C48">
                        <a href="#" class="active-sort" title="All" data-filter=".all-sort">{{App::isLocale('vi') ? 'TẤT CẢ' : 'ALL'}}</a>
                        <a href='#' data-filter=".household-sort">
                            {{App::isLocale('vi') ? 'ĐỐI TÁC ĐẦU TƯ' : 'INVESTMENT PARTNER'}} </a>
                        <a href='#' data-filter=".research-sort">
                            {{App::isLocale('vi') ? 'NHÀ CUNG CẤP' : 'SUPPLIER'}} </a>
                        <a href='#' data-filter=".school-sort">
                            {{App::isLocale('vi') ? 'NHÀ THẦU' : 'CONTRACTORS'}} </a>
                    </div>
                    <div class="dt-sc-portfolio-container with-space">
                        <div id="dt_portfolios-6632"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/1.png"
                                     alt=""
                                     title=""/>
{{--                                <div class="image-overlay">--}}
{{--                                    <div class="links">--}}
{{--                                        <a title="MASSIVE DEPLOYMENT OF SOLAR PANELS"--}}
{{--                                           href="https://solarwp.wpengine.com/dt_portfolios/suspendisse-tempor-iaculis-leo/">--}}
{{--                                            <span class="icon icon-linked"> </span> </a>--}}
{{--                                        <a title="MASSIVE DEPLOYMENT OF SOLAR PANELS" data-gal="prettyPhoto[gallery]"--}}
{{--                                           href="https://solarwp.wpengine.com/wp-content/uploads/2016/11/portfolio-img12.jpg">--}}
{{--                                            <span class="icon icon-search"> </span> </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="image-overlay-details">--}}
{{--                                        <h2>--}}
{{--                                            <a href="https://solarwp.wpengine.com/dt_portfolios/suspendisse-tempor-iaculis-leo/"--}}
{{--                                               title="Permalink to MASSIVE DEPLOYMENT OF SOLAR PANELS">MASSIVE--}}
{{--                                                DEPLOYMENT OF SOLAR PANELS</a></h2>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </figure>
                        </div>
                        <div id="dt_portfolios-6633"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/21.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6634"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/3.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6635"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/4.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6636"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/5.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6637"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/6.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6638"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/7.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6639"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/8.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6640"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/9.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6641"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/10.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6642"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/11.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6643"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/12.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6644"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/13.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6645"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first household-sort">
                            <figure>
                                <img src="/site/system/partner3/14.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>

                        <div id="dt_portfolios-6646"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first school-sort">
                            <figure>
                                <img src="/site/system/partner4/1.png"
                                     alt=""
                                     title=""/>
                                {{--                                <div class="image-overlay">--}}
                                {{--                                    <div class="links">--}}
                                {{--                                        <a title="MASSIVE DEPLOYMENT OF SOLAR PANELS"--}}
                                {{--                                           href="https://solarwp.wpengine.com/dt_portfolios/suspendisse-tempor-iaculis-leo/">--}}
                                {{--                                            <span class="icon icon-linked"> </span> </a>--}}
                                {{--                                        <a title="MASSIVE DEPLOYMENT OF SOLAR PANELS" data-gal="prettyPhoto[gallery]"--}}
                                {{--                                           href="https://solarwp.wpengine.com/wp-content/uploads/2016/11/portfolio-img12.jpg">--}}
                                {{--                                            <span class="icon icon-search"> </span> </a>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="image-overlay-details">--}}
                                {{--                                        <h2>--}}
                                {{--                                            <a href="https://solarwp.wpengine.com/dt_portfolios/suspendisse-tempor-iaculis-leo/"--}}
                                {{--                                               title="Permalink to MASSIVE DEPLOYMENT OF SOLAR PANELS">MASSIVE--}}
                                {{--                                                DEPLOYMENT OF SOLAR PANELS</a></h2>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </figure>
                        </div>
                        <div id="dt_portfolios-6647"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first school-sort">
                            <figure>
                                <img src="/site/system/partner4/2.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6648"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first school-sort">
                            <figure>
                                <img src="/site/system/partner4/3.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6649"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first school-sort">
                            <figure>
                                <img src="/site/system/partner4/4.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6650"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first school-sort">
                            <figure>
                                <img src="/site/system/partner4/5.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6651"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/6.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6652"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/7.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6653"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/8.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6654"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/9.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6655"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/10.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6656"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/11.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6657"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/12.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6658"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/13.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6659"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/14.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6660"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/15.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6661"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/16.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                        <div id="dt_portfolios-6662"
                             class="type2 with-space portfolio column dt-sc-one-third all-sort first research-sort">
                            <figure>
                                <img src="/site/system/partner4/17.png"
                                     alt=""
                                     title=""/>
                            </figure>
                        </div>
                    </div>
                    <!-- **Pagination** -->
                    <div class="pagination blog-pagination">
                    </div><!-- **Pagination** -->
                    <!-- Portfolio Template -->
                </section><!-- **Primary - End** -->        </div><!-- **Container - End** -->

        </div>





    </section>

@endsection
@push('scripts')
    <script type='text/javascript' src='/site/js/solar/cart-fragments.min.js?ver=4.9.5' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery.ui.totop.min.js?ver=5.9.2' id='jquery-ui-totop-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-smartresize-vda841e2f652babf1fe168a15edf9e84183143323.js'
            id='jquery-smartresize-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-bxslider-v2a413af3e7ba3b09e5ce4dd1bd29084b7893b752.js'
            id='jquery-bxslider-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-caroufredsel-ve159d16ffcedb7c0b769a8fa88ac4fb5b0e3d27a.js'
            id='jquery-caroufredsel-js'></script>

    <script type='text/javascript' src='/site/js/solar/jquery-classie-v9d500c626a92f1b3d31668521ceb0f870a3abbd1.js'
            id='jquery-classie-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-debouncedresize-v953472b776b8205bc62c27798b8e4ae04d8ea391.js'
            id='jquery-debouncedresize-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-downcount-va03f700471e1d07a8359cc3b497c57e6ea77e15c.js'
            id='jquery-downcount-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-easypiechart-v6e0a1d200a20dd6282cf576ff19d6cf1688e6072.js'
            id='jquery-easypiechart-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-fancybox-v356f7dec3fcb18867f987bbb5db8ea802bd933b7.js'
            id='jquery-fancybox-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-fitvids-vd1866939661dcd611837211ec716a99f85d06731.js'
            id='jquery-fitvids-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-nicescroll-ve599407674ea2f2ec07e89ce5ba01aba972f8253.js'
            id='jquery-nicescroll-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-parallax-v8065cda61fb629bc7c1d74663feafab1eea05671.js'
            id='jquery-parallax-js'></script>

    <script type='text/javascript' src='/site/js/solar/jquery.placeholder.min.js?ver=5.3.1.1' id='jquery-placeholder-js'></script>
    <script type='text/javascript' src='/site/js/solar/jquery-prettyphoto-v3f2eb44177fa3c8195a1640677351dc167685517.js'
            id='jquery-prettyphoto-js'></script>
    <script type='text/javascript' src='/site/js/solar.js'
            id='solar-controlpanel-js'></script>

    <script type='text/javascript' src='/site/js/jquery-sticky.js'
            id='jquery-sticky-js'></script>
    <script type='text/javascript' src='/site/js/jquery.visualNav.min.js?ver=5.9.2' id='jquery-visualnav-js'></script>
    <script type='text/javascript' src='/site/js/isotope.pkgd.min.js?ver=6.5.0' id='isotope-js'></script>
    <script type='text/javascript' src='/site/js/solar-2.js' id='solar-jqcustom-js'></script>


@endpush
