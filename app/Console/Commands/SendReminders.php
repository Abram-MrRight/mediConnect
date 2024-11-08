<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\ReminderMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Reminders;
use Illuminate\Support\Carbon;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send email reminders';

    public function handle()
    {
        // Example reminders; typically you'd retrieve this from your database
        $reminders = Reminders::all();

        foreach ($reminders as $reminder) {
            if ($reminder->sent){
                continue;
            }
            $today = Carbon::today();
            $diffInDays = $today->diffInDays(Carbon::parse($reminder->time));
            $this->info('Days ' . $diffInDays);
            $this->info('Days ' . $today . $reminder->time);
            // $this->info('Days ' . $diffInDays);
            if ($diffInDays > 1){
                continue;
            }
            Mail::to($reminder['email'])->send(new ReminderMail($reminder));
            $reminder->sent = 1;
            $reminder->save();
            $this->info('Reminder sent to ' . $reminder['email']);
        }
    }
}
