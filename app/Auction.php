<?php

namespace App;
use Artist;
use Era;
use Color;
use Style;
use Category;
use Status;
use Bidder;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	protected $table = 'auctions';
	public $timestamps = true;

	public function era()
	{
		return $this->belongsTo('App\Era', 'FK_era_id');
	}

	public function artist()
    {
        return $this->belongsTo('App\Artist', 'FK_artist_id');
    }

	public function color()
	{
		return $this->belongsTo('App\Color', 'FK_color_id');
	}

	public function style()
	{
		return $this->belongsTo('App\Style', 'FK_style_id');
	}

	public function category()
	{
		return $this->belongsTo('App\Category', 'FK_category_id');
	}

	public function status()
	{
		return $this->belongsTo('App\Status', 'FK_status_id');
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'FK_user_id');
	}

	public function bidders()
    {
        return $this->hasMany('App\Bidder', 'FK_auction_id');
    }


}