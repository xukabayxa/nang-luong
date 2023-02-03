@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection

@section('content')

    <!-- <span></span> -->
    <section id="sozo-main">
        <header class="lte-page-header lte-parallax-yes header-investment">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">{{App::isLocale('vi') ? 'Danh mục đầu tư' : 'Invesments'}}</h1>
                </div>

               @include('site.partials.bread_crumb2', ['vi' => 'Danh mục đầu tư', 'en' => 'Invesments'])

            </div>
        </header>
        <section class="projects-page-section">
			<div class="container">
                <div id="filters" class="button-group">
                    <div class="iso-choose">
                        <div class="button is-checked" data-filter="*">{{App::isLocale('vi') ? 'Tất Cả' : 'Show All'}}</div>
                        @foreach($categories as $category)
                        <div class="button" data-filter=".{{$category->slug}}">{{App::isLocale('vi') ? $category->name : $category->en_name}}</div>
                    @endforeach
                    </div>
                </div>
                <div class="grid">
                    @foreach($projects as $project)
                        @if(App::isLocale('vi'))
                        <div class="element-item post-transition metal project-iso {{$project->category->slug}}" data-category="{{$project->category->slug}}">
                            <img src="{{$project->image->path ?? ''}}" alt="">
                            <div class="hover-box">
                                <h2><a href="#">{{$project->projectVi->title}}</a></h2>
                                <div class="pj-des">
                                    {!! $project->projectVi->short_des !!}
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="element-item post-transition metal project-iso {{$project->category->slug}}" data-category="{{$project->category->slug}}">
                            <img src="{{$project->image->path ?? ''}}" alt="">
                            <div class="hover-box">
                                <h2><a href="#">{{$project->projectEn->title}}</a></h2>
                                <div class="pj-des">
                                    {!! $project->projectEn->short_des !!}
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
    <script type='text/javascript' src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js' ></script>
    <script>
        // init Isotope
        var $grid = $('.grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function( itemElem ) {
            var weight = $( itemElem ).find('.weight').text();
            return parseFloat( weight.replace( /[\(\)]/g, '') );
            }
        }
        });

        // filter functions
        var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
        }
        };

        // bind filter button click
        $('#filters').on( 'click', '.button', function() {
        var filterValue = $( this ).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
        });

        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', '.button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
        });
    </script>
@endpush
