<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder {

	public function run()
	{
		DB::table('colors')->delete();

		$colors = array(

		array(
				'colorDutch' => 'blauw',
				'colorEnglish' => 'blue'
			),

		array(
				'colorDutch' => 'geel',
				'colorEnglish' => 'yellow'
			),

		array(
				'colorDutch' => 'groen',
				'colorEnglish' => 'green'
			),

		array(
				'colorDutch' => 'rood',
				'colorEnglish' => 'red'
			),

		array(
				'colorDutch' => 'paars',
				'colorEnglish' => 'purple'
			),

		array(
				'colorDutch' => 'oranje',
				'colorEnglish' => 'orange'
			),
		);

		DB::table('colors')->insert($colors);
	}
}