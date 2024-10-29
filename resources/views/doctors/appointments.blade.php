<!-- resources/views/appointments.blade.php -->

@extends('layouts.app')

@section('title', 'Appointments')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Appointments</h2>
        <p>Here you can manage your appointments.</p>

        <!-- Example of displaying a list of appointments -->
        <div class="mt-6">
            <table class="min-w-full border border-gray-200">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                        <th class="border border-gray-300 px-4 py-2">Time</th>
                        <th class="border border-gray-300 px-4 py-2">Patient</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Replace with dynamic data as needed -->
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2024-10-27</td>
                        <td class="border border-gray-300 px-4 py-2">10:00 AM</td>
                        <td class="border border-gray-300 px-4 py-2">John Doe</td>
                        <td class="border border-gray-300 px-4 py-2">Confirmed</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">2024-10-28</td>
                        <td class="border border-gray-300 px-4 py-2">11:00 AM</td>
                        <td class="border border-gray-300 px-4 py-2">Jane Smith</td>
                        <td class="border border-gray-300 px-4 py-2">Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
