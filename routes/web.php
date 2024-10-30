<?php

use App\Http\Controllers\Doctor\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('doctors')->name('doctors.')->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('appointments', [HomeController::class, 'appointments'])->name('appointments');
    Route::get('health_records', [HomeController::class, 'healthRecords'])->name('health_records');
    Route::get('prescriptions', [HomeController::class, 'prescriptions'])->name('prescriptions');
    Route::get('notifications', [HomeController::class, 'notifications'])->name('notifications');
    Route::get('patients', [HomeController::class, 'patients'])->name('patients');
});

Route::get('doctors', [HomeController::class, 'doctors'])->name('doctors');

require __DIR__.'/auth.php';
