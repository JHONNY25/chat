<ul class="overflow-auto" style="height: 500px;">
    <li>
        @php
            $today = Carbon\Carbon::now();
        @endphp
        @foreach ($userschats as $chat)
            <a href="{{ '/chat/'.$chat->userrecive->id }}" class="chat hover:bg-gray-700 border-b border-gray-700 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img class="h-10 w-10 rounded-full object-cover"
                src="{{ $chat->userrecive->id === $usercurrent ? $chat->usersent->profile_photo_url : $chat->userrecive->profile_photo_url }}"
                alt="{{ $chat->userrecive->id === $usercurrent ? $chat->usersent->name : $chat->userrecive->name }}" />
                <div class="w-full pb-2">
                    <div class="flex justify-between">
                        <span class="flex items-center ml-2 font-bold text-base text-gray-200">
                            {{ $chat->userrecive->id === $usercurrent ? $chat->usersent->name : $chat->userrecive->name }}
                        </span>
                        <span class="block ml-2 text-gray-300 text-sm"> {{ 'Hace '.str_replace('después','',$today->diffForHumans($chat->messages[0]->send_date)) }}</span>
                    </div>
                    <span class="block ml-2 text-gray-200 text-sm"> {{ $chat->messages[0]->text }}</span>
                </div>
            </a>
        @endforeach
    </li>
</ul>


