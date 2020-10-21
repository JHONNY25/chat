<?php

namespace App\Http\Livewire;

use App\Events\SendMessage as EventsSendMessage;
use App\Models\Messages;
use Livewire\Component;

class SendMessage extends Component
{
    public $text;
    public $chatid;
    public $user;

    protected $rules = [
        'text' => 'required'
    ];

    public function mount($chatid,$user){
        $this->text = '';
        $this->chatid = $chatid;
        $this->user = $user;
    }

    public function sendMessage(){
        //$this->validate();

        Messages::create([
            'chat_id' => $this->chatid,
            'user_id' => $this->user,
            'text' => $this->text,
            'send_date' => date('Y-m-d')
        ]);

        $this->emit('messageSent');

        event(new EventsSendMessage($this->user,$this->text));
        $this->text = '';
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
