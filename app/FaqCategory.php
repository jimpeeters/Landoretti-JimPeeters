<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model {

	protected $table = 'faq-categories';
	public $timestamps = true;

	public function faqs()
	{
		return $this->belongsToMany('App\Faq', 'faqs_faqs-categories', 'id', 'id');
	}

}