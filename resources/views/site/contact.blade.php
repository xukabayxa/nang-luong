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

                <div class="uk-container uk-container-large">
                    <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
                        <div class="uk-style-secondary-m uk-text-13">
                            OUR GLOBAL OFFICES
                        </div>
                        <div class="uk-style-line red"></div>
                    </div>
                    <div uk-grid
                         class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-6@l uk-flex-top uk-margin-top">
                        <div>
                        <span class="uk-style-secondary-m uk-text-primary uk-text-14 uk-lh-15 uk-position-meta">
                Head Office
            </span>
                            <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                Singapore </h5>
                            <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                104 Amoy Street<br/>
                                #02-01<br/>
                                Singapore 069924<br/>
                                Singapore
                            </div>
                            <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                <a href="tel:+65 6592 7359" class="uk-text-underline">+65 6592 7359</a>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                Sydney </h5>
                            <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                36-38 Young Street<br/>
                                Sydney NSW 2000<br/>
                                Australia
                            </div>
                            <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                <a href="tel:+61 2 8077 4058" class="uk-text-underline">+61 2 8077 4058</a>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                Delhi </h5>
                            <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                CoWrks, Worldmark 1<br/>
                                Tower A, Aerocity<br/>
                                Delhi 110037<br/>
                                India
                            </div>
                            <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                <a href="tel:+91 11 4251 9616" class="uk-text-underline">+91 11 4251 9616</a>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                Bangalore </h5>
                            <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                No. 30, 3rd Floor, Crescent Road<br/>
                                Bangalore<br/>
                                Karnataka 560001<br/>
                                India
                            </div>
                            <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                <a href="tel:+91 80 4667 4000" class="uk-text-underline">+91 80 4667 4000</a>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                London </h5>
                            <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                One London Wall<br/>
                                London EC2Y 5EB <br/>
                                United Kingdom
                            </div>
                            <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                <a href="tel:+44 77 7448 3361" class="uk-text-underline">+44 77 7448 3361</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-section">
                    <div class="uk-border-bottom uk-margin uk-opacity-12"></div>
                    <div class="uk-container uk-padding-medium-bottom">
                        <div uk-grid class="uk-flex uk-flex-middle uk-flex-between uk-grid-small">
                            <div class="uk-width-1-1 uk-width-auto@m uk-style-secondary uk-text-faded uk-text-14 uk-lh-15">
                                <div class="uk-display-inline-block@m">
															<span class="uk-margin-right">
									<a href="https://www.agpgroup.com/privacy-policy/">
										Privacy Policy									</a>
								</span>
                                    <span class="uk-margin-right">
									<a href="https://www.agpgroup.com/terms-of-use/">
										Terms of Use									</a>
								</span>
                                    <span class="uk-margin-right">
									<a href="https://www.agpgroup.com/cookie-policy/">
										Cookie Policy									</a>
								</span>
                                    <span class="uk-margin-right">
									<a href="https://www.agpgroup.com/sitemap/">
										Sitemap									</a>
								</span>
                                </div>
                                <span class="uk-margin-right">
							© 2021 AGP Sustainable Real Assets Holdings Pte. Ltd.						</span>
                            </div>

                            <div class="uk-text-right uk-style-secondary uk-text-14 uk-lh-15 uk-flex uk-flex-middle uk-flex-center@m uk-flex-right@l">
                                <a href="https://sozodesign.co.uk/" target="_blank">
                                    <span class="uk-text-faded uk-text-middle">Website by</span>
                                    <span class="uk-icon uk-preserve" uk-icon="icon: logo-sozo; ratio: 0.5;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
