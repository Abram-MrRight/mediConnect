<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index()
    {
        // Logic to get appointments (e.g., from the database)
        return view('appointments'); // Return the appointments view
    }
}
