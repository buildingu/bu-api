<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends Component
{
    public function render()
    {
        $this->roles = ModelsRole::all();
        return view('livewire.role');
    }
}
