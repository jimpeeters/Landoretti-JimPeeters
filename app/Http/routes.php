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

Route::get('/create', function () {
    return view('create');
});

Route::get('/profile', function () {
    return view('profile');
});


/* Registreren */ 

Route::get('/register',array('as' => 'register','uses' => 'RegisterController@index'));
Route::post('/register','Auth\AuthController@register');

/* Faq pagina */ 

Route::get('/FAQ',array('as' => 'faq','uses' => 'FaqController@index'));


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');




Route::resource('user', 'UserController');
Route::resource('auction', 'AuctionController');
Route::resource('artist', 'ArtistController');
Route::resource('color', 'ColorController');
Route::resource('style', 'StyleController');
Route::resource('category', 'CategoryController');
Route::resource('era', 'EraController');
Route::resource('faq', 'FaqController');
