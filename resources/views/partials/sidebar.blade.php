<!-- resources/views/partials/sidebar.blade.php -->
<aside class="w-64 h-screen bg-gray-800 text-white flex flex-col">
    <div class="p-4 text-center border-b border-gray-700">
        <img src="{{ asset('images/mediconnect.png') }}" alt="mediConnect Logo" class="w-48 mx-auto"> <!-- Increased width to w-48 -->
        <!-- You can also try w-56 or w-64 for an even larger logo -->
    </div>
    <nav class="mt-4 flex-grow">
        <ul>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <span class="material-icons">dashboard</span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('appointments') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('appointments') }}" class="flex items-center">
                    <span class="material-icons">calendar_today</span>
                    <span class="ml-3">Appointments</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('profile') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('profile') }}" class="flex items-center">
                    <span class="material-icons">person</span>
                    <span class="ml-3">Profile</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('doctors') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors') }}" class="flex items-center">
                    <span class="material-icons">local_hospital</span>
                    <span class="ml-3">Doctors</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('patients') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('patients') }}" class="flex items-center">
                    <span class="material-icons">group</span>
                    <span class="ml-3">Patients</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('payments') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('payments') }}" class="flex items-center">
                    <span class="material-icons">payment</span>
                    <span class="ml-3">Payments</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('settings') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('settings') }}" class="flex items-center">
                    <span class="material-icons">settings</span>
                    <span class="ml-3">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
