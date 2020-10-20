<?php

namespace App\Http\Livewire;

use App\Events\SendMessage;
use App\Models\Chat;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class LiveChat extends Component
{
    public $text;
    public $chat;
    public $messages;
    public $usercurrent;

    protected $rules = [
        'text' => 'required'
    ];

    public function mount($id){
        $this->text = '';
        $this->usercurrent = Auth::id();
        $this->chat = Chat::with([
            'userrecive:id,name,profile_photo_path',
            'messages'
        ])->find($id);
        $this->messages = $this->chat->messages;
    }

    public function sendMessage(){
        //$this->validate();

        Messages::create([
            'chat_id' => $this->chat->id,
            'user_id' => $this->usercurrent,
            'text' => $this->text,
            'send_date' => date('Y-m-d')
        ]);

        event(new SendMessage($this->usercurrent,$this->text));
        $this->text = '';
    }

    public function render()
    {
        return view('livewire.live-chat')
                ->layout('layouts.app');
    }

}
