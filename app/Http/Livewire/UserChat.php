<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserChat extends Component
{
    public $chat;
    public $usercurrent;

    protected $listeners = ['messageSent' => 'refresh'];

    public function refresh(){ }

    public function mount(){
        $this->chat = new Chat();
        $this->usercurrent = Auth::id();
    }

    public function render()
    {
        return view('livewire.user-chat',[
            'userschats' => $this->chat->with([
                'userrecive:id,name,profile_photo_path',
                'usersent:id,name,profile_photo_path',
                'messages' => function($query){
                    $query->latest();
                }
                ])->where('user_sent',$this->usercurrent)
                ->orWhere('user_recive',$this->usercurrent)->get()
        ]);
    }
}
