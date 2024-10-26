<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        // Simulated data for demonstration
        $doctors = [
            ['id' => 1, 'name' => 'Dr. Dorothy', 'specialty' => 'Cardiology'],
            ['id' => 2, 'name' => 'Dr. Harry', 'specialty' => 'Pediatrics'],
        ];

        return view('doctors.index', compact('doctors'));
    }
}
