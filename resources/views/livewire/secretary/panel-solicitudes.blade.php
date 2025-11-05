{{--
 * Company: CETAM
 * Project: ST
 * File: panel-solicitudes.blade.php
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
                    <li class="breadcrumb-item">Secretaría</li>
                    <li class="breadcrumb-item active" aria-current="page">Panel de solicitudes</li>
                </ol>
            </nav>
            <h2 class="h4">Panel de solicitudes</h2>
            <p class="mb-0">Gestión y revisión de solicitudes de trámites asignadas.</p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-warning rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Pendientes</h2>
                                <h3 class="fw-extrabold mb-2">23</h3>
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
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">En proceso</h2>
                                <h3 class="fw-extrabold mb-2">47</h3>
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
                            <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Hoy</h2>
                                <h3 class="fw-extrabold mb-2">12</h3>
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
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Esta semana</h2>
                                <h3 class="fw-extrabold mb-2">89</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Buscar por folio o trabajador...">
                    </div>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <select class="form-select" id="filter_tramite_type">
                        <option value="" selected>Todos los trámites</option>
                        <option value="vacaciones">Solicitud de vacaciones</option>
                        <option value="reembolso">Reembolso de gastos</option>
                        <option value="permiso">Permiso de ausencia</option>
                        <option value="horas_extras">Solicitud de horas extras</option>
                        <option value="cambio_puesto">Cambio de puesto</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3 mb-md-0">
                    <select class="form-select" id="filter_status">
                        <option value="" selected>Todos los estados</option>
                        <option value="nuevo">Nuevo</option>
                        <option value="en_proceso">En proceso</option>
                        <option value="pendiente_revision">Pendiente revisión</option>
                        <option value="completado">Completado</option>
                        <option value="rechazado">Rechazado</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3 mb-md-0">
                    <input type="date" class="form-control" placeholder="Desde">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-secondary w-100">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-centered table-hover table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Folio</th>
                            <th class="border-0">Trabajador</th>
                            <th class="border-0">Tipo de trámite</th>
                            <th class="border-0">Fecha solicitud</th>
                            <th class="border-0">Estado</th>
                            <th class="border-0">Prioridad</th>
                            <th class="border-0 rounded-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-gray-900">#SV-2025-0102</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Juan+Perez&background=0D8ABC&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">Juan Pérez García</span>
                                        <small class="text-gray-500">CURP: PEGJ850315HMCRR01</small>
                                    </div>
                                </div>
                            </td>
                            <td>Solicitud de vacaciones</td>
                            <td>04/11/2025 09:30</td>
                            <td><span class="badge bg-warning">Pendiente revisión</span></td>
                            <td><span class="badge bg-danger">Alta</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-gray-900">#RG-2025-0087</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Maria+Lopez&background=6F42C1&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">María López Sánchez</span>
                                        <small class="text-gray-500">CURP: LOSM900521MDFPNR09</small>
                                    </div>
                                </div>
                            </td>
                            <td>Reembolso de gastos</td>
                            <td>04/11/2025 08:15</td>
                            <td><span class="badge bg-info">En proceso</span></td>
                            <td><span class="badge bg-warning">Media</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-gray-900">#PA-2025-0156</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Carlos+Martinez&background=FD7E14&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">Carlos Martínez Ruiz</span>
                                        <small class="text-gray-500">CURP: MARC880712HDFRRL05</small>
                                    </div>
                                </div>
                            </td>
                            <td>Permiso de ausencia</td>
                            <td>03/11/2025 16:45</td>
                            <td><span class="badge bg-primary">Nuevo</span></td>
                            <td><span class="badge bg-success">Baja</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-gray-900">#SHE-2025-0034</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Ana+Rodriguez&background=28A745&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">Ana Rodríguez Torres</span>
                                        <small class="text-gray-500">CURP: ROTA920403MDFDRN02</small>
                                    </div>
                                </div>
                            </td>
                            <td>Solicitud de horas extras</td>
                            <td>03/11/2025 14:20</td>
                            <td><span class="badge bg-warning">Pendiente revisión</span></td>
                            <td><span class="badge bg-warning">Media</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-gray-900">#CP-2025-0012</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Luis+Gomez&background=DC3545&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">Luis Gómez Hernández</span>
                                        <small class="text-gray-500">CURP: GOHL860228HDFMRS08</small>
                                    </div>
                                </div>
                            </td>
                            <td>Cambio de puesto</td>
                            <td>03/11/2025 11:00</td>
                            <td><span class="badge bg-info">En proceso</span></td>
                            <td><span class="badge bg-danger">Alta</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-gray-900">#SV-2025-0098</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img class="avatar rounded-circle me-2" alt="Avatar" src="https://ui-avatars.com/api/?name=Sofia+Torres&background=6610F2&color=fff">
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">Sofía Torres Díaz</span>
                                        <small class="text-gray-500">CURP: TODS940615MDFRRF03</small>
                                    </div>
                                </div>
                            </td>
                            <td>Solicitud de vacaciones</td>
                            <td>02/11/2025 15:30</td>
                            <td><span class="badge bg-success">Completado</span></td>
                            <td><span class="badge bg-success">Baja</span></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary" type="button">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                        Revisar
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ver detalle</a></li>
                                        <li><a class="dropdown-item" href="#">Historial</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#">Rechazar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <nav aria-label="Page navigation">
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
                <div class="fw-normal small mt-4 mt-lg-0">
                    Mostrando <b>6</b> de <b>23</b> solicitudes
                </div>
            </div>
        </div>
    </div>
</div>
