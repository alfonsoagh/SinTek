<?php
/**
 * Company: CETAM
 * Project: ST
 * File: BusquedaTrabajadores.php
 * Created on: 04/11/2025
 * Created by: Alfonso Angel García Hernández
 * Approved by: Alfonso Angel García Hernández
 *
 * Changelog:
 */

namespace App\Livewire\Secretary;

use Livewire\Component;

class BusquedaTrabajadores extends Component
{
    public function render()
    {
        return view('livewire.secretary.busqueda-trabajadores')
            ->layout('layouts.app');
    }
}
