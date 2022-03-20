<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EducationLevel as ModelsEducationalLevel;

class EducationalLevel extends Component
{
    public function render()
    {
        $this->educationalLevel = ModelsEducationalLevel::all();
        return view('livewire.educational_level');
    }
}
