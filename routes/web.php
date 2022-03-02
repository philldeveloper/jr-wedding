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
    return view('welcome', ['day' => '158']);
});

Route::get('/jr/wishlist', function () {
    return view('wishlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');