<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(uri: '/main', action: 'App\Http\Controllers\MainController@main')->name('main');
Route::get(uri: '/admin{categories?}', action: 'App\Http\Controllers\ProductsController@admin')->name('admin');
Route::get(uri: '/catalog{products?}', action: 'App\Http\Controllers\ProductsController@catalog')->name('catalog');
Route::post(uri: '/category_insert',  action: 'App\Http\Controllers\ProductsController@category_insert')->name('category_insert');
Route::post(uri: '/product_insert',  action: 'App\Http\Controllers\ProductsController@product_insert')->name('product_insert');
Route::post(uri: '/addproduct_insert',  action: 'App\Http\Controllers\ProductsController@addproduct_insert')->name('addproduct_insert');
Route::get(uri: '/products',  action: 'App\Http\Controllers\ProductsController@products');
Route::get(uri: '/reviews',  action: 'App\Http\Controllers\ReviewsController@reviews')->name('reviews');
Route::post(uri: '/reviews_check',  action: 'App\Http\Controllers\ReviewsController@reviews_check');
Route::get(uri: '/show_reviews',  action: 'App\Http\Controllers\ReviewsController@show_reviews')->name('show_reviews');
Route::post(uri: '/count',  action: 'App\Http\Controllers\CartController@count')->name('count');
Route::post(uri: '/del',  action: 'App\Http\Controllers\CartController@del')->name('del');
Route::post(uri: '/order',  action: 'App\Http\Controllers\CartController@order')->name('order');
Route::get(uri: '/show', action: 'App\Http\Controllers\CartController@show')->name('show');
Route::post(uri: '/order_finish', action: 'App\Http\Controllers\CartController@order_finish')->name('order_finish');
Route::get(uri:'/logout', action: 'App\Http\Controllers\LogoutController@exit'); 
Route::group(['middleware','auth' => 'App\Http\Controllers'], function(){
Route::get(uri: '/gard', action: 'App\Http\Controllers\GardController@index');  
Route::get(uri: '/word', action: 'App\Http\Controllers\WordController@word');
Route::get(uri: '/check', action: 'App\Http\Controllers\WordController@check')->name('check');  
});  


Auth::routes();



//Route::get('/logout', [App\Http\Controllers\HomeController::class, 'index'])->name('logout');
