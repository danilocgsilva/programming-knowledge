<?php

namespace App\Livewire;

use Livewire\Component;

class ListGreetings extends Component
{
    public $greeting = "";

    public function render()
    {
        return view('livewire.list-greetings');
    }
}
