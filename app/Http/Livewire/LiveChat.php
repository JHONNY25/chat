<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveChat extends Component
{
    public $userchatid;
    public $messages;
    public $usercurrent;
    public $userWriting;

    protected $listeners = [
        'messageSent' => 'refresh',
        'reciveMessage' => 'refresh',
        'userWriting' => 'userWriting',
    ];

    public function mount($id){
        $this->usercurrent = Auth::user();
        $this->userchatid = $id;
        $this->userWriting = [];
    }

    public function refresh(){ }

    public function userWriting($data){
        if($data !== null){
            $this->userWriting  = $data;
        }else{
            $this->userWriting = [];
        }
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
