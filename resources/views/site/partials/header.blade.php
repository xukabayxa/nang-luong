<div class="uk-navbar-container uk-navbar-transparent uk-padding-xmedium-top uk-padding-xmedium-bottom">
    <nav class="uk-navbar uk-container">
        <div class="uk-navbar-left" >
            <div class="logo" style="margin: 0; font-size: 0;">
                <a href="{{route('front.home_page')}}" title="RT ENERGY">
                    <span class="uk-logo uk-icon uk-preserve">
                        <img src="{{ asset('site/system/rt-logo-white.png') }}"  style="height: auto" alt="RT ENERGY">
                    </span>
                </a>
            </div>
        </div>

{{--        phần menu header--}}
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li class="menu-item-1">
                    <a class="uk-visible@m has-dropdown" href="#offcanvas-1" uk-toggle>
                        {{trans('message.about_menu')}}<span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                       uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" href="#">{{trans('message.about_menu')}}<span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="{{route('front.about')}}">{{trans('message.who_we_are')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about2')}}">{{trans('message.what_we_do')}}
                                    </li>
                                    <li>
                                        <a href="{{route('front.about3')}}">{{trans('message.our_team')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about4')}}">
                                            {{trans('message.our_partner')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-2">
                    <a class="uk-visible@m has-dropdown" href="#offcanvas-2" uk-toggle>
                        {{trans('message.our_investments_menu')}}<span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                              uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" href="#">{{trans('message.our_investments_menu')}}<span
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
                    <a class="uk-visible@m " href="{{route('front.globalReach')}}">
                        {{trans('message.our_global_presence_menu')}} </a>

                    <a class="uk-hidden@m" href="{{route('front.globalReach')}}">
                        {{trans('message.our_global_presence_menu')}}</a>
                </li>
                <li class="menu-item-4">
                    <a class="uk-visible@m " href="{{route('front.insights')}}">
                        {{trans('message.insights_menu')}} </a>

                    <a class="uk-hidden@m" href="{{route('front.insights')}}">
                        {{trans('message.insights_menu')}}</a>
                </li>

                <style>
                    .lang {
                        border-left: 1px solid #fff;
                    }
                </style>
                <li class="menu-item-5">
                    <a class="uk-visible@m " href="{{route('front.contact')}}">
                        {{trans('message.contact_menu')}} </a>

                    <a class="uk-hidden@m" href="{{route('front.contact')}}">
                        {{trans('message.contact_menu')}}</a>
                </li>
            </ul>

            <style>
                @media only screen and (min-width: 768px) {
                    .uk-navbar-left {
                        padding-left: 30px;
                    }
                    .uk-navbar-right {
                        margin-left: 280px;
                    }
                    .uk-navbar-left img {
                        width: 225px;
                    }
                    .choise-lang {
                        top: 80px;
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
                        top: 80px;
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
                            <img src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/vi.png"></span>
                        @else
                            <span class="ddTitleText" id="edit-lang-dropdown-select_titletext">
                            <img src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/en.png"></span>
                        @endif

                    </div>
                    <div class="choise-lang">
                        <a href="{{route('front.change-language', 'vi')}}" class="{{config('app.locale') == 'vi' ? 'selected' : '' }} enabled">
                            <img src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/vi.png">
                        </a>
                        <a href="{{route('front.change-language', 'en')}}"  class="{{config('app.locale') == 'en' ? 'selected' : '' }} enabled">
                            <img src="https://tpb.vn/wps/contenthandler/dav/themelist/custom.portal.theme.TPBThemev1/custom/images/en.png" align="absmiddle">
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
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us/a1.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-663800200-scaled"
                             title="iStock-663800200-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.who_we_are')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about2')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us/a2.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-864106820-scaled"
                             title="iStock-864106820-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.what_we_do')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about2')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about3')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="/site/system/about_us/a3.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1199544859-scaled"
                             title="iStock-1199544859-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.our_team')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about3')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about4')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src=""
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-492596662-scaled"
                             title="iStock-492596662-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.our_partner')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.about4')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
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
                        <img data-src="/site/system/inves/i1.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover "
                             alt="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"
                             title="b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.renewable_energy')}}</h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments1')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
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
                        <img data-src="/site/system/inves/i2.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled"
                             title="iStock-1156913631-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.sustainable_infrastructure')}}
                                </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments2')}}">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
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
                        <img data-src="/site/system/inves/i3.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled"
                             title="green-tech-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                {{trans('message.future_solution')}} <br/>
                              </h4>
                            <a class="uk-button uk-color-primary uk-style-secondary-b "
                               href="{{route('front.investments3')}}/">
                                <span class="uk-color-primary uk-text-middle uk-margin-right">FIND OUT MORE</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-primary"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
{{--end--}}
        </div>
    </div>
</div>
<!-- Sub Menu -->
