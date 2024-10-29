@extends('layouts.app')

@section('title', 'Patient Health Records')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Patient Health Records</h2>
        <p>View and manage the health records of your patients.</p>

        <!-- Displaying a list of health records -->
        <div class="mt-6">
            <table class="min-w-full border border-gray-200">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Name</th>
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                        <th class="border border-gray-300 px-4 py-2">Details</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($healthRecords as $record)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $record['patient_name'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $record['date'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $record['details'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="#" class="text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
