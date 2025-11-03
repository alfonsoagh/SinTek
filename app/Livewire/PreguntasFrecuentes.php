<?php

namespace App\Livewire;

use Livewire\Component;

class PreguntasFrecuentes extends Component
{
    public function render()
    {
        return view('livewire.preguntas-frecuentes')->layout('layouts.app');
    }
}
