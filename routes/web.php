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

