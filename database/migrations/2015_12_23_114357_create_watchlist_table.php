<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchlistTable extends Migration
{
    public function up()
    {
        Schema::create('watchlist', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('FK_auction_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('watchlist');
    }
}
