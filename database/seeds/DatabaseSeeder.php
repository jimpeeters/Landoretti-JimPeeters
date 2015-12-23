<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('ArtistTableSeeder');
		$this->command->info('Artist table seeded!');

		$this->call('ColorTableSeeder');
		$this->command->info('Color table seeded!');

		$this->call('StyleTableSeeder');
		$this->command->info('Style table seeded!');

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');

		$this->call('EraTableSeeder');
		$this->command->info('Era table seeded!');

		$this->call('FaqTableSeeder');
		$this->command->info('Faq table seeded!');

		$this->call('FaqCategoryTableSeeder');
		$this->command->info('Faq-Category table seeded!');

		$this->call('Faq_faqscategoryTableSeeder');
		$this->command->info('Faq_faqs-category table seeded!');

		$this->call('CountryTableSeeder');
		$this->command->info('Country table seeded!');

		$this->call('UserTableSeeder');
		$this->call('StatusTableSeeder');
		$this->call('AuctionTableSeeder');

        Model::reguard();
	}
}