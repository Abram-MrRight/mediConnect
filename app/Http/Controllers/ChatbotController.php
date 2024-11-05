<?php

namespace App\Http\Controllers;

use App\Services\ChatbotServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatbotController extends Controller
{
    protected $chatbotServices;

    public function __construct(ChatbotServices $chatbotServices)
    {
        $this->chatbotServices = $chatbotServices;
    }

    public function respond(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        $message = $request->input('message');

        // Process the message based on user role
        $role = Auth::user()->role; // Assuming the role is stored in the user model
        $response = $this->chatbotServices->processMessage($message, $role);

        return response()->json(['response' => $response]);
    }
}
