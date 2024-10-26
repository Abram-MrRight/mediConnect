<!-- header.blade.php -->
<header class="header">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #F7F9FD;
        }

        .header__left, .header__right {
            display: flex;
            align-items: center;
        }

        .nav-menu ul {
            list-style-type: none;
            display: flex;
            gap: 1rem;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
        }

        .search-bar input {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

    <div class="header__left">
        <div class="logo">
            <h1>Health-Care</h1>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('appointments') }}">Appointments</a></li>
                <li><a href="{{ route('doctors') }}">Doctors</a></li>
                <li><a href="{{ route('patients') }}">Patients</a></li>
                <li><a href="{{ route('payments') }}">Payments</a></li>
                <li><a href="{{ route('settings') }}">Settings</a></li>
            </ul>
        </nav>
    </div>

    <div class="header__right">
        <div class="search-bar">
            <input type="text" placeholder="Search here..." />
            <button type="submit">
                <i class="icon-search"></i>
            </button>
        </div>

        <div class="date-display">
            {{ \Carbon\Carbon::now()->format('d F, Y') }}
        </div>

        <div class="profile-section">
    <img src="{{ asset('path/to/profile/image.jpg') }}" alt="Profile Picture" class="profile-pic">
    <div class="profile-info">
        @if (Auth::check())
            <span>Dr. {{ Auth::user()->name }}</span>
        @else
            <span>Welcome, Guest</span>
        @endif
        <span>Doctor</span>
    </div>
</div>
