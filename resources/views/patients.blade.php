@extends('layouts.app')

@section('title', 'My Patients')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">My Patients</h2>
        <p>Access and manage your patients&apos; information below.</p>

        <!-- Displaying a list of patients -->
        <div class="mt-6">
            <table class="min-w-full border border-gray-200">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Patient Name</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Contact Number</th>
                        <th class="border border-gray-300 px-4 py-2">Date of Registration</th>
                        <th class="border border-gray-300 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $patient['name'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $patient['email'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $patient['contact_number'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $patient['created_at'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">View Profile</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">
                                No patients found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
