<?php

namespace App\Livewire;

use Livewire\Component;

class PlusAndMinus extends Component
{
    public int $value = 0;

    public function add(): void
    {
        $this->value++;
    }

    public function minus(): void
    {
        $this->value--;
    }

    public function render()
    {
        return view('livewire.plus-and-minus');
    }
}
