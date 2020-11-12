<?php

namespace App\Http\Livewire;

use App\Events\SendMessage as EventsSendMessage;
use App\Events\Writing;
use App\Models\Chat;
use App\Models\Messages;
use Carbon\Carbon;
use Livewire\Component;

class SendMessage extends Component
{
    public $text;
    public $chat;
    public $user;
    public $userchat;

    protected $rules = [
        'text' => 'required'
    ];

    public function mount($userchat,$user){
        $this->text = '';
        $this->userchat = $userchat;
        if(Chat::where('user_recive',$userchat)->orWhere('user_sent',$userchat)->exists()){
            $this->chat = Chat::select('id')->where('user_recive',$userchat)->orWhere('user_sent',$userchat)->first();
        }
        $this->user = $user;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // example user writing with livewire using wire:keydown
    /* public function userWriting()
    {
        if(strlen($this->text) > 0){
            event(new Writing($this->user->name,$this->user->id));
        }else{
            event(new Writing());
        }
    } */

    public function sendMessage(){
        $this->validate();

        if(!$this->chat){
            $this->chat = Chat::create([
                'user_recive' => $this->userchat,
                'user_sent' => $this->user->id,
            ]);
        }

        Messages::create([
            'chat_id' => $this->chat->id,
            'user_id' => $this->user->id,
            'text' => $this->text,
            'send_date' => Carbon::now()
        ]);

        $this->emit('messageSent');

        event(new EventsSendMessage((int)$this->user->id,$this->text));
        $this->text = '';
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
