<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor; // Import Doctor model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    // Show all appointments for the authenticated user
    public function index()
    {
        // Assuming you want to fetch appointments related to the authenticated patient
        $appointments = Appointment::where('patient_id', Auth::id())
            ->with('doctor') // Assuming you have a relationship defined
            ->get();

        return view('myappointments', ['appointments' => $appointments]);
    }

    // Show the form to create a new appointment
    public function create()
    {
        // Get the list of doctors to populate the select dropdown
        $doctors = Doctor::all(); // Make sure you have a Doctor model to retrieve this data
        return view('appointments.create', ['doctors' => $doctors]);
    }

    // Store a new appointment
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_time' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        // Create a new appointment
        Appointment::create([
            'patient_id' => Auth::id(), // Set the patient ID to the authenticated user
            'doctor_id' => $request->doctor_id,
            'appointment_time' => $request->appointment_time,
            'status' => 'Pending', // Set the initial status
            'notes' => $request->notes,
        ]);

        return redirect()->route('myappointments')->with('success', 'Appointment created successfully.');
    }
}
