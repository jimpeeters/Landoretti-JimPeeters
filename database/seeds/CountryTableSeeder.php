<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('countries')->delete();

		$countries = array(

		array(
				'nameDutch' => 'Belgie',
				'nameEnglish' => 'Belgium'
			),

		array(
				'nameDutch' => 'Engeland',
				'nameEnglish' => 'United Kingdoms'
			),

		array(
				'nameDutch' => 'Frankrijk',
				'nameEnglish' => 'France'
			),

		array(
				'nameDutch' => 'Spanje',
				'nameEnglish' => 'Spain'
			),

		array(
				'nameDutch' => 'Turkije',
				'nameEnglish' => 'Turkey'
			),
		);

		DB::table('countries')->insert($countries);
    }
}
