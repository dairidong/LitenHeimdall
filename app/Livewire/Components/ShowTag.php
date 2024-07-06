<?php

namespace App\Livewire\Components;

use App\Models\Tag;
use Livewire\Component;

class ShowTag extends Component
{
    public Tag $tag;

    public function render()
    {
        return view('livewire.components.show-tag');
    }
}
