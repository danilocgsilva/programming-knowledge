<?php

namespace App\Livewire;

use Livewire\Component;

class Nesting3 extends Component
{
    public $names = ['Jelly Max', 'Maan', 'Chico'];

    public function render()
    {
        return view('livewire.nesting3');
    }
}
