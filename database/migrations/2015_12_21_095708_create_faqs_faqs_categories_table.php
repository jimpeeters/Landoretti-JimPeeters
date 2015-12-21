<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsFaqsCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('faqs_faqs-categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('FK_faq_id')->unsigned();
			$table->integer('FK_faq-category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('faqs_faqs-categories');
	}
}