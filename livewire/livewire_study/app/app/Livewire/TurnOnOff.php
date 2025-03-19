<?php

namespace App\Livewire;

use Livewire\Component;

class TurnOnOff extends Component
{
    public $turnedOn = false;
    
    public function render()
    {
        return view('livewire.turn-on-off');
    }
}
