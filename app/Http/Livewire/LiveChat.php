<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveChat extends Component
{
    public $message;
    public $chat;

    public function mount($name){
        $this->message = '';
        $this->chat = $name;
    }

    public function sendMessage(){

    }

    public function render()
    {
        return view('livewire.live-chat')
                ->layout('layouts.app');
    }

}
