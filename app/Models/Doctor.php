<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'specialization',
        'license_number',
        'experience_years',
        'clinic_address',
        'available_days',
        'notes',
    ];

    // Relationships
    public function patients()
    {
        return $this->hasMany(Patient::class, 'preferred_doctor_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}