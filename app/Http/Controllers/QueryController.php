<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Auction;
use View;

class QueryController extends Controller
{
   public function search(Request $request)
	{
	   	// Gets the query string from our form submission 
	   	$input = $request->all();

	    $query = $input['search'];
	    // Returns an array of articles that have the query string located somewhere within 
	    // our articles titles. Paginates them so we can break up lots of search results.
	  	$auctions = Auction::where('title', 'LIKE', '%' . $query . '%')->paginate(10);
	        
		// returns a view and passes the view the list of articles and the original query.
	    return view('search', compact('auctions', 'query'));
	 }
}
