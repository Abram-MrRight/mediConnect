<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\ReminderMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Reminders;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send email reminders';

    public function handle()
    {
        // Example reminders; typically you'd retrieve this from your database
        $reminders = Reminders::all();

        // $reminders = [
        //     ['email' => 'charlesrolandscr17@gmail.com', 'message' => 'This is your first reminder.'],
        //     ['email' => 'charlesrolandscr17@gmail.com', 'message' => 'This is your first reminder.'],
        //     ['email' => 'charlesrolandscr17@gmail.com', 'message' => 'This is your first reminder.'],
        //     // Add more reminders as needed
        // ];

        foreach ($reminders as $reminder) {
            Mail::to($reminder['email'])->send(new ReminderMail($reminder));
            $this->info('Reminder sent to ' . $reminder['email']);
        }
    }
}
