<div>
    <div class="border-b border-gray-700">
        <div class="my-3 mx-3 ">
            <div class="relative text-gray-600 focus-within:text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 outline-none focus:outline-none focus:shadow-outline">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                  </span>
                <input wire:model.debounce.500ms="search" aria-placeholder="Busca tus amigos o contacta nuevos" placeholder="Busca tus amigos o contacta nuevos"
                class="py-2 pl-10 block w-full rounded-full bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900" type="search" name="search" required autocomplete="search" />
            </div>
        </div>
    </div>
    @if (!empty($search))
        @if (!empty($users))
            <h2 class="ml-2 text-gray-200 text-lg my-2">Usuarios</h2>
            @foreach ($users as $user)
                <a href="{{ '/chat/'.$user->id }}" class="hover:bg-gray-700 border-b border-gray-700 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img class="h-10 w-10 rounded-full object-cover"
                    src="{{ $user->profile_photo_url }}"
                    alt="{{ $user->name }}" />
                    <div class="w-full pb-2 flex items-center">
                        <span class="block ml-2 font-bold text-base text-gray-200">{{ $user->name }}</span>
                    </div>
                </a>
            @endforeach
        @else
            <span class="hover:bg-gray-700 border-b border-gray-700 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <div class="w-full pb-2 flex justify-center">
                    <span class="block ml-2 font-bold text-base text-gray-200">No hay resultados</span>
                </div>
            </span>
        @endif
    @endif
</div>
