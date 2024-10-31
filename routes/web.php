<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\Doctor\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('my-appointments', [AppointmentsController::class, 'index'])->name('myAppointments');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('doctor')->name('doctor.')->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('appointments', [HomeController::class, 'appointments'])->name('appointments');
    Route::get('patients', [HomeController::class, 'patients'])->name('patients');
    Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors');
    Route::get('/doctors/dashboard', [DoctorDashboardController::class, 'index'])->name('doctors.dashboard');
    Route::get('health-records', [HomeController::class, 'healthRecords'])->name('healthRecords');
    Route::get('prescriptions', [HomeController::class, 'prescriptions'])->name('prescriptions');
    Route::get('notifications', [HomeController::class, 'notifications'])->name('notifications');
});

Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors');

Route::get('/doctors/dashboard', [DoctorsController::class, 'dashboard'])->name('doctors.dashboard');

// Show all appointments for the authenticated user
Route::get('/appointments', [AppointmentsController::class, 'index'])->name('myappointments');

// Show the form to create a new appointment
Route::get('/appointments/create', [AppointmentsController::class, 'create'])->name('appointments.create');

// Store the new appointment
Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');

require __DIR__.'/auth.php';

