<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CrewInstitution as ModelsCrewInstitution;

class CrewInstitution extends Component
{

    public function render()
    {
        $this->crewinstitution = ModelsCrewInstitution::all();
        return view('livewire.crewinstitution');
    }
}