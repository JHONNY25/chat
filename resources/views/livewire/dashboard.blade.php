
@if($view === 'Default')
    <div class="flex justify-center items-center" style="min-height: 70vh;">
        <x-authentication-card-logo class="w-56 h-56 text-6xl"/>
    </div>
@elseif($view === 'UserChat')
    @livewire('live-chat')
@elseif($view === 'Profile')
    @livewire('profile')
@endif

