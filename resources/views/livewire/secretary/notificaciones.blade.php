{{--
 * Company: CETAM
 * Project: ST
 * File: notificaciones.blade.php
 * Created on: 04/11/2025
 * Created by: Alfonso Angel García Hernández
 * Approved by: Alfonso Angel García Hernández
 *
 * Changelog:
 * - ID: <ID> | Modified on: dd/mm/yyyy |
 * Modified by: <Developer name> |
 * Description: <Brief description of change> |
--}}
<div>
    {{-- Page Header --}}
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Secretaría</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notificaciones</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Notificaciones</h1>
                <p class="mb-0">Bandeja de entrada de notificaciones del sistema</p>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-outline-gray-600 me-2">
                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                    Marcar todas como leídas
                </button>
                <button type="button" class="btn btn-sm btn-primary">
                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                    </svg>
                    Configurar
                </button>
            </div>
        </div>
    </div>

    {{-- Statistics cards --}}
    <div class="row mb-4">
        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Notificaciones</h2>
                                <h3 class="fw-extrabold mb-2">24</h3>
                                <small class="text-gray-500">Total en bandeja</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-warning rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">No leídas</h2>
                                <h3 class="fw-extrabold mb-2">8</h3>
                                <small class="text-gray-500">Pendientes de revisar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-danger rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Urgentes</h2>
                                <h3 class="fw-extrabold mb-2">3</h3>
                                <small class="text-gray-500">Requieren atención</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Esta semana</h2>
                                <h3 class="fw-extrabold mb-2">15</h3>
                                <small class="text-gray-500">Últimos 7 días</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Filters and search --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Buscar en notificaciones...">
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <select class="form-select" id="filter_tipo">
                                <option value="" selected>Todos los tipos</option>
                                <option value="solicitud">Solicitudes</option>
                                <option value="aprobacion">Aprobaciones</option>
                                <option value="rechazo">Rechazos</option>
                                <option value="comentario">Comentarios</option>
                                <option value="sistema">Sistema</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3 mb-md-0">
                            <select class="form-select" id="filter_estado">
                                <option value="" selected>Todas</option>
                                <option value="no_leidas">No leídas</option>
                                <option value="leidas">Leídas</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-gray-600 w-100">
                                <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                </svg>
                                Limpiar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Notifications list --}}
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h2 class="fs-5 fw-bold mb-0">Mis notificaciones</h2>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-gray-600 active">Todas</button>
                        <button type="button" class="btn btn-sm btn-outline-gray-600">No leídas</button>
                        <button type="button" class="btn btn-sm btn-outline-gray-600">Archivadas</button>
                    </div>
                </div>
                <div class="list-group list-group-flush">
                    {{-- Today's notifications --}}
                    <div class="list-group-item bg-light">
                        <small class="fw-bold text-gray-600">HOY</small>
                    </div>

                    {{-- Notification 1 - Unread, urgent --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-danger bg-light">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-danger rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-bold me-2">Solicitud urgente requiere revisión</h5>
                                        <span class="badge bg-danger">Urgente</span>
                                        <span class="badge bg-primary ms-2">Nueva</span>
                                    </div>
                                    <p class="mb-2 text-gray-700">La solicitud #SV-2025-0145 de María González requiere tu revisión inmediata. Fecha límite: Hoy 18:00 hrs.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Hace 15 minutos
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Solicitudes
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Notification 2 - Unread --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-info bg-light">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-info rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-bold me-2">Nuevo comentario en solicitud</h5>
                                        <span class="badge bg-primary">Nueva</span>
                                    </div>
                                    <p class="mb-2 text-gray-700">Juan Pérez ha agregado un comentario en la solicitud #SV-2025-0142: "Adjunto la documentación faltante."</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Hace 1 hora
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                                            </svg>
                                            Comentarios
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Notification 3 - Read --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-success">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-success rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-normal me-2 text-gray-700">Solicitud aprobada exitosamente</h5>
                                    </div>
                                    <p class="mb-2 text-gray-600">La solicitud #SV-2025-0138 de Carlos Ramírez ha sido aprobada y completada.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Hace 3 horas
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            Aprobaciones
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como no leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Yesterday's notifications --}}
                    <div class="list-group-item bg-light">
                        <small class="fw-bold text-gray-600">AYER</small>
                    </div>

                    {{-- Notification 4 - Read --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-warning">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-warning rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-normal me-2 text-gray-700">Documentación incompleta</h5>
                                    </div>
                                    <p class="mb-2 text-gray-600">La solicitud #SV-2025-0135 requiere documentación adicional. Se ha notificado al trabajador.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Ayer 16:30
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                            </svg>
                                            Sistema
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como no leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Notification 5 - Read --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-secondary">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-secondary rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-normal me-2 text-gray-700">Nueva convocatoria publicada</h5>
                                    </div>
                                    <p class="mb-2 text-gray-600">Se ha publicado una nueva convocatoria: "Proceso de promoción interna 2025". Revísala en la sección correspondiente.</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Ayer 10:00
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Sistema
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como no leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- This week --}}
                    <div class="list-group-item bg-light">
                        <small class="fw-bold text-gray-600">ESTA SEMANA</small>
                    </div>

                    {{-- Notification 6 - Read --}}
                    <div class="list-group-item list-group-item-action p-3 border-start border-4 border-success">
                        <div class="d-flex w-100 justify-content-between">
                            <div class="d-flex align-items-start flex-grow-1">
                                <div class="icon-shape icon-sm icon-shape-success rounded me-3 mt-1">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center mb-1">
                                        <h5 class="mb-0 fw-normal me-2 text-gray-700">5 solicitudes procesadas</h5>
                                    </div>
                                    <p class="mb-2 text-gray-600">Has completado exitosamente 5 solicitudes esta semana. ¡Excelente trabajo!</p>
                                    <div class="d-flex align-items-center">
                                        <small class="text-gray-500 me-3">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            03/11/2025
                                        </small>
                                        <small class="text-gray-500">
                                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"></path>
                                            </svg>
                                            Sistema
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-sm btn-link text-gray-600 dropdown-toggle dropdown-toggle-split m-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Marcar como no leída</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Archivar</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Anterior</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="fw-normal small mt-4 mt-lg-0">Mostrando <b>6</b> de <b>24</b> notificaciones</div>
                </div>
            </div>
        </div>
    </div>
</div>
