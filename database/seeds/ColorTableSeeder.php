<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('colors')->delete();

		$colors = array(

		array(
				'color-dutch' => 'blauw',
				'color-english' => 'blue'
			),

		array(
				'color-dutch' => 'geel',
				'color-english' => 'yellow'
			),

		array(
				'color-dutch' => 'groen',
				'color-english' => 'green'
			),

		array(
				'color-dutch' => 'rood',
				'color-english' => 'red'
			),

		array(
				'color-dutch' => 'paars',
				'color-english' => 'purple'
			),

		array(
				'color-dutch' => 'oranje',
				'color-english' => 'orange'
			),
		);

		DB::table('colors')->insert($colors);
	}
}