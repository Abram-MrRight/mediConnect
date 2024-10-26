<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthRecordsController extends Controller
{
    public function index()
    {
        return view('healthrecords.index');
    }
}
