<?php

#Cms

Route::middleware(['cmsguard'])->group(function () {
    Route::prefix('cms')->group(function () {

        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
        Route::resource('users', 'Users');
        Route::resource('home-products', 'HomePageController');
        Route::get('orders', 'CmsController@orders');

    });
});

# Shop

Route::prefix('shop')->group(function () {

    Route::get('/', 'ShopController@categories');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('add-to-wishlist', 'ShopController@addToWishlist');
    Route::get('checkout', 'ShopController@checkout');
    Route::get('empty-cart', 'ShopController@emptyCart');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('remove-item', 'ShopController@removeItem');
    Route::get('order', 'ShopController@order');
    Route::get('search_item', 'ShopController@searchItemById');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@item');
});

# User
Route::middleware(['user'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('wishlist', 'UserProfileController@wishlist');
        Route::get('my-orders', 'UserProfileController@myOrders');
        Route::get('delwishlist', 'UserProfileController@deleteWishlist');
    });
});
Route::prefix('user')->group(function () {

    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('logout', 'UserController@logout');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');

});

#Pages
Route::get('search-product', 'ShopController@searchProduct');
Route::get('/', 'PagesController@home');
Route::get('{url}', 'PagesController@content');