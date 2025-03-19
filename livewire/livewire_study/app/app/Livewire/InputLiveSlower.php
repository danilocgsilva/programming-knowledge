<?php

namespace App\Livewire;

use Livewire\Component;

class InputLiveSlower extends Component
{
    public $name = "";
    
    public function render()
    {
        return view('livewire.input-live-slower');
    }
}
