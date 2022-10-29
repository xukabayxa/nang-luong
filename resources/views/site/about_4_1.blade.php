@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection

@section('content')

    <!-- <span></span> -->
    <section id="sozo-main">
        <header class="lte-page-header lte-parallax-yes">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'Strategic Partnership'}}</h1>
                </div>

                @include('site.partials.bread_crumb2', ['vi' => 'Đối tác chiến lược', 'en' => 'Strategic Partnership'])

            </div>
        </header>
        <section class="projects-page-section">
            <div class="container">
                <ul class="filter">
                    <li><a href="#" data-filter="*" class="active">{{App::isLocale('vi') ? 'TẤT CẢ' : 'ALL'}}</a></li>
                    <li><a href="#"
                           data-filter=".household-sort">{{App::isLocale('vi') ? 'ĐỐI TÁC ĐẦU TƯ' : 'INVESTMENT PARTNER'}}</a>
                    </li>
                    <li><a href="#"
                           data-filter=".research-sort">{{App::isLocale('vi') ? 'NHÀ CUNG CẤP' : 'SUPPLIER'}}</a></li>
                    <li><a href="#" data-filter=".school-sort">{{App::isLocale('vi') ? 'NHÀ THẦU' : 'CONTRACTORS'}}</a>
                    </li>
                </ul>
                <div class="project-box iso-call">

                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/1.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/21.png"
                             alt=""
                             title=""/>
                    </div>


                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/5.png"
                             alt=""
                             title=""/>
                    </div>

                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/3.png"
                             alt=""
                             title=""/>
                    </div>


                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/4.png"
                             alt=""
                             title=""/>
                    </div>

                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/6.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/7.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/8.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/9.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/10.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/11.png"
                             alt=""
                             title=""/>
                    </div>

                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/12.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/13.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post household-sort partner-post">
                        <img src="/site/system/partner3/14.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post school-sort partner-post">
                        <img src="/site/system/partner4/1.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post school-sort partner-post">
                        <img src="/site/system/partner4/2.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post school-sort partner-post">
                        <img src="/site/system/partner4/3.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post school-sort partner-post">
                        <img src="/site/system/partner4/4.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post school-sort partner-post">
                        <img src="/site/system/partner4/5.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/6.png"
                             alt=""
                             title=""/>
                    </div>

                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/7.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/8.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/9.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/10.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/11.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/12.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/13.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/14.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/15.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/16.png"
                             alt=""
                             title=""/>
                    </div>
                    <div class="project-post research-sort partner-post">
                        <img src="/site/system/partner4/17.png"
                             alt=""
                             title=""/>
                    </div>


                </div>
            </div>
        </section>

    </section>
@endsection
@push('scripts')
    <script type='text/javascript' src='/libs/isotope/jquery.isotope.min.js'></script>
    <script>
        $(document).ready(function (e) {
            "use strict";
            var a = e(window),
                t = e(".iso-call"),
                s = e(".filter");
            try {
                t.trigger("resize"),
                    t.isotope({
                        filter: "*",
                        layoutMode: "masonry",
                        animationOptions: {
                            duration: 750,
                            easing: "linear"
                        }
                    })
            } catch (i) {
            }
            a.bind("resize", function () {
                var e = s
                    .find("a.active")
                    .attr("data-filter");
                try {
                    t.isotope({
                        filter: e,
                        animationOptions: {
                            duration: 750,
                            easing: "linear",
                            queue: !1
                        }
                    })
                } catch (a) {
                }
                return !1
            }),
                s
                    .find("a")
                    .click(function () {
                        var a = e(this).attr("data-filter");
                        try {
                            t.isotope({
                                filter: a,
                                animationOptions: {
                                    duration: 750,
                                    easing: "linear",
                                    queue: !1
                                }
                            })
                        } catch (s) {
                        }
                        return !1
                    });
            var r = e(".filter li a");
            r.on("click", function () {
                var a = e(this);
                a.hasClass("active") || (r.removeClass("active"), a.addClass("active"))
            });
            try {
                e.browserSelector(),
                e("html").hasClass("chrome") && e.smoothScroll()
            } catch (i) {
            }
        });
    </script>
@endpush
