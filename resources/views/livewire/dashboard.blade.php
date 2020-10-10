
@if($view === 'Default')
    <div class="min-h-screen flex justify-center items-center">
        <x-authentication-card-logo class="w-56 h-56 text-6xl"/>
    </div>
@elseif($view === 'UserChat')
    @livewire('live-chat')
@elseif($view === 'Profile')
    @livewire('profile')
@endif

