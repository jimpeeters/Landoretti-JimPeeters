<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuctionsTable extends Migration {

	public function up()
	{
		Schema::create('auctions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('FK_user_id')->unsigned();
			$table->integer('FK_artist_id')->unsigned();
			$table->integer('FK_color_id')->unsigned();
			$table->integer('FK_style_id')->unsigned();
			$table->integer('FK_category_id')->unsigned();
			$table->integer('FK_era_id')->unsigned();
			$table->integer('FK_status_id')->unsigned();
			$table->string('title', 255);
			$table->smallInteger('year');
			$table->string('width', 20);
			$table->string('height', 20);
			$table->string('depth', 20)->nullable();
			$table->string('descriptionEnglish', 255);
			$table->string('conditionEnglish', 255);
			$table->string('descriptionDutch', 255);
			$table->string('conditionDutch', 255);
			$table->string('imageArtwork', 255);
			$table->string('imageSignature', 255);
			$table->string('imageOptional', 255)->nullable();
			$table->Integer('minPrice');
			$table->Integer('maxPrice');
			$table->Integer('buyoutPrice');
			$table->Integer('currentPrice')->nullable();
			$table->dateTime('enddate');
			$table->string('originDutch', 255);
			$table->string('originEnglish', 255);
			$table->string('slug')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('auctions');
	}
}