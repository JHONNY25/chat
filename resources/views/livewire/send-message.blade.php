<div class="bg-gray-700 w-full py-3 px-3 flex items-center justify-between">
    <input id="message" wire:model="text" wire:keydown.enter="sendMessage" aria-placeholder="Escribe un mensaje aquí" placeholder="Escribe un mensaje aquí"
        class="py-2 mx-3 pl-5 block w-full rounded-full bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900" type="text" name="message" required/>
    @if(!empty($text))
        <button wire:click="sendMessage" class="outline-none focus:outline-none">
            <svg class="text-gray-900 h-7 w-7 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
            </svg>
        </button>
    @endif
</div>


