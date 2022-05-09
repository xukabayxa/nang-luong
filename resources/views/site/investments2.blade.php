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
        <div
            class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <img
                        data-src="/site/system/inves/i_2.jpg"
                        data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                        class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled.jpg?w=1024&h=682&scale"
                        title="iStock-1156913631-scaled.jpg?w=1024&h=682&scale"/>
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
                            Sustainable Communities & Infrastructure </h6>

                        <h1 class="uk-animation-item uk-style-primary-m uk-text-2 uk-lh-71 uk-width-medium">
                            Re-thinking urban design and infrastructure with a sustainability mindset </h1>


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


        <div class="uk-position-relative uk-background-image uk-flex uk-flex-middle uk-height-1-1 uk-margin-auto">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img
                    data-src=""
                    data-options="autostart:created;" class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                    alt="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"
                    title="64fee03f62e038e277e5863154ebf95e34ac28f6.jpg?w=1024&h=685&scale"/></div>
            <div class="uk-background-white-wash uk-position-cover"></div>
            <div class="uk-section uk-section-large uk-margin-auto uk-width-1-1">
                <div class="uk-container uk-container-xmedium">
                    <div class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-style-hline large uk-width-xmedium"
                         uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">
                        Buildings and built environments are amongst the largest consumers of global energy.
                    </div>
                </div>
                <div class="uk-container uk-container-medium uk-flex uk-flex-right@s">
                    <div class="uk-style-primary-l uk-text-7 uk-text-lh-2 uk-margin-medium-top uk-width-4xmedium"
                         uk-scrollspy="cls: uk-animation-fade; delay: 600;">
                        Building and construction activities together account for 36% of global final energy use and 39%
                        of energy-related carbon dioxide emissions when upstream power generation is included. The
                        transformation of the built environment is central to evolving to a net zero GHG emissions
                        future.<br/>
                        <span class="uk-highlight-source">Source: Global Status report 2017 of GHG emissions</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-grid-collapse uk-child-width-expand@m uk-grid uk-grid-match" uk-grid>
            <div class="uk-position-relative">
                <div class="uk-position-cover uk-cover-container uk-background-logo-wash uk-light">
                    <div class="uk-background-primary-wash uk-position-cover"></div>
                </div>
                <div
                    class="uk-feature-block-half uk-text-left uk-padding-large uk-position-z-index uk-flex uk-flex-middle uk-flex-center uk-light">
                    <div>
                        <h4 class="uk-style-primary-l uk-text-2 uk-text-lh-4 uk-width-xmedium uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            We invest, own, develop and operate sustainable infrastructure & related real estate </h4>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <canvas width="935" height="935"></canvas>
                        <img
                            data-src="/site/system/inves/i_2_1_2.jpg"
                            data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                            class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                            alt="14b28b4c8e15414e047c2cca0c6cb3259be73fd2-scaled.jpg?w=1024&h=654&scale"
                            title="14b28b4c8e15414e047c2cca0c6cb3259be73fd2-scaled.jpg?w=1024&h=654&scale"/>
                        <div class="uk-background-gradient-rev uk-position-cover"></div>
                    </div>
                    <div class="uk-background-feat-wash uk-position-cover"></div>

                </div>
                <div
                    class="uk-feature-block-half uk-text-left uk-padding-large uk-flex uk-flex-middle uk-flex-center  uk-light">
                    <div>
                        <h4 class="uk-style-primary-l uk-text-5 uk-text-lh-4 uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            Townships & Communities </h4>
                        <div class="uk-style-primary-l uk-child-width-1-2@l uk-text-12 uk-text-lh-1" uk-grid>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 500;">
                                A continued shortage of accessible housing, rapid urbanisation and the need for
                                innovative solutions to deliver relevant critical infrastructure in the global city of
                                Bangalore, India, led to the development of sustainable townships by AGP under the
                                Assetz brand. <br/>
                                <br/>
                                Assetz is currently responsible for designing and developing around 6,000 affordable,
                                accessible and environmentally conscious homes, catering to middle income families.
                            </div>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                                These large-scale developments offer a wholesome urban community lifestyle in addition
                                to governance of title and security that help elevate wealth creation. <br/>
                                <br/>
                                With sustainability at its core, each Assetz home is designed to minimise water use and
                                waste, and use renewable energy.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/inves/i_2_1.jpg"
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
