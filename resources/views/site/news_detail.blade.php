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

    <!-- <span></span> -->
    <section id="sozo-main">
        <div class="uk-section" style="padding: 0">
            <div class="uk-position-relative uk-background-image uk-light">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <img data-src="/site/system/inves/i_1.jpg"
                             data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                             class=" Sirv uk-utility-object-fit-cover " alt="ASE-EAL-Header-Image"
                             title="ASE-EAL-Header-Image"/>
                        <canvas width="1600" height="614"></canvas>
                    </div>
                </div>
                <div class="uk-background-gradient-h uk-position-cover"></div>
                <div class="uk-position-relative uk-container uk-container-article uk-section uk-section-large"
                     uk-scrollspy="target: .uk-animation-parent; cls: uk-animation-fade; delay: 250; repeat: true;">
                    <div uk-grid class="uk-grid uk-grid-large uk-child-width-expand@m uk-flex-middle uk-wysiwyg-default"
                         uk-scrollspy="target: .uk-animation-item; cls: uk-animation-slide-bottom-small; delay: 250; repeat: true;">
                        <div class="uk-animation-parent">
                            <h6 class="uk-animation-item uk-style-secondary-m uk-text-13 uk-lh-17 uk-margin-medium-bottom">
                                <span class="read-timer" id="read-timer"></span>
                            </h6>

                            <h1 class="uk-animation-item uk-style-primary-m uk-text-4 uk-text-lh-4 uk-width-2xmedium">
                                Dự án điện gió Adani Phước Minh </h1>
                            <div class="uk-flex uk-flex-middle uk-margin-top">
                                <a href="#article-content" uk-scroll>
                                    <span class="uk-icon uk-preserve uk-margin-xxsmall-right"
                                          uk-icon="icon: arrow-in-circle; ratio: 1;"></span>
                                    <span class="uk-style-secondary uk-text-13"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-container uk-container-article uk-section" id="article-content">
            <div class="uk-margin-top uk-wysiwyg-default uk-style-primary-l uk-text-9 uk-text-lh-2 read-area"
                 id="read-area">


                {{App::isLocale('vi') ? 'Các dự án lỡ hẹn hưởng giá FIT ưu đãi sẽ phải chuyển sang cơ chế đấu thầu và giá mua điện chỉ áp dụng tới hết năm 2025, theo đề xuất của Bộ Công Thương.

Với điện mặt trời, theo Quyết định 13/2020, dự án vận hành trước 31/12/2020 sẽ được hưởng giá FIT 7,09 cent một kWh (tương đương 1.644 đồng một kWh) với dự án điện mặt trời mặt đất. Giá với điện mặt trời nổi là 7,69 cent một kWh (khoảng 1.783 đồng một kWh) và điện mặt trời mái nhà 8,38 cent một kWh, tức 1.943 đồng mỗi kWh.

Còn dự án điện gió vận hành thương mại trước 1/11/2021, theo Quyết định 39/2018 là 9,8 cent một kWh (2.223 đồng một kWh) với dự án trên biển; dự án trên bờ là 8,5 cent (1.927 đồng) một kWh.

Đến nay, hàng loạt dự án không kịp vận hành để hưởng các ưu đãi trên. Với xu thế các nước chuyển đổi từ cơ chế giá FIT ưu đãi sang đấu thầu dự án năng lượng tái tạo theo yêu cầu của hệ thống điện, Bộ Công Thương vừa đề xuất Chính phủ chuyển sang cơ chế đấu thầu mua giá điện.

EVN sẽ là đơn vị đấu thầu, dự kiến thực hiện trong năm 2022. Giá mua điện sau đấu thầu sẽ áp dụng trong 3 năm (đến 2025). Sau thời gian này, các dự án điện gió, điện mặt trời sẽ phải đấu thầu tiếp theo quy định do Chính phủ, Bộ Công Thương ban hành.

Đồng tiền tính giá là VND (đồng/kWh) và không điều chỉnh biến động theo tỷ giá VND/USD.

Nhà máy điện sẽ được huy động theo yêu cầu của hệ thống điện, tuân thủ quy định về quy trình điều độ hệ thống điện quốc gia và các quy định khác liên quan; đảm bảo an ninh hệ thống điện.

Các dự án điện gió, điện mặt trời chuyển tiếp được quyền lựa chọn tham gia thị trường điện cạnh tranh. Trường hợp tham gia, nhà máy có trách nhiệm thực hiện quyền, nghĩa vụ của đơn vị phát điện theo quy định thị trường điện.

Bộ Công Thương đề nghị Chính phủ cho phép xây dựng quy định này theo trình tự, thủ tục rút gọn của Luật ban hành Văn bản pháp luật. Quyết định dự kiến trình Thủ tướng trong tháng 5. Bộ này sẽ xây dựng, ban hành Thông tư về khung giá điện áp dụng cho các dự án chuyển tiếp, có hiệu lực đồng thời với quyết định của Thủ tướng.' : 'Under the agreement, ASE along with its local construction partner, Absolute Solar &amp; Wind will
                    build approximately 9MW of solar PV, 1.5MW of battery storage and 40 EV charging points. The large
                    ground-mounted solar PV system and battery will be situated next to the runway on a 16-acre plot of
                    land, connected to the airport via a high voltage private wire network.'
}}



            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container uk-margin-medium">
                <div class="uk-border-gray"></div>
            </div>
            <div class="uk-position-relative uk-container uk-container-large ">
                <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
                    <div class="uk-style-secondary-m uk-text-11 ">
                      {{App::isLocale('vi') ? 'Dự án khác' : 'Other Projects'}}
                    </div>
                    <div class="uk-style-line orange"></div>
                </div>

                <div uk-grid
                     class="uk-grid-large uk-grid-match ajax-results uk-grid uk-child-width-1-3@l uk-child-width-1-2@m"
                     uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 320;">
                    <div class="uk-feat-article">
                        <div>
                            <div class="uk-cover-container uk-margin-small-bottom">
                                <canvas width="460" height="370"></canvas>
                                <img data-src="/site/system/slide/s4.jpg"
                                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                     class=" Sirv uk-utility-object-fit-cover "
                                     alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                     title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/></div>
                            <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                                <div>22.03.22</div>
                                <div></div>
                            </div>
                            <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                                CỤM DỰ ÁN ĐIỆN MẶT TRỜI ÁP MÁI – TỈNH BÌNH PHƯỚC </h4>
                            <a class="uk-button uk-color-teal uk-style-secondary-b "
                               href="">
                                <span class="uk-color-teal uk-text-middle uk-margin-right"> {{App::isLocale('vi') ? 'Chi tiết' : 'Detail'}}</span>
                                <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-teal"
                                      uk-icon="icon: button-circle; ratio: 1"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

