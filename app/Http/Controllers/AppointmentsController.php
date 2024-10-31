<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppointmentsController extends Controller
{
    // Dummy data for demonstration
    protected $appointments = [
        ['id' => 1, 'patient_name' => 'John Doe', 'date' => '2024-11-01', 'time' => '10:00 AM', 'status' => 'Pending'],
        ['id' => 2, 'patient_name' => 'Jane Smith', 'date' => '2024-11-02', 'time' => '11:00 AM', 'status' => 'Confirmed'],
    ];

    // Show all appointments
    public function index()
    {
        return view('myappointments', ['myappointments' => $this->appointments]);
    }

  

}
