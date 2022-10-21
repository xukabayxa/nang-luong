<?php

Route::group(['namespace' => 'Front', 'middleware' => 'locale'], function () {
    Route::get('/gio-hang','CartController@index')->name('cart');
    Route::post('/{productId}/add-product-to-cart','CartController@addItem')->name('cart.add.item');
    Route::get('/remove-product-to-cart','CartController@removeItem')->name('cart.remove.item');
    Route::get('/update-cart','CartController@updateItem')->name('cart.update.item');
    Route::get('/thanh-toan','CartController@checkout')->name('cart.get.checkout');
    Route::post('/checkout','CartController@checkoutSubmit')->name('cart.post.checkout');
    Route::get('/dat-hang-thanh-cong/{orderCode}','CartController@checkoutSuccess')->name('cart.checkout.success');
    Route::post('/{productId}/add-to-wishlist','CartController@addToWishList')->name('cart.add.wishlist');
    Route::get('/yeu-thich','CartController@wishList')->name('cart.wishlist');

    Route::get('/','FrontController@index')->name('front.home_page');
    Route::get('/shop/{categorySlug?}','FrontController@getCategory')->name('front.category_product');
    Route::get('/load-more-products','FrontController@loadMoreProduct')->name('front.loadmore.products');
    Route::get('/product/{id}/getData','FrontController@getDataProduct')->name('front.product.getData');
    Route::get('/san-pham/{slug}','FrontController@detailProduct')->name('front.product.detail');
//    Route::get('/tin-tuc/{slug?}/{postSlug?}','FrontController@getPostCategory')->name('front.news');
    Route::get('/bai-viet/{slug}','FrontController@getPostCategory')->name('front.news.detail');


    Route::get('/contact','FrontController@contact')->name('front.contact');
    Route::post('/send-contact','FrontController@sendContact')->name('send.contact');
    Route::get('/tim-kiem','FrontController@search')->name('front.search');
    Route::get('/suggest-result-search','FrontController@getSuggestSearchResult')->name('front.get.suggest.search');

    Route::get('/about/1','FrontController@introduction')->name('front.about');
    Route::get('/about/2','FrontController@introduction2')->name('front.about2');
    Route::get('/about/3','FrontController@introduction3')->name('front.about3');
    Route::get('/about/4','FrontController@introduction4')->name('front.about4');

    Route::get('/investments/1','FrontController@investments1')->name('front.investments1');
    Route::get('/investments/2','FrontController@investments2')->name('front.investments2');
    Route::get('/investments/3','FrontController@investments3')->name('front.investments3');

    Route::get('/global-reach','FrontController@globalReach')->name('front.globalReach');
    Route::get('/insights','FrontController@insights')->name('front.insights');
    Route::get('/cookie-policy','FrontController@policy')->name('front.policy');
    Route::get('/tin-tuc/{slug}','FrontController@post')->name('front.post');

    Route::get('change-language/{language}', 'FrontController@changeLanguage')->name('front.change-language');
    Route::get('/load-more-post','FrontController@loadMorePost')->name('front.loadmore.post');


    Route::get('/reset','FrontController@reset');



});



