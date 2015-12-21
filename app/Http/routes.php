<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/myauctions', function () {
    return view('my-auctions');
});

Route::get('/watchlist', function () {
    return view('watchlist');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::resource('user', 'UserController');
Route::resource('auction', 'AuctionController');
Route::resource('artist', 'ArtistController');
Route::resource('color', 'ColorController');
Route::resource('style', 'StyleController');
Route::resource('category', 'CategoryController');
Route::resource('era', 'EraController');
Route::resource('faq', 'FaqController');
