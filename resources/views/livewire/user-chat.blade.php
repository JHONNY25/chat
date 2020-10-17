<ul>
    <li>
        @foreach ($userschats as $chat)
            <a href="{{ '/chat/'.$chat->userrecive->name }}" class="hover:bg-gray-700 border-b border-gray-700 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img class="h-10 w-10 rounded-full object-cover"
                src="{{ $chat->userrecive->profile_photo_url }}"
                alt="{{ $chat->userrecive->name }}" />
                <div class="w-full pb-2">
                    <div class="flex justify-between">
                        <span class="block ml-2 font-bold text-base text-gray-200">{{ $chat->userrecive->name }}</span>
                        <span class="block ml-2 text-gray-300 text-sm"> {{ $chat->message[0]->send_date }}</span>
                    </div>
                    <span class="block ml-2 text-gray-200 text-sm"> {{ $chat->message[0]->text }}</span>
                </div>
            </a>
        @endforeach
    </li>
</ul>
