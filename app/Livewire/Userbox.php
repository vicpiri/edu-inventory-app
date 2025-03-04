<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Userbox extends Component
{
    public $user;

    public function mount()
    {
        // Obtén el usuario autenticado
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.userbox');
    }
}
