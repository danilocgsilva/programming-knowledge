<?php

namespace App\Livewire;

use Livewire\Component;

class InputLive extends Component
{
    public $name = "";
    
    public function render()
    {
        return view('livewire.input-live');
    }
}
