<x-app-layout>
    <div class="grid grid-cols-3 min-w-full" style="min-height: 90vh;">
        <div class="col-span-1 bg-gray-800 border-r border-gray-600">
            <div class="">
                @livewire('navigation-dropdown')
            </div>

            @livewire('search-input')

            <div>
                @livewire('user-chat',[
                    'image' => 'https://instagram.fsjd1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/117756684_324341175604256_3627028918051777584_n.jpg?_nc_ht=instagram.fsjd1-1.fna.fbcdn.net&_nc_ohc=D_s2gyyHqLMAX9Vf2md&oh=9613db0350b7734e521da0918c56f824&oe=5F8EF6E2',
                    'name' => 'Juanito',
                    'message' => 'Mensaje de prueba',
                    'time' => '5 hrs'])
            </div>
        </div>
        <div class="col-span-2 bg-gray-700">
            @livewire('dashboard', ['view' => 'Default'])
        </div>
    </div>
</x-app-layout>
