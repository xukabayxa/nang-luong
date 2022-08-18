@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/css/custom-template.css" rel="stylesheet">
    <link href="/css/solar-skin.css" rel="stylesheet">
    <link href="/css/css-2.css" rel="stylesheet">
    <link href="/css/css-3.css" rel="stylesheet">
    <link href="/site/css/about/custom.css" rel="stylesheet">
@endsection
@section('content')
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <section id="sozo-main" style="display: grid">
        <section class="main-title-section-wrapper default"
                 style="background:url(https://solarwp.wpengine.com/wp-content/uploads/2016/09/page-title-img.jpg)
           top left repeat;">
            <div class="container">
                <div class="main-title-section"><h1>{{App::isLocale('vi') ? 'Về chúng tôi' : 'About Us'}}</h1></div>
{{--                <div class="breadcrumb"><a href="https://solarwp.wpengine.com/">Home</a><span class="fa default"></span><span--}}
{{--                        class="current">About Us</span></div>--}}
            </div>
        </section>
        <div class="container">
            <section id="primary" class="content-full-width">    <!-- #post-8 -->
                <div id="post-8" class="post-8 page type-page status-publish hentry">
                    <div data-vc-full-width="true" data-vc-full-width-init="true"
                         class="vc_row wpb_row vc_row-fluid about-section1"
                         style="position: relative; left: -159.6px; box-sizing: border-box; width: 1519px; padding-left: 159.6px; padding-right: 159.4px; margin-bottom: 50px">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="title-h3 wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <h3 style="text-align: left; color: #0b5a7e"
                                                                             class="vc_custom_heading">
                                                        {{App::isLocale('vi') ? 'Giới thiệu chung' : 'Introduction'
                                                                                                                    }}
                                                        </h3>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper pre2" >
                                                            <p>

                                                                {{App::isLocale('vi') ? 'RT Energy được xây dựng và phát triển với định hướng trở thành tập đoàn tiên phong
             trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh ở khu vực Asean trong năm 2025, và trên thế giới trước năm 2030' :
                                                                'RT Energy was built and developed with the orientation to become a pioneer in the field of renewable energy and green industrial parks in the ASEAN before 2025, and in the world before 2030.'}}
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="dt-sc-icon-box type5 ">
                                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-ser8@2x.png"
                                                                                       class="attachment-full" alt=""
                                                                                       loading="lazy"></div>
                                                        <div class="icon-content"><h4>{{App::isLocale('vi') ? 'Năng lượng tái tạo' : 'Renewable energy and technology'}}</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="dt-sc-icon-box type5 ">
                                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-ser9@2x.png"
                                                                                       class="attachment-full" alt=""
                                                                                       loading="lazy"></div>
                                                        <div class="icon-content"><h4 class="text-br">{{App::isLocale('vi') ? 'Khu công nghiệp kết hợp
năng lượng tái tạo' : 'Sustainable industrial park development'}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="dt-sc-icon-box type5 ">
                                                        <div class="icon-wrapper"><img width="80" height="80"
                                                                                       src="https://solarwp.wpengine.com/wp-content/uploads/2016/09/icon-ser7@2x.png"
                                                                                       class="attachment-full" alt=""
                                                                                       loading="lazy"></div>
                                                        <div class="icon-content"><h4>{{App::isLocale('vi') ? ' Năng lượng mới' : 'New reliable power system'}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div
                                        class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1474870976953">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>

                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                         class="vc_row wpb_row vc_row-fluid about-section2 vc_custom_1474629663044 vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner vc_custom_1474629531765">
                                <img src="/site/system/ss.jpg">
                            </div>
                        </div>
                        <div class="title-h3 r-padding wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner vc_custom_1475647479713">
                                <div class="wpb_wrapper">
                                    <h5 style="color: #0b5a7e;text-align: left; margin: 0; font-size: 18px" class="vc_custom_heading vc_custom_1474622035511" >
                                        {{App::isLocale('vi') ? 'Chiến lược' : 'Strategy'}}
                                    </h5>
                                    <h3 style="text-align: left; margin-bottom: 10px" class="vc_custom_heading title-h3"></h3>
                                    <div class="wpb_text_column wpb_content_element " style="margin: 0">
                                        <div class="wpb_wrapper">
                                            <p>
                                                {{App::isLocale('vi') ? 'Năng lượng tái tạo và năng lượng mới là định hướng tương lai và là xu thế không
                                                thể chối cãi của ngành năng lượng nói chung. RT Energy gắn tương lai của
                                                mình với tiến trình thúc đẩy và phát triển năng lượng tái tạo – hướng tới một thế giới xanh, sạch, và bền vững cho các thế hệ tương lai.'
                                                : 'Renewable energy and new energy are the future-oriented and indisputable trend of the energy industry in general. RT Energy ties its future to the promotion and development of renewable energy – towards a green, clean, and sustainable world for future generations.'}}

                                            </p>
                                            <p> {{App::isLocale('vi') ? 'Hiện thực hóa chiến lược đó, chúng tôi nhắm tới những mục tiêu sau đây:' : 'Realizing that strategy, we aim at the following goals:'}}
                                                </p>

                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1476849394153">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper"><h5 style="color: #0b5a7e;text-align: left"
                                                                             class="vc_custom_heading"></h5>
                                                    <ul class='dt-sc-fancy-list   tick'>
                                                        <li>  {{App::isLocale('vi') ? 'Phát triển, đầu tư xây dựng, và vận hành các dự án năng lượng tái tạo': 'Develop, and invest in the construction and operation of renewable energy projects
                                                                    '}}</li>
                                                        <li> {{App::isLocale('vi') ? 'Tăng quy mô danh mục dự án năng lượng tái tạo đầu tư từ 100MW năm 2021 lên 500MW trong năm 2023. Hướng tới danh mục đầu tư với quy mô 1GW năng lượng tái tạo trước hoặc trong năm 2025': 'Increase investment scale in renewable energy projects from 100MW in 2021 to 500MW in 2023. Towards an investment portfolio with 1GW of renewable energy before or in 2025 '}}</li>

                                                        <li> {{App::isLocale('vi') ? 'Nghiên cứu, ứng dụng và đầu tư vào các dự án sử dụng công nghệ mới như Năng lượng tái tạo kết hợp pin lưu trữ/ kết hợp sản xuất hydrogen, …. khi các công nghệ đó khả thi về mặt tài chính và chính sách': '
                                                                    Research, apply, and invest in projects using new technologies such as Renewable Energy combined with battery storage / combined hydrogen production, .... when such technologies are financially and policy feasible'}}</li>
                                                        <li>{{App::isLocale('vi') ? 'Phát triển, đầu tư xây dựng và vận hành các dự án khu công nghiệp xanh – trong đó toán bộ nguồn điện sử dụng cho sản xuất công nghiệp là năng lượng tái tạo.': '
                                                                   Develop, invest in the construction and operation of green industrial zone projects – in which all electricity used for industrial production is renewable energy'}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>



{{--                                        <div class="wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                            <div class="vc_column-inner ">--}}
{{--                                                <div class="wpb_wrapper"><h5 style="color: #0b5a7e;text-align: left"--}}
{{--                                                                             class="vc_custom_heading"></h5>--}}
{{--                                                    <ul class='dt-sc-fancy-list   tick'>--}}
{{--                                                        <li>--}}
{{--                                                            <div id="list-icon-wrap-2518" class="uavc-list-content">--}}
{{--                                                                <div class="uavc-list-icon " data-animation=""--}}
{{--                                                                     data-animation-delay="03"> {{App::isLocale('vi') ? 'Nghiên cứu, ứng dụng và đầu tư vào các dự án sử dụng công nghệ mới như Năng lượng tái tạo kết hợp pin lưu trữ/ kết hợp sản xuất hydrogen, …. khi các công nghệ đó khả thi về mặt tài chính và chính sách': '   Fringilla mauris sit--}}
{{--                                                                    amet'}}--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="wpb_column vc_column_container vc_col-sm-4">--}}
{{--                                            <div class="vc_column-inner ">--}}
{{--                                                <div class="wpb_wrapper"><h5 style="color: #0b5a7e;text-align: left"--}}
{{--                                                                             class="vc_custom_heading">--}}
{{--                                                        </h5>--}}
{{--                                                    <ul class='dt-sc-fancy-list   tick'>--}}
{{--                                                        <li>--}}
{{--                                                            <div id="list-icon-wrap-2518" class="uavc-list-content">--}}
{{--                                                                <div class="uavc-list-icon " data-animation=""--}}
{{--                                                                     data-animation-delay="03"> {{App::isLocale('vi') ? 'Phát triển, đầu tư xây dựng và vận hành các dự án khu công nghiệp xanh – trong đó toán bộ nguồn điện sử dụng cho sản xuất công nghiệp là năng lượng tái tạo.': '   Fringilla mauris sit--}}
{{--                                                                    amet'}}--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}

{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br/>
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
