<?php

use Illuminate\Database\Seeder;

class StyleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('styles')->delete();

		$styles = array(

		array(
				'name' => 'Abstract'
			),

		array(
				'name' => 'African American'
			),

		array(
				'name' => 'Asian Contemporary'
			),

		array(
				'name' => 'Conceptual'
			),

		array(
				'name' => 'Contemporary'
			),

		array(
				'name' => 'Emerging Artists'
			),

		array(
				'name' => 'Figurative'
			),

		array(
				'name' => 'Middle Eastern Contemporary'
			),

		array(
				'name' => 'Minimalism'
			),

		array(
				'name' => 'Modern'
			),

		array(
				'name' => 'Pop'
			),

		array(
				'name' => 'Urban'
			),

		array(
				'name' => 'Vintage Photographs'
			),
		);


		DB::table('styles')->insert($styles);
	}
}