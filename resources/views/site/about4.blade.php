@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('css')
    <link href="/css/about3-custom.css" rel="stylesheet">
    <link href="/css/custom-template.css" rel="stylesheet">
    <link href="/css/solar-skin.css" rel="stylesheet">
    <link href="/css/css-2.css" rel="stylesheet">
    <link href="/css/css-3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
@section('content')
    <style>
        h3 {
            font-size: 20px;
            color: #0F4C81;
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
                <div class="main-title-section"><h1>{{App::isLocale('vi') ? 'Đối tác chiến lược' : 'Strategic Partnership'}}</h1></div>
            </div>
        </section>

        <style>
            .mt-5 {
                margin-top: 3rem!important;
            }
            .block-title .block-title-large {
                color: #000;
                font-size: 24px;
                font-weight: 600;
            }
            .block-title .block-title-small {
                color: #777;
                font-size: 16px;
            }
            .mt-3 {
                margin-top: 1rem!important;
            }
            .mb-3 {
                margin-bottom: 1rem!important;
            }


        </style>

        <div class="container">
            <div class="block-title mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="block-title-large">Đối tác đầu tư</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-3" style="border-bottom: 1px solid #eeeef1">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/1.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/2.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/3.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/4.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/5.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/6.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/7.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/8.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/9.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/10.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/11.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/12.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/13.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/14.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
            </div>


            <div class="block-title mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="block-title-large">Nhà cung cấp</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-3" style="border-bottom: 1px solid #eeeef1">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/15.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/16.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/17.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/18.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/19.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/20.jpg" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/21.jpg" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/22.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/23.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/24.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/25.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/26.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/27.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
            </div>

            <div class="block-title mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="block-title-large">Nhà thầu</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/15.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/28.jpg" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/29.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/30.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div> <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                    <img src="/site/system/partner2/31.png" width="306" height="116" loading="lazy" class="box-shadow w-100" alt="Marubeni">
                </div>
            </div>
        </div>



    </section>

@endsection
@push('scripts')
    <script type='text/javascript' src='/site/js/solar.js'
            id='solar-controlpanel-js'></script>
    <script type='text/javascript' src='/site/js/solar-2.js' id='solar-jqcustom-js'></script>

@endpush
