
@if($view === 'Default')
    @livewire('logo-chat')
@elseif($view === 'UserChat')
    @livewire('live-chat')
@endif

