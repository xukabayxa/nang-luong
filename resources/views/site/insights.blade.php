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
        <div class="uk-section uk-section-page-header">
            <div class="uk-container uk-container-large">
                <h1 class="uk-style-primary-m uk-text-2 uk-margin-3xmedium-bottom"
                    uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 150;">
                    Latest Insights & Press
                </h1>

                <div uk-grid class="uk-grid uk-grid-xmedium">
{{--                    @foreach($posts->take(1) as $post)--}}
{{--                    @endforeach--}}

                    <div class="uk-width-2-3@m uk-feat-article" uk-scrollspy="cls: uk-animation-fade; delay: 350;">
                            <div class="uk-cover-container">
                                <a href="">
                                    <canvas width="1000" height="662"></canvas>
                                    <img data-src="/site/system/post1.jpg"
                                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                         class=" Sirv uk-utility-object-fit-cover "
                                         alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                         title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/> </a>
                            </div>

                            <div class="uk-flex@s uk-flex-between uk-flex-middle uk-margin">
                                <div class="uk-style-primary-m uk-text-4 uk-text-lh-4 uk-width-2-3@m uk-width-1-1">
                                    <h6 class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-margin-small-bottom uk-hidden@s">
                                        22.03.22 </h6>
                                    <a href=""
                                       class="uk-color-dark">
                                        AMPYR Solar Europe signs deal</a>
                                </div>
                                <div class="uk-text-right@s uk-width-expand@m">
                                    <h6 class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-visible@s">
                                        22.03.22 </h6>
                                    <p class="uk-style-primary-l uk-text-11 uk-text-lh-1">
                                        </p>
                                </div>
                            </div>
                        </div>

                    <div class="uk-width-expand@m">
                        <div class="uk-grid" uk-grid>
                            <div class="uk-feat-article uk-width-1-1@m uk-width-1-2@s"
                                 uk-scrollspy="cls: uk-animation-fade; delay: 450;">
                                <div class="uk-cover-container">
                                    <a href="">
                                        <canvas width="1000" height="662"></canvas>
                                        <img data-src="/site/system/post2.jpg"
                                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                             class=" Sirv uk-utility-object-fit-cover "
                                             alt="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"
                                             title="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"/> </a>
                                </div>
                                <div class="uk-flex@s uk-flex-between uk-margin-top">
                                    <div class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-width-2-3">
                                        <div class="uk-style-secondary-m uk-color-muted uk-text-12 uk-margin-small-bottom uk-text-ls-1 uk-text-lh-3 uk-hidden@s">
                                            16.02.22
                                        </div>
                                        <a href=""
                                           class="uk-color-dark">
                                            AMPYR Solar Europe Secures €400 Million from CARVAL Investors to Develop and
                                            Construct&hellip; </a>
                                    </div>
                                    <div class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-visible@s">
                                        16.02.22
                                    </div>
                                </div>
                            </div>
                            <div class="uk-feat-article uk-width-1-1@m uk-width-1-2@s"
                                 uk-scrollspy="cls: uk-animation-fade; delay: 550;">
                                <div class="uk-cover-container">
                                    <a href="">
                                        <canvas width="1000" height="662"></canvas>
                                        <img data-src="/site/system/post3.jpg"
                                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                             class=" Sirv uk-utility-object-fit-cover "
                                             alt="ASE-EAL-Header-Image.png?w=1024&h=505&scale"
                                             title="ASE-EAL-Header-Image.png?w=1024&h=505&scale"/> </a>
                                </div>
                                <div class="uk-flex@s uk-flex-between uk-margin-top">
                                    <div class="uk-style-primary-l uk-text-8 uk-lh-32 uk-width-3-4">
                                        <div class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-margin-small-bottom uk-hidden@s">
                                            11.03.22
                                        </div>
                                        <a href=""
                                           class="uk-color-dark">
                                            AMPYR Solar Europe signs deal with Edinburgh Airport to develop solar farm,
                                            battery&hellip; </a>
                                    </div>
                                    <div class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-visible@s">
                                        11.03.22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-relative uk-container uk-section">

            <form method="GET" class="sz-form ajax-more-posts">


                <input type="hidden" value="1" name="query_id"/>


                <div uk-grid
                     class="sz-1-results uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-large"
                     uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 200;">
                    <div>
                        <div class="uk-card uk-article-item">
                            <div class="uk-cover-container">
                                <a href="">
                                    <canvas width="467" height="593"></canvas>
                                    <img data-src="/site/system/post4.jpg"
                                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                         class=" Sirv uk-utility-object-fit-cover "
                                         alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                         title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/> </a>
                            </div>
                            <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-margin-small-top uk-padding-small-top">
                                <div>22.03.22</div>
                                <div></div>
                            </div>
                            <div class="uk-style-primary-l uk-text-8 uk-text-lh-2 uk-margin uk-margin-remove-top">
                                <a href=""
                                   class="uk-color-dark">
                                    AGP Sustainable Real Assets and Hartree Partners Announce US Expansion of Global
                                    Solar&hellip; </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-article-item">
                            <div class="uk-cover-container">
                                <a href="">
                                    <canvas width="467" height="593"></canvas>
                                    <img data-src="/site/system/post5.jpg"
                                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                         class=" Sirv uk-utility-object-fit-cover "
                                         alt="ASE-EAL-Header-Image.png?w=1024&h=505&scale"
                                         title="ASE-EAL-Header-Image.png?w=1024&h=505&scale"/> </a>
                            </div>
                            <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-margin-small-top uk-padding-small-top">
                                <div>11.03.22</div>
                                <div></div>
                            </div>
                            <div class="uk-style-primary-l uk-text-8 uk-text-lh-2 uk-margin uk-margin-remove-top">
                                <a href=""
                                   class="uk-color-dark">
                                    AMPYR Solar Europe signs deal with Edinburgh Airport to develop solar farm, battery&hellip; </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-article-item">
                            <div class="uk-cover-container">
                                <a href="">
                                    <canvas width="467" height="593"></canvas>
                                    <img data-src="/site/system/post6.jpg"
                                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                         class=" Sirv uk-utility-object-fit-cover "
                                         alt="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"
                                         title="iStock-1032683612-scaled.jpg?w=1024&h=683&scale"/> </a>
                            </div>
                            <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-margin-small-top uk-padding-small-top">
                                <div>16.02.22</div>
                                <div></div>
                            </div>
                            <div class="uk-style-primary-l uk-text-8 uk-text-lh-2 uk-margin uk-margin-remove-top">
                                <a href=""
                                   class="uk-color-dark">
                                    AMPYR Solar Europe Secures €400 Million from CARVAL Investors to Develop and
                                    Construct&hellip; </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-text-center uk-margin-medium-top">
                    <div class="uk-button uk-style-secondary-b js-load-more" href="" data-id="2"><span
                            class="uk-color-primary uk-text-middle uk-margin-right">Load More</span>
                        <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                              uk-icon="icon: button-circle; ratio: 1"></span></div>
                </div>


            </form>

        </div>


        <div class="uk-position-relative uk-margin-medium uk-margin-left uk-margin-right uk-light uk-section uk-section-cta uk-flex uk-flex-bottom uk-flex-center">
            <div class="uk-position-cover uk-cover-container">
                <canvas width="1600" height="708"></canvas>
                <img data-src="/site/system/post-e.jpg"
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
