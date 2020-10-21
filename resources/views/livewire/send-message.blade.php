<div class="bg-gray-700 w-full py-3 px-3 flex items-center justify-between">
    <button class="outline-none focus:outline-none">
        <svg class="text-gray-900 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
        </svg>
    </button>
    <input wire:model="text" aria-placeholder="Escribe un mensaje aquí" placeholder="Escribe un mensaje aquí"
        class="py-2 mx-3 pl-5 block w-full rounded-full bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900" type="text" name="message" required/>

    <button wire:click="sendMessage" class="{{ empty($text) ? 'hidden' : 'block' }} outline-none focus:outline-none">
        <svg class="text-gray-900 h-7 w-7 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
        </svg>
    </button>
</div>

