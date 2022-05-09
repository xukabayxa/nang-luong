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

        <div class="uk-section uk-section-page-header uk-background-logo-wash-left">
            <div class="uk-container uk-container-large">
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-width-1-1">
                            <div class="uk-width-2xlarge-2">
                                <h6 class="uk-style-secondary-m uk-text-11 uk-margin-bottom "
                                    uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">What we do</h6>
                                <h1 class="uk-style-primary-m uk-text-2 uk-text-lh-4-1"
                                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 600;"><span
                                        class="uk-color-primary">Entrepreneurial capital</span> managers, with a passion
                                    for sustainable real assets</h1>
                            </div>
                            <div class="uk-width-xlarge">
                                <div class="uk-style-primary-l uk-text-9  uk-wysiwyg-default uk-margin-top uk-margin-bottom"
                                     style="" uk-scrollspy="cls: uk-animation-fade; delay: 800;">
                                    <p>AGP Sustainable Real Assets is a fund and asset management group, formed by a
                                        group of 8 senior partners who have worked together for over 20 years and share
                                        a passion for sustainable development. AGP invests in, develops and operates
                                        sustainable infrastructure across Three key investment themes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 500;">
                        <div class="uk-cover-container">
                            <img data-src="/site/system/about_us/a_1_2.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-864106820-scaled.jpg?w=1024&h=683&scale"
                                 title="iStock-864106820-scaled.jpg?w=1024&h=683&scale"/>
                            <canvas width="850" height="850"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-container uk-container-medium uk-text-center">
                <h1 class="uk-style-primary-l uk-text-3 uk-text-lh-4"
                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">We exclusively invests in
                    sustainable real assets across three key investment themes</h1>
            </div>
        </div>
        <div class="uk-margin-top uk-margin-left uk-margin-right uk-margin-bottom uk-section-investments">
            <div class="uk-grid-collapse uk-child-width-expand@m" uk-grid
                 uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 400;">
                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="#" class="uk-animation-zoom">
                        <div class="uk-cover-container uk-height-xlarge">
                            <img data-src="/site/system/k.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"
                                 title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"/>
                            <canvas width="1600" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    Renewable Energy</h4>
                                <a class="uk-button uk-color-light uk-style-secondary-b "
                                   href="#">
                                    <span class="uk-color-light uk-text-middle uk-margin-right">find out more</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-light"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="#"
                       class="uk-animation-zoom">
                        <div class="uk-cover-container uk-height-xlarge">
                            <img data-src="/site/system/l1.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled"
                                 title="iStock-1156913631-scaled"/>
                            <canvas width="1600" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    Sustainable Communities & Infrastructure</h4>
                                <a class="uk-button uk-color-light uk-style-secondary-b "
                                   href="">
                                    <span class="uk-color-light uk-text-middle uk-margin-right">Find out more</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-light"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="uk-text-left uk-mega-menu-item items-1">
                    <a href="" class="uk-animation-zoom">
                        <div class="uk-cover-container uk-height-xlarge">
                            <img data-src="/site/system/inves/i_1_1.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled"
                                 title="green-tech-scaled"/>
                            <canvas width="1600" height="720"></canvas>
                            <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                        </div>
                        <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                            <div class="uk-position-bottom uk-padding-xmedium">
                                <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                    Green Technologies</h4>
                                <a class="uk-button uk-color-light uk-style-secondary-b "
                                   href="">
                                    <span class="uk-color-light uk-text-middle uk-margin-right">Find out more</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-light"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-grid-collapse uk-child-width-expand@m uk-grid uk-grid-match" uk-grid>
            <div class="uk-position-relative">
                <div class="uk-position-cover uk-cover-container uk-background-logo-wash uk-light">
                    <div class="uk-background-primary-wash uk-position-cover"></div>
                </div>
                <div class="uk-feature-block-half uk-text-left uk-padding-large uk-position-z-index uk-flex uk-flex-middle uk-flex-center uk-light">
                    <div>
                        <h4 class="uk-style-primary-l uk-text-4 uk-text-lh-4 uk-width-xmedium uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            We incubate, develop and manage investment platforms and offer institutional investors
                            attractive risk-adjusted investment opportunities </h4>
                        <h6 class="uk-style-primary-l uk-text-7 uk-text-lh-3 uk-width-3xmedium uk-margin-small-top"
                            uk-scrollspy="cls: uk-animation-slide-fade; delay: 600;">
                            AGP work across the infrastructure and real estate asset classes, with a strong
                            sustainability mandate </h6>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <canvas width="935" height="935"></canvas>
                        <img data-src=""
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                             alt="global-reach-scaled.jpg?w=1024&h=576&scale"
                             title="global-reach-scaled.jpg?w=1024&h=576&scale"/>
                        <div class="uk-background-gradient-rev uk-position-cover"></div>
                    </div>
                    <div class="uk-background-feat-wash uk-position-cover"></div>

                </div>
                <div class="uk-feature-block-half uk-text-left uk-padding-large uk-flex uk-flex-middle uk-flex-center  uk-light">
                    <div>
                        <h4 class="uk-style-primary-l uk-text-5 uk-text-lh-4 uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            We create bespoke investment to take advantage of opportunities in the ever-increasing
                            complexities of the sustainable energy, infrastructure and green technology markets </h4>
                        <div class="uk-style-primary-l uk-child-width-1-2@l uk-text-12 uk-text-lh-1" uk-grid>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 500;">
                                We understand the investment return requirements of a wide range of global investors and
                                are able to structure investments to achieve a variety of investment goals. We have
                                built up a range of exceptionally strong relationships through creating highly
                                successful investment platforms
                            </div>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                                and portfolios over the last 10 years that have exceeded investment return objectives
                                while securing wider Sustainable Development Goals for our partners. We bring an
                                investment owner’s mindset to the discipline of investing and developing.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src=""
                     data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                     alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"
                     title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"/></div>
            <div class="uk-background-white-wash uk-position-cover"></div>
            <div class="uk-section uk-section-xlarge uk-margin-auto uk-section-quote">
                <div class="uk-container uk-container-article uk-position-relative  uk-text-center">
                    <div class="uk-margin-auto">

                        <h4 class="uk-style-primary-l uk-text-2 uk-lh-71 uk-margin-xsmall-bottom"
                            uk-scrollspy="cls: uk-animation-slide-top-small; delay: 300;">Providing a global reach for
                            sustainable solutions</h4>
                        <h4 class="uk-style-primary-l uk-text-10 uk-lh-28 uk-padding-xmedium-left uk-padding-xmedium-right"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 500;">It is only with the
                            determination and dedication of our people that we can serve our clients, generate long-term
                            value for our shareholders and contribute to the broader public.</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src=""
                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                     class=" Sirv uk-utility-object-fit-cover " alt="cta-bg-scaled" title="cta-bg-scaled"/></div>
            <div class="uk-text-center">
                <div class="uk-position-large uk-position-bottom">
                    <h4 class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-margin-small-bottom uk-margin-auto uk-width-1-2@m"
                        uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                        Partner with us to generate a positive impact for people and the environment </h4>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                           href="#">
                            <span class="uk-color-tertiary uk-text-middle uk-margin-right">get in touch for a net zero future</span>
                            <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                                  uk-icon="icon: button-circle; ratio: 1"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
