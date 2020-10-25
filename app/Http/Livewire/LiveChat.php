<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class LiveChat extends Component
{
    public $userchatid;
    public $messages;
    public $usercurrent;

    protected $listeners = ['messageSent' => 'refresh'];

    public function refresh(){ }

    public function mount($id){
        $this->usercurrent = Auth::id();
        $this->userchatid = $id;
    }

    public function render()
    {
        if(Chat::where('user_recive',$this->userchatid)->orWhere('user_sent',$this->userchatid)->exists()){
            
            return view('livewire.live-chat',[
                    'chat' => Chat::with([
                        'userrecive:id,name,profile_photo_path',
                        'usersent:id,name,profile_photo_path',
                        'messages'
                    ])->where('user_recive',$this->userchatid)
                    ->orWhere('user_sent',$this->userchatid)
                    ->first()
                ])->layout('layouts.app');
        }else {
            
            return view('livewire.live-chat',[
                    'user' => User::select('id','name','profile_photo_path')->find($this->userchatid)
                ])->layout('layouts.app');
        }
    }

}
