<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

	protected $table = 'faqs';
	public $timestamps = true;

	public function categories()
	{
		return $this->hasMany('Faq_faqs-category', 'FK_faq_id');
	}

}