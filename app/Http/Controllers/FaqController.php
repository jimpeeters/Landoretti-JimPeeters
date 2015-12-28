<?php namespace App\Http\Controllers;
use App\FaqCategory;
use App\Auction;
use View;

class FaqController extends Controller {

  public function index()
  {
		$faqs = FaqCategory::find(1)->faqs;  //alle faqs met category 'main' id '1'
		$newestAuction = Auction::orderBy('created_at', 'desc')->first();

        return View::make('faq')
        				->with('faqs', $faqs)
        				->with('newestAuction', $newestAuction);
  }
  
}

?>