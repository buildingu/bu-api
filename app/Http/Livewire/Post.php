<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as ModelsPost;

class Post extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = ModelsPost::all();
        return view('livewire.post');
    }
}
