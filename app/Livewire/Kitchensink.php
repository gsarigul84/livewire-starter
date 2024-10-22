<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

// We will use base layout since we don't need menu or any other stuff..
#[Layout('components.layouts.base')]
class Kitchensink extends Component
{
    public function render()
    {
        return view('livewire.kitchensink');
    }
}
