<?php
/**
 * Company: CETAM
 * Project: ST
 * File: ModificarProceso.php
 * Created on: 04/11/2025
 * Created by: Alfonso Angel García Hernández
 * Approved by: Alfonso Angel García Hernández
 *
 * Changelog:
 */

namespace App\Livewire\Admin;

use Livewire\Component;

class ModificarProceso extends Component
{
    public function render()
    {
        return view('livewire.admin.modificar-proceso')
            ->layout('layouts.app');
    }
}
