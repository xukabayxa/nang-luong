@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>

@endsection
@section('content')
    <!-- <span></span> -->
    <div uk-sticky="animation: uk-animation-slide-top;">
        <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
            @include('site.partials.header')
        </div>
    </div>

    <section id="sozo-main" style="display: grid">
        <header class="lte-page-header lte-parallax-yes header-ourteam">
            <div class="container">
                <div class="lte-header-h1-wrapper">
                    <h1 class="header">About Us</h1>
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
                            <span property="name">Our Team</span>
                            <meta property="position" content="2">
                        </span>
                    </li>
                </ul>
            </div>
        </header>

        <section class="teacher-details">
            <div class="container">
                <div class="row teachers-row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-8 teachers-col">
                        <div class="single-teacher-details mt-50 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                    <a href="teacher-details.html">
                                    <img src="https://rtenergygroup.com/site/img/a3.jpg" width="373" height="503" alt="teacher">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 teachers-col">
                        <div class="teacher-details-content mt-45">
                            <h4 class="teacher-name">Mr. Saumya Swain</h4>
                            <span class="designation">Co-Founder and Chairman of RT Energy</span>
                            <p>
                                
                                During nearly 20 years of working, Mr. Saumya Swain has held
                                many important positions in business management at real
                                estate and technology companies in Korea and many countries
                                around the world. In particular, with more than 10 years of
                                experience in the field of renewable energy, he has made a
                                great contribution to the development of Equis Energy - the
                                largest renewable energy producer in the Asia-Pacific region
                                with more than 180 branches in the field of solar, wind and
                                hydrogen power generation across countries such as
                                Australia, Japan, India and the Philippines...
                            
                            </p>
                            <ul class="teacher-contact">
                                <li><strong>6/2020 to present: </strong> <span>Founding and operating RT Energy PTE LTD-Singapore</span></li>
                                <li><strong>8/2019-5/2020: </strong> <span>Founding shareholder, senior advisor Indefol Solar</span></li>
                                <li><strong>12/2012-12/2020: </strong> <span>Regional Manager, Equis Energy</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row teachers-row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-8 teachers-col">
                        <div class="single-teacher-details mt-50 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                    <a href="teacher-details.html">
                                    <img src="https://rtenergygroup.com/site/img/a2.png" width="373" height="503" alt="teacher">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 teachers-col">
                        <div class="teacher-details-content mt-45">
                            <h4 class="teacher-name">Mr. Ta Anh Tuan</h4>
                            <span class="designation">General Director of RT Energy</span>
                            <p>
                                Graduating with a Master of Business Administration from
                                Melbourne Business School - the number 1 university in
                                Australia, Mr. Ta Anh Tuan has experienced many leadership
                                and management positions at large corporations and
                                corporations before joining the company. renewable energy
                                sector. With the desire to develop clean energy for the
                                green environment and sustainable development, he has always
                                been a pioneer in modernizing the management process,
                                ensuring all activities of RT Energy in accordance with
                                international standards. He also put a lot of effort into
                                building RT Energy to become a pioneer in the field of
                                renewable energy and green industrial zones in the ASEAN
                                region and around the world.
                            </p>
                            <ul class="teacher-contact">
                                <li><strong>From the end of 2021 to present:</strong> <span>General Director, Adani Solar and Adani Wind Power Co.,Ltd</span></li>
                                <li><strong>January 2020 to present: </strong> <span>CEO, co-founder of RT Energy</span></li>
                                <li><strong>September 2018: </strong> <span>Renewable energy consultant at Dai Dung Steel Corporation</span></li>
                                <li><strong>April 2015: </strong> <span>Chairman and General Director of Clavie Investment and Development Co., Ltd</span></li>
                                <li><strong>10/2011-3/2013: </strong> <span>Dealer director in the North of Honda Vietnam Co., Ltd</span></li>
                                <li><strong>9/2010-9/2011: </strong> <span>Distributor Director of Unilever Vietnam Co., Ltd</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row teachers-row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-8 teachers-col">
                        <div class="single-teacher-details mt-50 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                    <a href="teacher-details.html">
                                    <img src="https://rtenergygroup.com/site/img/a1.jpg" width="373" height="503" alt="teacher">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 teachers-col">
                        <div class="teacher-details-content mt-45">
                            <h4 class="teacher-name">Mr. Nguyen Duc Dung</h4>
                            <span class="designation">Deputy General Director of RT Energy</span>
                            <p>
                                Mr. Nguyen Duc Dung is an experienced businessman in the
                                fields of finance and education, having participated in
                                investing, managing and developing many companies in these
                                fields, most recently in the field of renewable energy. .
                                He is always dedicated to the mission of changing and
                                developing old industries with new ways and technologies,
                                with the aspiration to turn RT Energy into one of the
                                leading corporations in the field of renewable energy and
                                industrial parks. green.
                                In addition to participating in investment and management
                                activities at companies, Mr. Nguyen Duc Dung is also a
                                senior lecturer majoring in International Finance and
                                International Investment of the Faculty of International
                                Business - Banking Academy.
                                <br>
                                Mr. Nguyen Duc Dung received a Master's degree in Investment
                                Finance from Monash University, Australia. Before that, he
                                completed a Bachelor of Banking and Finance with a bronze
                                medal for academic quality from University College London
                                (UK).
                            </p>
                            <ul class="teacher-contact">
                                <li><strong>January 2020 to present: </strong> <span>Deputy General Director of RT
                                    Energy
                                </li>
                                <li><strong>2019 to present: </strong> <span>Director, Co-Founder of Novus Imperium Corporation</span>
                                </li>
                                <li><strong>09/2014-12/2020: </strong><span>Finance and Marketing Director of Hanoi
                                    Pharmaceutical Joint Stock Company</span>
                                </li>
                                <li><strong>September 2014 to present: </strong><span>Senior Lecturer at Faculty of
                                    International Business - Banking Academy - State Bank of
                                    Vietnam</span>
                                </li>
                                <li><strong>September 2011 to present: </strong><span>Co-founder of CGD Victory
                                    Education Group</span>
                                </li>
                                <li><strong>11/2011-09/2014: </strong><span>Interest and Forex Business Investment
                                    Manager, Bank for Investment and Development of Vietnam</span>
                                </li>
                                <li><strong>2010-11/2011: </strong><span> Ernst and Young Vietnam</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

    </section>
@endsection
