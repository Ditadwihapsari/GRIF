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

Route::get('/', 'BNIController@showhome');

Route::get('/home', function () {
    return view('home');
});

Route::get('/search', 'BNIController@show');

Route::get('/profil/{id}', 'BNIController@showprofil');


Route::get('/confirm/{id}', 'BNIController@confirm');

Route::get('/payment', function () {
    return view('payment');
});
