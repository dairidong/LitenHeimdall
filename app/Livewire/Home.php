<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $tags = Tag::query()->orderBy('order')->get();

        return view('livewire.home', [
            'tags' => $tags,
        ]);
    }
}
