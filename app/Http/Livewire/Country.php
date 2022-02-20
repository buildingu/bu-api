<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country as ModelsCountry;

class Country extends Component
{
    public function render()
    {
        $this->countries = ModelsCountry::all();
        return view('livewire.country');
    }
}
