{{--
  Empresa: CETAM
  Proyecto: ST
  Archivo: convocatorias.blade.php
  Fecha de creación: 03/11/25
  Realizado por: Alfonso Angel García Hernández
  Validado por: Alfonso Angel García Hernández
--}}

{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Convocatorias</h2>
            <p class="mb-0">Accede a convocatorias vigentes, reglamentos y documentos descargables.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Convocatorias vigentes</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="text-center text-muted py-4">
                            No hay convocatorias publicadas aún
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
