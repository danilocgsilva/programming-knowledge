<?php

namespace App\Livewire;

use Livewire\Component;

class Nesting extends Component
{   
    public $names = ["Juca Mendes", "Mariana", "Jehnnifer"];

    public function render()
    {
        return view('livewire.nesting');
    }
}
