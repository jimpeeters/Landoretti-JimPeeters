<?php namespace App\Http\Controllers;
use App\Faq;
use App\FaqCategory;
use App\Faq_faqsCategory;
use View;

class FaqController extends Controller {

  public function index()
  {

        $faqs = Faq::get();   //
/*
        $faqs = Faq::find(1)->categ;

        dd($faqs);*/

        return View::make('faq')->with('faqs', $faqs);
  }
  
}

?>