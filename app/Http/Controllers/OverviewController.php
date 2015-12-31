<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Auction;
use view;



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

}
