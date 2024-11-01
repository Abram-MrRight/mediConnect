<div>
    <div class="chat-container">
        @foreach($responses as $response)
            <div class="{{ $response['type'] }}">
                <strong>{{ $response['type'] === 'user' ? 'You' : 'Chatbot' }}:</strong>
                <p>{{ $response['message'] }}</p>
            </div>
        @endforeach
    </div>

    <input type="text" wire:model="message" placeholder="Type your message..." />
    <button wire:click="sendMessage">Send</button>
</div>
