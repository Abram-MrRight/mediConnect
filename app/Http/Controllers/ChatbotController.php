<?php

namespace App\Http\Controllers;

use App\Services\ChatbotServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    protected $chatbotServices;

    public function __construct(ChatbotServices $chatbotServices)
    {
        $this->chatbotServices = $chatbotServices;
    }

    public function respond(Request $request)
{
    try {
        // Retrieve user message from the request
        $userMessage = $request->input('message');

        // Process message and generate response
        // Example: response from chatbot logic
        $responseMessage = "Hello, you said: " . $userMessage;

        return response()->json(['response' => $responseMessage]);
    } catch (\Exception $e) {
        // Log the error for debugging
        Log::error('Error in chatbot respond:', ['error' => $e->getMessage()]);

        // Return JSON error response
        return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
    }
}

}
