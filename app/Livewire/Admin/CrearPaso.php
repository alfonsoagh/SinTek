<?php
/**
 * Company: CETAM
 * Project: ST
 * File: CrearPaso.php
 * Created on: 05/11/2025
 * Created by: Alfonso Angel Garcia Hernandez
 * Approved by: Alfonso Angel Garcia Hernandez
 *
 * Changelog:
 * - ID: <ID> | Modified on: dd/mm/yyyy |
 * Modified by: <Developer name> |
 * Description: <Brief description of change> |
 *
 * - ID: <ID> | Modified on: dd/mm/yyyy |
 * Modified by: <Developer name> |
 * Description: <Brief description of change> |
 */

namespace App\Livewire\Admin;

use Livewire\Component;

class CrearPaso extends Component
{
    public $activarRamificacion = false;
    public $requiereDocumentos = false;
    public $enviarNotificacion = false;
    public $tipoFlujo = 'secuencial'; // secuencial o condicional
    public $documentos = [];

    public function mount()
    {
        // Inicializar con un documento vacío si se requiere
        $this->documentos = [];
    }

    public function agregarDocumento()
    {
        $this->documentos[] = [
            'id' => uniqid(),
            'nombre' => '',
            'descripcion' => ''
        ];
    }

    public function eliminarDocumento($id)
    {
        $this->documentos = array_filter($this->documentos, function ($doc) use ($id) {
            return $doc['id'] !== $id;
        });
        $this->documentos = array_values($this->documentos);
    }

    public function render()
    {
        return view('livewire.admin.crear-paso')
            ->layout('layouts.app');
    }
}
