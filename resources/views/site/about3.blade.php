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

        <div class="uk-section uk-section-page-header uk-background-logo-wash-left">
            <div class="uk-container uk-container-large">
                <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-width-1-1">
                            <div class="uk-width-2xlarge-2">
                                <h6 class="uk-style-secondary-m uk-text-11 uk-margin-bottom "
                                    uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">The UN SDGs</h6>
                                <h1 class="uk-style-primary-m uk-text-2 uk-text-lh-4-1"
                                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 600;"><span
                                        class="uk-color-primary">The 2030 Agenda for</span> Sustainable Development
                                    outlines 17 Sustainable Development Goals</h1>
                            </div>
                            <div class="uk-width-xlarge">
                                <div class="uk-style-primary-l uk-text-9  uk-wysiwyg-default uk-margin-top uk-margin-bottom"
                                     style="" uk-scrollspy="cls: uk-animation-fade; delay: 800;">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 500;">
                        <div class="uk-cover-container">
                            <img data-src=""
                                 data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                 class=" Sirv uk-utility-object-fit-cover "
                                 alt="iStock-1199544859-scaled.jpg?w=1024&h=536&scale"
                                 title="iStock-1199544859-scaled.jpg?w=1024&h=536&scale"/>
                            <canvas width="850" height="850"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-section">
            <div class="uk-grid-small uk-grid uk-child-width-1-6@xl uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-2 uk-margin-auto uk-light"
                 uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 150;">
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#e4233e">1</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">No
                                            Poverty
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #e4233e">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">1</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">No
                                            Poverty
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">End poverty in all
                                        its forms everywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#d29f37">2</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Zero
                                            Hunger
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #d29f37">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">2</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Zero
                                            Hunger
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">End hunger, achieve
                                        food security and improved nutrition and promote sustainable agriculture.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#4ca146">3</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Good
                                            health and well-being
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #4ca146">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">3</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Good
                                            health and well-being
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Ensure healthy
                                        lives and promote well-being for all at all ages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#c7212f">4</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Quality Education
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #c7212f">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">4</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Quality Education
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Ensure inclusive
                                        and equitable quality education and promote lifelong learning opportunities for
                                        all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#ee412d">5</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Gender
                                            equality
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #ee412d">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">5</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Gender
                                            equality
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Achieve gender
                                        equality and empower all women and girls.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#26bde2">6</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">clean
                                            water and sanitation
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #26bde2">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">6</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">clean
                                            water and sanitation
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Ensure availability
                                        and sustainable management of water and sanitation for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#ffc300">7</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Affordable and clean energy
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #ffc300">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">7</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Affordable and clean energy
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Ensure access to
                                        affordable, reliable, sustainable and modern energy for all</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#a31b44">8</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Decent
                                            work and economic growth
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #a31b44">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">8</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Decent
                                            work and economic growth
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Promote sustained,
                                        inclusive and sustainable economic growth, full and productive employment and
                                        decent work for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#ff5f03">9</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Industry, innovation & infrastructure
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #ff5f03">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">9</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Industry, innovation & infrastructure
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Build resilient
                                        infrastructure, promote inclusive and sustainable industrialisation and foster
                                        innovation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#e01483">10</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Reduced inequalities
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #e01483">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">10</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Reduced inequalities
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Reduce inequality
                                        within and among countries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#f89d2a">11</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Sustainable cities and communities
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #f89d2a">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">11</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Sustainable cities and communities
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Make cities and
                                        human settlements inclusive, safe, resilient and sustainable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#c88b00">12</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Responsible consumption and production
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #c88b00">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">12</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Responsible consumption and production
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Ensure access to
                                        affordable, reliable, sustainable and modern energy for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#20823f">13</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Climate action
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #20823f">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">13</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Climate action
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Take urgent action
                                        to combat climate change and its impacts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#1f97d4">14</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Life
                                            below water
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #1f97d4">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">14</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Life
                                            below water
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Conserve and
                                        sustainably use the oceans, seas and marine resources for sustainable
                                        development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#58ba47">15</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Life
                                            on land
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #58ba47">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">15</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Life
                                            on land
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Protect, restore
                                        and promote sustainable use of terrestrial ecosystems, sustainably manage
                                        forests, combat desertification, and halt and reverse land degradation and halt
                                        biodiversity loss.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#126a9f">16</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Peace,
                                            justice and strong institutions
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #126a9f">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">16</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">Peace,
                                            justice and strong institutions
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Promote peaceful
                                        and inclusive societies for sustainable development, provide access to justice
                                        for all and build effective, accountable and inclusive institutions at all
                                        levels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-flip uk-card-small uk-height-sdg-card uk-card-body uk-padding-remove uk-position-relative ">
                        <div class="uk-card-flip-inner ">
                            <div class="uk-card-flip-front uk-background-dark">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh" style="color:#226a98">17</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Partnerships for the goals
                                        </div>
                                    </div>
                                    <div class="uk-position-relative uk-height-sdg">
                                        <img class="uk-position-center uk-width-sdg-image"
                                             src="">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-flip-back" style="background: #226a98">
                                <div class="uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                                    <div class="uk-style-oswald uk-text-uppercase uk-flex uk-flex-top">
                                        <div class="uk-text-3 uk-text-lh uk-light">17</div>
                                        <div class="uk-margin-small-left uk-margin-xxsmall-top uk-text-sdg-title">
                                            Partnerships for the goals
                                        </div>
                                    </div>
                                    <p class="uk-text-left uk-text-10 uk-text-lh-2 uk-text-sdg-desc">Strengthen the
                                        means of implementation and revitalize the global partnership for sustainable
                                        development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-small uk-height-sdg-card uk-border-dark uk-card-body uk-position-relative uk-padding-3xmedium-left uk-padding-3xmedium-right uk-padding-xmedium-top uk-padding-xmedium-bottom">
                        <img data-src=""
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class="uk-position-center uk-width-global-sdg Sirv" width="auto"
                             alt="sustainable-development-goals-stacked-logo"
                             title="sustainable-development-goals-stacked-logo"/></div>
                </div>
            </div>
        </div>


        <div class="uk-container uk-section">
            <div class="uk-container uk-container-small uk-text-center uk-margin-max-medium-bottom">
                <h1 class="uk-style-primary-l uk-text-3 uk-text-lh-4"
                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 400;">
                    We have identified <span class="uk-text-bold">six</span> SDGs of particular relevance to AGP </h1>
            </div>
            <div class="uk-child-width-1-3@l uk-child-width-1-2@s uk-dark uk-grid" uk-grid uk-height-match=".uk-card"
                 uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 400;">
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #26bde2">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #26bde2">
                            GOAL 6 <span class="uk-style-line thick" style="background-color: #26bde2"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            clean water and sanitation
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Ensure availability and sustainable management of water and sanitation for all.
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#26bde2">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#26bde2" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#26bde2" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Water conservation measures
                                </li>
                                <li class="uk-color-#26bde2">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#26bde2" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#26bde2" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Wastewater treatment technologies
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #ffc300">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #ffc300">
                            GOAL 7 <span class="uk-style-line thick" style="background-color: #ffc300"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            Affordable and clean energy
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Ensure access to affordable, reliable, sustainable and modern energy for all
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#ffc300">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#ffc300" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#ffc300" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    New sources of lower-cost renewable energy
                                </li>
                                <li class="uk-color-#ffc300">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#ffc300" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#ffc300" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Energy efficient materials and technologies
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #ff5f03">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #ff5f03">
                            GOAL 9 <span class="uk-style-line thick" style="background-color: #ff5f03"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            Industry, innovation & infrastructure
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Build resilient infrastructure, promote inclusive and sustainable industrialisation and
                            foster innovation
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#ff5f03">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#ff5f03" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#ff5f03" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Improved access to digital infrastructure
                                </li>
                                <li class="uk-color-#ff5f03">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#ff5f03" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#ff5f03" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Enhancing productive capacity of industry
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #f89d2a">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #f89d2a">
                            GOAL 11 <span class="uk-style-line thick" style="background-color: #f89d2a"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            Sustainable cities and communities
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Make cities and human settlements inclusive, safe, resilient and sustainable.
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#f89d2a">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#f89d2a" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#f89d2a" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Social inclusive, affordable housing models
                                </li>
                                <li class="uk-color-#f89d2a">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#f89d2a" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#f89d2a" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Climate resilient infrastructure
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #c88b00">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #c88b00">
                            GOAL 12 <span class="uk-style-line thick" style="background-color: #c88b00"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            Responsible consumption and production
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Ensure access to affordable, reliable, sustainable and modern energy for all.
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#c88b00">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#c88b00" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#c88b00" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Recycled materials in construction
                                </li>
                                <li class="uk-color-#c88b00">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#c88b00" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#c88b00" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Improved resource efficiency
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="uk-card uk-card-body uk-position-relative uk-padding-xmedium"
                         style="border: 2px solid #20823f">
                        <div class="uk-height-xsmall uk-width-small">
                            <img class="uk-height-xxsmall"
                                 src="">
                        </div>
                        <div class="uk-flex uk-flex-middle uk-style-secondary-m uk-text-11 uk-lh-21 uk-margin-top"
                             style="color: #20823f">
                            GOAL 13 <span class="uk-style-line thick" style="background-color: #20823f"></span>
                        </div>
                        <div class="uk-style-tertiary uk-text-6 uk-lh-41 uk-margin-small-top uk-text-capitalize">
                            Climate action
                        </div>
                        <div class="uk-style-primary-l uk-text-9 uk-lh-36 uk-margin-top">
                            Take urgent action to combat climate change and its impacts.
                        </div>
                        <div class="uk-margin-top">
                            <hr>
                        </div>
                        <div class="uk-style-tertiary uk-text-7 uk-lh-41 uk-margin-small-top">
                            AGP Contribution
                        </div>
                        <div class="uk-style-primary-l uk-text-11 uk-lh-41 uk-margin-small-top">
                            <ul class="uk-hightlight-points-circle uk-list-style-none uk-padding-remove ">
                                <li class="uk-color-#20823f">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#20823f" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#20823f" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    Reductions in emissions intensity
                                </li>
                                <li class="uk-color-#20823f">
                            	<span class="uk-icon uk-preserve uk-margin-small-right">
		                        	<svg width="20px" height="27px" viewBox="0 0 20 27" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								    	<g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        	<g id="Investments-&gt;-Renewable-Energy"
                                               transform="translate(-436.000000, -1435.000000)">
								            	<g id="Group" transform="translate(437.102163, 1436.500000)">
								               	 	<circle id="Oval" fill="#20823f" cx="5.89783667" cy="12"
                                                            r="4.5"></circle>
								               	 	<path d="M0.0280995482,1.53111698 C1.76338897,0.556077684 3.76567337,0 5.89783667,0 C12.5252537,0 17.8978367,5.372583 17.8978367,12 C17.8978367,18.627417 12.5252537,24 5.89783667,24 C3.75415508,24 1.74175943,23.437898 2.0250468e-13,22.4530444"
                                                          id="Oval-Copy-5" stroke="#20823f" stroke-width="2"
                                                          fill-rule="nonzero"></path>
								            </g>
								        </g>
								    </g>
								</svg>
							</span>
                                    More climate resilient infrastructure
                                </li>
                            </ul>
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
            <div class="uk-section uk-section-large uk-margin-auto uk-width-1-1">
                <div class="uk-container uk-container-xmedium">
                    <div class="uk-style-primary-l uk-text-3 uk-text-lh-4  large uk-width-xmedium"
                         uk-scrollspy="cls: uk-animation-slide-left-small; delay: 300;">
                        Why were the Sustainable Development Goals introduced?
                    </div>
                </div>
                <div class="uk-container uk-container-medium uk-flex uk-flex-right@s">
                    <div class="uk-style-primary-l uk-text-7 uk-text-lh-2 uk-margin-medium-top uk-width-4xmedium"
                         uk-scrollspy="cls: uk-animation-fade; delay: 600;">
                        The SDGs aim to build on the success of the Millennium Development Goals (8 x development goals
                        created in 2000 to be achieved by 2015) by covering more ground, with ambitions to address
                        inequalities, economic growth, decent jobs, sustainable cities and human settlements,
                        industrialisation, ecosystems, energy, climate change, and sustainable consumption and
                        production.
                    </div>
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
                            How are the Sustainable Development goals implemented? </h4>
                        <h6 class="uk-style-primary-l uk-text-7 uk-text-lh-3 uk-width-3xmedium uk-margin-small-top"
                            uk-scrollspy="cls: uk-animation-slide-fade; delay: 600;">
                            A core feature of the SDGs is their strong focus on means of implementation – the
                            mobilisation of financial resources – as well as capacity building and technology, data and
                            institutions. </h6>
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
                             alt="14b28b4c8e15414e047c2cca0c6cb3259be73fd2-scaled.jpg?w=1024&h=654&scale"
                             title="14b28b4c8e15414e047c2cca0c6cb3259be73fd2-scaled.jpg?w=1024&h=654&scale"/>
                        <div class="uk-background-gradient-rev uk-position-cover"></div>
                    </div>
                    <div class="uk-background-feat-wash uk-position-cover"></div>

                </div>
                <div class="uk-feature-block-half uk-text-left uk-padding-large uk-flex uk-flex-middle uk-flex-center  uk-light">
                    <div>
                        <div class="uk-style-primary-l uk-child-width-1-2@l uk-text-12 uk-text-lh-1" uk-grid>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 500;">
                                Implementation and success will rely largely on the sustainable development policies,
                                plans and programmes of national governments. However, other stakeholders (e.g. private
                                sector, civil society) are expected to contribute to the realisation of the new agenda.
                            </div>
                            <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
