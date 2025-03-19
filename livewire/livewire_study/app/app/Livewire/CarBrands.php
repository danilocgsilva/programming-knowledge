<?php

namespace App\Livewire;

use Livewire\Component;

class CarBrands extends Component
{
    public $carBrand = "";
    
    public function render()
    {
        return view('livewire.car-brands');
    }
}
