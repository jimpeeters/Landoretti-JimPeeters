<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AuctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auctions')->delete();

		$auctions = array(

		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '3',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Scratch it',
				'slug' => 'Scratch-it',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork6.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '2',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '2',
				'FK_status_id' => '1',
				'title' => 'Silent Life',
				'slug' => 'Silent-life',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork2.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => null,
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '3',
				'FK_artist_id' => '2',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '2',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Ugly lady',
				'slug' => 'Ugly-lady',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork3.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => null,
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '2',
				'FK_color_id' => '1',
				'FK_style_id' => '2',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Happy Cat',
				'slug' => 'Happy-cat',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork5.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => null,
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '2',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Sick lady',
				'slug' => 'Sick-Lady',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork4.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => null,
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Dance off',
				'slug' => 'Dance-off',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '2',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '5',
				'FK_era_id' => '3',
				'FK_status_id' => '1',
				'title' => 'Mona it',
				'slug' => 'Mona-it',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '2',
				'FK_artist_id' => '1',
				'FK_color_id' => '2',
				'FK_style_id' => '1',
				'FK_category_id' => '3',
				'FK_era_id' => '2',
				'FK_status_id' => '1',
				'title' => 'Dance Of Time Plus',
				'slug' => 'Dance-of-time-plus',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '2',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Superhuman',
				'slug' => 'Superhuman',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '3',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Mona lisa',
				'slug' => 'Mona-lisa',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '3',
				'FK_artist_id' => '2',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Dancing',
				'slug' => 'Dancing',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '2',
				'FK_artist_id' => '4',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Lover',
				'slug' => 'Lover',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-01-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '1',
				'FK_color_id' => '3',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '3',
				'FK_status_id' => '1',
				'title' => 'Innovative',
				'slug' => 'Innovative',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '2',
				'FK_category_id' => '1',
				'FK_era_id' => '2',
				'FK_status_id' => '1',
				'title' => 'Dance Of Time II',
				'slug' => 'Dance-of-time-II',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),
		array(
				'FK_user_id' => '1',
				'FK_artist_id' => '1',
				'FK_color_id' => '1',
				'FK_style_id' => '1',
				'FK_category_id' => '1',
				'FK_era_id' => '1',
				'FK_status_id' => '1',
				'title' => 'Dance Of Time I',
				'slug' => 'Dance-of-time-I',
				'year' => '2002',
				'width' => '100 cm',
				'height' => '200cm',
				'depth' => '5cm',
				'descriptionEnglish' => 'English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nam, delectus, incidunt eveniet impedit quaerat. Dignissimos sunt, ut voluptates illum nisi facilis natus consectetur eum vitae perspiciatis vel, reiciendis sint.',
				'conditionEnglish' => 'English ipsum dolor sit amet, consectetur adipisicing elit. Nobis omnis quo consectetur eum? Animi, nisi temporibus eaque at cupiditate optio quibusdam, minus hic est voluptatum similique non fuga dolores architecto!',
				'descriptionDutch' => 'Dutch Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quia, officia aliquam quasi nobis facere quisquam! Consequuntur impedit tempore amet adipisci suscipit accusamus, dolorum quasi dicta, ex id animi aliquid.',
				'conditionDutch' => 'Dutch ipsum dolor sit amet, consectetur adipisicing elit. Iusto culpa laudantium vitae corrupti nisi labore. Delectus, nihil repellat rem dolor atque. Nesciunt mollitia ipsam quibusdam quaerat esse reprehenderit rerum deleniti.',
				'imageArtwork' => '/images/uploads/artwork.jpg',
				'imageSignature' => '/images/uploads/signature.jpg',
				'imageOptional' => '/images/uploads/optional.jpg',
				'minPrice' => '2000',
				'maxPrice' => '5000',
				'buyoutPrice' => '10000',
				'currentPrice' => '2000',
				'enddate' => date('2016-09-23 20:00:00'),
				'originDutch' => 'Spanje',
				'originEnglish' => 'Spain',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			),


		);

		DB::table('auctions')->insert($auctions);
    }
}
