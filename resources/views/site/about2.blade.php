@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/css/custom-template.css" rel="stylesheet">
    <link href="/css/solar-skin.css" rel="stylesheet">
    <link href="/css/css-2.css" rel="stylesheet">
    <link href="/css/css-3.css" rel="stylesheet">

@endsection
@section('content')
    <style>
        h3{
            font-size: 20px;
            color: #0F4C81 ;
        }
    </style>
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>


    <style>
        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 480px)
        and (-webkit-min-device-pixel-ratio: 2) {
            .vc_custom_1474870976953 {
                display: none;
            }
            .text-br {
                white-space: pre;
            }
        }

    </style>
    <section id="sozo-main" style="display: grid">
        <section class="main-title-section-wrapper default"
                 style="background:url(https://solarwp.wpengine.com/wp-content/uploads/2016/09/page-title-img.jpg)
           top left repeat;">
            <div class="container">
                <div class="main-title-section"><h1>{{App::isLocale('vi') ? 'Lĩnh vực hoạt động' : 'What We Do'}}</h1></div>
                {{--                <div class="breadcrumb"><a href="https://solarwp.wpengine.com/">Home</a><span class="fa default"></span><span--}}
                {{--                        class="current">About Us</span></div>--}}
            </div>
        </section>
        <div class="container">
            <section id="primary" class="content-full-width">    <!-- #post-8 -->
                <div id="post-8" class="post-8 page type-page status-publish hentry">
                    <style>
                        .vc_custom_1475647479713 {
                            padding-right: 50px!important;
                            padding-left: 50px!important;
                        }
                    </style>

                    <div class="vc_row-full-width vc_clearfix"></div>

                    <div data-vc-full-width="true" data-vc-full-width-init="true"
                         class="vc_row wpb_row vc_row-fluid section4 vc_custom_1474520837084 vc_column-gap-35"
                         style="position: relative;text-align: center; margin-top: 65px ">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    {{--                                    <h2 style="text-align: center" class="vc_custom_heading main-title-custom">--}}
                                    {{--                                        We Cover the Whole Spectrum</h2>--}}
                                    <div
                                        class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator-has-text">
                            <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#bae6ec;"
                                                                              class="vc_sep_line"></span></span><h4 style="color: #0b5a7e; font-size: 18px">{{App::isLocale('vi') ? 'Lĩnh vực hoạt động' : 'What We Do'}}</h4><span class="vc_sep_holder vc_sep_holder_r"><span
                                                style="border-color:#bae6ec;" class="vc_sep_line"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>

                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid section4 vc_custom_1475818391834 vc_column-gap-35">
                        <div class="skill-set-main wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="skill-set-1 wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   skill-set">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <a href="https://solarwp.wpengine.com/" target="_self"
                                                               class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                    width="348" height="294"
                                                                    src="https://solarwp.wpengine.com/wp-content/uploads/2016/11/img3.jpg"
                                                                    class="vc_single_image-img attachment-full"
                                                                    alt="" loading="lazy"
                                                                    srcset="https://solarwp.wpengine.com/wp-content/uploads/2016/11/img3.jpg 348w, https://solarwp.wpengine.com/wp-content/uploads/2016/11/img3-300x253.jpg 300w"
                                                                    sizes="(max-width: 348px) 100vw, 348px"/></a>
                                                        </figure>
                                                    </div>
                                                    <h4 style="color: #ffffff;text-align: center"
                                                        class="vc_custom_heading"><a
                                                            href="http://solar.dttheme.com/">SOLAR<br/>
                                                            VENTILATION</a></h4></div>
                                            </div>
                                        </div>
                                        <div class="skill-set-2 wpb_column vc_column_container vc_col-sm-6" >
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   skill-set">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <a href="https://solarwp.wpengine.com/" target="_self"
                                                               class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                    width="337" height="282"
                                                                    src="https://solarwp.wpengine.com/wp-content/uploads/2016/11/img2.jpg"
                                                                    class="vc_single_image-img attachment-full"
                                                                    alt="" loading="lazy"
                                                                    srcset="https://solarwp.wpengine.com/wp-content/uploads/2016/11/img2.jpg 337w, https://solarwp.wpengine.com/wp-content/uploads/2016/11/img2-300x251.jpg 300w"
                                                                    sizes="(max-width: 337px) 100vw, 337px"/></a>
                                                        </figure>
                                                    </div>
                                                    <h4 style="color: #ffffff;text-align: center"
                                                        class="vc_custom_heading"><a
                                                            href="http://solar.dttheme.com/">PHOTOVOLTAIC<br/>
                                                            SOLUTIONS</a></h4></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid" style="height: 330px">
                                        <div class="skill-set-3 wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   skill-set">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <a href="https://solarwp.wpengine.com/" target="_self"
                                                               class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                    width="297" height="297"
                                                                    style="height: 300px"
                                                                    src="/site/system/anh1.jpg"
                                                                    class="vc_single_image-img attachment-full"
                                                                    alt="" loading="lazy"
                                                                    srcset="/site/system/anh1.jpg 297w, /site/system/anh1.jpg 150w, /site/system/anh1.jpg 200w"
                                                                    sizes="(max-width: 297px) 100vw, 297px"/></a>
                                                        </figure>
                                                    </div>
                                                    <h4 style="color: #ffffff;text-align: center"
                                                        class="vc_custom_heading"><a
                                                            href="http://solar.dttheme.com/">WINDMILLS<br/>
                                                            ERECTION</a></h4></div>
                                            </div>
                                        </div>
                                        <div class="skill-set-4 wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left   skill-set">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <a href="https://solarwp.wpengine.com/" target="_self"
                                                               class="vc_single_image-wrapper vc_box_border_grey"><img
                                                                    width="274" height="320"
                                                                    style="height: 300px;"
                                                                    src="/site/system/anh2.jpg"
                                                                    class="vc_single_image-img attachment-full"
                                                                    alt="" loading="lazy"
                                                                    srcset="/site/system/anh2.jpg 274w, /site/system/anh2.jpg 257w"
                                                                    sizes="(max-width: 274px) 100vw, 274px"/></a>
                                                        </figure>
                                                    </div>
                                                    <h4 style="color: #ffffff;text-align: center"
                                                        class="vc_custom_heading"><a
                                                            href="http://solar.dttheme.com/">SOLAR<br/>
                                                            PANELS</a></h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class='dt-sc-icon-box type4 ' style='margin-bottom: 45px;'>
                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-skill1.png"
                                                                       class="attachment-full" alt=""
                                                                       loading="lazy"/></div>
                                        <div class="icon-content"><h4>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</h4>
                                            <p>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</p>
                                        </div>
                                    </div>
                                    <div class='dt-sc-icon-box type4 ' style='margin-bottom: 45px;'>
                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-skill2.png"
                                                                       class="attachment-full" alt=""
                                                                       loading="lazy"/></div>
                                        <div class="icon-content"><h4>{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}</h4>
                                            <p>{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp năng lượng tái tạo' : 'Sustainable industrial park development'}}</p></div>
                                    </div>
                                    <div class='dt-sc-icon-box type4 '>
                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-skill3.png"
                                                                       class="attachment-full" alt=""
                                                                       loading="lazy"/></div>
                                        <div class="icon-content"><h4>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</h4>
                                            <p>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                         class="vc_row wpb_row vc_row-fluid skill-set-img vc_row-no-padding" style="margin-top: -120px">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1474709520991">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                    width="1920" height="390"
                                                    src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/skill-set-img.png"
                                                    class="vc_single_image-img attachment-full" alt=""
                                                    loading="lazy"
                                                    srcset="https://solarwp.wpengine.com/wp-content/uploads/2016/09/skill-set-img.png 1920w, https://solarwp.wpengine.com/wp-content/uploads/2016/09/skill-set-img-300x61.png 300w, https://solarwp.wpengine.com/wp-content/uploads/2016/09/skill-set-img-768x156.png 768w, https://solarwp.wpengine.com/wp-content/uploads/2016/09/skill-set-img-1024x208.png 1024w"
                                                    sizes="(max-width: 1920px) 100vw, 1920px"/></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- #post-8 -->
            </section>
        </div>
    </section>

@endsection
@push('scripts')
    <script type='text/javascript' src='/site/js/solar.js'
            id='solar-controlpanel-js'></script>
    <script   type='text/javascript' src='/site/js/solar-2.js' id='solar-jqcustom-js'></script>

@endpush
