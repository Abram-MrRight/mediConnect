@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

        @if (Auth::check())
            <p class="mb-4">Welcome to your dashboard, {{ Auth::user()->name }}!</p>
        @else
            <p class="mb-4">Welcome to the dashboard! Please note that some features may be limited.</p>
        @endif

        <div class="mt-6 grid grid-cols-3 gap-4">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">50 Appointments</h3>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">40 Consultations</h3>
            </div>
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">20 Pending</h3>
            </div>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-bold mb-2">Recent Activities</h3>
            <ul class="list-disc pl-5">
                <li>Reviewed 5 patient files.</li>
                <li>Completed 3 consultations today.</li>
                <li>Scheduled 2 new appointments for next week.</li>
            </ul>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-bold mb-2">Announcements</h3>
            <div class="bg-yellow-200 p-4 rounded-lg mb-4">
                <p class="font-semibold">Don't forget to register for the upcoming health conference on November 15!</p>
            </div>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-bold mb-2">Quick Links</h3>
            <div class="flex space-x-4">
                <a href="{{ route('appointments') }}" class="bg-blue-500 text-white p-2 rounded-lg">View Appointments</a>
                <a href="{{ route('patients') }}" class="bg-green-500 text-white p-2 rounded-lg">View Patients</a>
                <a href="{{ route('consultations') }}" class="bg-red-500 text-white p-2 rounded-lg">Consultations</a>
            </div>
        </div>
    </div>
@endsection
