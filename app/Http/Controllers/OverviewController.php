<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Auction;
use view;
use Input;



class OverviewController extends Controller
{
    public function index()
    {
        $newestAuction = Auction::orderBy('created_at', 'desc')->first();

        $auctions = Auction::orderBy('created_at', 'desc')->paginate(9);

        return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
    }

    public function priceFilter()
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();


		if (Input::get('type') == '<5000')
		{
		    $auctions = Auction::where('buyoutPrice', '<', 5000)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '<10000')
		{
		    $auctions = Auction::where('buyoutPrice', '>', 5000)->where('buyoutPrice', '<', 10000)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '<25000')
		{
		    $auctions = Auction::where('buyoutPrice', '>', 10000)->where('buyoutPrice', '<', 25000)->orderBy('created_at', 'desc')->paginate(9);
		}


		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}


}
