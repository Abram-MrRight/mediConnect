<header class="header">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #F7F9FD;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header__left {
            display: flex;
            align-items: center;
        }

        .date-display {
            background-color: #e0f7fa; /* Light teal background */
            color: #00796b; /* Dark teal text color */
            padding: 0.2rem 0.2rem;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.9rem;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Soft shadow */
            margin-right: 1rem;
            align-items: center;
            gap: 5rem;
        }

        .date-display span {
            display: inline-block;
            font-family: 'Arial', sans-serif; /* Use a modern sans-serif font */
            letter-spacing: 0.5px; /* Slight letter spacing */
            align-items: center;
        }

        .header__right {
            display: flex;
            align-items: center;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-grow: 1; /* Allow search bar to grow and occupy space */
            justify-content: center; /* Center the search bar */
        }

        .search-bar input {
            padding: 0.5rem; /* Reduced padding */
            border: 1px solid #007BFF; /* Border color for visibility */
            border-radius: 20px; /* Increased border radius */
            width: 300px; /* Adjusted width for visibility */
            transition: border 0.3s ease; /* Added transition for better interaction */
            background-color: #f0f8ff; /* Light background color for the input */
        }

        .search-bar input:focus {
            border: 1px solid #0056b3; /* Darker border color on focus */
            outline: none; /* Remove outline on focus */
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

        .brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
    </style>

    <div class="header__left">
        <div class="logo" style="margin-right: 1rem;">
            <img src="{{ asset('images/logo.png') }}" alt="Health-Care Logo" style="height: 40px; width: auto; border-radius: 60px;">
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Search..." />
        <button type="submit">
            <i class="icon-search"></i>
        </button>
    </div>

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

                    <!-- Authentication -->
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

        {{-- <div class="profile-section">
            <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="profile-pic">
            <div class="profile-info">
                @if (Auth::check())
                    <span>Dr. {{ Auth::user()->name }}</span>
                @else
                    <span>Guest</span>
                @endif
            </div>
        </div> --}}
    </div>
</header>
