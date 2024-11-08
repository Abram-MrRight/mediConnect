<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ChatbotServices
{
    public function processMessage($message, $role)
    {
        // Define a role-based response if needed before OpenAI
        switch ($role) {
            case 0: // Patient
                return $this->generateResponse("Patient: $message");
            case 1: // Doctor
                return $this->generateResponse("Doctor: $message");
            case 2: // Admin
                return $this->generateResponse("Admin: $message");
            default:
                return "Role not recognized.";
        }
    }

    private function generateResponse($message)
{
    $apiKey = config('services.openai.key');

    $response = Http::withHeaders([
        'Authorization' => "Bearer $apiKey",
    ])->post('https://api.openai.com/v1/chat/completions', [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            ['role' => 'system', 'content' => 'You are a helpful assistant.'],
            ['role' => 'user', 'content' => $message],
        ],
        'max_tokens' => 100,
    ]);

    // Log the response for debugging
    logger()->info('OpenAI response:', $response->json());

    if ($response->successful()) {
        return $response->json()['choices'][0]['message']['content'];
    } else {
        return "There was an issue communicating with OpenAI.";
    }
}

}