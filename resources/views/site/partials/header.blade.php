<div class="uk-navbar-container uk-navbar-transparent uk-padding-xmedium-top uk-padding-xmedium-bottom"
     style="background: #fff">
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
                    <span class="uk-logo uk-icon uk-preserve">
                        @if(App::isLocale('vi'))
                            <img src="{{ asset('site/system/rt-vi.png') }}" style="height: auto" alt="RT ENERGY VI">
                        @else
                            <img src="{{ asset('site/system/rt-en.png') }}" style="height: auto" alt="RT ENERGY EN">
                        @endif
                    </span>
                </a>
            </div>
        </div>

        <style>
           a.a-menu-top {
             color: #0F4C81 !important
           }
           a.a-menu-top:hover{
                color: #022134 !important;
            }

           .a-menu-top {
               display: inline-block;
               position: relative;
               color: #0087ca;
           }

           .a-menu-top:after {
               content: '';
               position: absolute;
               width: 100%;
               transform: scaleX(0);
               height: 2px;
               bottom: 20px;
               left: 0;
               background-color: #0087ca;
               transform-origin: bottom right;
               transition: transform 0.25s ease-out;
           }

           .a-menu-top:hover:after {
               transform: scaleX(1);
               transform-origin: bottom left;
           }
        </style>
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
                            <a class="uk-accordion-title" style="color: #fff" href="#">{{trans('message.about_menu')}}<span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="{{route('front.about')}}"
                                           style="color: #fff !important">{{trans('message.who_we_are')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about2')}}"
                                           style="color: #fff !important">{{trans('message.what_we_do')}}
                                    </li>
                                    <li>
                                        <a href="{{route('front.about3')}}"
                                           style="color: #fff !important">{{trans('message.our_team')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about4')}}" style="color: #fff !important">
                                            {{trans('message.our_partner')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-2">
                    <a class="uk-visible@m has-dropdown uk-m2 a-menu-top" href="#offcanvas-2" uk-toggle
                       >
                        {{trans('message.our_investments_menu')}}<span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                                                       uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" href="#"
                               style="color: #fff !important">{{trans('message.our_investments_menu')}}<span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="">Renewable<br/>
                                            Energy</a>
                                    </li>
                                    <li>
                                        <a href="">Sustainable
                                            <br/>
                                            Communities &amp; <br/>
                                            Infrastructure</a>
                                    </li>
                                    <li>
                                        <a href="">Green
                                            <br/>
                                            Technologies</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
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

                {{--                <li class="menu-item-5">--}}
                {{--                   --}}
                {{--                </li>--}}


            </ul>

            <style>
                @media only screen and (min-width: 768px) {
                    .uk-navbar-left {
                        padding-left: 30px;
                    }

                    .uk-navbar-right {
                        margin-left: auto;
                    }

                    .uk-navbar-left img {
                        width: 180px;
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
                }

                /*@media screen and (max-width: 1024px){*/
                /*    .uk-navbar-right {*/
                /*        width: 800px;*/
                /*    }*/
                /*}*/

                /*@media screen and (max-width: 768px){*/
                /*    .uk-navbar-right {*/
                /*        width: 800px;*/
                /*    }*/
                /*}*/

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
                    line-height: 35px;
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
                    display: block;
                    position: absolute;
                    width: 78px;
                    z-index: 9999;
                    display: none;
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
                    height: 20px;
                    padding: 0 2px 0 0;
                    vertical-align: middle;
                }
            </style>

            <div class="lang">
                <div class="lang_box">
                    <div class="select-lang">
                        <!-- <span id="edit-lang-dropdown-select_arrow" class="arrow">
                            <i class="fa fa-angle-down"></i>
                        </span> -->
                        @if(config('app.locale') == 'vi')
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/vi.png"></span>
                        @else
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img
                                src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/en.png"></span>
                        @endif

                    </div>
                    <div class="choise-lang">
                        <a href="{{route('front.change-language', 'vi')}}"
                           class="{{config('app.locale') == 'vi' ? 'selected' : '' }} enabled">
                            <img
                                src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/vi.png">
                        </a>
                        <a href="{{route('front.change-language', 'en')}}"
                           class="{{config('app.locale') == 'en' ? 'selected' : '' }} enabled">
                            <img
                                src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/en.png"
                                align="absmiddle">
                        </a>
                    </div>
                </div>
            </div>

            <a href="#offcanvas" uk-toggle="" class="uk-hidden@m uk-hamburger uk-flex uk-flex-middle">
                <span class="uk-style-secondary-m">Menu</span>
                <span class="uk-navbar-toggle uk-navbar-toggle-icon">
						<svg width="25" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<rect y="9" width="25" height="1"></rect>
							<rect y="3" width="25" height="1"></rect>
							<rect y="15" width="25" height="1"></rect>
						</svg>
					</span>
            </a>
        </div>
        {{--        end --}}
    </nav>
</div>


<div class="uk-position-relative uk-visible@m" style="z-index: 3;">
    <div class="uk-mega-menu  uk-offcanvas" uk-offcanvas="" id="offcanvas-1" data-parent="1"
         style="display: none;">
        <div class="uk-background-wash uk-position-cover uk-offcanvas-close	" uk-close=""></div>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-position-z-index-menu"
             uk-grid>
            {{--            phần menu about-us trổ xuống--}}
            <style>
                h4:after {
                    display:block;
                    content: '';
                    border-bottom: solid 3px #136c63;
                    transform: scaleX(0);
                    transition: transform 250ms ease-in-out;
                }
                h4.uk-text-lh-4:after{ transform-origin:100% 50%; }
                h4.uk-text-lh-4:hover:after{ transform: scaleX(1); transform-origin: 100% 50%; }

                @media only screen and (max-width: 1600px) and (min-width: 1300px) {
                    .uk-text-6-1 {
                        font-size: 1.3em;
                    }
                }

                .uk-text-lh-4-2 {
                    color: #fff;
                }


            </style>

            <div class="uk-text-left uk-mega-menu-item items-4">
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
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2" >
                                {{trans('message.who_we_are')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about2')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us2/2.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-864106820-scaled"
                             title="iStock-864106820-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    LĨNH VỰC <br> HOẠT ĐỘNG
                                @else
                                    WHAT WE DO
                                @endif
                                </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about2')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
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
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    BỘ MÁY <br> QUẢN LÝ
                                @else
                                    OUR TEAM
                                    @endif
                               </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about3')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
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
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom css-h4 uk-text-lh-4-2">
                                {{trans('message.our_partner')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about4')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            {{--            <style>--}}
            {{--                .businessList {--}}
            {{--                    height: calc(100vh - 72px);--}}
            {{--                    width: 100%;--}}
            {{--                    display: flex;--}}
            {{--                }--}}
            {{--                .businessItem {--}}
            {{--                     width: 25%;--}}
            {{--                     position: relative;--}}
            {{--                     background-color: #000;--}}
            {{--                     transition: all .25s ease-out;--}}
            {{--                     overflow: hidden;--}}
            {{--                 }--}}
            {{--                .businessImg {--}}
            {{--                    width: 100%;--}}
            {{--                    height: 100%;--}}
            {{--                    background-size: cover;--}}
            {{--                    background-position: center;--}}
            {{--                    transition: var(--transition-smooth);--}}
            {{--                    transform: scale(1.2);--}}
            {{--                }--}}
            {{--                .businessItem>.businessTitle {--}}
            {{--                    position: absolute;--}}
            {{--                    bottom: 0;--}}
            {{--                    padding: 100px 0 20px 50px;--}}
            {{--                    margin: 0;--}}
            {{--                    min-width: 25vw;--}}
            {{--                    width: 100%;--}}
            {{--                    font-size: 24px;--}}
            {{--                    background-image: linear-gradient(0, black, transparent);--}}
            {{--                    transform: none;--}}
            {{--                    transition: var(--transition-smooth);--}}
            {{--                    transition-delay: .5s;--}}
            {{--                }--}}
            {{--                .businessDetail {--}}
            {{--                    background-color: #333134;--}}
            {{--                    /*padding: 12px 48px 50px;*/--}}
            {{--                    padding-top: 12px;--}}
            {{--                    padding-right: 48px;--}}
            {{--                    padding-bottom: 60px;--}}
            {{--                    position: absolute;--}}
            {{--                    bottom: 0;--}}
            {{--                    transform: translateY(140%);--}}
            {{--                    transition: var(--transition-smooth);--}}
            {{--                    transition-delay: .25s;--}}
            {{--                    min-width: 50vw;--}}
            {{--                    width: 100%;--}}
            {{--                }--}}
            {{--                .businessDetail .businessTitle, .businessTxt, .businessLink {--}}
            {{--                    opacity: 0;--}}
            {{--                    transition: var(--transition-smooth);--}}
            {{--                    transform: translateY(32px);--}}
            {{--                    transition-delay: .5s;--}}
            {{--                }--}}
            {{--                .businessTitle {--}}
            {{--                    font-size: 32px;--}}
            {{--                    color: var(--color-theme);--}}
            {{--                    font-weight: 700;--}}
            {{--                    position: relative;--}}
            {{--                    line-height: 36px;--}}
            {{--                    padding: 0;--}}
            {{--                    margin: 0;--}}
            {{--                    transition-delay: .5s;--}}
            {{--                }--}}
            {{--                .businessTxt {--}}
            {{--                    margin: 32px 0;--}}
            {{--                    height: max-content;--}}
            {{--                    overflow: hidden;--}}
            {{--                    transition-delay: .6s;--}}
            {{--                }--}}
            {{--                .businessDetail .businessTitle, .businessTxt, .businessLink {--}}
            {{--                    opacity: 0;--}}
            {{--                    transition: var(--transition-smooth);--}}
            {{--                    transform: translateY(32px);--}}
            {{--                    transition-delay: .5s;--}}
            {{--                }--}}
            {{--                .businessLink {--}}
            {{--                    text-transform: uppercase;--}}
            {{--                    background: url(../img/icon-linkArrow.png);--}}
            {{--                    background-repeat: no-repeat;--}}
            {{--                    background-position: right center;--}}
            {{--                    padding: 0 42px 0 0;--}}
            {{--                    transition-delay: .7s;--}}
            {{--                }--}}

            {{--                .businessItem:hover {--}}
            {{--                    width: 100%;--}}
            {{--                }--}}

            {{--                .businessItem:hover>.businessTitle {--}}
            {{--                    opacity: 0;--}}
            {{--                    transform: translateY(32px);--}}
            {{--                }--}}

            {{--                .businessItem:hover .businessDetail {--}}
            {{--                    transform: none;--}}
            {{--                }--}}
            {{--                .businessItem:hover .businessTitle, .businessItem:hover .businessTxt, .businessItem:hover .businessLink {--}}
            {{--                    opacity: 1;--}}
            {{--                    transform: none;--}}
            {{--                }--}}
            {{--                .businessItem:hover .businessImg {--}}
            {{--                    transform: scale(1.0);--}}
            {{--                }--}}

            {{--                .businessItem:hover .businessTitle, .businessItem:hover .businessTxt, .businessItem:hover .businessLink {--}}
            {{--                    opacity: 1;--}}
            {{--                    transform: none;--}}
            {{--                }--}}
            {{--            </style>--}}

            {{--            <div class="businessList">--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/a1-min.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle">{{trans('message.who_we_are')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle">{{trans('message.who_we_are')}}</h2>--}}
            {{--                        <a href="{{route('front.about')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/about_us/a2.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle">{{trans('message.what_we_do')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle">{{trans('message.what_we_do')}}</h2>--}}
            {{--                        <a href="{{route('front.about2')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/about_us/a3.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle">{{trans('message.our_team')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle">{{trans('message.our_team')}}</h2>--}}
            {{--                        <a href="{{route('front.about3')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/about_us/a4.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle"> {{trans('message.our_partner')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle"> {{trans('message.our_partner')}}</h2>--}}
            {{--                        <a href="{{route('front.about4')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            end--}}
        </div>
    </div>


    <div class="uk-mega-menu  uk-offcanvas" uk-offcanvas="" id="offcanvas-2" data-parent="2"
         style="display: none;">
        <div class="uk-background-wash uk-position-cover uk-offcanvas-close	" uk-close=""></div>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-position-z-index-menu"
             uk-grid>

{{--            phần menu dự án đầu tư trổ xuống--}}
            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.investments1')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us/a1.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover "
                             alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"
                             title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    DỰ ÁN <br> NĂNG LƯỢNG
                                @else
                                    RENEWABLE ENERGY
                                @endif
                               </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments1')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.investments2')}}"
                   class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/home/j.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled"
                             title="iStock-1156913631-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    DỰ ÁN <br> HẠ TẦNG "XANH"
                                @else
                                    SUSTAINABLE & INFRASTRUCTURE
                                @endif
                            </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments2')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.investments3')}}"
                   class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/home/j2.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled"
                             title="green-tech-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div
                        class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium"  style="margin-bottom: 40px">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom uk-text-lh-4-2">
                                @if(App::isLocale('vi'))
                                    DỰ ÁN <br> NĂNG LƯỢNG MỚI
                                @else
                                    FUTURE SOLUTION
                                @endif
                            </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments3')}}/">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">{{App::isLocale('vi') ? 'Tìm hiểu thêm' : 'FIND OUT MORE'}}</span>
                                <span
                                    class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                    uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            {{--            <div class="businessList">--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/i1-min.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle">{{trans('message.renewable_energy')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle">{{trans('message.renewable_energy')}}</h2>--}}
            {{--                        <a href="{{route('front.investments1')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/inves/i2.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle"> {{trans('message.sustainable_infrastructure')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle"> {{trans('message.sustainable_infrastructure')}}</h2>--}}
            {{--                        <a href="{{route('front.investments2')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="businessItem">--}}
            {{--                    <div class="businessImg" style="background-image:url(/site/system/inves/i3.jpg);"></div>--}}
            {{--                    <h2 class="businessTitle"> {{trans('message.future_solution')}}</h2>--}}
            {{--                    <div class="businessDetail">--}}
            {{--                        <h2 class="businessTitle"> {{trans('message.future_solution')}}</h2>--}}
            {{--                        <a href="{{route('front.investments3')}}" class="businessLink">Detail</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--end--}}
        </div>
    </div>
</div>
<!-- Sub Menu -->
