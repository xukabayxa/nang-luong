
<div uk-sticky="animation: uk-animation-slide-top;">
    <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
        <div class="uk-navbar-container uk-navbar-transparent"
     style="">
    <style>
        a.uk-animation-zoom:hover {
            color: inherit;
            text-decoration: none;
        }
    </style>
    <nav class="uk-navbar uk-container">
        <div class="uk-navbar-left">
            <div class="logo" style="margin: 0; font-size: 0;">
                <a href="{{route('front.home_page')}}" title="RT ENERGY">
                <span class="uk-logo uk-icon uk-preserve logo-white">
                        <img class="rt-acean" src="{{ asset('site/system/rt-white.png') }}" style="height: auto" alt="RT ENERGY VI">
                </span>
                <span class="uk-logo uk-icon uk-preserve logo-blue">
                    <img class="rt-acean" src="{{ asset('site/system/rt-en-1.png') }}" style="height: auto" alt="RT ENERGY VI">
                </span>
                </a>
            </div>
        </div>
        {{--        phần menu header--}}
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li class="menu-item-1">
                    <a class="uk-visible@m has-dropdown uk-m1 a-menu-top" href="#offcanvas-1" uk-toggle
                    >
                        {{trans('message.about_menu')}}<span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                                             uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" style="color: #fff" href="#">1111
                                <span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="{{route('front.about')}}"
                                           style="color: #fff !important">
                                           @if(App::isLocale('vi'))
                                                Giới thiệu <br> Chung
                                            @else
                                                General Information
                                            @endif</h4>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about3')}}"
                                           style="color: #fff !important">
                                            @if(App::isLocale('vi'))
                                                BỘ MÁY <br> QUẢN LÝ
                                            @else
                                                Management Apparatus
                                            @endif
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about4')}}" style="color: #fff !important">
                                            @if(App::isLocale('vi'))
                                                Đối tác <br> Chiến lược
                                            @else
                                                Strategic Partnership
                                            @endif</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-2">
                    <a class="uk-m5 a-menu-top" href="{{route('front.investments1')}}">
                       @if(App::getLocale() == 'vi') Danh mục đầu tư @else Our Investments @endif</a>
                </li>

                <li class="menu-item-3">
                    <a class="uk-visible@m uk-m3 a-menu-top" href="{{route('front.globalReach')}}">
                        {{trans('message.our_global_presence_menu')}} </a>

                    <a class="uk-hidden@m " href="{{route('front.globalReach')}}" style="color: #fff">
                        {{trans('message.our_global_presence_menu')}}</a>
                </li>
                <li class="menu-item-4 ">
                    <a class="uk-visible@m uk-m4 a-menu-top" href="{{route('front.insights')}}">
                        {{trans('message.insights_menu')}} </a>

                    <a class="uk-hidden@m " href="{{route('front.insights')}}" style="color: #fff">
                        {{trans('message.insights_menu')}}</a>
                </li>

                <style>
                    .lang {
                        border-left: 1px solid #fff;
                    }
                </style>
                <li class="menu-item-5">
                    <a class="uk-visible@m uk-m5 a-menu-top" href="{{route('front.contact')}}">
                        {{trans('message.contact_menu')}} </a>

                    <a class="uk-hidden@m" href="{{route('front.contact')}}" style="color: #fff">
                        {{trans('message.contact_menu')}}</a>
                </li>
            </ul>

            <div class="lang">
                <div class="lang_box">
                    <div class="select-lang">
                        <!-- <span id="edit-lang-dropdown-select_arrow" class="arrow">
                            <i class="fa fa-angle-down"></i>
                        </span> -->
                        @if(config('app.locale') == 'vi')
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="/img/icons/vi.png"></span>
                        @else
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="/img/icons/en.png"></span>
                        @endif

                    </div>
                    <div class="choise-lang">
                        <a href="{{route('front.change-language', 'vi')}}"
                           class="{{config('app.locale') == 'vi' ? 'selected' : '' }} enabled">
                            <img src="/img/icons/vi.png">
                        </a>
                        <a href="{{route('front.change-language', 'en')}}"
                           class="{{config('app.locale') == 'en' ? 'selected' : '' }} enabled">
                            <img src="/img/icons/en.png"
                                                    align="absmiddle">
                        </a>
                    </div>

                </div>
            </div>

            <div class="lang-mobi">
                <div class="lang_box">
                    <div class="select-lang">
                        <!-- <span id="edit-lang-dropdown-select_arrow" class="arrow">
                            <i class="fa fa-angle-down"></i>
                        </span> -->
                        @if(config('app.locale') == 'vi')
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="/img/icons/vi.png"></span>
                        @else
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="/img/icons/en.png"></span>
                        @endif

                    </div>
                    <div class="choise-lang">
                        <a href="{{route('front.change-language', 'vi')}}"
                           class="{{config('app.locale') == 'vi' ? 'selected' : '' }} enabled">
                            <img src="/img/icons/vi.png">
                        </a>
                        <a href="{{route('front.change-language', 'en')}}"
                           class="{{config('app.locale') == 'en' ? 'selected' : '' }} enabled">
                            <img src="/img/icons/en.png"
                                 align="absmiddle">
                        </a>
                    </div>

                </div>
            </div>
            <a href="#offcanvas" uk-toggle="" class="uk-hidden@m uk-hamburger uk-flex uk-flex-middle">
                <span class="uk-navbar-toggle uk-navbar-toggle-icon">
						<svg width="25" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<rect y="9" width="25" height="1"></rect>
							<rect y="3" width="25" height="1"></rect>
							<rect y="15" width="25" height="1"></rect>
						</svg>
					</span>
            </a>
        </div>
    </nav>
