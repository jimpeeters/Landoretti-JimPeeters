<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddersTable extends Migration
{
    public function up()
    {
        Schema::create('bidders', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('FK_auction_id')->unsigned();
            $table->integer('FK_user_id')->unsigned();
            $table->integer('bidAmount');
        });
    }

    public function down()
    {
        Schema::drop('bidders');
    }
}
