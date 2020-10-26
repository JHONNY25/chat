<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchInput extends Component
{
    public $search;
    public $users;

    public function mount(){
        $this->search = '';
        $this->users = [];
    }

    public function render()
    {
        if(strlen($this->search) > 0){
            if(User::where('name','like','%'.$this->search.'%')->exists()){
                $this->users = User::where('name','like','%'.$this->search.'%')->get();
            }
        }else{
            $this->users = [];
        }

        return view('livewire.search-input');
    }
}
