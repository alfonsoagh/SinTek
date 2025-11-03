<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: TramitesDisponibles.php
 * Fecha de creación: 03/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

namespace App\Livewire\Worker;

use Livewire\Component;

class TramitesDisponibles extends Component
{
    public function render()
    {
        return view('livewire.worker.tramites-disponibles')->layout('layouts.app');
    }
}
