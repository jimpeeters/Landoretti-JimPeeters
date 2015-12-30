<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $table = 'bidders';
	public $timestamps = true;

	public function auction()
	{
		return $this->belongsTo('App\Auction', 'FK_auction_id');
	}

    public function user()
    {
        return $this->belongsTo('App\User', 'FK_user_id');
    }
}
