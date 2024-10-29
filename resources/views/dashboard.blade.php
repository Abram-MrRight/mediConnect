<x-app-layout>
    <x-slot name="header">
        {{-- <div class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-gray-900">{{ __('My Appointments') }}</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">{{ __('Articles') }}</a>
        </div> --}}
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                
            {{ __('Patient Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <!-- Navigation Bar -->

                <!-- Content Section -->
                <div class="p-6">
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold">Our Featured Doctors</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Featured Doctor Example -->
                            <div class="border p-4 rounded-lg">
                                <h4 class="font-bold">Dr. John Doe</h4>
                                <p>Specialty: Cardiology</p>
                                <p>Rating: ★★★★☆</p>
                            </div>
                            <div class="border p-4 rounded-lg">
                                <h4 class="font-bold">Dr. Jane Smith</h4>
                                <p>Specialty: Dermatology</p>
                                <p>Rating: ★★★★★</p>
                            </div>
                            <div class="border p-4 rounded-lg">
                                <h4 class="font-bold">Dr. Emily White</h4>
                                <p>Specialty: Pediatrics</p>
                                <p>Rating: ★★★☆☆</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-lg font-semibold">Our Specialties</h3>
                        <ul class="list-disc list-inside">
                            <li>Cardiology</li>
                            <li>Dermatology</li>
                            <li>Pediatrics</li>
                            <li>Orthopedics</li>
                            <li>Neurology</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold">Recent Appointments</h3>
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
                                    <!-- Sample Data, replace with dynamic data -->
                                    <tr>
                                        <td class="border border-gray-300 p-2">Dr. John Doe</td>
                                        <td class="border border-gray-300 p-2">2024-10-30</td>
                                        <td class="border border-gray-300 p-2">10:00 AM</td>
                                        <td class="border border-gray-300 p-2 text-green-600">Confirmed</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Dr. Jane Smith</td>
                                        <td class="border border-gray-300 p-2">2024-11-01</td>
                                        <td class="border border-gray-300 p-2">02:30 PM</td>
                                        <td class="border border-gray-300 p-2 text-red-600">Pending</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Dr. Emily White</td>
                                        <td class="border border-gray-300 p-2">2024-11-05</td>
                                        <td class="border border-gray-300 p-2">01:15 PM</td>
                                        <td class="border border-gray-300 p-2 text-green-600">Confirmed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
