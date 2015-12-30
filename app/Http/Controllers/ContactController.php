<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Auction;
use Auth;
use Validator;
use Input;
use Illuminate\Support\Facades\Redirect;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();
    	$auctions = ['default'=>'Choose an auction'] + Auction::orderby('title', 'ASC')->lists('title', 'id')->all(); 

        return view('contact')
        				->with('newestAuction', $newestAuction)
        				->with('auctions', $auctions);
    }

    public function contactById($id)
    {
    	$newestAuction = Auction::orderBy('created_at', 'desc')->first();
    	$auctions = ['default'=>'Choose an auction'] + Auction::orderby('title', 'ASC')->lists('title', 'id')->all(); 

    	$auctionid = $id;

        return view('contact')
        				->with('newestAuction', $newestAuction)
        				->with('auctions', $auctions)
        				->with('auctionid', $auctionid);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:255',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = $request->all();

        $auctionid = explode(',', $input['auction']);

        $auction = Auction::find($auctionid[0]);


        Mail::send('email.mail',
	        array(
	            'name' => $input['name'],
	            'email' => $input['email'],
	            'user_message' => $input['message'],
	            'auctionTitle' => $auction->title
	        ), function($message)
	    {
	        $message->from('jim.peeters@student.kdg.be');
	        $message->to('jim.peeters@student.kdg.be', 'Admin')->subject('Landoretti Question');
	    });

	  
	  	$success = 'Thanks for contacting us!';
	  	$newestAuction = Auction::orderBy('created_at', 'desc')->first();

  		        return view('contact')
        				->with('newestAuction', $newestAuction)
        				->with('success', $success);
  }

    
}
