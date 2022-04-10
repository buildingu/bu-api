<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gender as ModelsGender;

class Gender extends Component
{
    public function render()
    {
        $this->genders=ModelsGender::all();
        return view('livewire.gender');
    }
}
