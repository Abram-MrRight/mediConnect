<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Specify the table name since it's different from the default convention
    protected $table = 'new_appointments';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_time',
        'status',
        'notes',
    ];

    // Relationship with Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    // Relationship with Patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
