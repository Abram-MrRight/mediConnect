<!-- resources/views/layouts/main.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard Overview')

@section('content')
    <!-- Custom Dashboard Content -->
    <h1 class="text-3xl font-bold mb-4">Dashboard Overview</h1>
    <p class="mb-4">Welcome to the mediConnect dashboard! Here you can manage your appointments, view patient information, and track your consultations.</p>

    <!-- Dashboard Statistics -->
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Appointments</h3>
            <p>50 upcoming appointments</p>
        </div>
        <div class="bg-green-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Consultations</h3>
            <p>40 completed consultations</p>
        </div>
        <div class="bg-red-500 text-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">Pending Tasks</h3>
            <p>20 tasks pending review</p>
        </div>
    </div>

    <!-- Additional Sections -->
    <h2 class="text-2xl font-bold mt-6">Recent Activities</h2>
    <ul class="list-disc pl-5">
        <li>Reviewed 5 patient files.</li>
        <li>Completed 3 consultations today.</li>
        <li>Scheduled 2 new appointments for next week.</li>
    </ul>

    <!-- Announcements Section -->
    <h2 class="text-2xl font-bold mt-6">Announcements</h2>
    <div class="bg-yellow-200 p-4 rounded-lg mb-4">
        <p class="font-semibold">Don't forget to register for the upcoming health conference on November 15!</p>
    </div>

    <!-- Profile Information -->
    <h2 class="text-2xl font-bold mt-6">Profile Information</h2>
    <div class="bg-gray-100 p-4 rounded-lg">
        <p><strong>Name:</strong> Dr. John Doe</p>
        <p><strong>Specialty:</strong> General Practitioner</p>
        <p><strong>Email:</strong> johndoe@example.com</p>
    </div>
@endsection
