<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State as ModelsState;

class State extends Component
{
    public function render()
    {
        $this->states = ModelsState::all();
        return view('livewire.state');
    }
}
