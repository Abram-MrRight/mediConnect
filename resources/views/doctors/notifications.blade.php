<!-- resources/views/doctors/notifications.blade.php -->

@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Notifications</h2>
        
        @if(!empty($notifications))
            <ul class="list-disc pl-5">
                @foreach($notifications as $notification)
                    <li class="mb-2">
                        <p>{{ $notification['message'] }}</p>
                        <span class="text-gray-500 text-sm">Received on: {{ $notification['created_at'] }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No new notifications.</p>
        @endif
    </div>
@endsection
