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
                    <h1 class="header">{{App::isLocale('vi') ? 'Danh mục đầu tư' : 'Invesments'}}</h1>
                </div>

               @include('site.partials.bread_crumb2', ['vi' => 'Danh mục đầu tư', 'en' => 'Invesments'])

            </div>
        </header>
        <section class="projects-page-section">
			<div class="container">
				<ul class="filter">
					<li><a href="#" data-filter="*" class="active">{{App::isLocale('vi') ? 'Tất Cả' : 'Show All'}}</a></li>

                    @foreach($categories as $category)
                        <li><a href="#" data-filter=".{{$category->slug}}" class="">{{App::isLocale('vi') ? $category->name : $category->en_name}}</a></li>
                    @endforeach
				</ul>
				<div class="project-box iso-call col2" >
                    @foreach($projects as $project)
                        @if(App::isLocale('vi'))
                            <div class="project-post {{$project->category->slug}}">
                                <img src="{{$project->image->path ?? ''}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="#">{{$project->projectVi->title}}</a></h2>
                                    <div class="pj-des">
                                        {!! $project->projectVi->short_des !!}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="project-post {{$project->category->slug}}">
                                <img src="{{$project->image->path ?? ''}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="#">{{@$project->projectEn->title ?? ''}}</a></h2>
                                    <div class="pj-des">
                                        {!! @$project->projectEn->short_des ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
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
