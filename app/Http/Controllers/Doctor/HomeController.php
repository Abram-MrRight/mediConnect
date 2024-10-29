<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HomeController extends Controller
{
    // Dummy data for demonstration
    protected $appointments = [
        ['id' => 1, 'patient_name' => 'John Doe', 'date' => '2024-11-01', 'time' => '10:00 AM', 'status' => 'Pending'],
        ['id' => 2, 'patient_name' => 'Jane Smith', 'date' => '2024-11-02', 'time' => '11:00 AM', 'status' => 'Confirmed'],
    ];

    protected $healthRecords = [
        ['patient_name' => 'John Doe', 'date' => '2024-10-01', 'details' => 'General check-up.'],
        ['patient_name' => 'Jane Smith', 'date' => '2024-10-15', 'details' => 'Follow-up on treatment.'],
    ];

    protected $patients = [
        [
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'contact_number' => '555-1234',
            'created_at' => '2024-29-10'
        ],
        [
            'name' => 'John Smith',
            'email' => 'john.smith@example.com',
            'contact_number' => '555-5678',
            'created_at' => '2024-29-10'
        ],
        [
            'name' => 'Alice Brown',
            'email' => 'alice.brown@example.com',
            'contact_number' => '555-9876',
            'created_at' => '2024-29-10'
        ]
    ];

    protected $doctors = [
        [
            'name' => 'Jane Doe',
            'specialty' => 'Dental'
        ],
        [
            'name' => 'John Smith',
            'specialty' => 'Cardiology',
        ],
        [
            'name' => 'Alice Brown',
            'specialty' => 'Peadiatrics',
        ]
    ];

    protected $prescriptions = [
        [
            'patient_name' => 'John Doe',
            'medication' => 'Ibuprofen',
            'dosage' => '200mg',
            'frequency' => 'Twice a day',
            'prescribed_on' => '2024-10-27'
        ],
        [
            'patient_name' => 'Jane Smith',
            'medication' => 'Amoxicillin',
            'dosage' => '500mg',
            'frequency' => 'Three times a day',
            'prescribed_on' => '2024-10-28'
        ],
    ];

    protected $notifications = [
        ['message' => 'Appointment confirmed for John Doe.', 'created_at' => '2024-10-28'],
        ['message' => 'New health record added for Jane Smith.', 'created_at' => '2024-10-29'],
    ];

    public function dashboard()
    {
        return view('doctors.dashboard');
    }

    public function appointments()
    {
        return view('doctors.appointments', ['appointments' => $this->appointments]);
    }

    public function patients()
    {
        return view('patients', ['patients' => $this->patients]);
    }

    public function doctors()
    {
        return view('doctors', ['doctors' => $this->doctors]);
    }

    public function healthRecords()
    {
        return view('doctors.health_records', ['healthRecords' => $this->healthRecords]);
    }

    public function prescriptions()
    {
        return view('doctors.prescriptions', ['prescriptions' => $this->prescriptions]);
    }

    public function notifications()
    {
        return view('doctors.notifications', ['notifications' => $this->notifications]);
    }
}
