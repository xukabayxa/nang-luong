<div class="uk-navbar-container uk-navbar-transparent uk-padding-xmedium-top uk-padding-xmedium-bottom">
    <nav class="uk-navbar uk-container">
        <div class="uk-navbar-left">
            <div class="logo" style="margin: 0; font-size: 0;">
                <a href="{{route('front.home_page')}}" title="Company Name">
                    <span class="uk-logo uk-icon uk-preserve" uk-icon="icon: logo-dark; ratio: 1;"></span>
                </a>
            </div>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li class="menu-item-1">
                    <a class="uk-visible@m has-dropdown" href="#offcanvas-1" uk-toggle>
                        About Us <span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                       uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" href="#">About Us<span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="{{route('front.about')}}">Who We
                                            Are</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about2')}}">What We
                                            Do</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about3')}}">UN SDGs</a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.about4')}}">AGP
                                            Partners</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-2">
                    <a class="uk-visible@m has-dropdown" href="#offcanvas-2" uk-toggle>
                        Our Investments <span class="uk-icon uk-preserve uk-margin-xsmall-left"
                                              uk-icon="icon: arrow-down-dark; ratio: 0.6"></span>
                    </a>

                    <ul uk-accordion class="uk-hidden@m">
                        <li>
                            <a class="uk-accordion-title" href="#">Our Investments<span
                                    class="uk-icon uk-preserve uk-margin-xsmall-left"
                                    uk-icon="icon: arrow-down-dark; ratio: 0.6"></span></a>
                            <div class="uk-accordion-content">
                                <ul>
                                    <li>
                                        <a href="https://www.agpgroup.com/investments/renewable-energy/">Renewable<br/>
                                            Energy</a>
                                    </li>
                                    <li>
                                        <a href="https://www.agpgroup.com/investments/sustainable-communities-infrastructure/">Sustainable
                                            <br/>
                                            Communities &amp; <br/>
                                            Infrastructure</a>
                                    </li>
                                    <li>
                                        <a href="https://www.agpgroup.com/investments/green-technologies/">Green
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
                        Global Reach </a>

                    <a class="uk-hidden@m" href="{{route('front.globalReach')}}">
                        Global Reach</a>
                </li>
                <li class="menu-item-4">
                    <a class="uk-visible@m " href="{{route('front.insights')}}">
                        Insights </a>

                    <a class="uk-hidden@m" href="{{route('front.insights')}}">
                        Insights</a>
                </li>
                <li class="menu-item-5">
                    <a class="uk-visible@m " href="{{route('front.contact')}}">
                        Contact </a>

                    <a class="uk-hidden@m" href="{{route('front.contact')}}">
                        Contact</a>
                </li>
            </ul>
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
    </nav>
</div>


<div class="uk-position-relative uk-visible@m" style="z-index: 3;">
    <div class="uk-mega-menu  uk-offcanvas" uk-offcanvas="" id="offcanvas-1" data-parent="1"
         style="display: none;">
        <div class="uk-background-wash uk-position-cover uk-offcanvas-close	" uk-close=""></div>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-position-z-index-menu"
             uk-grid>
            <div class="uk-text-left uk-mega-menu-item items-4">
                <a href="{{route('front.about')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-663800200-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-663800200-scaled"
                             title="iStock-663800200-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                Who We Are</h4>
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
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-864106820-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-864106820-scaled"
                             title="iStock-864106820-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                What We Do</h4>
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
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-1199544859-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1199544859-scaled"
                             title="iStock-1199544859-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                UN SDGs</h4>
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
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-492596662-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-492596662-scaled"
                             title="iStock-492596662-scaled"/>
                        <canvas width="400" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                AGP Partners</h4>
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
        </div>
    </div>
    <div class="uk-mega-menu  uk-offcanvas" uk-offcanvas="" id="offcanvas-2" data-parent="2"
         style="display: none;">
        <div class="uk-background-wash uk-position-cover uk-offcanvas-close	" uk-close=""></div>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-position-z-index-menu"
             uk-grid>

            <div class="uk-text-left uk-mega-menu-item items-3">
                <a href="{{route('front.investments1')}}" class="uk-animation-zoom">
                    <div class="uk-cover-container ">
                        <img data-src="https://media.agpgroup.com/uploads/2021/04/b5adbe20174127c806a4c33d5762fd4e8a5caee8-scaled.jpg"
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
                                Renewable<br/>
                                Energy</h4>
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
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/iStock-1156913631-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="iStock-1156913631-scaled"
                             title="iStock-1156913631-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                Sustainable <br/>
                                Communities &amp; <br/>
                                Infrastructure</h4>
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
                        <img data-src="https://media.agpgroup.com/uploads/2021/05/green-tech-scaled.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="green-tech-scaled"
                             title="green-tech-scaled"/>
                        <canvas width="533.33333333333" height="720"></canvas>
                        <div class="uk-background-gradient-mega-menu uk-position-cover"></div>
                    </div>
                    <div class="uk-position-relative uk-text-left uk-text-uppercase uk-light uk-background-gradient-rev">
                        <div class="uk-position-bottom uk-padding-xmedium">
                            <h4 class="uk-style-tertiary uk-text-uppercase uk-text-6-1 uk-text-lh-4 uk-margin-small-bottom">
                                Green <br/>
                                Technologies</h4>
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

        </div>
    </div>
</div>
<!-- Sub Menu -->



