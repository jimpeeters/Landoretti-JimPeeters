<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nameDutch', 255);
            $table->string('nameEnglish', 255);
        });
    }

    public function down()
    {
        Schema::drop('countries');
    }
}
