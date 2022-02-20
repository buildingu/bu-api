<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City as ModelsCity;

class City extends Component
{
    public function render()
    {
        $this->cities = ModelsCity::all();
        return view('livewire.city');
    }
}
