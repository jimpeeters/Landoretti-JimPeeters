<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_artist_id')->references('id')->on('artists')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_color_id')->references('id')->on('colors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_style_id')->references('id')->on('styles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_category_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->foreign('FK_era_id')->references('id')->on('eras')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faqs_faqs-categories', function(Blueprint $table) {
			$table->foreign('FK_faq_id')->references('id')->on('faqs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('faqs_faqs-categories', function(Blueprint $table) {
			$table->foreign('FK_faq-category_id')->references('id')->on('faq-categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_user_id_foreign');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_artist_id_foreign');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_color_id_foreign');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_style_id_foreign');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_category_id_foreign');
		});
		Schema::table('auctions', function(Blueprint $table) {
			$table->dropForeign('auctions_FK_era_id_foreign');
		});
		Schema::table('faqs_faqs-categories', function(Blueprint $table) {
			$table->dropForeign('faqs_faqs-categories_FK_faq_id_foreign');
		});
		Schema::table('faqs_faqs-categories', function(Blueprint $table) {
			$table->dropForeign('faqs_faqs-categories_FK_faq-category_id_foreign');
		});
	}
}