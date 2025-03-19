<?php

namespace App\Livewire;

use Livewire\Component;

class InputLiveFaster extends Component
{
    public $name = "";
    
    public function render()
    {
        return view('livewire.input-live-faster');
    }
}
