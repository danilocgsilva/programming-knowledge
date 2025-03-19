<?php

namespace App\Livewire;

use Livewire\Component;

class MultipleGreetings extends Component
{
    public $greetings = [];

    public function render()
    {
        return view('livewire.multiple-greetings');
    }
}
