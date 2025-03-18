<?php

namespace App\Livewire;

use Livewire\Component;

class CounterHurry extends Component
{
    public $counter = 0;

    public function onCounter()
    {
        $this->counter++;
    }
    
    public function render()
    {
        return view('livewire.counter-hurry');
    }
}
