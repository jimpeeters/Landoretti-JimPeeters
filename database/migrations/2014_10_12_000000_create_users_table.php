<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 60);
            $table->string('address', 255);
            $table->integer('zipcode');
            $table->string('city', 255);
            $table->mediumInteger('number');
            $table->integer('FK_country_id')->unsigned();
            $table->integer('FK_watchlist_id')->unsigned()->nullable(); //je hoeft geen Watchlist te hebben

            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}