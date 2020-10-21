<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveChat extends Component
{
    public $chatid;
    public $messages;
    public $usercurrent;

    protected $listeners = ['messageSent' => 'noop'];

    public function noop(){}

    public function mount($id){
        $this->usercurrent = Auth::id();
        $this->chatid = $id;
    }

    public function render()
    {
        return view('livewire.live-chat',[
                    'chat' => Chat::with([
                        'userrecive:id,name,profile_photo_path',
                        'usersent:id,name,profile_photo_path',
                        'messages'
                    ])->find($this->chatid)
                ])
                ->layout('layouts.app');
    }

}
