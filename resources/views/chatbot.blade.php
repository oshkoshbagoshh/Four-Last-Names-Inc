<!-- resources/views/chatbot.blade.php -->
<div id="chatbot-container" class="fixed bottom-4 right-4 w-80 bg-gray-800 rounded-lg shadow-lg">
    <div class="flex items-center justify-between bg-purple-600 text-white font-bold py-3 px-4 rounded-t-lg">
        <h3>CTV Chatbot</h3>
        <button id="chatbot-close-btn" class="text-white hover:text-gray-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div id="chatbot-content" class="p-4 h-80 overflow-y-auto">
        <!-- Chatbot content will be dynamically added here -->
    </div>
    <div class="flex items-center bg-gray-700 rounded-b-lg">
        <input type="text" id="chatbot-input" class="bg-gray-700 text-white py-3 px-4 flex-1 focus:outline-none"
            placeholder="Type your message..." />
        <button id="chatbot-send-btn"
            class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-r-lg">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    // JavaScript code to handle user input and display chatbot responses
    // You'll need to make AJAX calls to the BotMan endpoint and update the chatbot content
    // TODO: Implement the chatbot functionality
    // Get the chatbot container and its elements
    const chatbotContainer = document.getElementById('chatbot-container');
    const chatbotContent = document.getElementById('chatbot-content');
    const chatbotInput = document.getElementById('chatbot-input');
    const chatbotSendBtn = document.getElementById('chatbot-send-btn');
    const chatbotCloseBtn = document.getElementById('chatbot-close-btn');
</script>
