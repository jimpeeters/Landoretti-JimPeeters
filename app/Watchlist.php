<?php

namespace App;
use Auction;
use User;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
   	protected $table = 'watchlist';
	public $timestamps = true;


    public function auction()
    {
        return $this->hasOne('App\Auction', 'FK_auction_id');
    }


    public function user()
    {
        return $this->hasOne('App\User', 'FK_user_id');
    }

}
