<?php

use Illuminate\Database\Seeder;

class Faq_faqscategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('faqs_faqs-categories')->delete();

		$connections = array(

		array(
				'FK_faq_id' => '1',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '2',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '3',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '4',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '5',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '6',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '7',
				'FK_faq-category_id' => '1'
			),

		array(
				'FK_faq_id' => '1',
				'FK_faq-category_id' => '2'
			),

		array(
				'FK_faq_id' => '2',
				'FK_faq-category_id' => '4'
			),

		array(
				'FK_faq_id' => '3',
				'FK_faq-category_id' => '5'
			),

		array(
				'FK_faq_id' => '4',
				'FK_faq-category_id' => '3'
			),

		array(
				'FK_faq_id' => '5',
				'FK_faq-category_id' => '3'
			),

		array(
				'FK_faq_id' => '6',
				'FK_faq-category_id' => '3'
			),

		array(
				'FK_faq_id' => '7',
				'FK_faq-category_id' => '3'
			),

		);

		DB::table('faqs_faqs-categories')->insert($connections);

	}
}