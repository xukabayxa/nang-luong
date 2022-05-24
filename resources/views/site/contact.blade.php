@extends('site.layouts.master')
@section('title')
@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <!-- <span></span> -->
    <section id="sozo-main">

        <div class="uk-cover-container uk-height-viewport uk-background-logo-wash uk-section uk-section-page-header uk-light" style="padding: 0">
            <div class="uk-background-black-wash uk-position-cover"></div>
            <div class="uk-position-relative">
                <div class="uk-section uk-container uk-container-large">
                    <div class="uk-flex uk-flex-between" uk-grid>
                        <div class="uk-width-2-4@m">
                            <h1 class="uk-style-primary-l uk-text-0 uk-text-lh-4" style="font-size: 4em">
                                {{App::isLocale('vi') ? 'Liên hệ với chúng tôi' : 'Contact us '}} </h1>
                        </div>
                        <div class=" uk-width-2-4@m">
                            @if(App::isLocale('vi'))
                                <div>
                                    <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                        Hà Nội
                                    </h5>
                                    <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                        Spring Heirs Tower, <br>
                                        Số 9/82 Dịch Vọng Hậu, Cầu Giấy, Hà Nội<br/>
                                        <br/>
                                    </div>
                                    <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                        <a href="tel:+8494 866 8889" class="uk-text-underline">+8494 866 8889</a>
                                    </div>
                                </div>

                            @else
                                <div>
                                    <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                        Hanoi
                                    </h5>
                                    <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                        Spring Heirs Tower, No. 9/82 Dich Vong Hau, Cau Giay, Hanoi, <br>
                                        <br/>
                                        <br/>
                                    </div>
                                    <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                        <a href="tel:+8494 866 8889" class="uk-text-underline">+8494 866 8889</a>
                                    </div>
                                </div>

                            @endif

                                @if(App::isLocale('vi'))
                                    <div>
                                        <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                            TP. Hồ Chí Minh </h5>
                                        <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                            146 Nguyễn Văn Hương F18, Thảo Điền,<br/>
                                            Quận 2, TP. Hồ Chí Minh <br/>
                                        </div>
                                        <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                            <a href="tel:+8494 866 8889" class="uk-text-underline">+8494 866 8889</a>
                                        </div>
                                    </div>

                                @else
                                    <div>
                                        <h5 class="uk-style-primary-m uk-text-8 uk-lh-52">
                                            Ho Chi Minh </h5>
                                        <div class="uk-style-primary-l phone-height uk-text-13 uk-lh-28">
                                            146 Nguyen Van Huong, F18, Thao Dien,<br/>
                                            District 2, Ho Chi Minh City <br/>
                                        </div>
                                        <div class="uk-style-primary-m uk-text-13 uk-lh-28">
                                            <a href="tel:+8494 866 8889" class="uk-text-underline">+8494 866 8889</a>
                                        </div>
                                    </div>

                                @endif

{{--                            <div>--}}
{{--                                <h3 class="uk-style-primary-l uk-text-6 uk-text-lh-4">--}}
{{--                                    For more information or questions, please email--}}
{{--                                </h3>--}}
{{--                                <div>--}}
{{--                                    <a href="#"--}}
{{--                                       class="uk-style-primary-b uk-text-8 uk-text-lh-3 uk-text-primary uk-text-underline">--}}
{{--                                        info@rt.com </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="uk-margin-medium">--}}
{{--                                <h4 class="uk-style-primary-l uk-text-9 uk-lh-41">Follow us on</h4>--}}
{{--                                <a href="https://in.linkedin.com/company/agp-sustainable-real-assets?trk=public_profile_experience-item_result-card_image-click">--}}
{{--                                    <span class="uk-icon uk-preserve" uk-icon="icon: linkedin-full; ratio: 0.6;"></span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
