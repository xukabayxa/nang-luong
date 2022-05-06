@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('content')
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <section id="sozo-main">
        <div class="uk-section uk-section-page-header uk-background-logo-wash-left">
            <div class="uk-container uk-container-large">
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-width-1-1">
                            <div class="uk-width-2xlarge-2">
                                <h6 class="uk-style-secondary-m uk-text-11 uk-margin-bottom "
                                    uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">who we are</h6>
                                <h1 class="uk-style-primary-m uk-text-2 uk-text-lh-4-1"
                                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 600;"><span
                                        class="uk-color-primary">Providing a global</span> reach for sustainable
                                    solutions</h1>
                            </div>
                            <div class="uk-width-xlarge">
                                <div class="uk-style-primary-l uk-text-9  uk-wysiwyg-default uk-margin-top uk-margin-bottom"
                                     style="" uk-scrollspy="cls: uk-animation-fade; delay: 800;">
                                    <p>It is only with the determination and dedication of our people that we can serve
                                        our clients, generate long-term value for our shareholders and contribute to the
                                        broader public.</p>
                                </div>
                                <div uk-scrollspy="cls: uk-animation-fade; delay: 800;">
                                    <a class="uk-button uk-color-quartary uk-style-secondary-b "
                                       href="https://www.agpgroup.com/global-reach/">
                                        <span class="uk-color-quartary uk-text-middle uk-margin-right">Global Reach</span>
                                        <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-quartary"
                                              uk-icon="icon: button-circle; ratio: 1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 500;">
                        <div class="uk-cover-container">
                            <img data-src="/site/system/about_us/a_1.jpg"
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-663800200-scaled.jpg?w=1024&h=683&scale"
                                 title="iStock-663800200-scaled.jpg?w=1024&h=683&scale"/>
                            <canvas width="850" height="850"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="uk-background-light uk-dark">
            <div class="uk-container uk-container-medium uk-padding-large-bottom">
                <div class="uk-child-width-1-2@s uk-flex uk-flex-middle uk-grid uk-grid-large" uk-grid
                     uk-height-match=".uk-oval">
                    <div class="uk-position-relative uk-flex uk-flex-middle uk-flex-right uk-oval uk-circle-feature-container">
                        <div class="uk-width-large" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;">
                            <div class="uk-flex uk-flex-middle uk-flex-right uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-bottom">
                                OUR MISSION <span class="uk-style-line"></span>
                            </div>
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-right uk-text-6 uk-text-lh-4">
                                drive a sustainable and net zero greenhouse gas emissions future </h4>
                        </div>
                        <span class="uk-icon uk-preserve uk-position-center uk-oval-red uk-circle-feature"
                              uk-scrollspy="cls: uk-animation-draw; delay: 700;"
                              uk-icon="icon: half-circle; ratio: 1"></span>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 600;">
                        <div class="uk-style-primary-l uk-text-10 uk-text-lh-1 uk-margin-small-bottom uk-width-large">
                            AGP’s mandate is to stimulate, develop, invest, manage and operate sustainable real assets
                            that generate positive impact for people and the environment. We do this by focusing
                            entirely on the financing, development and operation of ‘Sustainable Real Assets’;
                            transformative infrastructure assets that make positive contributions to satisfying the UN
                            SDGs.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-background-gray uk-section uk-section-sdg-square">
            <div class="uk-container uk-container-xxmedium">
                <div class="" uk-grid uk-height-match=".uk-card">
                    <div class="uk-width-3-5@m">
                        <div class="uk-grid-small uk-grid uk-child-width-1-3@m uk-child-width-1-2 uk-margin-auto uk-light"
                             uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 150;">
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#26bde2">6</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">clean water and
                                            sanitation
                                        </div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/6.png">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#ffc300">7</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">Affordable and clean
                                            energy
                                        </div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/7.png">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#ff5f03">9</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">Industry, innovation
                                            & infrastructure
                                        </div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/9.png">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#f89d2a">11</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">Sustainable cities
                                            and communities
                                        </div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/11.png">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#c88b00">12</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">Responsible
                                            consumption and production
                                        </div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/12.png">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-background-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald-small uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-4 uk-text-lh" style="color:#20823f">13</div>
                                        <div class="uk-margin-xxsmall-left uk-text-lh-2 uk-text-12">Climate action</div>
                                    </div>
                                    <div class="uk-text-center uk-margin-top">
                                        <img class="uk-height-xxsmall"
                                             src="https://media.agpgroup.com/uploads/2021/05/13.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand@m uk-position-relative uk-flex uk-flex-middle uk-flex-center">
                        <div class="uk-width-large uk-position-z-index"
                             uk-scrollspy="cls: uk-animation-slide-left-small; delay: 1200;">
                            <h4 class="uk-style-tertiary uk-text-6 uk-lh-41">
                                We have identified six SDGs of particular relevance to AGP </h4>
                            <div class="uk-margin-small-top">
                                <a class="uk-button uk-color-primary uk-style-secondary-b "
                                   href="https://www.agpgroup.com/about-us/un-sdgs/">
                                    <span class="uk-color-primary uk-text-middle uk-margin-right">find out more</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                        <span class="uk-visible@m uk-icon uk-preserve uk-position-right uk-oval-reverse uk-oval-teal uk-height-1-1-svg"
                              uk-icon="icon: half-circle; ratio: 1"
                              uk-scrollspy="cls: uk-animation-draw; delay: 1300;"></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="uk-cover-container uk-height-1-1 uk-background-logo-wash uk-section uk-light">
            <div class="uk-background-primary-wash uk-position-cover"></div>
            <div class="uk-container uk-container-xxmedium">
                <div class="uk-grid-xlarge uk-grid uk-position-relative" uk-grid>
                    <div class="uk-width-2-5@m" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;">
                        <div class="uk-width-3xmedium uk-float-right uk-width-1-1-mobile">
                            <div class="uk-flex uk-flex-middle uk-flex-right@m uk-style-secondary uk-text-11 uk-lh-21 uk-margin-bottom">
                                OUR VALUES <span class="uk-style-line orange thick"></span>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-right uk-text-2 uk-text-lh-4-1">
                                <div class="uk-text-right@m">
                                    Our purpose comes to life through our core values
                                </div>
                            </div>
                            <div class="uk-style-primary-l uk-text-9 uk-lh-32">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                        <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid
                             uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 200;">
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Integrity </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    AGP commits its adherence to strict governing laws, as well as moral and ethical
                                    codes. In all our dealings, investors’ interests are paramount. We will act fairly
                                    and honesty and disclose the nature of AGP’s role, treating all those with whom the
                                    organisation deals, with professionalism, courtesy and respect. </p>
                            </div>
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Sustainability </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    A high standard of sustainability is at the core of AGP’s investment philosophy. All
                                    portfolio investments undergo an impact assessment, social and environmental risk
                                    screening and ongoing monitoring to ensure they support the organisation’s mission
                                    of financing, developing and operating Sustainable Real Assets. </p>
                            </div>
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Profitability </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    AGP seeks to achieve consistently superior profitability for each investment.
                                    Profitability is fundamental to the company’s sustainability. It funds continued
                                    growth for the company, rewarding both, its investors and employees. </p>
                            </div>
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Governance </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    AGP recognises that superior returns are only achieved through adherence to the
                                    highest corporate governance and prudential standards. </p>
                            </div>
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Collaboration </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    AGP recognises that relationships are the organisation’s most important asset. To
                                    better serve investors, AGP strives to encourage synergies and working
                                    cooperatively. This includes internal teamwork as well as developing and nurturing
                                    partnerships with likeminded organisations whose values align with ours. </p>
                            </div>
                            <div class="uk-padding-large-left uk-padding-remove-mobile">
                                <h4 class="uk-style-tertiary uk-text-8 uk-lh-36 uk-text-uppercase">
                                    Growth </h4>
                                <p class="uk-style-primary-l uk-text-12 uk-lh-28">
                                    AGP recognises that its most valuable assets are its people. Employees must be
                                    treated as unique individuals, deserving the respect of their peers and superiors.
                                    AGP recruits the best people without discrimination or bias. Advancement and
                                    remuneration are based solely on merit. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-grid-collapse uk-child-width-expand@m uk-grid uk-grid-match" uk-grid>
            <div class="uk-position-relative">
                <div class="uk-position-cover uk-cover-container uk-background-light uk-dark">
                    <div class="uk-background-plain-wash uk-position-cover"></div>
                </div>
                <div class="uk-feature-block-half uk-text-left uk-padding-large uk-position-z-index uk-flex uk-flex-middle uk-flex-center uk-dark">
                    <div>
                        <div class="uk-flex uk-flex-middle uk-margin-medium-bottom">
                            <h5 class="uk-style-secondary-m uk-text-11 uk-lh-21 uk-color-tertiary"
                                uk-scrollspy="cls: uk-animation-slide-left-small; delay: 200;">
                                extensive research </h5>
                            <div class="uk-style-line orange"
                                 uk-scrollspy="cls: uk-animation-slide-left-small; delay: 200;"></div>
                        </div>
                        <h4 class="uk-style-primary-l uk-text-2 uk-text-lh-4 uk-width-xmedium uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            Commitment to research, innovations & collaborative working in sustainable
                            development. </h4>
                    </div>
                </div>
            </div>
            <div class="uk-position-relative">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <canvas width="935" height="935"></canvas>
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-1216403909.jpg?w=1024&h=683&scale.option=fill&cw=1024&ch=683&cx=center&cy=center"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class="uk-image-grayscale Sirv uk-utility-object-fit-cover "
                             alt="iStock-1216403909.jpg?w=1024&h=683&scale"
                             title="iStock-1216403909.jpg?w=1024&h=683&scale"/>
                        <div class="uk-background-gradient-rev uk-position-cover"></div>
                    </div>
                    <div class="uk-background-feat-wash uk-position-cover"></div>

                </div>
                <div class="uk-feature-block-half uk-text-left uk-padding-large uk-flex uk-flex-middle uk-flex-center  uk-light">
                    <div>
                        <h4 class="uk-style-primary-l uk-text-5 uk-text-lh-4 uk-margin-small-bottom"
                            uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                            Invest into reserach across the world to drive sustainable development forward </h4>
                        <div class="uk-style-primary-l uk-child-width-1-2@l uk-text-12 uk-text-lh-1" uk-grid>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 500;">
                                AGP is strongly committed to research and innovation. Starting from our belief that
                                sustainable development generates superior returns, we invest in research into emerging
                                trends in sustainable development relevant to each of our core business lines: climate
                                change, energy, transport, water, resource use, land use, conservation, cities and
                                communities, changing business and lifestyles. We engage in purposeful research that
                                brings together universities and research institutions, government and business,
                            </div>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                                NGOs and local communities to enhance the relevance, quality and practical influence of
                                our investment activities and identify new areas of opportunity. <br/>
                                <br/>
                                Our approach to investment and project development is also firmly grounded in thorough
                                research and analysis with stringent review processes at each key decision point.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-large uk-margin-medium-top uk-position-relative">
            <span class="uk-icon uk-preserve" uk-icon="icon: line-globe; ratio: 1;"></span>
            <div class="uk-position-center-right uk-width-60 uk-globe-text">
                <div class="uk-text-2 uk-text-lh-4" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 300;">
                    <span class="uk-text-bold">Connected global expertise.</span><br/> Our reach extends across the
                    globe and across asset class.
                </div>
                <div class="uk-margin-medium-top" uk-scrollspy="cls: uk-animation-fade; delay: 500;">
                    <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                       href="https://www.agpgroup.com/contact/">
                        <span class="uk-color-tertiary uk-text-middle uk-margin-right">Our locations</span>
                        <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                              uk-icon="icon: button-circle; ratio: 1"></span>
                    </a>
                </div>
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
