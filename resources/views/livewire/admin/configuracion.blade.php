{{--
 * Company: CETAM
 * Project: ST
 * File: configuracion.blade.php
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
                    <li class="breadcrumb-item active" aria-current="page">Parámetros y configuración</li>
                </ol>
            </nav>
            <h2 class="h4">Parámetros y configuración</h2>
            <p class="mb-0">Administra parámetros generales del sistema.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Información general</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="institution_name">Nombre de la institución</label>
                                <input class="form-control" id="institution_name" type="text" placeholder="CETAM" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="system_name">Nombre del sistema</label>
                                <input class="form-control" id="system_name" type="text" placeholder="SinTek" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="contact_email">Correo de contacto</label>
                                <input class="form-control" id="contact_email" type="email" placeholder="contacto@cetam.gob.mx" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="contact_phone">Teléfono</label>
                                <input class="form-control" id="contact_phone" type="text" placeholder="(999) 999-9999" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="button" disabled>Guardar cambios</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Notificaciones</h2>
                <form>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notify_new_request" disabled>
                                <label class="form-check-label" for="notify_new_request">
                                    Nuevas solicitudes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notify_approved" disabled>
                                <label class="form-check-label" for="notify_approved">
                                    Solicitudes aprobadas
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notify_rejected" disabled>
                                <label class="form-check-label" for="notify_rejected">
                                    Solicitudes rechazadas
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notify_new_user" disabled>
                                <label class="form-check-label" for="notify_new_user">
                                    Nuevos usuarios
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="button" disabled>Guardar preferencias</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Seguridad</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="session_timeout">Tiempo de sesión (minutos)</label>
                                <input class="form-control" id="session_timeout" type="number" placeholder="120" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="max_attempts">Intentos máximos de login</label>
                                <input class="form-control" id="max_attempts" type="number" placeholder="5" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <button class="btn btn-gray-800 mt-2 animate-up-2" type="button" disabled>Actualizar configuración</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Logotipo</h2>
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <img class="rounded" src="{{ asset('assets/img/brand/light.svg') }}" alt="Logo" width="100">
                    </div>
                    <div>
                        <button class="btn btn-sm btn-gray-800 d-inline-flex align-items-center mb-2" type="button" disabled>
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                            </svg>
                            Cambiar
                        </button>
                        <button class="btn btn-sm btn-link text-danger mb-2" type="button" disabled>Eliminar</button>
                        <div>
                            <small class="text-gray">JPG, PNG o SVG. Max 800KB.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body shadow border-0 mb-4">
                <h2 class="h5 mb-4">Mantenimiento</h2>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h3 class="h6 mb-1">Modo mantenimiento</h3>
                        <p class="small mb-0">Desactiva el acceso al sistema</p>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="maintenance_mode" disabled>
                        <label class="form-check-label" for="maintenance_mode"></label>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="h6 mb-1">Registro de usuarios</h3>
                        <p class="small mb-0">Permite nuevos registros</p>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="allow_registration" disabled>
                        <label class="form-check-label" for="allow_registration"></label>
                    </div>
                </div>
            </div>

            <div class="card card-body shadow border-0">
                <h2 class="h5 mb-4">Información del sistema</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                        <div>
                            <h3 class="h6 mb-1">Versión</h3>
                            <p class="small mb-0">1.0.0</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                        <div>
                            <h3 class="h6 mb-1">Laravel</h3>
                            <p class="small mb-0">12.36.1</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                        <div>
                            <h3 class="h6 mb-1">PHP</h3>
                            <p class="small mb-0">{{ phpversion() }}</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                        <div>
                            <h3 class="h6 mb-1">Base de datos</h3>
                            <p class="small mb-0">MySQL</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
