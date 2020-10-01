<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserChat extends Component
{
    public $name;
    public $message;
    public $time;
    public $image;

    public function mount($image,$name,$message,$time){
        $this->name = $name;
        $this->message = $message;
        $this->time = $time;
        $this->image = $image;
    }

    public function render()
    {
        return view('livewire.user-chat');
    }
}
