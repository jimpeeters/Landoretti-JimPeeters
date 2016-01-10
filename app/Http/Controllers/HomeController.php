<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Auction;

class HomeController extends Controller
{
    public function index()
    {
    	$recentAuctions = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->take(4)->get();

        $popularAuctions = Auction::with('bidders')->where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->get()->sortBy(function($auction)
		{
		    return $auction->bidders->count();
		})->take(3);

        return View::make('home')
        				->with('recentAuctions', $recentAuctions)
        				->with('popularAuctions', $popularAuctions);
    }
}
