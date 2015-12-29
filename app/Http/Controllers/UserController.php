<?php namespace App\Http\Controllers;
use App\User;
use App\Auction;
use Auth;
use View;

class UserController extends Controller {


  public function myProfile()
  {
      $user = User::where('id', '=', Auth::user()->id)->with('auctions')->first();
      $newestAuction = Auction::orderBy('created_at', 'desc')->first();

      return view('profile')->with('user', $user)->with('newestAuction', $newestAuction);
    
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