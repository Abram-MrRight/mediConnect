<!-- resources/views/partials/sidebar.blade.php -->
<aside class="w-64 h-screen bg-gray-800 text-white flex flex-col">
    <div class="p-4 text-center border-b border-gray-700">
        <img src="{{ asset('images/mediconnect.png') }}" alt="mediConnect Logo" class="w-48 mx-auto">
        <!-- You can also try w-56 or w-64 for an even larger logo -->
    </div>
    <nav class="mt-4 flex-grow">
        <ul>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('doctors.dashboard') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors.dashboard') }}" class="flex items-center">
                    <span class="material-icons">dashboard</span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('doctors.appointments') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors.appointments') }}" class="flex items-center">
                    <span class="material-icons">calendar_today</span>
                    <span class="ml-3">Appointments</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('profile') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('profile.edit') }}" class="flex items-center">
                    <span class="material-icons">person</span>
                    <span class="ml-3">Profile</span>
                </a>
            </li>
            {{-- @if (auth()->user()->role === 'patient') --}}
                <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('doctors') ? 'bg-gray-700' : '' }}">
                    <a href="{{ route('doctors') }}" class="flex items-center">
                        <span class="material-icons">local_hospital</span>
                        <span class="ml-3">Doctors</span>
                    </a>
                </li>
            {{-- @elseif (auth()->user()->role === 'doctor') --}}
                <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('patients') ? 'bg-gray-700' : '' }}">
                    <a href="{{ route('doctors.patients') }}" class="flex items-center">
                        <span class="material-icons">group</span>
                        <span class="ml-3">Patients</span>
                    </a>
                </li>
            {{-- @endif --}}
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('health_records') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors.health_records') }}" class="flex items-center">
                    <span class="material-icons">payment</span>
                    <span class="ml-3">Medical Records</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('health_records') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors.prescriptions') }}" class="flex items-center">
                    <span class="material-icons">medication</span>
                    <span class="ml-3">Prescriptions</span>
                </a>
            </li>
            <li class="p-4 hover:bg-gray-700 {{ request()->routeIs('settings') ? 'bg-gray-700' : '' }}">
                <a href="{{ route('doctors.notifications') }}" class="flex items-center">
                    <span class="material-icons">message</span>
                    <span class="ml-3">Notifications</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
