<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	protected $table = 'auctions';
	public $timestamps = true;

	public function era()
	{
		return $this->hasOne('Era', 'FK_era_id');
	}

	public function artist()
	{
		return $this->hasOne('Artist', 'FK_artist_id');
	}

	public function color()
	{
		return $this->hasOne('Color', 'FK_color_id');
	}

	public function style()
	{
		return $this->hasOne('Style', 'FK_style_id');
	}

	public function category()
	{
		return $this->hasOne('Category', 'FK_category_id');
	}

	public function status()
	{
		return $this->hasOne('Status', 'FK_status_id');
	}

}