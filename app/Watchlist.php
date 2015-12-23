<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
   	protected $table = 'watchlist';
	public $timestamps = true;


    public function auctions()
    {
        return $this->hasMany('App\Auction', 'FK_auction_id');
    }

}
