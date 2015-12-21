<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistsTable extends Migration {

	public function up()
	{
		Schema::create('artists', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('origin', 255);
			$table->string('age', 255);
		});
	}

	public function down()
	{
		Schema::drop('artists');
	}
}