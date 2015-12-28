<?php namespace App\Http\Controllers;
use App\User;
use Auth;
use View;

class UserController extends Controller {


  public function myProfile()
  {
      $user = User::where('id', '=', Auth::user()->id)->with('auctions')->first();

      return view('profile')->with('user', $user);
    
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