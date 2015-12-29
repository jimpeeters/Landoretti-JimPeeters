<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Watchlist;
use App\Auction;
use Auth;
use View;

class WatchlistController extends Controller
{
    public function index()
    {
        $watchlist = Watchlist::where('FK_user_id' , '=' , Auth::user()->id)->get();

        $newestAuction = Auction::orderBy('created_at', 'desc')->first();

        return view('watchlist')->with('watchlist', $watchlist)->with('newestAuction', $newestAuction);
    }

    public function addToWatchlist($id)
    {
        $watchlistcheck = Watchlist::where('FK_auction_id' , '=' , $id)->where('FK_user_id' , '=' , Auth::user()->id)->first();
        $newestAuction = Auction::orderBy('created_at', 'desc')->first();

        if($watchlistcheck == null) //deze bestaat nog niet
        {
            $newWatchlist = new Watchlist();
            $newWatchlist->FK_user_id = Auth::user()->id;
            $newWatchlist->FK_auction_id = $id;
            $newWatchlist->save();

            $watchlist = Watchlist::where('FK_user_id' , '=' , Auth::user()->id)->get();

            $success = 'You successfully added an auction to your watchlist!';

            return view('watchlist')
                            ->with('watchlist', $watchlist)
                            ->with('newestAuction', $newestAuction)
                            ->with('success', $success);

        }
        else //bestaat al wel
        {
            $watchlist = Watchlist::where('FK_user_id' , '=' , Auth::user()->id)->get();

            $warning = 'This auction was already added to your watchlist!';

            return view('watchlist')
                            ->with('watchlist', $watchlist)
                            ->with('newestAuction', $newestAuction)
                            ->with('warning', $warning);

        }

    }

}
