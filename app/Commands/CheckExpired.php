<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Auction;
use App\Bidder;
use Mail;

class checkExpired extends Command implements SelfHandling
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkexpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Put status of auctions to expired when enddate is reached.';
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
                    
            $auctions = Auction::get();
            
            $mytime = Carbon::now()->addDays(2);
            $timenow = $mytime->toDateTimeString();
            
            foreach($auctions as $auction)
            {
                if($auction->enddate < $timenow) //als enddate vroeger is als nu 
                {
                    $auction->FK_status_id = '4';
                    $auction->save();
                    
                    $lostbidders = Bidder::where('FK_auction_id', '=', $auction->id)->distinct()->with('user')->get(); //distinct voor duplicate receivers
                    
                        //mail sturen naar verliezende 
                        foreach($lostbidders as $bidder)
                        {
                            //mail sturen naar verliezende bidders
                            Mail::send('email.lostauction',
                                array(
                                    'descriptionEnglish' => $auction->descriptionEnglish,
                                    'descriptionDutch' => $auction->descriptionDutch,
                                    'title' => $auction->title
                                ), function($message)
                            {
                                $message->from('jim.peeters@student.kdg.be');
                                $message->to($bidder->user->email, 'Admin')->subject('You have lost an auction on Landoretti');
                            });
                    
                            
                        }
                }
            }
    }
}
