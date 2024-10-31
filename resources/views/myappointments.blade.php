@extends('layouts.appPatient') <!-- Extend the main patient layout -->

@section('title', 'My Appointments') <!-- Set the title for the page -->

@section('content') <!-- Start the content section -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <!-- Content Section -->
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4">My Appointments</h3> <!-- Section title -->

                <!-- Button to add an appointment -->
                <a href="{{ route('appointments.create') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 mb-4">
                    Add Appointment
                </a>

                @if($appointments->isEmpty()) <!-- Check if there are no appointments -->
                    <p class="text-gray-600">No appointments apparently.</p> <!-- Message when no appointments exist -->
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full border-collapse border border-gray-200">
                            <thead>
                                <tr>
                                    <th class="border border-gray-300 p-2">Doctor</th>
                                    <th class="border border-gray-300 p-2">Appointment Date</th>
                                    <th class="border border-gray-300 p-2">Appointment Time</th>
                                    <th class="border border-gray-300 p-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment) <!-- Loop through appointments -->
                                    <tr>
                                        <td class="border border-gray-300 p-2">{{ $appointment->doctor->name }}</td>
                                        <td class="border border-gray-300 p-2">{{ $appointment->appointment_time->format('Y-m-d') }}</td>
                                        <td class="border border-gray-300 p-2">{{ $appointment->appointment_time->format('h:i A') }}</td>
                                        <td class="border border-gray-300 p-2 {{ $appointment->status === 'Confirmed' ? 'text-green-600' : 'text-red-600' }}">{{ $appointment->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
