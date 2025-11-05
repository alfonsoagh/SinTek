<?php
/**
 * Company: CETAM
 * Project: ST
 * File: ConvocatoriasDocumentos.php
 * Created on: 04/11/2025
 * Created by: Alfonso Angel García Hernández
 * Approved by: Alfonso Angel García Hernández
 *
 * Changelog:
 */

namespace App\Livewire\Secretary;

use Livewire\Component;

class ConvocatoriasDocumentos extends Component
{
    public function render()
    {
        return view('livewire.secretary.convocatorias-documentos')
            ->layout('layouts.app');
    }
}
