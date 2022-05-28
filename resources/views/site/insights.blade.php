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

    <style>
        .uk-width-2-3 {
            width: 100%;
        }
    </style>
    <!-- <span></span> -->
    <section id="sozo-main">
        @if($posts->isNotEmpty())
            <div class="uk-section uk-section-page-header" style="padding: 0">
                <div class="uk-container uk-container-large">

                    <div uk-grid class="uk-grid uk-grid-xmedium">
                        {{--                    @foreach($posts->take(1) as $post)--}}
                        {{--                    @endforeach--}}

                        <div class="uk-width-2-3@m uk-feat-article" uk-scrollspy="cls: uk-animation-fade; delay: 350;">
                                <div class="uk-cover-container">
                                    <a href="{{route('front.post', $posts->first()->slug)}}">
                                        <canvas width="1000" height="662"></canvas>
                                        <img data-src="{{$posts->first()->image->path ?? ''}}"
                                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                             class=" Sirv uk-utility-object-fit-cover "
                                             alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                             title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/> </a>
                                </div>

                                <div class="uk-flex@s uk-flex-between uk-flex-middle uk-margin">
                                    <div class="uk-style-primary-m uk-text-4 uk-text-lh-4 uk-width-2-3@m uk-width-1-1">
                                        <h6 class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-margin-small-bottom uk-hidden@s">
                                            22.03.22 </h6>
                                        <a href="{{route('front.post', $posts->first()->slug)}}"
                                           class="uk-color-dark">
                                           {{$posts->first()->name}} </a>
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
                               <?php
                                $post_slice1 = $posts->slice(1, 2);
                                ?>
                                @if($post_slice1->isNotEmpty())
                                    @foreach($post_slice1 as $p_s1)
                                           <div class="uk-feat-article uk-width-1-1@m uk-width-1-2@s"
                                                uk-scrollspy="cls: uk-animation-fade; delay: 450;">
                                               <div class="uk-cover-container">
                                                   <a href="{{route('front.post', $p_s1->slug)}}">
                                                       <canvas width="1000" height="662"></canvas>
                                                       <img data-src="{{$p_s1->image->path ?? ''}}"
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
                                                       <a href="{{route('front.post', $p_s1->slug)}}"
                                                          class="uk-color-dark">{{$p_s1->name}}</a>
                                                   </div>
                                                   <div class="uk-style-secondary-m uk-color-muted uk-text-12 uk-text-ls-1 uk-text-lh-3 uk-visible@s">
                                                       16.02.22
                                                   </div>
                                               </div>
                                           </div>

                                       @endforeach
                                   @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <style>
            @media only screen and (max-width: 768px) {
                .post-sl2 {
                    margin-bottom: -100px;
                }
            }

            @media (min-width:1025px){
                .post-sl2 {
                    margin-bottom: -150px;
                }
            }
        </style>
            <?php
            $post_slice2 = $posts->slice(3);
            ?>
             @if($post_slice2->isNotEmpty())

                    <div class="uk-position-relative uk-container uk-section post-sl2" style="margin-top: 30px; ">

                        <form method="GET" class="sz-form ajax-more-posts">


                            <input type="hidden" value="1" name="query_id"/>


                            <div uk-grid
                                 class="sz-1-results uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-large"
                                 uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div; delay: 200;">
                                @foreach($post_slice2 as $p_s2)
                                <div>
                                    <div class="uk-card uk-article-item">
                                        <div class="uk-cover-container">
                                            <a href="{{route('front.post', $p_s2->slug)}}">
                                                <canvas width="467" height="593"></canvas>
                                                <img data-src="{{$p_s2->image->path ?? ''}}"
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
                                            <a href="{{route('front.post', $p_s2->slug)}}"
                                               class="uk-color-dark">
                                                {{$p_s2->name}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <div class="uk-text-center uk-margin-medium-top">
                                <div class="uk-button uk-style-secondary-b js-load-more" href="" data-id="2"><span
                                        class="uk-color-primary uk-text-middle uk-margin-right">Load More</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                          uk-icon="icon: button-circle; ratio: 1"></span></div>
                            </div>


                        </form>

                    </div>

            @endif
        @endif



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
                       </h4>
                    <div uk-scrollspy="cls: uk-animation-fade; delay: 700;">
                        <a class="uk-button uk-color-tertiary uk-style-secondary-b "
                           href="">
                            <span class="uk-color-tertiary uk-text-middle uk-margin-right"></span>
                            <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-tertiary"
                                  uk-icon="icon: button-circle; ratio: 1"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
