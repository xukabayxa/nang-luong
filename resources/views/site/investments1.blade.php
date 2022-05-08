@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>
    <!-- <span></span> -->
    <section id="sozo-main">
        <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <img data-src="/site/system/inves/i_1.jpg"
                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                         class=" Sirv uk-utility-object-fit-cover "
                         alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled.jpg?w=1024&h=684&scale"
                         title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled.jpg?w=1024&h=684&scale"/>
                    <canvas width="1600" height="900"></canvas>
                </div>

            </div>
            <div class="uk-background-gradient uk-position-cover"></div>
            <div class="uk-background-gradient-rev uk-position-cover"></div>


            <div class="uk-position-relative uk-container uk-container-medium  uk-section uk-padding-navbar-top"
                 uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">

                <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"
                     uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                    <div class="uk-animation-parent">

                        <h6 class="uk-animation-item uk-style-secondary uk-text-11 uk-margin-medium-bottom">
                            Renewable Energy </h6>

                        <h1 class="uk-animation-item uk-style-primary-m uk-text-2 uk-lh-71 uk-width-medium">
                            Delivering the promise of sustainable net zero future for all </h1>


                    </div>
                </div>
            </div>

            <div class="uk-scroller uk-container uk-text-center uk-position-bottom uk-position-large">
                <a href="#scroll-target" uk-scroll>
                    <span class="uk-logo uk-icon uk-preserve" uk-icon="icon: arrow-in-circle; ratio: 1;"></span><br/>
                    <span class="uk-style-secondary">scroll down</span>
                </a>
            </div>


        </div>

        <div class="uk-section uk-background-dark uk-light">
            <div class="uk-container uk-container-medium">
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div class="uk-style-primary-l">
                        <h3 class="uk-style-primary-m uk-text-3 uk-text-lh-4 uk-width-small"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 150;">
                            Powering a sustainable future </h3>

                        <h4 class="uk-style-primary-l uk-text-9 uk-text-lh-3 uk-margin"
                            uk-scrollspy="cls: uk-animation-fade; delay: 300;">
                            AMPYR Energy is AGP’s global renewable energy business. We develop and operate renewable
                            energy assets </h4>

                        <ul class="uk-list uk-list-collapse"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > li; delay: 100;">
                            <li class="uk-text-11 uk-lh-48">
                                <span class="uk-icon uk-preserve uk-margin-small-right"
                                      uk-icon="icon: bullet; ratio: 1"></span>
                                Onshore wind
                            </li>
                            <li class="uk-text-11 uk-lh-48">
                                <span class="uk-icon uk-preserve uk-margin-small-right"
                                      uk-icon="icon: bullet; ratio: 1"></span>
                                Ground-mounted solar
                            </li>
                            <li class="uk-text-11 uk-lh-48">
                                <span class="uk-icon uk-preserve uk-margin-small-right"
                                      uk-icon="icon: bullet; ratio: 1"></span>
                                Rooftop and behind-the-meter solar
                            </li>
                            <li class="uk-text-11 uk-lh-48">
                                <span class="uk-icon uk-preserve uk-margin-small-right"
                                      uk-icon="icon: bullet; ratio: 1"></span>
                                Battery energy storage systems
                            </li>
                            <li class="uk-text-11 uk-lh-48">
                                <span class="uk-icon uk-preserve uk-margin-small-right"
                                      uk-icon="icon: bullet; ratio: 1"></span>
                                Energy as a service and decentralised power solutions
                            </li>
                        </ul>

                        <div class="uk-margin-top" uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                            <a class="uk-button uk-color-tertiary uk-style-secondary-b " href="https://ampyrenergy.com/"
                               target="_blank">
                                <span class="uk-color-tertiary uk-text-middle uk-margin-right">AMPYR website</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>

                        <p class="uk-text-11 uk-text-lh-1 uk-width-large"
                           uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                            AMPYR Energy invests, develops, operates and manages renewable energy assets and provides
                            sophisticated financing, supply and risk-management strategies for power users.<br/>
                            <br/>
                            AMPYR Energy has been created by highly experienced partners to help accelerate the
                            transition to a zero-carbon future and to realise the huge potential of that shift – for
                            investors, for power users and for communities. </p>


                    </div>
                    <div uk-scrollspy="cls: uk-animation-slide-right-small; target: > div; delay: 200;">
                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right@m uk-oval uk-height-pointer uk-margin-medium">
                            <div class="uk-width-medium uk-style-primary-l uk-text-8 uk-lh-36 uk-padding-small-left">
                                Presently developing a portfolio of over 7GW of renewable energy assets globally
                            </div>
                            <span class="uk-visible@m uk-icon uk-preserve uk-position-left uk-oval-pointer uk-oval-teal"
                                  uk-icon="icon: half-circle; ratio: 1"></span>
                        </div>
                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right@m uk-oval uk-height-pointer uk-margin-medium">
                            <div class="uk-width-medium uk-style-primary-l uk-text-8 uk-lh-36 uk-padding-small-left">
                                Management team with a track record of delivering over 3GW of wind and solar projects in
                                Asia Pacific
                            </div>
                            <span class="uk-visible@m uk-icon uk-preserve uk-position-left uk-oval-pointer uk-oval-teal"
                                  uk-icon="icon: half-circle; ratio: 1"></span>
                        </div>
                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right@m uk-oval uk-height-pointer uk-margin-medium">
                            <div class="uk-width-medium uk-style-primary-l uk-text-8 uk-lh-36 uk-padding-small-left">
                                Offices with full development and O&amp;M capability in Singapore, Australia, India, UK,
                                USA
                            </div>
                            <span class="uk-visible@m uk-icon uk-preserve uk-position-left uk-oval-pointer uk-oval-teal"
                                  uk-icon="icon: half-circle; ratio: 1"></span>
                        </div>
                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right@m uk-oval uk-height-pointer uk-margin-medium">
                            <div class="uk-width-medium uk-style-primary-l uk-text-8 uk-lh-36 uk-padding-small-left">
                                Presently developing a portfolio of over 7GW of renewable energy assets globally
                            </div>
                            <span class="uk-visible@m uk-icon uk-preserve uk-position-left uk-oval-pointer uk-oval-teal"
                                  uk-icon="icon: half-circle; ratio: 1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/inves/i_1_1.jpg"
                     data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                     alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"
                     title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"/></div>
            <div class="uk-background-white-wash uk-position-cover"></div>
            <div class="uk-section uk-width-1-1 uk-section-large">
                <div class="uk-container">
                    <div class="uk-flex-middle uk-flex-center uk-text-center uk-grid-column-small uk-grid-row-large uk-child-width-1-2@s uk-child-width-1-3@m uk-style-tertiary uk-text-uppercase uk-text-11 uk-lh-44"
                         uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 200;">
                        <div>
                            <div class="uk-margin-small-bottom">Presently developing</div>
                            <div>
                                <span class="uk-text-2">26</span>
                                <span class="uk-text-6"></span>
                            </div>
                            <div class="uk-margin-small-top uk-width-3xmedium uk-margin-auto-left uk-margin-auto-right uk-text-11 uk-text-lh-3">
                                onshore wind projects
                            </div>
                        </div>
                        <div>
                            <div class="uk-margin-small-bottom">Presently developing</div>
                            <div>
                                <span class="uk-text-2">67</span>
                                <span class="uk-text-6"></span>
                            </div>
                            <div class="uk-margin-small-top uk-width-3xmedium uk-margin-auto-left uk-margin-auto-right uk-text-11 uk-text-lh-3">
                                solar projects
                            </div>
                        </div>
                        <div>
                            <div class="uk-margin-small-bottom">Presently developing</div>
                            <div>
                                <span class="uk-text-2">5</span>
                                <span class="uk-text-6"></span>
                            </div>
                            <div class="uk-margin-small-top uk-width-3xmedium uk-margin-auto-left uk-margin-auto-right uk-text-11 uk-text-lh-3">
                                battery storage projects
                            </div>
                        </div>
                        <div>
                            <div>
                                <span class="uk-text-2">7</span>
                                <span class="uk-text-6">GW+</span>
                            </div>
                            <div class="uk-margin-small-top uk-width-3xmedium uk-margin-auto-left uk-margin-auto-right uk-text-11 uk-text-lh-3">
                                of renewable energy assets under development
                            </div>
                        </div>
                        <div>
                            <div class="uk-margin-small-top uk-width-3xmedium uk-margin-auto-left uk-margin-auto-right uk-text-11 uk-text-lh-3">
                                Also developing grid ancillary power for balancing requirement as part of PPA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/inves/i_1_1.jpg"
                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                     class=" Sirv uk-utility-object-fit-cover " alt="cta-bg-scaled" title="cta-bg-scaled"/></div>
            <div class="uk-text-center">
                <div class="uk-position-large uk-position-bottom">
                    <h4 class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-margin-small-bottom uk-margin-auto uk-width-1-2@m"
                        uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                        Partner with us to generate a positive impact for people and the environment </h4>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                           href="">
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
