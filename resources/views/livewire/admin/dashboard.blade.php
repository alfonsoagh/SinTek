{{--
    Company: CETAM
    Project: ST
    File: dashboard.blade.php
    Created on: 05/11/2025
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
                <li class="breadcrumb-item"><a href="#">Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Resumen General</h1>
                <p class="mb-0">Vista general del sistema de gestión de trámites.</p>
            </div>
        </div>
    </div>

    {{-- Métricas principales --}}
    <div class="row">
        {{-- Procesos Activos --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">Procesos Activos</h2>
                                <h3 class="fw-extrabold mb-1">12</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Procesos Activos</h2>
                                <h3 class="fw-extrabold mb-2">12</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Procesos configurados y disponibles
                            </small>
                            <div class="small d-flex mt-1">
                                <span class="badge bg-success">Todos operativos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solicitudes Recientes --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Solicitudes Recientes</h2>
                                <h3 class="mb-1">47</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Solicitudes Recientes</h2>
                                <h3 class="fw-extrabold mb-2">47</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Última semana
                            </small>
                            <div class="small d-flex mt-1">
                                <div>
                                    <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-success fw-bolder">12%</span> vs. semana anterior
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solicitudes en Trámite --}}
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-warning rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">En Trámite</h2>
                                <h3 class="mb-1">28</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Solicitudes en Trámite</h2>
                                <h3 class="fw-extrabold mb-2">28</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Pendientes de validación o finalización
                            </small>
                            <div class="small d-flex mt-1">
                                <span class="badge bg-warning">Requieren atención</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Gráficos y tablas --}}
    <div class="row">
        {{-- Distribución de trámites por tipo --}}
        <div class="col-12 col-xl-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Distribución de Trámites por Tipo</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- Gráfico de ejemplo usando componente de Volt --}}
                    <div class="ct-chart-sales-value ct-double-octave ct-series-g" style="height: 300px;"></div>

                    {{-- Leyenda del gráfico --}}
                    <div class="d-flex justify-content-center mt-3">
                        <div class="me-4">
                            <span class="dot rounded-circle bg-primary me-2"></span>
                            <span class="fw-normal small">Alta/Baja</span>
                        </div>
                        <div class="me-4">
                            <span class="dot rounded-circle bg-secondary me-2"></span>
                            <span class="fw-normal small">Permisos</span>
                        </div>
                        <div class="me-4">
                            <span class="dot rounded-circle bg-tertiary me-2"></span>
                            <span class="fw-normal small">Constancias</span>
                        </div>
                        <div>
                            <span class="dot rounded-circle bg-success me-2"></span>
                            <span class="fw-normal small">Otros</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Distribución por estado --}}
        <div class="col-12 col-xl-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Distribución por Estado</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- Progress bars por estado --}}
                    <div class="mb-4">
                        <div class="progress-wrapper">
                            <div class="progress-info">
                                <div class="h6 mb-0">Completados</div>
                                <div class="small fw-bold text-gray-500"><span>65%</span></div>
                            </div>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="progress-wrapper">
                            <div class="progress-info">
                                <div class="h6 mb-0">En Proceso</div>
                                <div class="small fw-bold text-gray-500"><span>25%</span></div>
                            </div>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="progress-wrapper">
                            <div class="progress-info">
                                <div class="h6 mb-0">Pendientes</div>
                                <div class="small fw-bold text-gray-500"><span>8%</span></div>
                            </div>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="progress-wrapper">
                            <div class="progress-info">
                                <div class="h6 mb-0">Rechazados</div>
                                <div class="small fw-bold text-gray-500"><span>2%</span></div>
                            </div>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabla de actividad reciente --}}
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Actividad Reciente</h2>
                        </div>
                        <div class="col text-end">
                            <a href="#" class="btn btn-sm btn-primary">Ver todo</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-bottom" scope="col">Trabajador</th>
                                <th class="border-bottom" scope="col">Trámite</th>
                                <th class="border-bottom" scope="col">Estado</th>
                                <th class="border-bottom" scope="col">Fecha</th>
                                <th class="border-bottom" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bolder text-gray-900">Juan Pérez González</td>
                                <td class="fw-normal text-gray-500">Alta de trabajador</td>
                                <td>
                                    <span class="badge bg-success">Completado</span>
                                </td>
                                <td class="fw-normal text-gray-500">04/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalles</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">María López Sánchez</td>
                                <td class="fw-normal text-gray-500">Solicitud de permiso</td>
                                <td>
                                    <span class="badge bg-warning">En proceso</span>
                                </td>
                                <td class="fw-normal text-gray-500">04/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalles</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">Carlos Ramírez Torres</td>
                                <td class="fw-normal text-gray-500">Constancia laboral</td>
                                <td>
                                    <span class="badge bg-info">Pendiente</span>
                                </td>
                                <td class="fw-normal text-gray-500">03/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalles</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">Ana García Martínez</td>
                                <td class="fw-normal text-gray-500">Baja de trabajador</td>
                                <td>
                                    <span class="badge bg-success">Completado</span>
                                </td>
                                <td class="fw-normal text-gray-500">03/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalles</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder text-gray-900">Roberto Fernández Cruz</td>
                                <td class="fw-normal text-gray-500">Modificación de datos</td>
                                <td>
                                    <span class="badge bg-warning">En proceso</span>
                                </td>
                                <td class="fw-normal text-gray-500">02/11/2025</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-secondary">Ver detalles</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Alertas y notificaciones --}}
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Alertas del Sistema</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        <div class="d-flex align-items-center">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <strong>28 trámites pendientes</strong> requieren validación
                        </div>
                    </div>
                    <div class="alert alert-info" role="alert">
                        <div class="d-flex align-items-center">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            Sistema operando con normalidad
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header">
                    <h2 class="fs-5 fw-bold mb-0">Estadísticas Rápidas</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                        <div>
                            <span class="h6 mb-0">Total de trabajadores registrados</span>
                        </div>
                        <div>
                            <span class="h5 mb-0 fw-bold">245</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border-bottom pb-3 mb-3">
                        <div>
                            <span class="h6 mb-0">Trámites completados este mes</span>
                        </div>
                        <div>
                            <span class="h5 mb-0 fw-bold">134</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="h6 mb-0">Tiempo promedio de proceso</span>
                        </div>
                        <div>
                            <span class="h5 mb-0 fw-bold">3.5 días</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
