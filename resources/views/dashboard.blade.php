@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md" id="dashboard-container">
        <!-- Dark Mode Toggle -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-gray-800">Dashboard</h2>
            <button id="darkModeToggle" class="flex items-center bg-gray-800 text-white p-3 rounded-full hover:bg-gray-700 transition duration-300">
                <span id="toggleIcon" class="material-icons mr-2">light_mode</span> <!-- Default to light mode -->
                <span id="toggleText">Dark Mode</span>
            </button>
        </div>

        <!-- Welcome Message -->
        @if (Auth::check())
            <p class="mb-6 text-lg text-gray-600">Welcome to your dashboard, {{ Auth::user()->name }}!</p>
        @else
            <p class="mb-6 text-lg text-gray-600">Welcome to the dashboard! Please note that some features may be limited.</p>
        @endif

        <!-- Statistics Section with Icons -->
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-blue-600 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center">
                <span class="material-icons text-4xl mr-4">event</span>
                <h3 class="text-xl font-semibold">50 Appointments</h3>
            </div>
            <div class="bg-green-600 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center">
                <span class="material-icons text-4xl mr-4">local_hospital</span>
                <h3 class="text-xl font-semibold">40 Consultations</h3>
            </div>
            <div class="bg-red-600 text-white p-6 rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 flex items-center">
                <span class="material-icons text-4xl mr-4">hourglass_empty</span>
                <h3 class="text-xl font-semibold">20 Pending</h3>
            </div>
        </div>

        <!-- Enhanced Recent Activities Section -->
        <div class="mt-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Recent Activities</h3>
            <div class="space-y-4">
                <!-- Activity Item -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex items-center">
                    <span class="material-icons text-blue-500 mr-4">folder_open</span>
                    <div>
                        <p class="text-gray-700 font-semibold">Reviewed 5 patient files</p>
                        <p class="text-gray-500 text-sm">Today at 10:30 AM</p>
                    </div>
                </div>
                <!-- Activity Item -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex items-center">
                    <span class="material-icons text-green-500 mr-4">check_circle</span>
                    <div>
                        <p class="text-gray-700 font-semibold">Completed 3 consultations</p>
                        <p class="text-gray-500 text-sm">Today at 9:00 AM</p>
                    </div>
                </div>
                <!-- Activity Item -->
                <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex items-center">
                    <span class="material-icons text-orange-500 mr-4">schedule</span>
                    <div>
                        <p class="text-gray-700 font-semibold">Scheduled 2 new appointments for next week</p>
                        <p class="text-gray-500 text-sm">Yesterday at 4:45 PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Announcements Section -->
        <div class="mt-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Announcements</h3>
            <div class="bg-teal-600 p-6 rounded-2xl shadow-md text-white flex items-center">
                <span class="material-icons mr-4">announcement</span>
                <div>
                    <p class="font-semibold">Don’t forget to register for the upcoming health conference on November 15!</p>
                </div>
            </div>
        </div>

        <!-- Quick Links Section with Icons -->
        <div class="mt-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Quick Links</h3>
            <div class="flex space-x-6">
                <a href="{{ route('appointments') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300 flex items-center">
                    <span class="material-icons mr-2">calendar_today</span> View Appointments
                </a>
                <a href="{{ route('patients') }}" class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300 flex items-center">
                    <span class="material-icons mr-2">people</span> View Patients
                </a>
                <a href="{{ route('consultations') }}" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300 flex items-center">
                    <span class="material-icons mr-2">medical_services</span> Consultations
                </a>
            </div>
        </div>

        <!-- Chart.js Container Below Quick Links -->
        <div class="mt-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Appointment Trends</h3>
            <canvas id="appointmentsChart" width="300" height="150"></canvas> <!-- Adjusted dimensions -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('appointmentsChart').getContext('2d');
                const appointmentsChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                        datasets: [{
                            label: 'Appointments',
                            data: [12, 19, 3, 5, 2, 3, 10],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Dark Mode Toggle Script
                document.getElementById('darkModeToggle').addEventListener('click', () => {
                    const container = document.getElementById('dashboard-container');
                    container.classList.toggle('bg-gray-800');
                    container.classList.toggle('text-white');
                    container.classList.toggle('bg-white');
                    container.classList.toggle('text-gray-800');

                    // Toggle icons and text for dark mode
                    const toggleIcon = document.getElementById('toggleIcon');
                    const toggleText = document.getElementById('toggleText');

                    if (container.classList.contains('bg-gray-800')) {
                        toggleIcon.innerText = 'nightlight';
                        toggleText.innerText = 'Light Mode';
                    } else {
                        toggleIcon.innerText = 'light_mode';
                        toggleText.innerText = 'Dark Mode';
                    }

                    // Toggle other elements as needed
                    const cards = document.querySelectorAll('.bg-gray-100');
                    cards.forEach(card => {
                        card.classList.toggle('bg-gray-700');
                        card.classList.toggle('text-white');
                    });

                    const announcements = document.querySelector('.bg-teal-600');
                    announcements.classList.toggle('bg-teal-700');

                    const buttons = document.querySelectorAll('a');
                    buttons.forEach(button => {
                        button.classList.toggle('bg-gray-600');
                        button.classList.toggle('bg-gray-300');
                    });
                });
            </script>
        </div>
    </div>
@endsection
