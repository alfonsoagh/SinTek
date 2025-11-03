<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Solicitudes extends Component
{
    public function render()
    {
        return view('livewire.admin.solicitudes')->layout('layouts.app');
    }
}
