<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchInput extends Component
{
    public $search;

    public function mount(){
        $this->search = '';
    }

    public function render()
    {
        return view('livewire.search-input');
    }
}
