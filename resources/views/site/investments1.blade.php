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
    <!-- <span></span> -->
    <section id="sozo-main">
        <header class="lte-page-header lte-parallax-yes">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">Invesments</h1>
                </div>
                <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <li class="home">
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Home." href="http://sunlux.like-themes.com" class="home">
                                <span property="name">Home</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
                    </li>
                    <li class="post post-page current-item">
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">Investment</span>
                            <meta property="position" content="2">
                        </span>
                    </li>
                </ul>
            </div>
        </header>
        <section class="projects-page-section">
			<div class="container">
				<ul class="filter">
					<li><a href="#" data-filter="*" class="active">Show All</a></li>
					<li><a href="#" data-filter=".buildings" class="">Buildings</a></li>
					<li><a href="#" data-filter=".interior" class="">Interior</a></li>
					<li><a href="#" data-filter=".energy" class="">Energy</a></li>
					<li><a href="#" data-filter=".isolation" class="">Isolation</a></li>
				</ul>
				<div class="project-box iso-call col2" >
					<div class="project-post buildings isolation">
						<img src="/site/system/inves/i_1.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Dự án điện gió Adani Phước Minh</a></h2>
							<div class="pj-des">
                                <p>Quy mô: công suất 27.2 MW, diện tích 30ha</p>
                                <p>Tổng vốn đầu tư: 1150 tỷ đồng</p>
                                <p>Nhà cung cấp: GE</p>
                                <p>Nhà thầu: PowerChina VietNam Limited Company</p>
                                <p>Tư vấn thiết kế: Henste engineering- Singapore)</p>
                                <p>Tư vấn giám sát: Rina</p>
                                <p>COD: 10/2021</p>
                            </div>
						</div>
					</div>
					<div class="project-post interior">
						<img src="/site/system/slide/s4.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Adani Phuoc Minh solar power project</a></h2>
							<span>(Quan The 1 Village, Phuoc Minh Commune, Thuan Nam District, Ninh Thuan Province, Vietnam)</span>
                            <span>Scale: capacity 50MW, area 60 hectares
                                Total investment capital: 1000 billion VND
                                Vendor: JA
                                Contractors: PowerChina Huadong Engineering
                                Consultant and supervisor: Rina
                                COD: September 2020
                            </span>
						</div>
					</div>
					<div class="project-post buildings isolation"">
						<img src="upload/projects/3.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Classic House</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
					<div class="project-post buildings">
						<img src="upload/projects/4.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Modern and trending house</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
					<div class="project-post interior isolation">
						<img src="upload/projects/5.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Afarist Building</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
					<div class="project-post energy" >
						<img src="upload/projects/6.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">traditional Building</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
					<div class="project-post buildings">
						<img src="upload/projects/7.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Small house</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
					<div class="project-post isolation">
						<img src="upload/projects/8.jpg" alt="">
						<div class="hover-box">
							<h2><a href="single-project.html">Large town Buildings</a></h2>
							<span>bulding, house</span>
						</div>
					</div>
				</div>
			</div>
		</section>
        
    </section>
@endsection
@push('scripts')
    <script type='text/javascript' src='/libs/isotope/jquery.isotope.min.js' ></script>
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
    } catch (i) {}
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
        } catch (a) {}
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
            } catch (s) {}
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
    } catch (i) {}
});
    </script>
@endpush