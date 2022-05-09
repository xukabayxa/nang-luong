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

    <section id="sozo-main">
        <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle uk-section-hero ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <video uk-cover loop muted playsinline uk-video="autoplay: inview">
                        <source src="/site/system/inves/i_3.mp4"
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
                            Green technologies </h6>

                        <h1 class="uk-animation-item uk-style-primary-m uk-text-2 uk-lh-71 uk-width-medium">
                            Disruptive technologies to drive and accelerate change </h1>


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
                                <img data-src="/site/system/inves/i_3_1.jpg"
                                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                     class=" Sirv uk-utility-object-fit-cover "
                                     alt="iStock-925854252-scaled.jpg?w=1024&h=680&scale"
                                     title="iStock-925854252-scaled.jpg?w=1024&h=680&scale"/>
                                <canvas width="846" height="776.25"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="uk-animation-parent">

                        <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center uk-margin uk-background-oval">
                            <div class="uk-width-large-2 uk-margin-large-right uk-content-circle-text">
                                <h4 class="uk-style-tertiary uk-text-6 uk-lh-41 uk-text-uppercase">
                                    AGP's contribution to solving the food equation </h4>
                                <div class="uk-style-primary-l uk-text-11 uk-lh-32 uk-animation-item uk-wysiwyg-default uk-margin-top uk-margin-large-left uk-width-circle-content">
                                    <p>The demand for food is growing globally as the world’s population keeps rising
                                        and the developing middle-class increases protein demand. This creates
                                        challenges in land management and the consequent increase of GHG emissions.</p>
                                    <p>AGP aims to contribute to feeding the world without compromising future
                                        generations’ needs. AGP invests across the agri-food sector and implements
                                        regenerative agriculture practices to improve soil health and carbon
                                        sequestration, reversing current global trends of atmospheric accumulation. AGP
                                        aims to transition from ‘agri-chain’ to circular-economy principles, keeping
                                        products and materials in use and converting waste into sub-products to conserve
                                        natural habitats.</p>
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


        <div class=" uk-container   uk-section uk-padding-navbar-top"
             uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">

            <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle  uk-wysiwyg-default"
                 uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                <div class="uk-animation-parent">
                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-center@s uk-margin uk-background-oval">
                        <div class="uk-width-large uk-content-line-text">
                            <div class="uk-animation-item uk-style-tertiary uk-text-6 uk-lh-44 uk-color-primary uk-text-uppercase uk-style-hline large teal uk-margin-small-bottom">
                                The Challenge:
                            </div>

                            <div class="uk-animation-item uk-style-tertiary uk-text-6 uk-lh-44 uk-text-uppercase">
                                The methane threat on our plates and in our glasses
                            </div>

                            <div class="uk-style-primary-l uk-text-11 uk-lh-32 uk-animation-item uk-wysiwyg-default uk-margin-top">
                                <p>One kilogram of beef is the source of around 60 kilograms of greenhouse gases
                                    (CO2-equivalents), mostly methane. On average, a single cow releases over 250 liters
                                    of methane per day – Livestock farming and the meat industry are responsible for 18%
                                    of total global greenhouse gas emissions and over half of what the food sector
                                    emits. AGP established and manages the ICON Agri Trust, an Agri-Tech Fund that
                                    invests in and supports innovative technical solutions for the agri-food sector.</p>
                                <p>ICON investee company FutureFeed exists to support the growth of the use of
                                    Asparagopsis as a natural ingredient for livestock to significantly reduce methane
                                    emissions from livestock. FutureFeed is the global IP holder for the technology,
                                    which benefits the animals, the environment and business.</p>
                            </div>
                            <div class="uk-margin-top">
                                <a class="uk-button uk-color-quartary uk-style-secondary-b "
                                   href="https://www.future-feed.com/">
                                    <span class="uk-color-quartary uk-text-middle uk-margin-right">FutureFeed</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-quartary"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-animation-parent">
                    <div class="uk-margin-column-image">
                        <div class="uk-cover-container">
                            <img data-src="/site/system/inves/i_3_2.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-1202736336-scaled.jpg?w=1024&h=768&scale"
                                 title="iStock-1202736336-scaled.jpg?w=1024&h=768&scale"/>
                            <canvas width="846" height="776.25"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="uk-position-relative uk-background-image uk-light uk-height-viewport uk-flex uk-flex-middle ">

            <div class="uk-position-cover">
                <div class="uk-cover-container">
                    <video uk-cover loop muted playsinline uk-video="autoplay: inview">
                        <source src="/site/system/video.mp4"
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

                        <h3 class="uk-animation-item uk-style-primary-l uk-text-2 uk-lh-62 uk-width-small">
                            Food Planet Prize 2020 - Prizewinner </h3>

                        <h4 class="uk-animation-item uk-style-primary-l uk-text-6 uk-lh-62">
                            FutureFeed </h4>

                        <div class="uk-margin-top">
    <span uk-lightbox="animation: scale"><a class="uk-button uk-color-primary uk-style-secondary-b "
                                            href="https://www.youtube.com/watch?v=K3Pvlzdh45E&ab_channel=FoodPlanetPrize?autoplay=1">
	<span class="uk-color-primary uk-text-middle uk-margin-right">Play Video</span>
			<span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                  uk-icon="icon: button-circle; ratio: 1"></span>
	</a>
</span></div>
                    </div>
                </div>
            </div>


        </div>


        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/inves/i_3_3.jpg"
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
