<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminders extends Model
{
    protected $table = 'reminders';

    protected $fillable = ['title', 'user_name', 'time', 'email', 'appointment_id']; 
}
