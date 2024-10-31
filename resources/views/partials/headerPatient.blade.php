<header class="header">
    <style>
        
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #F7F9FD;
            box-shadow: 4px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header__left, .header__right {
            display: flex;
            align-items: center;
        }

        .center-links {
            display: flex;
            gap: 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            color: #333;
        }

        .center-links a {
            text-decoration: none;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .center-links a:hover {
            background-color: #e0f7fa;
            color: #00796b;
        }

        .active-link {
            background-color: #00796b;
            color: #fff;
        }

        .date-display {
            background-color: #e0f7fa;
            color: #00796b;
            padding: 0.2rem 0.5rem;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.9rem;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-right: 1rem;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .profile-pic {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

    <div class="header__left">
        <div class="logo" style="margin-right: 1rem;">
            <img src="{{ asset('images/logo.png') }}" alt="Health-Care Logo" style="height: 40px; width: auto; border-radius: 60px;">
        </div>
    </div>

    <!-- Center Links Section -->
    <nav class="center-links">
        <a href="#" class="active-link">Dashboard</a> 
        <a href="{{ route('myAppointments') }}">My Appointments</a>
        {{-- {{ route('articles') }} --}}
        <a href="">Articles</a>
    </nav>

    <div class="header__right">
        <div class="date-display">
            <span>{{ \Carbon\Carbon::now()->format('d F, Y') }}</span>
        </div>

        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                         this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</header>
