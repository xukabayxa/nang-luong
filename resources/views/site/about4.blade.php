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

        <div class="uk-section uk-section-page-header uk-background-dark uk-light">
            <div class="uk-container uk-container-large">
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-width-1-1">
                            <div class="uk-width-2xlarge-2">
                                <h6 class="uk-style-secondary-m uk-text-11 uk-margin-bottom uk-color-primary"
                                    uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">AGP partners</h6>
                                <h1 class="uk-style-primary-m uk-text-2 uk-text-lh-4-1"
                                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 600;">Focus on
                                    cultivating and sustaining a collaborative work environment</h1>
                            </div>
                            <div class="uk-width-xlarge">
                                <div class="uk-style-primary-l uk-text-9  uk-wysiwyg-default uk-margin-top uk-margin-bottom"
                                     style="" uk-scrollspy="cls: uk-animation-fade; delay: 800;">
                                    <p>AGP senior partners brings an average track record of 25 years of successful
                                        investment and development in infrastructure, real estate and finance. Borne out
                                        by this experience, we share a belief that sustainable development is not only
                                        good for the planet, but also achieves superior investment returns … so long as
                                        it is supported by the right approach to sector, asset and project selection and
                                        hands-on execution and operation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 500;">
                        <div class="uk-cover-container">
                            <img data-src=""
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-492596662-scaled.jpg?w=1024&h=475&scale"
                                 title="iStock-492596662-scaled.jpg?w=1024&h=475&scale"/>
                            <canvas width="850" height="850"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-section"
             uk-scrollspy="cls: uk-animation-slide-right-small; target: .uk-width-2xmedium; delay: 200;">
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m  uk-child-width-1-4@xl uk-flex uk-flex-middle" uk-grid
                 uk-height-match=".uk-oval"
                 uk-scrollspy="cls: uk-animation-draw-reverse; target: .uk-oval-partner; delay: 300;">
                <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-right uk-oval uk-height-partner">
                    <div class="uk-width-2xmedium uk-position-z-index">
                        <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary uk-text-11 uk-lh-21 uk-margin-small-bottom">
                            SP GROUP
                            <span class="uk-style-line teal thick"></span>
                        </div>
                        <h4 class="uk-style-tertiary uk-text-right uk-text-6 uk-lh-44">
                            <img src="/site/system/partner/img.png" style="width: auto; max-height: 120px">
                           </h4>
{{--                        <div class="uk-display-inline-block uk-width-medium uk-text-right uk-margin-xsmall-top uk-float-right">--}}
{{--                            <div class="uk-text-right uk-display-inline uk-margin-small-top uk-margin-xsmall-right">--}}
{{--                                <a href="https://au.linkedin.com/in/josh-carmody-35b30413" target="_blank"--}}
{{--                                   rel="noreferrer">--}}
{{--                                    <span class="uk-icon uk-preserve" uk-icon="icon: linkedin-square; ratio: 1"></span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <img src="https://media.agpgroup.com/uploads/2021/09/australia-flag-circle.png?h=4096"--}}
{{--                                 class="uk-display-inline uk-width-flag" width="50" height="50">--}}
{{--                        </div>--}}
                    </div>
                    <span class="uk-icon uk-preserve uk-position-center uk-oval-partner uk-oval-teal"
                          uk-icon="icon: half-circle; ratio: 1"></span>
                </div>
                <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-right uk-oval uk-height-partner">
                    <div class="uk-width-2xmedium uk-position-z-index">
                        <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary uk-text-11 uk-lh-21 uk-margin-small-bottom">
                            Partner
                            <span class="uk-style-line orange thick"></span>
                        </div>
                        <h4 class="uk-style-tertiary uk-text-right uk-text-6 uk-lh-44">
                            <img src="/site/system/partner/img_1.png" style="width: auto; max-height: 120px">

                        </h4>

                    </div>
                    <span class="uk-icon uk-preserve uk-position-center uk-oval-partner uk-oval-orange"
                          uk-icon="icon: half-circle; ratio: 1"></span>
                </div>
                <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-right uk-oval uk-height-partner">
                    <div class="uk-width-2xmedium uk-position-z-index">
                        <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary uk-text-11 uk-lh-21 uk-margin-small-bottom">
                            Partner
                            <span class="uk-style-line orange thick"></span>
                        </div>
                        <h4 class="uk-style-tertiary uk-text-right uk-text-6 uk-lh-44">
                            <img src="/site/system/partner/img_2.png" style="width: auto; max-height: 120px">
                        </h4>
                    </div>
                    <span class="uk-icon uk-preserve uk-position-center uk-oval-partner uk-oval-orange"
                          uk-icon="icon: half-circle; ratio: 1"></span>
                </div>
                <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-right uk-oval uk-height-partner">
                    <div class="uk-width-2xmedium uk-position-z-index">
                        <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary uk-text-11 uk-lh-21 uk-margin-small-bottom">
                            Partner
                            <span class="uk-style-line teal thick"></span>
                        </div>
                        <h4 class="uk-style-tertiary uk-text-right uk-text-6 uk-lh-44">
                            <img src="/site/system/partner/img_3.png" style="width: auto; max-height: 140px">
                        </h4>
                    </div>
                    <span class="uk-icon uk-preserve uk-position-center uk-oval-partner uk-oval-teal"
                          uk-icon="icon: half-circle; ratio: 1"></span>
                </div>
                <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-text-right uk-oval uk-height-partner">
                    <div class="uk-width-2xmedium uk-position-z-index">
                        <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary uk-text-11 uk-lh-21 uk-margin-small-bottom">
                            Partner
                            <span class="uk-style-line orange thick"></span>
                        </div>
                        <h4 class="uk-style-tertiary uk-text-right uk-text-6 uk-lh-44">
                            Elmahdi Tahri </h4>
                        <div class="uk-display-inline-block uk-width-medium uk-text-right uk-margin-xsmall-top uk-float-right">
                            <div class="uk-text-right uk-display-inline uk-margin-small-top uk-margin-xsmall-right">
                                <a href="https://www.linkedin.com/in/elmahdi-tahri-5448b83/" target="_blank"
                                   rel="noreferrer">
                                    <span class="uk-icon uk-preserve" uk-icon="icon: linkedin-square; ratio: 1"></span>
                                </a>
                            </div>
                            <img src=""
                                 class="uk-display-inline uk-width-flag" width="50" height="50">
                        </div>
                    </div>
                    <span class="uk-icon uk-preserve uk-position-center uk-oval-partner uk-oval-orange"
                          uk-icon="icon: half-circle; ratio: 1"></span>
                </div>
            </div>
        </div>
    </section>
@endsection
