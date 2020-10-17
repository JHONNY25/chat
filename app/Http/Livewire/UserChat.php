<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserChat extends Component
{
    public $chat;

    public function mount(){
        $this->chat = new Chat();
    }

    public function render()
    {
        return view('livewire.user-chat',[
            'userschats' => $this->chat->with([
                'userrecive:id,name,profile_photo_path',
                'message' => function($query){
                    $query->latest();
                }
                ])->where('user_sent',Auth::id())->get()
        ]);
    }
}
