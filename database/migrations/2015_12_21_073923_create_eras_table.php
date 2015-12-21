<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErasTable extends Migration {

	public function up()
	{
		Schema::create('eras', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('eras');
	}
}