</div>

<div class="uk-position-relative uk-visible@m" style="z-index: 3;">
    <div class="uk-mega-menu  uk-offcanvas" uk-offcanvas="" id="offcanvas-1" data-parent="1"
         style="display: none;">
        <div class="uk-background-wash uk-position-cover uk-offcanvas-close	" uk-close=""></div>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-position-z-index-menu"
             uk-grid>
            {{--            phần menu about-us trổ xuống--}}

            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.about')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us2/1.png"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-663800200-scaled"
                             title="iStock-663800200-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium" style="margin-bottom: 40px">
                            <h4 class=" uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    Giới thiệu <br> Chung
                                @else
                                    General information
                                @endif</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about')}}">
                                <span
                                    class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.about3')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us2/3.jpeg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1199544859-scaled"
                             title="iStock-1199544859-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium" style="margin-bottom: 40px">
                            <h4 class=" uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    BỘ MÁY <br> QUẢN LÝ
                                @else
                                    Management apparatus
                                @endif
                            </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about3')}}">
                                <span
                                    class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.about4')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us2/4.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-492596662-scaled"
                             title="iStock-492596662-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium" style="margin-bottom: 40px">
                            <h4 class=" uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom css-h4 uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    Đối tác <br> Chiến lược
                                @else
                                    Strategic partnership
                                @endif</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about4')}}">
                                <span
                                    class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Sub Menu -->
    </div>
</div>

<style>
    .flex-right {
        margin-left: auto;
    }

    .flex-col {
        max-height: 100%;
    }

    .nav>li.html {
        font-size: .85em;
    }
    .nav li:first-child {
        margin-left: 0 !important;
    }
    .wpml-ls-legacy-list-horizontal.wpml-ls-statics-footer {
        margin-bottom: 0 !important;
    }
    .wpml-ls-legacy-list-horizontal {
        border: 1px solid transparent;
        padding: 7px;
        clear: both;
    }
    .nav, .nav ul:not(.nav-dropdown) {
        margin: 0;
        padding: 0;
    }
    .wpml-ls-legacy-list-horizontal.wpml-ls-statics-footer>ul {
        text-align: center;
    }
    .wpml-ls-legacy-list-horizontal>ul {
        padding: 0;
        margin: 0 !important;
        list-style-type: none;
    }
    .nav li:first-child {
        margin-left: 0 !important;
    }
    .wpml-ls-legacy-list-horizontal .wpml-ls-item {
        padding: 0;
        margin: 0;
        list-style-type: none;
        display: inline-block;
    }
    .wpml-ls-legacy-list-horizontal>ul {
        padding: 0;
        margin: 0 !important;
        list-style-type: none;
    }
    .nav>li.html {
        font-size: .85em;
    }
    .nav>li {
        display: inline-block;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        margin: 0 7px;
        transition: background-color .3s;
    }
    .wpml-ls-legacy-list-horizontal a {
        display: block;
        text-decoration: none;
        padding: 5px 10px 6px;
        line-height: 1;
    }
    .wpml-ls-legacy-list-horizontal .wpml-ls-item {
        padding: 0;
        margin: 0;
        list-style-type: none;
        display: inline-block;
    }
    .wpml-ls-legacy-list-horizontal>ul {
        padding: 0;
        margin: 0 !important;
        list-style-type: none;
    }

    .wpml-ls-legacy-list-horizontal .wpml-ls-flag+span {
        margin-left: .4em;
    }
    .wpml-ls-legacy-list-horizontal a span {
        vertical-align: middle;
    }
    .wpml-ls-legacy-list-horizontal a {
        display: block;
        text-decoration: none;
        padding: 5px 10px 6px;
        line-height: 1;
    }
