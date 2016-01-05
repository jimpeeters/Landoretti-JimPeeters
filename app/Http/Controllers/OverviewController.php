<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Auction;
use view;
use Input;
use App\Bidder;
use Carbon\Carbon;



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

    public function sortBy()
	{
		$newestAuction = Auction::orderBy('created_at', 'desc')->first();

		switch(Input::get('type')) {

        case 'soonest':
            $auctions = Auction::orderBy('enddate', 'asc')->paginate(9);
            break;
        case 'latest':
            $auctions = Auction::orderBy('enddate', 'desc')->paginate(9);
            break;
        case 'new':
            $auctions = Auction::orderBy('created_at', 'desc')->paginate(9);
            break;
        case 'popular':
			$auctions = Auction::leftJoin('bidders','auctions.id','=','bidders.FK_auction_id')->
               selectRaw('auctions.*, count(bidders.FK_auction_id) AS `count`')->
               groupBy('auctions.id')->
               orderBy('count','DESC')->
               paginate(9);
            break;
    	}


		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}

    public function priceFilter()
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();

    	switch(Input::get('type')) {

    	case '<5000':
           	$auctions = Auction::where('currentPrice', '<=', 5000)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '<10000':
            $auctions = Auction::where('currentPrice', '>', 5000)->where('currentPrice', '<=', 10000)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '<25000':
            $auctions = Auction::where('currentPrice', '>', 10000)->where('currentPrice', '<=', 25000)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '<50000':
            $auctions = Auction::where('currentPrice', '>', 25000)->where('currentPrice', '<=', 50000)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '<100000':
            $auctions = Auction::where('currentPrice', '>', 50000)->where('currentPrice', '<=', 100000)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '>100000':
            $auctions = Auction::where('currentPrice', '>', 100000)->orderBy('created_at', 'desc')->paginate(9);
            break;
    	}

		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}

	public function endingFilter()
	{
		$newestAuction = Auction::orderBy('created_at', 'desc')->first();

		switch(Input::get('type')) {

        case 'thisweek':
           $auctions = Auction::where('enddate', '<', Carbon::now()->addWeeks(1))->paginate(9);
            break;
        case 'newlisted':
            //??
            break;
        case 'purchasenow':
            //??
            break;
    	}


		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}

	public function eraFilter()
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();

    	switch(Input::get('type')) {
    		
    	case '1':
           	$auctions = Auction::where('FK_era_id', '=', 1)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '2':
            $auctions = Auction::where('FK_era_id', '=', 2)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '3':
            $auctions = Auction::where('FK_era_id', '=', 3)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '4':
            $auctions = Auction::where('FK_era_id', '=', 4)->orderBy('created_at', 'desc')->paginate(9);
            break;
    	}

		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}

	public function categoryFilter()
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();

		if (Input::get('type') == '1')
		{
		    $auctions = Auction::where('FK_category_id', '=', 1)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '2')
		{
		    $auctions = Auction::where('FK_category_id', '=', 2)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '3')
		{
		    $auctions = Auction::where('FK_category_id', '=', 3)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '4')
		{
		    $auctions = Auction::where('FK_category_id', '=', 4)->orderBy('created_at', 'desc')->paginate(9);
		}

		if (Input::get('type') == '5')
		{
		    $auctions = Auction::where('FK_category_id', '=', 5)->orderBy('created_at', 'desc')->paginate(9);
		}

		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);
	}

	public function styleFilter()
	{
		$newestAuction = Auction::orderBy('created_at', 'desc')->first();

    	switch(Input::get('type')) {
        case '1':
            $auctions = Auction::where('FK_style_id', '=', 1)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '2':
            $auctions = Auction::where('FK_style_id', '=', 2)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '3':
            $auctions = Auction::where('FK_style_id', '=', 3)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '4':
            $auctions = Auction::where('FK_style_id', '=', 4)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '5':
            $auctions = Auction::where('FK_style_id', '=', 5)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '6':
            $auctions = Auction::where('FK_style_id', '=', 6)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '7':
            $auctions = Auction::where('FK_style_id', '=', 7)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '8':
            $auctions = Auction::where('FK_style_id', '=', 8)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '9':
            $auctions = Auction::where('FK_style_id', '=', 9)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '10':
            $auctions = Auction::where('FK_style_id', '=', 10)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '11':
            $auctions = Auction::where('FK_style_id', '=', 11)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '12':
            $auctions = Auction::where('FK_style_id', '=', 12)->orderBy('created_at', 'desc')->paginate(9);
            break;
        case '13':
            $auctions = Auction::where('FK_style_id', '=', 13)->orderBy('created_at', 'desc')->paginate(9);
            break;
    	}


		return view('overview')
                ->with('newestAuction', $newestAuction)
                ->with('auctions', $auctions);	
	}






}
