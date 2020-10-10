<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $view;
    protected $listeners = ['changeViewUserChat','changeViewProfile'];

    public function mount($view){
        $this->view = $view;
    }

    public function changeViewUserChat(){
        $this->view = 'UserChat';
    }

    public function changeViewProfile(){
        $this->view = 'Profile';
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
