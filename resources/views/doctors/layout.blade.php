<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Doctor Dashboard')</title>
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
<body>
    @include('layouts.navigation')
    <div class="container mx-auto">
        <header>
            <h1>Doctor's Portal</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('doctors.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('doctors.appointments') }}">Appointments</a></li>
                    <li><a href="{{ route('doctors.health_records') }}">Health Records</a></li>
                    <li><a href="{{ route('doctors.prescriptions') }}">Prescriptions</a></li>
                    <li><a href="{{ route('doctors.notifications') }}">Notifications</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Doctor's Portal</p>
        </footer>
    </div>
</body>
</html>
