<?php

namespace App;
use Faq_faqsCategory;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

	protected $table = 'faqs';
	public $timestamps = true;

	public function categories()
	{
		return $this->belongsToMany('App\FaqCategory', 'faqs_faqs-categories', 'id', 'id');
	}

}