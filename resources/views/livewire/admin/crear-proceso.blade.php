{{--
 * Company: CETAM
 * Project: ST
 * File: crear-proceso.blade.php
 * Created on: 04/11/2025
 * Created by: Alfonso Angel García Hernández
 * Approved by: Alfonso Angel García Hernández
 *
 * Changelog:
 * - ID: <ID> | Modified on: dd/mm/yyyy |
 * Modified by: <Developer name> |
 * Description: <Brief description of change> |
 *
 * - ID: <ID> | Modified on: dd/mm/yyyy |
 * Modified by: <Developer name> |
 * Description: <Brief description of change> |
--}}

{{-- Nota Livewire: esta vista debe tener UN único elemento raíz --}}
{{-- El layout se aplica desde el componente con ->layout('layouts.app') --}}

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.dashboard.index') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Administración</li>
                    <li class="breadcrumb-item active" aria-current="page">Crear proceso</li>
                </ol>
            </nav>
            <h2 class="h4">Crear proceso</h2>
            <p class="mb-0">Define un nuevo proceso de trámite para el sistema.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Información del proceso</h2>
                <form>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="process_name">Nombre del proceso</label>
                            <input class="form-control" id="process_name" type="text" placeholder="Ej: Solicitud de vacaciones">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="process_code">Código del proceso</label>
                            <input class="form-control" id="process_code" type="text" placeholder="Ej: SOL-VAC-001">
                            <small class="form-text text-muted">Este código debe ser único y se usará para identificar el proceso.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="process_description">Descripción</label>
                            <textarea class="form-control" id="process_description" rows="4" placeholder="Describe el propósito y alcance del proceso..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="process_category">Categoría</label>
                            <select class="form-select" id="process_category">
                                <option selected>Seleccionar categoría</option>
                                <option value="1">Solicitudes</option>
                                <option value="2">Trámites administrativos</option>
                                <option value="3">Recursos humanos</option>
                                <option value="4">Servicios</option>
                                <option value="5">Otros</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="process_priority">Prioridad</label>
                            <select class="form-select" id="process_priority">
                                <option value="low">Baja</option>
                                <option value="medium" selected>Media</option>
                                <option value="high">Alta</option>
                                <option value="urgent">Urgente</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="process_deadline">Tiempo máximo de respuesta (días)</label>
                            <input class="form-control" id="process_deadline" type="number" placeholder="15" min="1">
                            <small class="form-text text-muted">Días hábiles para completar el proceso.</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="process_department">Departamento responsable</label>
                            <select class="form-select" id="process_department">
                                <option selected>Seleccionar departamento</option>
                                <option value="1">Recursos Humanos</option>
                                <option value="2">Administración</option>
                                <option value="3">Operaciones</option>
                                <option value="4">Legal</option>
                            </select>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h2 class="h5 mb-3">Configuración</h2>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="process_active" checked>
                                <label class="form-check-label" for="process_active">
                                    Proceso activo
                                </label>
                            </div>
                            <small class="form-text text-muted">Los trabajadores podrán iniciar este proceso si está activo.</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="process_requires_approval">
                                <label class="form-check-label" for="process_requires_approval">
                                    Requiere aprobación
                                </label>
                            </div>
                            <small class="form-text text-muted">El proceso necesita aprobación en cada paso.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="process_notifications">
                                <label class="form-check-label" for="process_notifications">
                                    Enviar notificaciones
                                </label>
                            </div>
                            <small class="form-text text-muted">Notificar automáticamente a los usuarios involucrados.</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="process_documents_required" checked>
                                <label class="form-check-label" for="process_documents_required">
                                    Requiere documentos
                                </label>
                            </div>
                            <small class="form-text text-muted">El proceso requiere carga de documentos.</small>
                        </div>
                    </div>

                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                Guardar proceso
                            </button>
                            <a href="#" class="btn btn-link text-gray-700 ms-2">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Ayuda</h2>
                <div class="mb-3">
                    <h3 class="h6 mb-2">
                        <svg class="icon icon-xs me-1 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        ¿Qué es un proceso?
                    </h3>
                    <p class="small text-gray-700">Un proceso es un flujo de trabajo que define los pasos necesarios para completar un trámite específico.</p>
                </div>
                <div class="mb-3">
                    <h3 class="h6 mb-2">
                        <svg class="icon icon-xs me-1 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        Código del proceso
                    </h3>
                    <p class="small text-gray-700">Use un código único y descriptivo para identificar fácilmente el proceso. Por ejemplo: SOL-VAC-001 para "Solicitud de vacaciones 001".</p>
                </div>
                <div>
                    <h3 class="h6 mb-2">
                        <svg class="icon icon-xs me-1 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        Siguiente paso
                    </h3>
                    <p class="small text-gray-700">Después de crear el proceso, deberá definir los pasos específicos que lo componen en la sección "Definir pasos".</p>
                </div>
            </div>

            <div class="card border-0 shadow">
                <div class="card-body">
                    <h2 class="h6 mb-3">Procesos recientes</h2>
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-xs icon-shape-success rounded me-2">
                                    <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="flex-fill">
                                    <small class="fw-bold">Solicitud de vacaciones</small>
                                    <div class="small text-gray">Activo</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-xs icon-shape-success rounded me-2">
                                    <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="flex-fill">
                                    <small class="fw-bold">Reembolso de gastos</small>
                                    <div class="small text-gray">Activo</div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-xs icon-shape-warning rounded me-2">
                                    <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="flex-fill">
                                    <small class="fw-bold">Cambio de puesto</small>
                                    <div class="small text-gray">Inactivo</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
