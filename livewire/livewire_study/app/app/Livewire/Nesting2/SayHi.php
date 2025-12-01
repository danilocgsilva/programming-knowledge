<?php

namespace App\Livewire\Nesting2;

use Livewire\Component;

class SayHi extends Component
{
    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.nesting2.say-hi');
    }
}
