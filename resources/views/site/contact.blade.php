@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <!-- <span></span> -->
    <section id="sozo-main">

        <div class="uk-cover-container uk-height-viewport uk-background-logo-wash uk-section uk-section-page-header uk-light">
            <div class="uk-background-black-wash uk-position-cover"></div>
            <div class="uk-position-relative">
                <div class="uk-section uk-container uk-container-large">
                    <div class="uk-flex uk-flex-between" uk-grid>
                        <div class="uk-width-3-4@m">
                            <h2 class="uk-style-secondary-m uk-text-11 uk-text-lh-2 uk-color-primary">
                                Contact us </h2>
                            <h1 class="uk-style-primary-l uk-text-0 uk-text-lh-4">
                                Get in touch </h1>
                        </div>
                        <div class="uk-width-1-4@m uk-text-right@m uk-margin-top">
                            <div>
                                <h3 class="uk-style-primary-l uk-text-6 uk-text-lh-4">
                                    For more information or questions, please email
                                </h3>
                                <div>
                                    <a href="mailto:info@agpgroup.com"
                                       class="uk-style-primary-b uk-text-8 uk-text-lh-3 uk-text-primary uk-text-underline">
                                        info@agpgroup.com </a>
                                </div>
                            </div>
                            <div class="uk-margin-medium">
                                <h4 class="uk-style-primary-l uk-text-9 uk-lh-41">Follow us on</h4>
                                <a href="https://in.linkedin.com/company/agp-sustainable-real-assets?trk=public_profile_experience-item_result-card_image-click">
                                    <span class="uk-icon uk-preserve" uk-icon="icon: linkedin-full; ratio: 0.6;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
