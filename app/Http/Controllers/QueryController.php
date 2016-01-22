<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Auction;
use View;
use App\Faq;

class QueryController extends Controller
{
   public function search(Request $request)
	{
	   	$input = $request->all();

	    $query = $input['search'];

	  	$auctions = Auction::where('title', 'LIKE', '%' . $query . '%')->where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->get();


	    return view('search')->with('auctions', $auctions)->with('query', $query);
	 }

	public function searchfaq(Request $request)
	{
	   	$input = $request->all();

	    $query = $input['search'];

	  	$faqs = Faq::where('question', 'LIKE', '%' . $query . '%')->get();

	    return view('faqs-search')->with('faqs', $faqs)->with('query', $query);
	 }
}
