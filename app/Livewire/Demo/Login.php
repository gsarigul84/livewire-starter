<?php

namespace App\Livewire\Demo;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.base')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.demo.login');
    }
}
