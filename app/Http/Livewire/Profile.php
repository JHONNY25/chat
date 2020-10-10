<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Profile extends Component
{
    public function render(Request $request)
    {
        return view('livewire.profile',[
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
