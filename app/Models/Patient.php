<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'emergency_contact_name',
        'emergency_contact_phone',
        'medical_history',
        'allergies',
        'insurance_number',
        'blood_type',
        'preferred_doctor_id', // Foreign key reference to the doctor
        'notes',
    ];

    // Relationship with appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // Relationship with the doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'preferred_doctor_id');
    }
}
