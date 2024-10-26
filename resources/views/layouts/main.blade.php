<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'mediConnect')</title>
    @vite('resources/css/app.css') <!-- Link to Tailwind CSS (if using Vite) -->
    <style>
        html, body {
            height: 100%; /* Full height for the body */
            margin: 0; /* Remove default margin */
        }

        body {
            display: flex;
            flex-direction: column; /* Stack header, content, and footer vertically */
        }

        .header {
            height: 100px; /* Set header height */
        }

        .content {
            flex: 1; /* Allow the content area to grow */
            display: flex; /* Flex container for sidebar and main content */
            min-height: calc(100vh - 200px); /* Minimum height considering header and footer */
        }

        .sidebar {
            width: 250px; /* Fixed width for sidebar */
            background-color: #f8fafc; /* Example background color */
        }

        .main-content {
            flex: 1; /* Fill remaining space */
            padding: 1rem; /* Add padding */
            background-color: #fff; /* Main content background */
            min-height: calc(100vh - 200px); /* Minimum height for the main content */
        }

        .placeholder {
            text-align: center; /* Center the placeholder text */
            margin-top: 50px; /* Margin for spacing */
            color: #999; /* Light color for placeholder */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <div class="header">
        @include('partials.header')
    </div>

    <div class="content"> <!-- This div grows to fill the remaining space -->

        <!-- Sidebar -->
        <div class="sidebar">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')

            <!-- Example Content Here -->
            <h1 class="text-3xl font-bold mb-4">Dashboard Overview</h1>
            <p class="mb-4">Welcome to the mediConnect dashboard! Here you can manage your appointments, view patient information, and track your consultations.</p>
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

            <h2 class="text-2xl font-bold mb-4">Recent Activities</h2>
            <ul class="list-disc pl-5">
                <li>Reviewed 5 patient files.</li>
                <li>Completed 3 consultations today.</li>
                <li>Scheduled 2 new appointments for next week.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4">Announcements</h2>
            <div class="bg-yellow-200 p-4 rounded-lg mb-4">
                <p class="font-semibold">Don't forget to register for the upcoming health conference on November 15!</p>
            </div>

            <h2 class="text-2xl font-bold mb-4">Profile Information</h2>
            <div class="bg-gray-100 p-4 rounded-lg">
                <p><strong>Name:</strong> Dr. John Doe</p>
                <p><strong>Specialty:</strong> General Practitioner</p>
                <p><strong>Email:</strong> johndoe@example.com</p>
            </div>

            <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
            <div class="bg-gray-100 p-4 rounded-lg">
                <p><strong>Office Phone:</strong> (555) 123-4567</p>
                <p><strong>Office Address:</strong> 123 Health St, Wellness City, HC 12345</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
