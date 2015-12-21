<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();

		$categories = array(

		array(
				'name' => 'Design'
			),

		array(
				'name' => 'Paintings and Works on Paper'
			),

		array(
				'name' => 'Photographs'
			),

		array(
				'name' => 'Prints and Multiples'
			),

		array(
				'name' => 'Sculpture'
			),
		);

		DB::table('categories')->insert($categories);
	}
}