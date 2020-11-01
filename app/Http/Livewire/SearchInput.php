<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchInput extends Component
{
    public $search;

    public function mount(){
        $this->search = '';
    }

    public function render()
    {
        $users = [];
        if(strlen($this->search) > 0){
            if(User::where('name','like','%'.$this->search.'%')->exists()){
                $users = User::where('name','like','%'.$this->search.'%')->get();
            }else{
                $users = [];
            }
        }

        return view('livewire.search-input',[
            'users' => $users
        ]);
    }
}
