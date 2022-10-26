<ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <li class="home">
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Home." href="{{route('front.home_page')}}"
                               class="home">
                                <span property="name">{{App::isLocale('vi') ? 'Trang chủ' : 'Home'}}</span>
                            </a>
                            <meta property="position" content="1">
                        </span>
    </li>
    <li class="post post-page current-item">
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">{{App::isLocale('vi') ? $vi : $en}}</span>
                            <meta property="position" content="2">
                        </span>
    </li>
</ul>
