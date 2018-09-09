<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/layout', function () {
    return view('layout.client');
});

Route::get('/admin/', 'DashboardController@index');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/product', 'ProductController');
Route::get('/admin/order', 'OrderController@index');

Route::get('/', 'ClientPageController@showHome');
Route::get('/category', 'ClientPageController@showCategory');
Route::get('/product/{id}', 'ClientPageController@showProductDetail');

Route::get('/cart', 'ShoppingCartController@showCart');
Route::post('/api-them-gio-hang', 'ShoppingCartController@addToCartApi');
Route::get('/xoa-gio-hang', 'ShoppingCartController@destroyCart');
Route::post('/gui-don-hang', 'ShoppingCartController@checkoutCart');



Route::delete('admin/destroy-many/product', 'ProductController@destroyMany');

Route::get('/pusher', function() {
    event(new App\Events\OrderNotifyEvent('Hi there Pusher!'));
    return "Event has been sent!";
});