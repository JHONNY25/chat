<div class="grid grid-cols-3 min-w-full min-h-screen">
    <div class="col-span-1 bg-gray-800">
        <div class="border-b bg-gray-700">
            @livewire('navigation-dropdown')
        </div>
        <div class="border-b border-gray-700">
            <div class="my-3 mx-3 ">
                <div class="relative text-gray-600 focus-within:text-gray-400">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <button type="submit" class="p-1 outline-none focus:outline-none focus:shadow-outline">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                      </span>
                    <input aria-placeholder="Busca tus amigos o contacta nuevos" placeholder="Busca tus amigos o contacta nuevos"
                    class="py-2 pl-10 block w-full  rounded-full bg-gray-900 outline-none focus:outline-none focus:bg-white focus:text-gray-900" type="search" name="search" required autocomplete="search" />
                </div>
            </div>
        </div>
        <div>
            <div>
                <a class="hover:bg-gray-700 border-b border-gray-700 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img class="h-10 w-10 rounded-full object-cover"
                    src="https://instagram.fsjd1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/117756684_324341175604256_3627028918051777584_n.jpg?_nc_ht=instagram.fsjd1-1.fna.fbcdn.net&_nc_ohc=D_s2gyyHqLMAX9Vf2md&oh=9613db0350b7734e521da0918c56f824&oe=5F8EF6E2"
                    alt="Jusnito" />
                    <div class="w-full pb-2">
                        <div class="flex justify-between">
                            <span class="block ml-2 font-bold text-base text-gray-200">Juanito</span>
                            <span class="block ml-2 text-gray-300 text-sm">11:43 am</span>
                        </div>
                        <span class="block ml-2 text-gray-200 text-sm">Hola como estas pana</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-span-2 bg-gray-700">

    </div>
</div>
