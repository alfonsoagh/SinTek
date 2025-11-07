{{--
    Company: CETAM
    Project: ST
    File: dashboard.blade.php
    Created on: 06/11/2025
    Created by: Alfonso Angel Garcia Hernandez
    Approved by: Alfonso Angel Garcia Hernandez

    Changelog:
    - ID: <ID> | Date: dd/mm/yyyy
      Modified by: <Developer name>
      Description: <Brief description of change>
--}}

<div>
    {{-- Breadcrumbs --}}
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
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Bienvenido, {{ Auth::user()->name ?? 'Trabajador' }}</h1>
                <p class="mb-0">Vista general de tus trámites y notificaciones.</p>
            </div>
        </div>
    </div>

    {{-- Métricas principales --}}
    <div class="row">
        {{-- Trámites en proceso --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-warning rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">En Proceso</h2>
                                <h3 class="fw-extrabold mb-1">3</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Trámites en Proceso</h2>
                                <h3 class="fw-extrabold mb-2">3</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Trámites activos pendientes
                            </small>
                            <div class="small d-flex mt-1">
                                <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.mis-tramites') }}" class="text-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Trámites completados --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Completados</h2>
                                <h3 class="mb-1">12</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Trámites Completados</h2>
                                <h3 class="fw-extrabold mb-2">12</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Total completados este año
                            </small>
                            <div class="small d-flex mt-1">
                                <span class="badge bg-success">Finalizados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Notificaciones --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Notificaciones</h2>
                                <h3 class="mb-1">5</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Notificaciones</h2>
                                <h3 class="fw-extrabold mb-2">5</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Mensajes sin leer
                            </small>
                            <div class="small d-flex mt-1">
                                <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.notificaciones') }}" class="text-primary">Ver todas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Acciones rápidas --}}
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Acciones Rápidas</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.tramites-disponibles') }}" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center" style="min-height: 80px;">
                                <div class="text-center">
                                    <svg class="icon icon-lg mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="fw-bold">Nuevo Trámite</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.mis-tramites') }}" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center" style="min-height: 80px;">
                                <div class="text-center">
                                    <svg class="icon icon-lg mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                    </svg>
                                    <div class="fw-bold">Mis Trámites</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.convocatorias') }}" class="btn btn-outline-tertiary w-100 d-flex align-items-center justify-content-center" style="min-height: 80px;">
                                <div class="text-center">
                                    <svg class="icon icon-lg mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="fw-bold">Convocatorias</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                            <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.notificaciones') }}" class="btn btn-outline-info w-100 d-flex align-items-center justify-content-center" style="min-height: 80px;">
                                <div class="text-center">
                                    <svg class="icon icon-lg mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                    </svg>
                                    <div class="fw-bold">Ver Notificaciones</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Mis trámites recientes --}}
    <div class="row">
        <div class="col-12 col-lg-8 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Mis Trámites Recientes</h2>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.mis-tramites') }}" class="btn btn-sm btn-primary">Ver todos</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-bottom" scope="col">Trámite</th>
                                <th class="border-bottom" scope="col">Estado</th>
                                <th class="border-bottom" scope="col">Fecha</th>
                                <th class="border-bottom" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bolder text-gray-900">Solicitud de vacaciones</td>
                                <td>
                                    <span class="badge bg-warning">En validación</span>
                                </td>
                                <td class="fw-normal text-gray-500">05/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalle</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">Constancia laboral</td>
                                <td>
                                    <span class="badge bg-success">Completado</span>
                                </td>
                                <td class="fw-normal text-gray-500">02/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalle</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">Actualización de datos</td>
                                <td>
                                    <span class="badge bg-info">Pendiente</span>
                                </td>
                                <td class="fw-normal text-gray-500">28/10/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalle</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Notificaciones recientes --}}
        <div class="col-12 col-lg-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Notificaciones</h2>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item px-0 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="icon-shape icon-sm icon-shape-warning rounded">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col ps-0 ms-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="h6 mb-0 text-small">Tu solicitud requiere documentación adicional</h4>
                                        </div>
                                    </div>
                                    <p class="font-small mt-1 mb-0">Hace 2 horas</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item px-0 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="icon-shape icon-sm icon-shape-success rounded">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col ps-0 ms-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="h6 mb-0 text-small">Tu constancia está lista</h4>
                                        </div>
                                    </div>
                                    <p class="font-small mt-1 mb-0">Ayer</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item px-0 pb-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="icon-shape icon-sm icon-shape-info rounded">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col ps-0 ms-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="h6 mb-0 text-small">Nueva convocatoria disponible</h4>
                                        </div>
                                    </div>
                                    <p class="font-small mt-1 mb-0">Hace 3 días</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route(config('proj.route_name_prefix', 'proj') . '.worker.notificaciones') }}" class="btn btn-sm btn-outline-gray-600">Ver todas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
