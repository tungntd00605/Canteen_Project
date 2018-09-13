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


use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layout.client');
});

Route::get('/admin/', 'DashboardController@index');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/product', 'ProductController');
Route::get('/admin/order', 'OrderController@index');
Route::get('/admin/order/{id}', 'OrderController@show');
Route::get('/admin/order/{id}/change-status', 'OrderController@changeStatus');
Route::delete('/admin/order/{id}', 'OrderController@destroy');
Route::get('/admin/search/order', 'OrderController@showByDate');


Route::get('/', 'ClientPageController@showHome');
Route::get('/category', 'ClientPageController@showCategory');
Route::get('/product/{id}', 'ClientPageController@showProductDetail');
Route::get('/contact', 'ClientPageController@showContact');
Route::get('/about', 'ClientPageController@showAboutUs');

Route::get('/cart', 'ShoppingCartController@showCart');
Route::post('/api-them-gio-hang', 'ShoppingCartController@addToCartApi');
Route::post('/api-xoa-san-pham', 'ShoppingCartController@removeFromCart');
Route::get('/xoa-gio-hang', 'ShoppingCartController@destroyCart');
Route::post('/gui-don-hang', 'ShoppingCartController@checkoutCart');

Route::delete('admin/destroy-many/product', 'ProductController@destroyMany');


Route::get('/get-sale-api', 'DashboardController@getSaleByDate');
