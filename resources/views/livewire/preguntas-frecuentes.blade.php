{{--
  Empresa: CETAM
  Proyecto: ST
  Archivo: preguntas-frecuentes.blade.php
  Fecha de creación: 03/11/25
  Realizado por: Alfonso Angel García Hernández
  Validado por: Alfonso Angel García Hernández
--}}

{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Preguntas frecuentes</h2>
            <p class="mb-0">Encuentra respuestas a las preguntas más comunes.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="accordion" id="faqAccordion">
                        <div class="text-center text-muted py-4">
                            Aún no hay preguntas frecuentes configuradas
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
