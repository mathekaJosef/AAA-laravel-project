<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
=======
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
     *
     * @return void
     */
    protected function commands()
    {
<<<<<<< HEAD
=======
        $this->load(__DIR__.'/Commands');

>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        require base_path('routes/console.php');
    }
}
