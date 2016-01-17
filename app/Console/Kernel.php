<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Auction;
use Carbon\Carbon;
use App\Bidder;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            
            $auctions = Auction::where('FK_status_id', '!=', '4')->get(); //alle auctions ophalen die niet expired zijn
            
            $mytime = Carbon::now(); //de datum nu 
            $timenow = $mytime->toDateTimeString();
            
            foreach($auctions as $auction) //elke auction checken
            {
                if($auction->enddate < $timenow) //als enddate vroeger is als nu 
                {
                    $auction->FK_status_id = '4'; //status van auction op expired zetten
                    $auction->save();
                    
                    /*
                    //alle bidders die op deze auction hebben geboden
                    $bidders = Bidder::where('FK_auction_id', '=', $auction->id)->distinct()->with('user')->get(); //distinct voor duplicate receivers
                    
                        //mail sturen naar verliezende bidders
                        foreach($bidders as $bidder)
                        {
                            if($bidder->bidAmount == $auction->currentPrice) //bidder heeft hoogste bod
                            {
                                //mail sturen naar bidders zonder hoogste bod
                                Mail::send('email.wonauction',
                                    array(
                                        'descriptionEnglish' => $auction->descriptionEnglish,
                                        'descriptionDutch' => $auction->descriptionDutch,
                                        'title' => $auction->title
                                    ), function($message)
                                {
                                    $message->from('jim.peeters@student.kdg.be');
                                    $message->to($bidder->user->email, 'Admin')->subject('You have won an auction on Landoretti');
                                });
                                
                            }
                            else{
                                //mail sturen naar bidders zonder hoogste bod
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
                        */
                }
            }
            
        })->everyMinute();
    }
}