</style>
<style>
    h4:after {
        display: block;
        content: '';
        border-bottom: solid 3px #136c63;
        transform: scaleX(0);
        transition: transform 250ms ease-in-out;
    }

    h4.uk-text-lh-4:after {
        transform-origin: 100% 50%;
    }

    h4.uk-text-lh-4:hover:after {
        transform: scaleX(1);
        transform-origin: 100% 50%;
    }

    @media only screen and (max-width: 1600px) and (min-width: 1300px) {
        .uk-text-6-1 {
            font-size: 1.3em;
        }
    }

    .uk-text-lh-4-2 {
        color: #fff;
    }

    /*.{*/
    /*    font-weight: 0;*/
    /*}*/
</style>
<style>
    /*@media only screen and (min-device-width: 768px){*/
    /*    .lang {*/
    /*        display: none;*/
    /*    }*/
    /*}*/

    @media only screen and (max-width: 768px) {
        .lang-mobi {
           display: block;
        }
    }

    @media (min-width:1025px){
        .lang-mobi {
            display: none;
        }
    }

    @media screen
    and (min-device-width: 1400px)
    and (max-device-width: 1600px)
    and (-webkit-min-device-pixel-ratio: 1) {

    }



    @media only screen and (min-width: 768px) {
        .uk-navbar-left {
            padding-left: 30px;
        }

        .uk-navbar-right {
            margin-left: auto;
        }

        .uk-navbar-left img {
            width: 160px;
        }

        .choise-lang {
            top: 55px;
        }
    }

    @media only screen and (max-width: 768px) {
        .uk-navbar-right {
            margin-left: auto;
        }

        .uk-navbar-left img {
            width: 100px;
        }

        .choise-lang {
            top: 35px;
        }


        .lang, .langg{
            display: none;
        }

    }

    @media only screen and (max-width: 1340px) and (min-width: 1024px) {
        .uk-navbar-right {
            width: 85%;
            position: relative;
        }

        .uk-navbar-nav {
            width: 90%;
        }

        .menu-item-1 {
            width: 22%;
        }

        .menu-item-1 .uk-m1 {
            padding: 0;
            margin: 0;
        }

        .menu-item-2 {
            width: 24%;
        }

        .menu-item-2 .uk-m2 {
            padding: 0;
            margin: 0;
        }

        .menu-item-3 {
            width: 26%;
        }

        .menu-item-3 .uk-m3 {
            padding: 0;
            margin: 0;
        }

        .menu-item-4 {
            width: 30%;
        }

        .menu-item-4 .uk-m4 {
            padding: 0;
            margin: 0;
        }

        .menu-item-5 {
            width: 15%;
        }

        .menu-item-5 .uk-m5 {
            padding: 0;

        }

    }

    .lang {
        padding-left: 10px;
    }

    .lang {
        float: right;
        margin: 0px;
    }

    .lang_box {
        border-radius: 4px;
        height: 26px;
        line-height: 26px;
        background-color: transparent;
        cursor: pointer;
        border: 0px solid #592c7c;
        /* width: 66px; */
    }

    .select-lang .ddTitleText img {
        float: left;
        height: 18px;
        margin: 4px 6px 0 0;
        border-radius: 4px;
    }

    img {
        vertical-align: middle;
    }

    .choise-lang {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #ccc;
        display: none;
        position: absolute;
        width: 46px;
        z-index: 9999;
    }

    .choise-lang a:hover, .choise-lang a.selected {
        background-color: #e2d8e6;
    }

    .choise-lang a {
        float: left;
        width: 100%;
        text-align: center;
    }

    .choise-lang a img {
        height: 18px;
        padding: 0 2px 0 0;
        vertical-align: middle;
    }
</style>
