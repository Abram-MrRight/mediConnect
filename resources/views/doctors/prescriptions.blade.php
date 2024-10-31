<!-- resources/views/doctors/prescriptions.blade.php -->

@extends('layouts.app')

@section('title', 'Prescriptions')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Prescriptions</h2>
        
        @if(!empty($prescriptions))
            <table class="min-w-full border border-gray-200">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Patient Name</th>
                        <th class="border border-gray-300 px-4 py-2">Medication</th>
                        <th class="border border-gray-300 px-4 py-2">Dosage</th>
                        <th class="border border-gray-300 px-4 py-2">Frequency</th>
                        <th class="border border-gray-300 px-4 py-2">Prescribed On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prescriptions as $prescription)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $prescription['patient_name'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $prescription['medication'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $prescription['dosage'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $prescription['frequency'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $prescription['prescribed_on'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No prescriptions available.</p>
        @endif
    </div>
@endsection
