<?php

/* Home */ 
Route::get('/',array('as' => 'home','uses' => 'HomeController@index'));

/* Registreren */ 
Route::get('/register',array('as' => 'register','uses' => 'Auth\AuthController@index'));
Route::post('/register','Auth\AuthController@register');

/* Faq  */ 
Route::get('/FAQ',array('as' => 'faq','uses' => 'FaqController@index'));

//Show details
Route::get('/auction/{id}', array('as' => 'auctionDetails','uses' =>'AuctionController@showdetails'));

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

	/* My bids */
	Route::get('/myBids',array('as' => 'myBids','uses' => 'UserController@myBids'));

	/* My watchlist */
	Route::get('/myWatchlist',array('as' => 'myWatchlist','uses' => 'WatchlistController@index'));

	/* Auction aan watchlist toevoegen */
	Route::get('/watchlist/add/{id}',array('as' => 'addToWatchlist','uses' => 'WatchlistController@addToWatchlist'));

	/* uitloggen */
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

});

/* Contact pagina */
Route::get('/contact', array('as' => 'contact', 'uses' => 'ContactController@index'));

/* Mail sturen */
Route::post('contact', array('as' => 'contact_store', 'uses' => 'ContactController@store'));

/* Contact pagina met prefilled auction */ 
Route::get('/contact/{id}', array('as' => 'contactById', 'uses' => 'ContactController@contactById'));

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');