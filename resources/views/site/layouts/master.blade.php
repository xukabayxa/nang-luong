<!DOCTYPE html>
<html lang="vi-vn" xml:lang="vi-vn">
    <head>
        @include('site.partials.meta-seo')
        @include('site.partials.head')

        <script
            type='text/javascript'
            src='/site/js/jquery.min.js?ver=3.6.0'
            id='jquery-core-js'></script>
        @yield('css')
    </head>
    <body class="home page-template-default page page-id-6 preloading" ng-app="App">
        @include('site.partials.svg')
        <div class="uk-offcanvas-content">
            <div uk-sticky="animation: uk-animation-slide-top;">
                <div class="uk-background-transparent uk-border-navbar uk-light uk-position-absolute uk-width-1-1">
                    @include('site.partials.header')
                </div>
            </div>
            @yield('content')
            @include('site.partials.footer')
        </div>
        <script type="text/javascript" src="/site/js/jquery-3.4.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="/site/js/script.js" defer="defer" type="text/javascript"></script>
        <script src="/site/js/menu-header.js" defer="defer" type="text/javascript"></script>
        <script>
            jQuery(document).ajaxComplete(function () {
                if (arguments[1].responseText && arguments[1].responseText.match(/class *= *"[^"]*Sirv/gm)) {
                    setTimeout(function () {
                        Sirv.start();
                    }, 100);
                }
            });

            jQuery(document).ready(function () {
                let count = 0;
                let timerId = setInterval(fixLinks, 200);

                function fixLinks() {
                    let $images = jQuery('.svi-img');
                    count++;

                    if ($images.length > 0) {
                        jQuery.each($images, function (indexInArray, val) {
                            jQuery(val).attr('src', val.src.replace(/amp;/g, ''));
                        });
                        clearInterval(timerId);
                    } else {
                        if (count == 10)
                            clearInterval(timerId);
                        }

                }

                jQuery('.svi-img').on('click', function () {
                    jQuery('.preview-img-item').attr(
                        'src',
                        jQuery(this).attr('src').replace('amp;', '')
                    );
                });
            });
        </script>
        @yield('script_custom')
        <!-- Angular Js -->
        <script src="{{ asset('libs/angularjs/angular.js') }}"></script>
        <script src="{{ asset('libs/angularjs/angular-resource.js') }}"></script>
        <script src="{{ asset('libs/angularjs/sortable.js') }}"></script>
        <script src="{{ asset('libs/dnd/dnd.min.js') }}"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular-sanitize.js"></script>
        <script src="{{ asset('libs/angularjs/select.js') }}"></script>
        <script
            src="{{ asset('js/angular.js') }}?version={{ env('APP_VERSION', '1') }}"></script>

        <script
            src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
        <script
            src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>

        @stack('scripts')
        <script> new WOW().init(); </script>
        <script>
            $(".lang").on("click", function () {

                $(".choise-lang").toggle()

            });
        </script>
        <script>
            $(document).ready(function () {
                $('#delay_load, #footer, #lazy_load')
                    .delay(1000)
                    .fadeIn();
            });
        </script>
    </body>
</html>
