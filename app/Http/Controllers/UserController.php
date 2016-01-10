<?php namespace App\Http\Controllers;
use App\User;
use App\Auction;
use App\Bidder;
use Auth;
use View;

class UserController extends Controller {


  public function myProfile()
  {
      $user = User::where('id', '=', Auth::user()->id)->with('auctions')->first();
      $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();

      return view('profile')->with('user', $user)->with('newestAuction', $newestAuction);
    
  }

  public function myBids()
  {
      $bids = Bidder::where('FK_user_id', '=', Auth::user()->id)->with('auction')->orderBy('bidAmount', 'desc')->get();
      $newestAuction = Auction::where('FK_status_id','=', 1)->orWhere('FK_status_id','=', 3)->orderBy('created_at', 'desc')->first();

      return view('my-bids')->with('bids', $bids)->with('newestAuction', $newestAuction);
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }


  
}

?>