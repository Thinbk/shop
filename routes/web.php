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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('pages.home');
});

Route::get('/login', function (){
    return view('layouts.login');
});

Route::get('/product-detail', function (){
    return view('layouts.product-detail');
});

Route::get('/cart', function (){
    return view('layouts.cart');
});

Route::get('/checkout', function (){
    return view('layouts.checkout');
});

Route::get('/404', function (){
    return view('layouts.404');
});

// route admin
Route::get('/admin/login', function (){
    return view('admin.login');
});

Route::get('/admin/user', 'UserController@list');
Route::get('/admin/user/delete/{$id}', 'UserController@delete');

Route::get('/admin/product', 'ProductController@list');