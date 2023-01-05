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
                    <h1 class="header">{{App::isLocale('vi') ? 'Về chúng tôi' : 'About Us'}}</h1>
                </div>
                @include('site.partials.bread_crumb2', ['vi' => 'Đội ngũ', 'en' => 'Our Team'])

            </div>
        </header>

        <section class="teacher-details">
            <div class="container">
                @if($regents->count())
                    @foreach($regents as $regent)
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
                                            <img src="{{$regent->image->path ?? ''}}" width="373" height="503" alt="teacher">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 teachers-col">
                                <div class="teacher-details-content mt-45">
                                    <h4 class="teacher-name">{{App::isLocale('vi') ? 'Ông ' .$regent->regentVi->full_name : 'Mr. '. $regent->regentEn->full_name ?? ''}}</h4>
                                    <span class="designation">{{App::isLocale('vi') ? $regent->regentVi->role: ($regent->regentEn->role ?? '')}}</span>
                                    <p>
                                        @if(App::isLocale('vi'))
                                            {!! $regent->regentVi->description !!}
                                        @else
                                            {!! $regent->regentEn->description ?? '' !!}
                                        @endif

                                    </p>
                                    <ul class="teacher-contact">
                                        @if(App::isLocale('vi'))
                                            @if($regent->regentVi->experience->count())
                                                @foreach($regent->regentVi->experience as $e)
                                                    <li>{{$e->content}}</li>
                                                @endforeach
                                            @endif
                                        @else
                                            @if($regent->regentEn->experience->count())
                                                @foreach($regent->regentEn->experience as $e)
                                                    <li>{{$e->content}}</li>
                                                @endforeach
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
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
                                <h4 class="teacher-name">{{App::isLocale('vi') ? 'Ông Saumya Swain' : 'Mr. Saumya Swain'}}</h4>
                                <span class="designation">{{App::isLocale('vi') ? 'Nhà đồng sáng lập và Chủ tịch RT Energy' : 'Co-Founder and Chairman of RT Energy'}}</span>
                                <p class="des-agent">
                                    @if(App::isLocale('vi'))
                                        Trong gần 20 năm làm việc, ông Saumya Swain đã đảm nhận nhiều
                                        vị trí quan trọng về quản lý kinh doanh tại các công ty về
                                        bất động sản và công nghệ tại Hàn Quốc và nhiều nước trên
                                        thế giới. Đặc biệt, với hơn 10 năm kinh nghiệm trong lĩnh
                                        vực năng lượng tái tạo, ông có đóng góp lớn trong việc phát
                                        triển Equis Energy- công ty sản xuất năng lượng tái tạo lớn
                                        nhất tại khu vực Châu Á - Thái Bình Dương với hơn 180 chi
                                        nhánh trong lĩnh vực năng lượng mặt trời, gió và phát điện
                                        hydro rộng khắp các quốc gia như Úc, Nhật, Ấn Độ và
                                        Philippines…
                                    @else

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
                                    @endif
                                </p>
                                <ul class="teacher-contact des-agent" >
                                    @if(App::isLocale('vi'))
                                        <li><strong>6/2020 đến nay: Sáng lập và điều hành RT Energy PTE LTD-Singapore</strong></li>
                                        <li><strong>8/2019-5/2020: Cổ đông sáng lập, cố vấn cấp cao Indefol Solar</strong></li>
                                        <li><strong>12/2012-12/2020: Giám đốc khu vực, Equis Energy</strong></li>
                                    @else
                                        <li><strong>6/2020 to present: </strong> <span>Founding and operating RT Energy PTE LTD-Singapore</span></li>
                                        <li><strong>8/2019-5/2020: </strong> <span>Founding shareholder, senior advisor Indefol Solar</span></li>
                                        <li><strong>12/2012-12/2020: </strong> <span>Regional Manager, Equis Energy</span></li>
                                    @endif

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
                                <h4 class="teacher-name">{{App::isLocale('vi') ? 'Ông Tạ Anh Tuấn' : 'Mr. Ta Anh Tuan'}}</h4>
                                <span class="designation">{{App::isLocale('vi') ? 'Tổng Giám đốc RT Energy' : 'General Director of RT Energy'}}</span>
                                <p class="des-agent">
                                    @if(App::isLocale('vi'))
                                        Tốt nghiệp Cao học Quản trị kinh doanh tại Trường kinh doanh
                                        Melbourne – trường đại học số 1 Châu Úc, ông Tạ Anh Tuấn đã
                                        trải qua nhiều vị trí lãnh đạo quản lý tại các tập đoàn,
                                        tổng công ty lớn trước khi gắn bó với lĩnh vực năng lượng
                                        tái tạo. Với mong muốn phát triển năng lượng sạch vì môi
                                        trường xanh và phát triển bền vững, ông luôn tiên phong
                                        trong việc hiện đại hóa quy trình quản lý, đảm bảo mọi hoạt
                                        động của RT Energy theo các quy chuẩn quốc tế. Ông cũng đặt
                                        nhiều tâm huyết xây dựng RT Energy trở thành tập đoàn tiên
                                        phong trong lĩnh vực năng lượng tái tạo và khu công nghiệp
                                        xanh trong khu vực ASEAN và trên thế giới.
                                    @else
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
                                    @endif
                                </p>
                                <ul class="teacher-contact des-agent">
                                    @if(App::isLocale('vi'))
                                        <li><strong>Từ cuối năm 2021 đến nay: Tổng giám đốc, Adani Solar và
                                            Adani Wind Power Co.,Ltd
                                                </strong></li>
                                        <li><strong>1/2020 đến nay: Tổng Giám đốc, đồng sáng lập RT Energy
                                                </strong> </li>
                                        <li><strong>9/2018: Cố vấn trưởng phát triển năng lượng tái tại Tập
                                            đoàn thép Đại Dũng
                                                </strong></li>
                                        <li><strong>4/2015: Chủ tịch kiêm Tổng Giám đốc Công ty TNHH Đầu tư
                                            và phát triển Clavie
                                                </strong></li>
                                        <li><strong>10/2011-3/2013: Giám đốc đại lý miền Bắc Công ty TNHH
                                            Honda Việt Nam
                                                </strong></li>
                                        <li><strong>9/2010-9/2011: Giám đốc Nhà phân phối Công ty TNHH
                                            Unilever Việt Nam
                                                </strong> </li>
                                    @else
                                        <li><strong>From the end of 2021 to present:</strong> <span>General Director, Adani Solar and Adani Wind Power Co.,Ltd</span></li>
                                        <li><strong>January 2020 to present: </strong> <span>CEO, co-founder of RT Energy</span></li>
                                        <li><strong>September 2018: </strong> <span>Renewable energy consultant at Dai Dung Steel Corporation</span></li>
                                        <li><strong>April 2015: </strong> <span>Chairman and General Director of Clavie Investment and Development Co., Ltd</span></li>
                                        <li><strong>10/2011-3/2013: </strong> <span>Dealer director in the North of Honda Vietnam Co., Ltd</span></li>
                                        <li><strong>9/2010-9/2011: </strong> <span>Distributor Director of Unilever Vietnam Co., Ltd</span></li>
                                    @endif

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
                                <h4 class="teacher-name">{{App::isLocale('vi') ? 'Nguyễn Đức Dũng' : 'Mr. NGUYEN DUC DUNG'}}</h4>
                                <span class="designation">{{App::isLocale('vi') ? 'Phó Tổng giám đốc RT Energy' : 'Deputy General Director of RT Energy'}}</span>
                                <p class="des-agent">
                                    @if(App::isLocale('vi'))
                                        Ông Nguyễn Đức Dũng là doanh nhân dày dặn kinh nghiệm trong
                                        lĩnh vực tài chính và giáo dục, từng tham gia đầu tư, quản
                                        lý và phát triển nhiều công ty trong các lĩnh vực này, gần
                                        đây nhất là lĩnh vực năng lượng tái tạo.
                                        <br>
                                        Ông luôn tâm huyết với sứ mệnh thay đổi và phát triển những
                                        ngành nghề cũ với cách làm và công nghệ mới, với khát vọng
                                        đưa RT Energy trở thành một trong những tập đoàn hàng đầu
                                        trong lĩnh vực năng lượng tái tạo và khu công nghiệp xanh.
                                        Ngoài việc tham gia hoạt động đầu tư và quản lý tại các công
                                        ty, ông Nguyễn Đức Dũng còn là giảng viên cao cấp chuyên
                                        ngành Tài chính Quốc tế và Đầu tư Quốc tế của Khoa Kinh
                                        doanh Quốc tế - Học viện Ngân hàng.
                                        <br>
                                        Ông Nguyễn Đức Dũng nhận bằng Thạc sĩ Tài chính Đầu tư tại
                                        Đại học Monash, Úc. Trước đó, ông đã hoàn thành bằng Cử nhân
                                        Tài chính Ngân hàng với huy chương đồng về chất lượng học
                                        tập của trường Đại học London (Anh)
                                    @else
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
                                    @endif

                                </p>
                                <ul class="teacher-contact des-agent">
                                    @if(App::isLocale('vi'))
                                        <li><strong>1/2020 đến nay: Phó Tổng giám đốc RT Energy
                                                </strong> </li>
                                        <li><strong>1/2019 đến nay: Tổng giám đốc, Đồng sáng lập Novus
                                            Imperium Corporation
                                                </strong></li>
                                        <li><strong>09/2014-12/2020: Giám đốc Tài chính và Tiếp thị Công ty
                                            Cổ phần Dược phẩm Hà Nội
                                                </strong> </li>
                                        <li><strong>09/2014 đến nay: Giảng viên cao cấp Khoa Kinh doanh Quốc
                                            tế - Học viện Ngân hàng – Ngân hàng Nhà nước Việt Nam
                                                </strong></li>
                                        <li><strong>09/2011 đến nay: Đồng sáng lập CGD Victory Education
                                            Group

                                                </strong> </li>
                                        <li> <strong>11/2011-09/2014: Quản lý Đầu tư kinh doanh Lãi suất và
                                                </strong> Forex
                                        </li>
                                        <li><strong>2010-11/2011: Kiểm toán viên Ernst and Young Vietnam
                                                </strong></li>
                                    @else
                                        <li><strong>January 2020 to present: </strong> <span>Deputy General Director of RT</span>
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
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </section>

    </section>
@endsection
