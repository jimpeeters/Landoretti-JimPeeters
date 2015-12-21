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
			$table->string('title', 255);
			$table->smallInteger('year');
			$table->string('width', 4);
			$table->string('height', 4);
			$table->string('depth', 4)->nullable();
			$table->string('description-english', 255);
			$table->string('condition-english', 255);
			$table->string('description-dutch', 255);
			$table->string('condition-dutch');
			$table->string('image-artwork', 255);
			$table->string('image-signature', 255);
			$table->string('image-optional', 255)->nullable();
			$table->smallInteger('min-price');
			$table->smallInteger('max-price');
			$table->smallInteger('buyout-price');
			$table->mediumInteger('current-price')->nullable();
			$table->date('enddate');
			$table->string('origin', 255);
		});
	}

	public function down()
	{
		Schema::drop('auctions');
	}
}