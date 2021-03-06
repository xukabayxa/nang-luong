@extends('site.layouts.master')
@section('title')
    <title>{{ $product->name . " - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection

@section('title_seo', $product->title_seo ?? $product->name)
@section('content_seo', $product->content_seo ?? $product->name)
@section('link_seo', \Illuminate\Support\Facades\URL::current())
@section('image_seo', $product->image ? url($product->image->path ) : '')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
@endsection

@section('content')
{{--    <div id="fb-root"></div>--}}
{{--    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=514608355727133&autoLogAppEvents=1" nonce="vhGXjf4P"></script>--}}

<!-- breadcrumb-area start -->
@include('site.partials.bread_crumb', ['type' => 'product_detail','title' => $product->name ])
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb" ng-controller="ProductDetail">
    <div class="container">
        <div class="row  product-details-inner">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-large-slider">
                    <div class="pro-large-img img-zoom">
                        <img src="{{$product->image->path ?? '/site/image/no-image.png'}}" alt="{{$product->name}}" />
                        <a href="{{$product->image->path ?? '/site/image/no-image.png'}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                    </div>

                    @foreach($product->galleries as $gallery)
                    <div class="pro-large-img img-zoom">
                        <img src="{{$gallery->image->path ?? '/site/image/no-image.png'}}" alt="{{$product->name}}" />
                        <a href="{{$gallery->image->path ?? '/site/image/no-image.png'}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                    </div>
                    @endforeach

                </div>
                <div class="product-nav">
                    <div class="pro-nav-thumb">
                        <img src="{{$product->image->path ?? '/site/image/no-image.png'}}" alt="{{$product->name}}" />
                    </div>

                    @foreach($product->galleries as $gallery)
                    <div class="pro-nav-thumb">
                        <img src="{{$gallery->image->path ?? '/site/image/no-image.png'}}" alt="{{$product->name}}" />
                    </div>
                    @endforeach

                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h3>{{$product->name}}</h3>
                        <div class="product-rating d-flex">
                            <ul class="d-flex">
                                {{-- <li><a href="#" class="active"><i class="icon-star"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="icon-star"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="icon-star"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="icon-star"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="icon-star"></i></a></li>--}}
                            </ul>
                        </div>
                        <div class="price-box">
                            <span class="new-price">{{number_format($product->price)}} ??</span>
                            @if($product->base_price)
                            <span class="old-price">{{number_format($product->base_price)}} ??</span>
                            @endif
                        </div>
                        <p>{!! $product->short_des !!}</p>

                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity d-flex">
                                <div class="quantity">
                                    <div class="cart-plus-minus">
                                        <input type="number" class="input-text" name="quantity" ng-model="qty2" min="1" title="Qty">
                                    </div>
                                </div>
                                <button class="add-to-cart" type="button" ng-click="addToCart2()">Th??m v??o gi??? h??ng</button>
                            </form>
                        </div>
                        <ul class="single-add-actions">
                        </ul>
                        <ul class="stock-cont">
                            <li class="product-stock-status">Danh m???c: <a href="#">{{$product->category->name}}</a></li>
                            <?php
                            $tags = $product->tags->map(function ($tag) {
                               $tag->name = '<a href="'.route('front.search').'?keyword='.$tag->name.'">'.$tag->name.'</a>' ;
                               return $tag;
                            });
                            ?>
                            <li class="product-stock-status"><i class="fa fa-tags" aria-hidden="true"></i>
                                <a href="#">{!! $tags->implode('name', ', ') !!}</a></li>
                        </ul>
                        <div class="share-product-socail-area">
                            <p>Chia s???</p>
                            <ul class="single-product-share">
                                <li id="shareBtn"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-description-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul role="tablist" class="nav">
                            <li class="active" role="presentation">
                                <a data-toggle="tab" role="tab" href="#description" class="active">Th??ng tin s???n ph???m</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product_details_tab_content tab-content">
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                            <div class="product_description_wrap  mt-30">
                                <div class="product_desc mb-30">
                                    {!! $product->body !!}

                                    <?php
                                    $videos = $product->videos->map(function ($v) {
                                        $v->link = '<a href="'.$v->link.'">'.$v->link.'</a>';
                                        return $v;
                                    })

                                    ?>
                                    @if($videos->count()  > 0)
                                    <p>Link tham kh???o: {!! $videos->implode('link', ', ') !!}</p>
                                    <p>Video s???n ph???m: </p>
                                    @foreach($product->videos as $video)
                                            {!! $video->video.'<br/>' !!}
                                    @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>

        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>S???n ph???m li??n quan</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                @foreach($product_related as $p_re)
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    @include('site.partials.single_product', ['product' => $p_re])
                    <!-- single-product-area end -->
                </div>
                @endforeach
            </div>
        </div>


        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>??ang khuy???n m???i</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                @foreach($product_sell as $p_se)
                <div class="col-lg-12">
                    <!-- single-product-area start -->

                    @include('site.partials.single_product', ['product' => $p_se])

                    <!-- single-product-area end -->
                </div>
                @endforeach

            </div>
        </div>


    </div>


    <!-- Modal -->
    <div class="modal fade modal-wrapper" id="modalProductDetail2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area">
                        <div class="row product-details-inner">
                            <div class="col-lg-5 col-md-6 col-sm-6 product-images">

                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content">
                                    <div class="product-info">
                                        <h3>
                                            <% product.name %>
                                        </h3>
                                        <div class="price-box">
                                            <span class="new-price">
                                                <% product.price.toLocaleString('en')%>
                                            </span>
                                            <span class="old-price" ng-if="product.base_price">
                                                <% product.base_price.toLocaleString('en')%>
                                            </span>
                                        </div>

                                        <p ng-bind-html="product.short_des">
                                        </p>

                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity d-flex">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="number" class="input-text" name="quantity" value="1" title="Qty" min="1" ng-model="qty">
                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="button" ng-click="addToCart()">Th??m v??o gi??? h??ng</button>
                                            </form>
                                        </div>
                                        <ul class="single-add-actions">
                                        </ul>
                                        <ul class="stock-cont">
                                            <li class="product-stock-status">Danh m???c: <a href="#">
                                                    <% product.category.name %>
                                                </a></li>
                                            <li class="product-stock-status"><i class="fa fa-tags" aria-hidden="true"></i>
                                                <span ng-bind-html="trustAsHtml(product.tags_str)"></span>
                                            </li>
                                        </ul>
                                        <div class="share-product-socail-area">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('site.partials.product_detail_modal_2')

</div>
<!-- main-content-wrap end -->

@endsection
@push('scripts')
<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
{{--<script type="text/javascript" src="https://connect.facebook.net/en_US/sdk.js"></script>--}}

<script>
    document.getElementById('shareBtn').onclick = function() {
        FB.ui({
            method: 'share',
            href: "{{route('front.product.detail', $product->slug)}}",
        }, function(response){});
    }
    function share() {


        {{--FB.ui({--}}
        {{--    method: 'share_open_graph',--}}
        {{--    action_type: 'og.shares',--}}
        {{--    display: 'popup',--}}
        {{--    action_properties: JSON.stringify({--}}
        {{--        object: {--}}
        {{--            'og:url': "{{route('front.product.detail', $product->slug)}}",--}}
        {{--            'og:title': 'Title to show',--}}
        {{--            'og:description': 'The description',--}}
        {{--            'og:image': 'https://path-to-image.png'--}}
        {{--        }--}}
        {{--    })--}}
        {{--}, function(response) {--}}
        {{--    // Action after response--}}
        {{--});--}}

    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '514608355727133',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    app.controller('ProductDetail', function ($rootScope, $scope, $interval, cartItemSync) {
            $scope.qty = 1;
            $scope.qty2 = 1;

            // modal detail product
            $scope.showModalDetail = function (product_id) {
                url = "{{route('front.product.getData', ['id' => 'product_id'])}}";
                url = url.replace('product_id', product_id);
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function(response) {
                        if (response.success) {
                            $scope.product = response.data;
                            $("div.product-images").html(response.html);
                        }

                        $('.product-large-slider-2').slick({
                            fade: true,
                            arrows: false,
                            asNavFor: '.product-nav'
                        });

                        $('.product-nav-2').slick({
                            slidesToShow: 4,
                            asNavFor: '.product-large-slider',
                            centerMode: true,
                            centerPadding: 0,
                            focusOnSelect: true,
                            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                            responsive: [{
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 3,
                                }
                            }]
                        });
                    },
                    error: function(e) {
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });

                $("#modalProductDetail2").modal('show');
            }
            // end

            // ?????t mua h??ng
            @include('site.partials.cart.add_to_cart');

            // ?????t mua h??ng
            $scope.addToCart2 = function () {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', {{$product->id}});

                $.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        'qty': parseInt($scope.qty2)
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.options = {
                                timeOut : 1000,
                                extendedTimeOut : 1000,
                                tapToDismiss : true,
                                debug : false,
                                fadeOut: 10,
                                positionClass : "toast-top-center"
                            };
                           // toastr.success('Th??m v??o gi??? h??ng th??nh c??ng !');

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function(){
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            window.location.href = "{{ route('cart.get.checkout') }}";


                        }
                    },
                    error: function() {
                        $.toast('L???i')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }
        })

</script>
@endpush
