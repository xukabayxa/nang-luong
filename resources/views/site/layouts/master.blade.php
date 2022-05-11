<!DOCTYPE html>
<html lang="vi-vn" xml:lang="vi-vn">
<head>
    @include('site.partials.meta-seo')
    @include('site.partials.head')
    <style>
        .loading {
            background: #000;
            opacity: 0.8;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            z-index: 9999999999999;
            display: block;
        }

        .loading .icon {
            background: url('/site/system/logo.png') no-repeat center center / 170px 170px;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            width: 170px;
            height: 170px;
            text-indent: -9999px;
        }
        .loading img {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            /*width: 200px;*/
            height: 6px;
            text-indent: -9999px;
        }
    </style>
</head>
<body class="home page-template-default page page-id-6 preloading" ng-app="App">

<div class="loader">
    <div class="loading"><i class="icon"></i>
        <img src="/site/system/loading_3.gif">
    </div>
</div>

@include('site.partials.svg')

<div class="uk-offcanvas-content">
    @yield('content')

    @include('site.partials.footer')
</div>

<script type="text/javascript" src="/site/js/jquery-3.4.1.min.js"></script>
<script src="/site/js/script.js" defer="defer" type="text/javascript"></script>
<script>
    /* This JavaScript is used for different helper functions, such as Sirv object updates with Ajax. */
    //
    // $(window).on('load', function(event) {
    //     $('body').removeClass('preloading');
    //     $('.loader').fadeOut('slow');
    // });

    $(document).ready(function() {
        $(".loader").fadeOut(function() {
            $(this).remove(); // Optional if it's going to only be used once.
        });
    });

    // jQuery(document).ready(function() {
    //     jQuery('#loading').fadeOut(3000);
    // });

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
                if (count == 10) clearInterval(timerId);
            }

        }

        jQuery('.svi-img').on('click', function () {
            jQuery('.preview-img-item').attr('src', jQuery(this).attr('src').replace('amp;', ''));
        });
    });
</script>
<!-- Angular Js -->
<script src="{{ asset('libs/angularjs/angular.js') }}"></script>
<script src="{{ asset('libs/angularjs/angular-resource.js') }}"></script>
<script src="{{ asset('libs/angularjs/sortable.js') }}"></script>
<script src="{{ asset('libs/dnd/dnd.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular-sanitize.js"></script>
<script src="{{ asset('libs/angularjs/select.js') }}"></script>
<script src="{{ asset('js/angular.js') }}?version={{ env('APP_VERSION', '1') }}"></script>

<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stack('scripts')

<script>
    $(".lang").on("click",function(){

        $(".choise-lang").toggle()

    });
</script>
</body>
</html>
