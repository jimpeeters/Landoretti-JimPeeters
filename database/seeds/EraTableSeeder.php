<?php

use Illuminate\Database\Seeder;

class EraTableSeeder extends Seeder {

	public function run()
	{
		DB::table('eras')->delete();

		$eras = array(

		array(
				'name' => 'Pre-War'
			),

		array(
				'name' => '1940s-1950s'
			),

		array(
				'name' => '1960s-1980s'
			),

		array(
				'name' => '1990s-Present'
			),
		);

		DB::table('eras')->insert($eras);
	}
}