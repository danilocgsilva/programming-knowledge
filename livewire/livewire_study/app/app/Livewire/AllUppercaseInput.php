<?php

namespace App\Livewire;

use Livewire\Component;

class AllUppercaseInput extends Component
{
    public string $namea;

    public function updated()
    {
        $this->namea = mb_strtoupper($this->namea);
    }

    public function render()
    {
        return view('livewire.all-uppercase-input');
    }
}
