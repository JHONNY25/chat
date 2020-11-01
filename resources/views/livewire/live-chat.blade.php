<div class="w-full">
    <div class="flex items-center bg-gray-700 border-r border-gray-800 ml-3 my-3">
    @if (isset($user))
        <img class="h-10 w-10 rounded-full object-cover"
        src="{{ $user->profile_photo_url }}"
        alt="{{ $user->name }}" />
        <span class="block ml-2 font-bold text-base text-gray-200">{{ $user->name }}</span>
    @else
        <img class="h-10 w-10 rounded-full object-cover"
        src="{{ $chat->userrecive->id === $usercurrent ? $chat->usersent->profile_photo_url : $chat->userrecive->profile_photo_url }}"
        alt="{{ $chat->userrecive->id === $usercurrent ? $chat->usersent->name : $chat->userrecive->name }}" />
        <span class="block ml-2 font-bold text-base text-gray-200">{{ $chat->userrecive->id === $usercurrent ? $chat->usersent->name : $chat->userrecive->name }}</span>
    @endif
    </div>
    <div class="bg-gray-800 w-full overflow-y-auto p-10" style="height: 750px;">
        <ul>
        @if (isset($user))
            <div class="w-full flex text-center">
                <div class="w-full px-5 py-2 my-2 text-white text-center text-3xl">
                    No existe una conversación, se el primero en conversar!!
                </div>
            </div>
        @else
            @foreach($chat->messages as $message)
                <li class="clearfix2">
                    <div class="w-full flex {{ $message->user_id === $usercurrent ? 'justify-end' : 'justify-start' }}">
                        <div class="bg-gray-700 rounded px-5 py-2 my-2 text-white relative" style="max-width: 300px;">
                            {{ $message->text }}
                            <div class="absolute w-0 h-0"
                            style="border-bottom: 15px solid transparent;
                                top: 0;
                                {{ $message->user_id === $usercurrent ?
                                    'right: -25px;
                                    border-left: 15px solid #374151;
                                    border-right: 15px solid transparent;' :
                                    'left: -25px;
                                    border-left: 15px solid transparent;
                                    border-right: 15px solid #374151;'  }}"></div>
                        </div>
                    </div>
                </li>
            @endforeach
        @endif
        </ul>
    </div>

    @livewire('send-message',['userchat' => $userchatid,'user' => $usercurrent])

    <script>

        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;

        var pusher = new Pusher('2cac1339bd1bc2cdc08c', {
          cluster: 'us2'
        });

        var channel = pusher.subscribe('livechat-channel');
        channel.bind('livechat-event', function(data) {
          window.livewire.emit('reciveMessage');
        });
      </script>
</div>


