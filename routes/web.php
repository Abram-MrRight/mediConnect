<?php

use Illuminate\Support\Facades\Route;

// Home route - default route now points to the dashboard without requiring authentication
Route::get('/', function () {
    return view('dashboard');
})->name('home');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Authentication route placeholder
Route::get('/auth', function () {
    return view('auth');
})->name('auth');

// Login route placeholder (for future implementation)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorsController;

// Other routes...

Route::get('/doctors/{id}', [DoctorsController::class, 'show'])->name('doctors.show');

Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');


Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/patients', [PatientsController::class, 'index'])->name('patients');
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy.policy');
Route::get('/terms-of-service', [TermsOfServiceController::class, 'index'])->name('terms.of.service');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/consultations', function () {
    return view('consultations'); // Ensure this points to the correct view file
})->name('consultations');