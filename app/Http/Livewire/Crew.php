<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Crew as ModelsCrew;

class Crew extends Component
{
    public $crews;

    public function render()
    {
        $this->crews = ModelsCrew::all();
        return view('livewire.crew');
    }
}