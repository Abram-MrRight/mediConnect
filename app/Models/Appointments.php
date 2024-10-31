<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_time',
        'status',
        'notes'
    ];

    /**
     * Define the relationship with the User model (patient).
     */
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    /**
     * Define the relationship with the User model (doctor).
     */
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
