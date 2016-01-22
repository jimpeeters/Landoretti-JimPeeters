<?php

/* Home */ 
Route::get('/',array('as' => 'home','uses' => 'HomeController@index'));

/* Faq  */ 
Route::get('/FAQ',array('as' => 'faq','uses' => 'FaqController@index'));

/* Art pagina  */ 
Route::get('/auctions',array('as' => 'auctions','uses' => 'OverviewController@index'));

//Show details
Route::get('/auction/{title}', array('as' => 'auctionDetails','uses' =>'AuctionController@showdetails'));

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

	/* Buy now */
	Route::get('/auction/buyout/{id}',array('as' => 'buyout','uses' => 'AuctionController@buyout'));

	/* uitloggen */
	Route::get('auth/logout', array('as' => 'getLogout','uses' => 'Auth\AuthController@getLogout'));

});

// AUTH FILTER
Route::filter('auth', function()
{
    if (Auth::guest())
    {
    	return Redirect::route('home');
    } 
});


/* Contact pagina */
Route::get('/contact', array('as' => 'contact', 'uses' => 'ContactController@index'));

/* Mail sturen */
Route::post('contact', array('as' => 'contact_store', 'uses' => 'ContactController@store'));

/* Contact pagina met prefilled auction */ 
Route::get('/contact/{id}', array('as' => 'contactById', 'uses' => 'ContactController@contactById'));


/* Registreren */ 
Route::get('/register',array('as' => 'getRegister','uses' => 'Auth\AuthController@index'));
Route::post('/register',array('as' => 'postRegister','uses' => 'Auth\AuthController@register'));

// Authentication routes...
Route::get('auth/login', array('as' => 'getLogin','uses' => 'Auth\AuthController@getLogin'));
Route::post('auth/login', array('as' => 'postLogin','uses' => 'Auth\AuthController@postLogin'));

/* --- filters --- */ 

/* Sort by */ 
Route::post('/sortBy', array('as' => 'sortBy','uses' => 'OverviewController@sortBy'));

/* Price filter */
Route::post('/priceFilter', array('as' => 'priceFilter','uses' => 'OverviewController@priceFilter'));

/* Ending filter */
Route::post('/endingFilter', array('as' => 'endingFilter','uses' => 'OverviewController@endingFilter'));

/* Era filter */
Route::post('/eraFilter', array('as' => 'eraFilter','uses' => 'OverviewController@eraFilter'));

/* Category filter */
Route::post('/categoryFilter', array('as' => 'categoryFilter','uses' => 'OverviewController@categoryFilter'));

/* Style filter */
Route::post('/styleFilter', array('as' => 'styleFilter','uses' => 'OverviewController@styleFilter'));

/* --- filters  ---*/


/* Search */
Route::post('/search',array('as' => 'search','uses' => 'QueryController@search'));

/* Faq search */ 
Route::post('/faqsearch',array('as' => 'searchfaq','uses' => 'QueryController@searchfaq'));

Route::get('/faqsearchtest', function()
{
    return view('faqs-search');
});