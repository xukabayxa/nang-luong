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
        <div class="uk-section">
            <div class="uk-position-relative uk-background-image uk-light">
                <div class="uk-position-cover">
                    <div class="uk-cover-container">
                        <img data-src="https://media.agpgroup.com/uploads/2022/03/ASE-EAL-Header-Image.png"
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
                                AMPYR Solar Europe signs deal with Edinburgh Airport to develop solar farm, battery and
                                electric vehicle infrastructure </h1>
                            <div class="uk-flex uk-flex-middle uk-margin-top">
                                <a href="#article-content" uk-scroll>
                                    <span class="uk-icon uk-preserve uk-margin-xxsmall-right"
                                          uk-icon="icon: arrow-in-circle; ratio: 1;"></span>
                                    <span class="uk-style-secondary uk-text-13">read article</span>
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
                <p><strong>AMPYR Solar Europe (ASE)</strong>, a pan-European solar developer, and Edinburgh Airport
                    Limited today announce the signing of a deal to develop a new solar farm linked with battery
                    technology and electric vehicle charging infrastructure at Scotland’s busiest airport.</p>
                <p>Under the agreement, ASE along with its local construction partner, Absolute Solar &amp; Wind will
                    build approximately 9MW of solar PV, 1.5MW of battery storage and 40 EV charging points. The large
                    ground-mounted solar PV system and battery will be situated next to the runway on a 16-acre plot of
                    land, connected to the airport via a high voltage private wire network.</p>
                <p>The development will be a cornerstone of Edinburgh Airport’s goal to achieve Net-Zero by 2040 by
                    generating clean, renewable energy that will cover about 30% of the airport’s total consumption.</p>
                <p>“Our commitment to a net zero future is underpinned by the various strands of work we have going on
                    across the airport as part of our Greater Good sustainability strategy and one of the most visible
                    projects will be this solar farm,” said <strong>Gordon Dewar, Edinburgh Airport’s Chief
                        Executive</strong>. “We are happy to confirm our partners in this exciting step and our
                    collaboration will enable us to implement this technology and allow us and Scotland to benefit from
                    it as soon as possible.”</p>
                <p>The project is in the late stage of design, with construction planned to start this summer and be
                    fully operational by the start of next year.</p>
                <p>“We are really pleased to be partnering with Edinburgh Airport on this important step towards a
                    net-zero future and in support of its impressive “Greater Good” sustainability strategy,” said
                    <strong>Andrew Gould, Executive Chairman of ASE</strong>. “Edinburgh Airport’s leadership shows a
                    way forward to zero carbon for the airport sector. This is the first of ASE’s five renewable energy
                    projects in Scotland to reach the delivery stage: the commitment and support of the Scottish
                    Government and its strong policy position on climate change is clearly attractive to international
                    investment.”</p>
                <p>Edinburgh Airport will purchase the power produced by the solar farm through a long-term Power
                    Purchase Agreement with ASE. This PPA will generate long-term energy and carbon savings for the
                    airport.</p>
                <p>“We are delighted to suppor Edinburgh Airport with its ongoing drive to reduce its carbon impact,”
                    said <strong>Matthew van Staden, Senior PPA Originator at Hartree Partners</strong>. “Through our
                    expertise within Hartree and AMPYR Solar Europe, we can drive and deliver innovative energy
                    solutions for companies within energy-intensive sectors. Our understanding of sustainable generation
                    and commercially viable strategies in this space helped bring this project to life for Edinburgh
                    Airport.”</p>
                <p>The construction is further supported by the Scottish Government’s Low Carbon Infrastructure
                    Transition Programme, which have provided a grant for a portion of the capital expenditure.</p>
                <p>“We are proud to be delivering this pioneering project and helping to decarbonise Edinburgh Airport
                    alongside our funding partners ASE and the Edinburgh Airport project team,” said <strong>Tom Newall,
                        Managing Director at Absolute Solar &amp; Wind</strong>. “The co-location of utility scale
                    battery storage and solar PV has enabled us to maximise the green energy generation on site whilst
                    working with the grid connection constraints. We look forward to entering the construction phase
                    before progressing to carry out the operation, maintenance and optimisation of the system, as it
                    generates clean power for years to come, providing energy security for a major, Scottish transport
                    hub.”</p>
                <p><strong>About EAL</strong></p>
                <p>Edinburgh Airport is Scotland’s busiest airport, welcoming more than 14.7 million people through the
                    doors in 2019. It is also the 6th busiest airport in the UK. As the place where Scotland meets the
                    World, we fly to more than 150 destinations and work with 40 airlines to welcome people to Scotland
                    and take Scotland to the world. Edinburgh Airport is owned by Global Infrastructure Partners (GIP),
                    a leading global, independent infrastructure investor. <em><b>https://corporate.edinburghairport.com/</b></em>
                </p>
                <p><strong>About AMPYR Solar Europe</strong></p>
                <p>Headquartered in London and Maastricht, AMPYR Solar Europe (“ASE”) was created through the merger of
                    NaGa Solar with the existing Ampyr Energy UK solar joint venture between AGP and Hartree Partners,
                    to create a major European Solar Enterprise with a combined pipeline of over 5GW of large-scale
                    solar projects in the UK, Germany and the Netherlands. ASE brings together AGP’s experience in
                    developing large-scale renewable power projects, Hartree’s cutting edge power trading analytics and
                    zero-carbon solutions with NaGa’s in-depth local knowledge and land development capability.
                    Combining these complementary skills will speed up the build out of solar capacity and offers an
                    attractive opportunity for institutional investors to deploy capital. <a
                        href="http://www.ampyrenergy.com/global-reach-europe/"><em><b>https://www.ampyrenergy.com/global-reach-europe/</b></em></a>
                </p>
                <p><strong>About Hartree Partners</strong></p>
                <p>Hartree Partners is a global energy and commodities trading company, with decades of experience in
                    the physical and financial energy and commodities markets. Hartree is at the forefront of finding
                    investment solutions, consulting, and generating sustainable and commercially viable strategies for
                    energy renewal and regeneration. The company has an extensive portfolio including midstream natural
                    gas, oil assets, power generation, renewables, and environmental products. Hartree’s rigorous
                    research, analytical approach, and entrepreneurial culture have contributed to its strong track
                    record and growth. <a href="http://www.hartreepartners.com/"><em><b>www.hartreepartners.com</b></em></a>
                </p>
                <p><strong>About Absolute Solar &amp; Wind</strong></p>
                <p>Absolute Solar and Wind is a leading renewable energy solutions specialist providing design,
                    installation and maintenance services for commercial, industrial and utility energy projects,
                    primarily in the solar sector. Established in 2007, the business is headquartered in Loch Lomond,
                    Scotland, but serves customers and projects throughout the UK. Absolute focuses on integrating
                    commercial scale renewable generators to supply on site loads for high energy users. This involves
                    working on sensitive and secure live sites with complex grid connection or private wire
                    arrangements. <a href="http://www.absolutesolarandwind.co.uk/"><em><b>https://www.absolutesolarandwind.co.uk/</b></em></a>
                </p>
                <p><strong>About LCITP funding</strong></p>
                <p>The project benefits from receiving a grant from the Low Carbon Infrastructure Transition Programme
                    (LCITP) that supports Scotland’s transition to a low-carbon economy. The programme endeavours to
                    create the conditions that attract commercial investment in innovative low-carbon infrastructure
                    projects. It also aims to contribute towards reducing Scotland’s greenhouse gas emissions. <a
                        href="http://www.gov.scot/policies/renewable-and-low-carbon-energy/low-c"><em><b>https://www.gov.scot/policies/renewable-and-low-carbon-energy/low-c</b></em></a>
                    <em><b>arbon-infrastructure-transition-programme/</b></em></p>
                <p>&nbsp;</p>
                <a class="uk-button uk-color-teal uk-style-secondary-b "
                   href="https://www.agpgroup.com/app/uploads/2022/03/ASE-EAL-Press-Release.pdf">
                    <span class="uk-color-teal uk-text-middle uk-margin-right">Download press release</span>
                    <span class="uk-icon uk-preserve uk-oval-button uk-position-center-right uk-oval-teal"
                          uk-icon="icon: button-circle; ratio: 1"></span>
                </a>

            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container uk-margin-medium">
                <div class="uk-border-gray"></div>
            </div>
            <div class="uk-position-relative uk-container uk-container-large ">
                <div class="uk-flex uk-flex-middle uk-text-left uk-margin-medium-bottom">
                    <div class="uk-style-secondary-m uk-text-11 ">
                        related articles
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
                                <img data-src="https://media.agpgroup.com/uploads/2022/03/SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale.option=fill&cw=1024&ch=384&cx=center&cy=center"
                                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                                     class=" Sirv uk-utility-object-fit-cover "
                                     alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                                     title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/></div>
                            <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-padding-xsmall-top">
                                <div>22.03.22</div>
                                <div></div>
                            </div>
                            <h4 class="uk-style-primary-l uk-text-8 uk-text-lh-3 uk-margin-small-bottom uk-padding-medium-right">
                                AGP Sustainable Real Assets and Hartree Partners Announce US Expansion of Global Solar
                                Partnership </h4>
                            <a class="uk-button uk-color-teal uk-style-secondary-b "
                               href="https://www.agpgroup.com/insights/agp-sustainable-real-assets-and-hartree-partners-announce-us-expansion-of-global-solar-partnership/">
                                <span class="uk-color-teal uk-text-middle uk-margin-right">Read Article</span>
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

