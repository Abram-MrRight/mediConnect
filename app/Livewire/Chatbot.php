<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Chatbot extends Component
{
    public $message = '';
    public $responses = []; // Initialize as an empty array

    public function sendMessage()
    {
        // Validate the message
        $this->validate(['message' => 'required|string|max:255']);

        // Call the chatbot service to process the message
        $userRole = auth()->Auth::user()()->role; // Correctly accessing user role
        $response = app(\App\Services\ChatbotServices::class)->processMessage($this->message, $userRole);

        // Store the user and bot messages
        $this->responses[] = ['type' => 'user', 'message' => $this->message];
        $this->responses[] = ['type' => 'bot', 'message' => $response];

        // Clear the message input
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chatbot', [
            'responses' => $this->responses // Pass responses to the view
        ]);
    }
}
