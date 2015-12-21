<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsTable extends Migration {

	public function up()
	{
		Schema::create('faqs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('question', 255);
			$table->string('answer', 255);
		});
	}

	public function down()
	{
		Schema::drop('faqs');
	}
}