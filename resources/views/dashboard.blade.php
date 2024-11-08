<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Patient Dashboard') }}
        </h2>
    </x-slot>

    <div class="relative py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:featured-doctors :speciality_id="0"/>
                <livewire:specialist-cards/>
                <livewire:recent-appointments/>
                {{-- Chatbot Floating Button and UI --}}
                <div id="chatbot-container" class="fixed bottom-4 right-4">
                    <div id="chatbot" class="bg-white shadow-lg rounded-lg w-80">
                        <div class="p-4 border-b">
                            <h3 class="font-semibold">Chatbot</h3>
                            <button id="close-chatbot" class="absolute top-2 right-2 text-gray-600">×</button>
                        </div>
                        <div id="chatbot-messages" class="p-4" style="height: 300px; overflow-y: auto;">
                            <!-- Messages will be dynamically added here -->
                            @foreach ($responses as $response)
                                @if ($response['type'] == 'user')
                                    <!-- Sender message -->
                                    <div class="flex justify-start mb-2">
                                        <div class="p-2 bg-blue-100 rounded inline w-[75%]">{{ $response['message'] }}</div>
                                    </div>
                                @else
                                    <!-- Receiver message -->
                                    <div class="flex justify-end mb-2">
                                        <div class="p-2 bg-green-100 rounded inline w-[75%]">{{ $response['message'] }}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="p-4 border-t">
                            <input id="chat-input" type="text" placeholder="Type a message..." class="border rounded w-full">
                            <button id="send-chat" class="bg-blue-500 text-white rounded px-4 py-2 mt-2">Send</button>
                        </div>
                    </div>
                    <button id="chatbot-button" class="bg-blue-500 text-white rounded-full p-3 shadow-lg">
                        💬
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        #chatbot {
            display: none;
        }
    </style>

    <script>
        const chatData = @json($responses);
        
        document.addEventListener("DOMContentLoaded", function() {
  const chatData = @json($responses);

  const chatbotButton = document.getElementById("chatbot-button");
  const chatbotContainer = document.getElementById("chatbot-container");
  const chatbot = document.getElementById("chatbot");
  const closeChatbot = document.getElementById("close-chatbot");
  const chatInput = document.getElementById("chat-input");
  const chatMessages = document.getElementById("chatbot-messages");
  const sendChat = document.getElementById("send-chat");

  // Show the chatbot UI when button is clicked
  chatbotButton.addEventListener("click", () => {
    chatbot.classList.toggle("hidden");
    chatbot.style.display = chatbot.style.display === "block" ? "none" : "block";
  });

  // Close the chatbot UI
  closeChatbot.addEventListener("click", () => {
    chatbot.style.display = "none";
  });

  // Send a message
  sendChat.addEventListener("click", () => {
    const messageText = chatInput.value.trim();
    if (messageText) {
      const messageDiv = document.createElement("div");
      messageDiv.textContent = messageText;
      messageDiv.className = "p-2 my-2 bg-blue-100 rounded";
      chatMessages.appendChild(messageDiv);
      chatInput.value = ""; // Clear input field
      chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll to bottom

      fetch('http://127.0.0.1:8000/chatbot/respond', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
         },
        body: JSON.stringify({ message: messageText })
      })
      .then(response => response.json())
      .then(data => {
        const botMessageDiv = document.createElement("div");
        botMessageDiv.textContent = data.response;
        botMessageDiv.className = "p-2 my-2 bg-green-100 rounded";
        chatMessages.appendChild(botMessageDiv);
      })
      .catch(error => {
        console.error("Error sending message:", error);
        // Display an error message to the user
      });
    }
  });
});
    </script>
</x-app-layout>
