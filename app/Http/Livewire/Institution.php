<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institution as ModelsInstitution;

class Institution extends Component
{
    public $institutions;

    public function render()
    {
        $this->institutions = ModelsInstitution::all();
        return view('livewire.institution');
    }
}