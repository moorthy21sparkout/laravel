<?php

namespace App\Console;

use App\Models\Member;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function(){
        //     Log::info('schedule is started');
        //    $deleted= Member::whereNotNull('email')->delete();
        //     Log::info('delete operation is completed,this is ' .$deleted. ' deleted in members');
        // })->cron(0 * 1 * 2);


        $schedule->command('laravel:send')
                ->everyMinute()
                ->emailOutputTo('moorthyponnusamy2019@gmail.com');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
