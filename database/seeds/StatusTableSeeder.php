<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('statuses')->delete();

		$statuses = array(

		array(
				'nameDutch' => 'In afwachting',
				'nameEnglish' => 'Pending'
			),
		array(
				'nameDutch' => 'Afgewezen',
				'nameEnglish' => 'Refused'
			),
		array(
				'nameDutch' => 'Actief',
				'nameEnglish' => 'Active'
			),
		array(
				'nameDutch' => 'Verlopen',
				'nameEnglish' => 'Expired'
			),
		array(
				'nameDutch' => 'Verkocht',
				'nameEnglish' => 'Sold'
			),



		);

		DB::table('statuses')->insert($statuses);
	}
}
