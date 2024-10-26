<!-- resources/views/profile.blade.php -->
@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Profile</h2>

        @if (Auth::check())
            <div class="profile-section">
                <img src="{{ asset('path/to/profile/image.jpg') }}" alt="Profile Picture" class="profile-pic">
                <div class="profile-info">
                    <span>Dr. {{ Auth::user()->name }}</span>
                    <span>Doctor</span>
                </div>
            </div>
        @else
            <p>You are not logged in. Please log in to view your profile.</p>
        @endif
    </div>
@endsection
