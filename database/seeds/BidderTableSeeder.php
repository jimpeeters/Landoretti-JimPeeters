<?php

use Illuminate\Database\Seeder;

class BidderTableSeeder extends Seeder {

	public function run()
	{
		DB::table('bidders')->delete();

		$bidders = array(

		array(
				'FK_auction_id' => '3',
				'FK_user_id' => '1',
				'bidAmount' => '2030'
			),

		array(
				'FK_auction_id' => '3',
				'FK_user_id' => '2',
				'bidAmount' => '2050'
			),

		array(
				'FK_auction_id' => '3',
				'FK_user_id' => '1',
				'bidAmount' => '2200'
			),



		array(
				'FK_auction_id' => '10',
				'FK_user_id' => '1',
				'bidAmount' => '2200'
			),

		array(
				'FK_auction_id' => '10',
				'FK_user_id' => '2',
				'bidAmount' => '2400'
			),

		array(
				'FK_auction_id' => '11',
				'FK_user_id' => '1',
				'bidAmount' => '3200'
			),

		);

		DB::table('bidders')->insert($bidders);
	}
}