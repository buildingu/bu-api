<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tag as ModelsTags;

class Tag extends Component
{
    public $tags;

    public function render()
    {
        $this->tags = ModelsTags::all();
        return view('livewire.tag');
    }
}
