@extends('layouts.appPatient')

@section('title', 'Add Appointment')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4">Add New Appointment</h3>

                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf <!-- Include CSRF token for security -->
                    
                    <div class="mb-4">
                        <label for="doctor_id" class="block text-sm font-medium text-gray-700">Select Doctor:</label>
                        <select name="doctor_id" id="doctor_id" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">-- Select Doctor --</option>
                            <!-- Assume you have a list of doctors to populate this -->
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }} (Specialty: {{ $doctor->specialty }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="appointment_time" class="block text-sm font-medium text-gray-700">Appointment Date and Time:</label>
                        <input type="datetime-local" name="appointment_time" id="appointment_time" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="notes" class="block text-sm font-medium text-gray-700">Notes:</label>
                        <textarea name="notes" id="notes" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <button type="submit" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                        Create Appointment
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
