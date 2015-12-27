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
    	$recentAuctions = Auction::orderBy('created_at', 'desc')->take(4)->get();

        return View::make('home')->with('recentAuctions', $recentAuctions);
    }
}
