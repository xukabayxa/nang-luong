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
                    <video uk-cover loop muted playsinline uk-video="autoplay: inview">
                        <source src="https://www.agpgroup.com/app/uploads/2021/05/iStock-942182420-optim.mp4"
                                type="video/mp4">
                    </video>
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
                            our global reach </h6>

                        <h1 class="uk-animation-item uk-style-primary-m uk-text-2 uk-lh-71 uk-width-medium">
                            AGP has a global outlook integrated with local market and execution capability </h1>


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

        <div class="uk-position-relative uk-background-dark uk-light  ">


            <div class=" uk-container   uk-section uk-padding-navbar-top"
                 uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">

                <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"
                     uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                    <div class="uk-animation-parent">
                        <div class="uk-margin-column-image">
                            <div class="uk-cover-container">
                                <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-1180355744-scaled.jpg?w=1024&h=683&scale.option=fill&cw=1024&ch=683&cx=center&cy=center"
                                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                     class=" Sirv uk-utility-object-fit-cover "
                                     alt="iStock-1180355744-scaled.jpg?w=1024&h=683&scale"
                                     title="iStock-1180355744-scaled.jpg?w=1024&h=683&scale"/>
                                <canvas width="846" height="776.25"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="uk-animation-parent">

                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-margin uk-background-oval">
                            <div class="uk-width-large-2 uk-margin-large-right uk-content-circle-text">
                                <h4 class="uk-style-tertiary uk-text-6 uk-lh-41 uk-text-uppercase">
                                    fully integrated local execution and operational capability </h4>
                                <div class="uk-style-primary-l uk-text-11 uk-lh-32 uk-animation-item uk-wysiwyg-default uk-margin-top uk-margin-large-left uk-width-circle-content">
                                    <p>We are closely aligned with the investment objectives and thinking of
                                        international investor partners and global capital markets. We research and
                                        track long run economic development and investment trends to spot emerging
                                        opportunities and to inform our sector, asset and project selection which we
                                        combine with detailed local knowledge of regulatory environments, and local
                                        construction, delivery and operational sector capability.</p>
                                </div>
                            </div>
                            <span class="uk-icon uk-preserve uk-position-right-center uk-oval-reverse uk-oval-teal uk-oval-content-circle uk-visible@m"
                                  uk-scrollspy="cls: uk-animation-draw; delay: 1000;"
                                  uk-icon="icon: half-circle; ratio: 1.2"></span>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="uk-section uk-background-dark uk-position-relative uk-overflow-hidden">
            <div class="uk-container">
                <div class="uk-position-map-bg uk-hidden@s">
                    <img src="https://www.agpgroup.com/app/themes/sozo/public/images/map-no-labels.svg">
                </div>
                <div class="uk-background-wash-map uk-position-cover uk-hidden@s"></div>
                <p class="uk-light uk-margin-remove-top@s uk-margin-small-bottom uk-style-primary-l uk-text-3 uk-text-lh-4 uk-text-center"
                   uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200">Our global expertise</p>
                <div class="uk-hidden@s uk-text-center uk-margin-medium-bottom"
                     uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 200">
                    <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                       href="https://www.agpgroup.com/contact/">
                        <span class="uk-color-tertiary uk-text-middle uk-margin-right">see our office locations</span>
                        <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                              uk-icon="icon: button-circle; ratio: 1"></span>
                    </a>
                </div>
                <img class="uk-visible@s"
                     src="https://media.agpgroup.com/uploads/2022/03/global-expertise-map-31-03-22.png"
                     uk-scrollspy="cls: uk-animation-fade; delay: 400;">
            </div>
        </div>
        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="https://media.agpgroup.com/uploads/2021/04/cta-bg-scaled.jpg"
                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                     class=" Sirv uk-utility-object-fit-cover " alt="cta-bg-scaled" title="cta-bg-scaled"/></div>
            <div class="uk-text-center">
                <div class="uk-position-large uk-position-bottom">
                    <h4 class="uk-style-primary-l uk-text-3 uk-text-lh-4 uk-margin-small-bottom uk-margin-auto uk-width-1-2@m"
                        uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                        Partner with us to generate a positive impact for people and the environment </h4>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                           href="https://www.agpgroup.com/contact/">
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
