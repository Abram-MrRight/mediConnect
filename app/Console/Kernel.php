<?php

namespace App\Console;

use Illuminate\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SendReminders;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        SendReminders::class, // Register the SendReminders command
    ];

    protected function schedule(Schedule $schedule)
    {
        // Schedule the SendReminders command to run every day
        $schedule->command('reminders:send')->daily();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
