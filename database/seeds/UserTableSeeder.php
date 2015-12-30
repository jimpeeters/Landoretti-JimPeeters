<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->delete();

		$users = array(

		array(
				'name' => 'Jim Peeters',
				'email' => 'jim@test.be',
				'password' => Hash::make('root'),
				'FK_country_id' => '1',
				'zipcode' => '2660',
				'city' => 'hoboken',
				'number' => '0479339488',
				'address' => 'Veerdamlaan 10'
			),
		array(
				'name' => 'Jan Jansens',
				'email' => 'jan@test.be',
				'password' => Hash::make('root'),
				'FK_country_id' => '2',
				'zipcode' => '2661',
				'city' => 'hemiksem',
				'number' => '0479334587',
				'address' => 'Janlaan 12'
			),
		array(
				'name' => 'Jos Joskens',
				'email' => 'jos@test.be',
				'password' => Hash::make('root'),
				'FK_country_id' => '2',
				'zipcode' => '2662',
				'city' => 'josland',
				'number' => '0476334587',
				'address' => 'Joslaan 12'
			),

		);

		DB::table('users')->insert($users);
    }
}
