<?php

namespace App\Livewire;

use Livewire\Component;

class PlusMinusIncrements extends Component
{
    public int $value = 1;

    public int $incrementAmount = 1;

    public function increment()
    {
        $this->value += $this->incrementAmount;
    }

    public function decrement()
    {
        $this->value -= $this->incrementAmount;
    }

    public function render()
    {
        return view('livewire.plus-minus-increments');
    }
}
