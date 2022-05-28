@extends('site.layouts.master')
@section('title')
    <title></title>
@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <!-- <span></span> -->
    <section id="sozo-main">
        <div class="uk-section" style="padding: 0">
            <div class="uk-position-relative uk-background-image uk-light">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <img data-src="{{$post->image->path ?? ''}}"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="ASE-EAL-Header-Image"
                             title="ASE-EAL-Header-Image"/>
                        <canvas width="1600" height="614"></canvas>
                    </div>
                </div>
                <div class="uk-background-gradient-h uk-position-cover"></div>
                <div class="uk-position-relative uk-container uk-container-article uk-section uk-section-large"
                     uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">
                    <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle uk-wysiwyg-default"
                         uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                        <div class="uk-animation-parent">
                            <h6 class="uk-animation-item uk-style-secondary-m uk-text-13 uk-lh-17 uk-margin-medium-bottom">
                                <span class="read-timer" id="read-timer"></span>
                            </h6>

                            <h1 class="uk-animation-item uk-style-primary-m uk-text-4 uk-text-lh-4 uk-width-2xmedium" style="color: #fff">
                               {{$post->name}} </h1>
                            <div class="uk-flex uk-flex-middle uk-margin-top">
                                <a href="#article-content" uk-scroll>
                                    <span class="uk-icon uk-preserve uk-margin-xxsmall-right"
                                          uk-icon="icon: arrow-in-circle; ratio: 1;"></span>
                                    <span class="uk-style-secondary uk-text-13"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-container uk-container-article uk-section" id="article-content">
            <div class="uk-margin-top uk-wysiwyg-default uk-style-primary-l uk-text-9 uk-text-lh-2 read-area"
                 id="read-area">


               {!! $post->body !!}



            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container uk-margin-medium">
                <div class="uk-border-gray"></div>
            </div>
            <div class="uk-position-relative uk-container uk-container-large ">
                <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
                    <div class="uk-style-secondary-m uk-text-11 ">
                      {{App::isLocale('vi') ? 'Bài viết khác' : 'Other Posts'}}
                    </div>
                    <div class="uk-style-line orange"></div>
                </div>

                <div uk-grid
                     class="uk-grid-large uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@m"
                     uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 320;">
                    @foreach($post_r as $p_r)
                        <div class="uk-feat-article">
                            <div>
                                <div class="uk-cover-container uk-margin-small-bottom">
                                    <canvas width="460" height="370"></canvas>
                                    <img data-src="{{$p_r->image->path ?? ''}}"
                                         data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                         class=" Sirv uk-utility-object-fit-cover "
                                         alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                         title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/></div>
                                <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                                    <div>22.03.22</div>
                                    <div></div>
                                </div>
                                <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                                    {{$p_r->name}} </h4>
                                <a class="uk-button uk-color-teal uk-style-secondary-b "
                                   href="{{route('front.post', $p_r->slug)}}">
                                    <span class="uk-color-teal uk-text-middle uk-margin-right" style="color: #0f4c81 "> {{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</span>
                                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-teal"
                                          uk-icon="icon: button-circle; ratio: 1"></span>
                                </a>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

