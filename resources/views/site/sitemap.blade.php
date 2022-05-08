@extends('site.layouts.master')
@section('title')
    <title></title>
@endsection
@section('content')
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-background-light uk-dark uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <section id="sozo-main">
        <div class="uk-section uk-background-dark uk-light uk-clearfix">
            <div class="uk-container uk-text-center">
                <h1 class="uk-margin-top uk-margin-small-bottom">Sitemap</h1>
            </div>
        </div>
        <div class="uk-container uk-container-medium uk-margin-top uk-margin-medium-bottom">
            <div class="uk-margin-top uk-wysiwyg-default uk-wysiwyg-basic">
                <div id="simple-sitemap-container-6271e8a552360" class="simple-sitemap-container simple-sitemap-container-6271e8a552360 tab-disabled"><div class="simple-sitemap-wrap"><h3 class="post-type">Pages</h3><ul class="simple-sitemap-page main"><li class="sitemap-item page_item page-item-764 page_item_has_children"><a href="">About us</a>
                                <ul class='children'>
                                    <li class="sitemap-item page_item page-item-772"><a href="">AGP Partners</a></li>
                                    <li class="sitemap-item page_item page-item-770"><a href="">UN SDGs</a></li>
                                    <li class="sitemap-item page_item page-item-768"><a href="">What we do</a></li>
                                    <li class="sitemap-item page_item page-item-766"><a href="">Who we are</a></li>
                                </ul>
                            </li>
                            <li class="sitemap-item page_item page-item-5"><a href="">Contact</a></li>
                            <li class="sitemap-item page_item page-item-8"><a href="">Cookie Policy</a></li>
                            <li class="sitemap-item page_item page-item-942"><a href="">Global Reach</a></li>
                            <li class="sitemap-item page_item page-item-6"><a href="">Home</a></li>
                            <li class="sitemap-item page_item page-item-394"><a href="">Insights</a></li>
                            <li class="sitemap-item page_item page-item-757 page_item_has_children"><a href="">Investments</a>
                                <ul class='children'>
                                    <li class="sitemap-item page_item page-item-762"><a href="">Green Technologies</a></li>
                                    <li class="sitemap-item page_item page-item-760"><a href="">Renewable Energy</a></li>
                                    <li class="sitemap-item page_item page-item-756"><a href="">Sustainable Communities &amp; Infrastructure</a></li>
                                </ul>
                            </li>
                            <li class="sitemap-item page_item page-item-1232"><a href="">Privacy Policy</a></li>
                            <li class="sitemap-item page_item page-item-316"><a href="">Sitemap</a></li>
                            <li class="sitemap-item page_item page-item-7"><a href="">Terms of Use</a></li>
                        </ul></div></div><br style="clear: both;">
            </div>
        </div>
    </section>
@endsection
