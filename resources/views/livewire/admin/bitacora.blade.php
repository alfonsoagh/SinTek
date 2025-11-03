{{--
  Empresa: CETAM
  Proyecto: ST
  Archivo: bitacora.blade.php
  Fecha de creación: 03/11/25
  Realizado por: Alfonso Angel García Hernández
  Validado por: Alfonso Angel García Hernández
--}}

{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Bitácora</h2>
            <p class="mb-0">Registro de actividades y cambios en el sistema.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" disabled>
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Exportar
            </button>
        </div>
    </div>

    <div class="table-settings mb-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-9 col-lg-10 d-md-flex">
                <div class="input-group me-2 me-lg-3 fmxw-300">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar en bitácora">
                </div>
                <select class="form-select fmxw-200 d-none d-md-inline me-2">
                    <option selected>Todas las acciones</option>
                    <option value="1">Creación</option>
                    <option value="2">Modificación</option>
                    <option value="3">Eliminación</option>
                    <option value="4">Acceso</option>
                </select>
                <select class="form-select fmxw-200 d-none d-md-inline">
                    <option selected>Último mes</option>
                    <option value="1">Última semana</option>
                    <option value="2">Hoy</option>
                    <option value="3">Personalizado</option>
                </select>
            </div>
        </div>
    </div>

    <div class="card card-body shadow border-0 table-wrapper table-responsive">
        <table class="table user-table table-hover align-items-center">
            <thead>
                <tr>
                    <th class="border-bottom">Fecha/Hora</th>
                    <th class="border-bottom">Usuario</th>
                    <th class="border-bottom">Acción</th>
                    <th class="border-bottom">Módulo</th>
                    <th class="border-bottom">Detalles</th>
                    <th class="border-bottom">IP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">
                        No hay registros en la bitácora
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
