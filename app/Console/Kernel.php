<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Auction;
use Carbon\Carbon;

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
            
            $auctions = Auction::get();
            
            $mytime = Carbon::now()->addDays(2);
            $timenow = $mytime->toDateTimeString();
            
            foreach($auctions as $auction)
            {
                if($auction->enddate < $timenow) //als enddate vroeger is als nu 
                {
                    $auction->FK_status_id = '4';
                    $auction->save();
                }
            }
            
            
        })->everyMinute();
    }
}
