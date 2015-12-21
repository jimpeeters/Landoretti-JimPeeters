<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq-Category extends Model {

	protected $table = 'faq-categories';
	public $timestamps = true;

	public function faqs()
	{
		return $this->hasMany('Faq_faqs-category', 'FK_faq-category_id');
	}

}