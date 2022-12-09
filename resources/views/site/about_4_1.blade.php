@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection

@section('content')

    <!-- <span></span> -->
    <section id="sozo-main">
        <header class="lte-page-header lte-parallax-yes header-partner">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'Strategic Partnership'}}</h1>
                </div>

                @include('site.partials.bread_crumb2', ['vi' => 'Đối tác chiến lược', 'en' => 'Strategic Partnership'])

            </div>
        </header>
        <section class="projects-page-section partner-section">
            <div class="container">

                <div id="filters" class="button-group">
                    <div class="iso-choose">
                        <div class="button is-checked" data-filter="*">{{App::isLocale('vi') ? 'Tất Cả' : 'Show All'}}</div>
                        <div class="button" data-filter=".household-sort">{{App::isLocale('vi') ? 'Đối Tác Đầu Tư' : 'Investment Partner'}}</div>
                        <div class="button" data-filter=".research-sort">{{App::isLocale('vi') ? 'Nhà Cung Cấp' : 'Supplier'}}</div> 
                        <div class="button" data-filter=".school-sort">{{App::isLocale('vi') ? 'Nhà Thầu' : 'Contractors'}}</div> 
                    </div>
                </div>
                <div class="grid">
                    {{-- houseHold --}}
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/21.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/5.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/4.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/3.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/6.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/7.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/8.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/9.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/10.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/11.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/12.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso household-sort" data-category="household-sort">
                        <img src="/site/system/partner3/13.png" alt="" title=""/>
                    </div>

                    {{-- research-sort --}}
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/6.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/7.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/8.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/9.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/10.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/11.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/12.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/13.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/14.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/15.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/16.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso research-sort" data-category="research-sort">
                        <img src="/site/system/partner4/17.png" alt="" title=""/>
                    </div>

                    {{-- school-sort --}}
                    <div class="element-item post-transition metal project-iso school-sort" data-category="school-sort">
                        <img src="/site/system/partner4/1.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso school-sort" data-category="school-sort">
                        <img src="/site/system/partner4/2.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso school-sort" data-category="school-sort">
                        <img src="/site/system/partner4/3.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso school-sort" data-category="school-sort">
                        <img src="/site/system/partner4/4.png" alt="" title=""/>
                    </div>
                    <div class="element-item post-transition metal project-iso school-sort" data-category="school-sort">
                        <img src="/site/system/partner4/5.png" alt="" title=""/>
                    </div>
                   
                </div>

            </div>
        </section>

    </section>
@endsection
@push('scripts')
    <script type='text/javascript' src='/libs/isotope/jquery.isotope.min.js'></script>
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
        $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
        });
    </script>
@endpush
