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

        <div class="profile-section">
            <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="profile-pic">
            <div class="profile-info">
                @if (Auth::check())
                    <span>Dr. {{ Auth::user()->name }}</span>
                @else
                    <span>Guest</span>
                @endif
                <span>Doctor</span>
            </div>
        </div>
    </div>
</header>
