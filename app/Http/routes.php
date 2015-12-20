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