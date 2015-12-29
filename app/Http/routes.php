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

/* Home */ 
Route::get('/',array('as' => 'home','uses' => 'HomeController@index'));

/* Registreren */ 
Route::get('/register',array('as' => 'register','uses' => 'Auth\AuthController@index'));
Route::post('/register','Auth\AuthController@register');

/* Faq  */ 
Route::get('/FAQ',array('as' => 'faq','uses' => 'FaqController@index'));

/* ingelogd */
Route::group(['middleware' => 'auth'], function () {  

	/* My auctions */
	Route::get('/myAuctions',array('as' => 'myAuctions','uses' => 'AuctionController@index'));

	/* Add new auction pagina */
	Route::get('/myAuctions/add',array('as' => 'createAuction','uses' => 'AuctionController@create'));

	/* Auction toevoegen */
	Route::post('/myAuctions/add',array('as' => 'storeAuction','uses' => 'AuctionController@store'));

	/* Bod plaatsen */
	Route::post('/auction/bid/{id}',array('as' => 'placeBid','uses' => 'AuctionController@placeBid'));

	/* My profile */ 
	Route::get('/myProfile',array('as' => 'myProfile','uses' => 'UserController@myProfile'));

	/* uitloggen */
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

});

//Show details
Route::get('/auction/{id}', array('as' => 'auctionDetails','uses' =>'AuctionController@showdetails'));


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('/watchlist', function () {
    return view('watchlist');
});