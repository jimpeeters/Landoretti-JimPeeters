<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder {

	public function run()
	{
		DB::table('artists')->delete();

		$artists = array(
		
		array(
				'name' => 'Andy Warhol',
				'origin' => 'VS',
				'age' => '1928 - 1987'
			),

		array(
				'name' => 'Pablo Picasso',
				'origin' => 'Spanish',
				'age' => '1881 - 1973'
			),

		array(
				'name' => 'Wassily Kandinsky',
				'origin' => 'Moskou',
				'age' => '1866 - 1944'
			),

		array(
				'name' => 'Salvador Dali',
				'origin' => 'Spain',
				'age' => '1904 - 1989'
			),
		);

		DB::table('artists')->insert($artists);
	}
}