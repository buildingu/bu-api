<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TagPost as ModelsTagPost;

class TagPost extends Component
{

    public function render()
    {
        $this->tagposts = ModelsTagPost::all();
        return view('livewire.tagpost');
    }
}
