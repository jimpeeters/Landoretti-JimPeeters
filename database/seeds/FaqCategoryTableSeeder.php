<?php

use Illuminate\Database\Seeder;

class FaqCategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('faq-categories')->delete();

		$categories = array(

		array(
				'name' => 'main'
			),

		array(
				'name' => 'bid'
			),

		array(
				'name' => 'account'
			),

		array(
				'name' => 'sell'
			),

		array(
				'name' => 'buy'
			),
		);

		DB::table('faq-categories')->insert($categories);

	}
}