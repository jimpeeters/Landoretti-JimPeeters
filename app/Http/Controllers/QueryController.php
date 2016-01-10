<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Auction;
use View;
use App\Faq;
use DB;

class QueryController extends Controller
{
   public function search(Request $request)
	{
	   	$input = $request->all();

	    $query = $input['search'];

	    DB::enableQueryLog();

	  	$auctions = Auction::where('title', 'LIKE', '%' . $query . '%')->where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->get();

	  	$queries = DB::getQueryLog();
		$last_query = end($queries);

		dd($last_query);

	    return view('search')->with('auctions', $auctions)->with('last_query', $last_query);
	 }

	public function searchfaq(Request $request)
	{
	   	$input = $request->all();

	    $query = $input['search'];

	    DB::enableQueryLog();

	  	$faqs = Faq::where('question', 'LIKE', '%' . $query . '%')->get();

	  	$queries = DB::getQueryLog();
		$last_query = end($queries);

		dd($last_query);
	        
	    return view('faqs-search')->with('faqs', $faqs)->with('last_query', $last_query);
	 }
}
