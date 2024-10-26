<!-- resources/views/partials/sidebar.blade.php -->
<aside class="w-64 h-screen bg-gray-800 text-white flex flex-col">
    <div class="p-4 text-center font-bold text-xl border-b border-gray-700">
        mediConnect
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
            <!-- Add more links as needed -->
        </ul>
    </nav>
</aside>

