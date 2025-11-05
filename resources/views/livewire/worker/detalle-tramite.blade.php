{{--
 * Company: CETAM
 * Project: ST
 * File: detalle-tramite.blade.php
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
                <li class="breadcrumb-item"><a href="#">Mis trámites</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalle de trámite</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Detalle de trámite</h1>
                <p class="mb-0">Folio: #SV-2025-0102</p>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-outline-gray-600 me-2">
                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Descargar PDF
                </a>
                <a href="#" class="btn btn-sm btn-outline-gray-600">
                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Cancelar trámite
                </a>
            </div>
        </div>
    </div>

    {{-- Alert if action required --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="icon icon-sm me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <div>
                    <strong>Acción requerida:</strong> Debes subir el formato de solicitud firmado para continuar con el proceso.
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Left column --}}
        <div class="col-12 col-lg-8">
            {{-- General information --}}
            <div class="card border-0 shadow mb-4">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Información general</h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-gray-600 fw-bold d-block mb-1">Tipo de trámite</small>
                            <p class="mb-0">Solicitud de vacaciones</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-gray-600 fw-bold d-block mb-1">Estado actual</small>
                            <span class="badge bg-warning">En proceso</span>
                            <span class="badge bg-danger ms-1">Acción requerida</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-gray-600 fw-bold d-block mb-1">Fecha de solicitud</small>
                            <p class="mb-0">02/11/2025 10:30 hrs</p>
                        </div>
                        <div class="col-md-6">
                            <small class="text-gray-600 fw-bold d-block mb-1">Última actualización</small>
                            <p class="mb-0">03/11/2025 14:20 hrs</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <small class="text-gray-600 fw-bold d-block mb-1">Descripción</small>
                            <p class="mb-0">Solicito 10 días de vacaciones correspondientes al periodo 2025, del 15 al 26 de diciembre de 2025, para asuntos personales.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Progress --}}
            <div class="card border-0 shadow mb-4">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Progreso del trámite</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="small fw-bold">Paso 2 de 5 completados</span>
                        <span class="small fw-bold">40%</span>
                    </div>
                    <div class="progress mb-4" style="height: 15px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    {{-- Timeline --}}
                    <div class="timeline timeline-one-side">
                        {{-- Step 1 - Completed --}}
                        <div class="timeline-item">
                            <span class="timeline-badge bg-success">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div class="timeline-content">
                                <h3 class="h6 mb-1">Paso 1: Recepción de solicitud</h3>
                                <p class="small text-gray-500 mb-2">Completado el 02/11/2025 10:35</p>
                                <p class="small text-gray-700 mb-0">Tu solicitud ha sido recibida correctamente y asignada para revisión.</p>
                            </div>
                        </div>

                        {{-- Step 2 - Completed --}}
                        <div class="timeline-item">
                            <span class="timeline-badge bg-success">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div class="timeline-content">
                                <h3 class="h6 mb-1">Paso 2: Validación inicial</h3>
                                <p class="small text-gray-500 mb-2">Completado el 02/11/2025 15:20</p>
                                <p class="small text-gray-700 mb-0">La información proporcionada es correcta y cumple con los requisitos básicos.</p>
                            </div>
                        </div>

                        {{-- Step 3 - In progress --}}
                        <div class="timeline-item">
                            <span class="timeline-badge bg-warning">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <div class="timeline-content">
                                <h3 class="h6 mb-1">Paso 3: Documentación complementaria</h3>
                                <p class="small text-gray-500 mb-2">En proceso</p>
                                <div class="alert alert-warning small mb-2">
                                    <strong>Acción requerida:</strong> Debes subir el formato de solicitud firmado.
                                </div>
                                <p class="small text-gray-700 mb-3">Sube los documentos requeridos para continuar con la revisión.</p>
                                <button class="btn btn-sm btn-primary">
                                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Subir documentos
                                </button>
                            </div>
                        </div>

                        {{-- Step 4 - Pending --}}
                        <div class="timeline-item">
                            <span class="timeline-badge bg-gray-200">
                                <span class="small text-gray-600">4</span>
                            </span>
                            <div class="timeline-content">
                                <h3 class="h6 mb-1 text-gray-500">Paso 4: Aprobación del jefe inmediato</h3>
                                <p class="small text-gray-400 mb-0">Pendiente</p>
                            </div>
                        </div>

                        {{-- Step 5 - Pending --}}
                        <div class="timeline-item">
                            <span class="timeline-badge bg-gray-200">
                                <span class="small text-gray-600">5</span>
                            </span>
                            <div class="timeline-content">
                                <h3 class="h6 mb-1 text-gray-500">Paso 5: Aprobación final RH</h3>
                                <p class="small text-gray-400 mb-0">Pendiente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comments --}}
            <div class="card border-0 shadow mb-4">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Observaciones y comentarios</h2>
                </div>
                <div class="list-group list-group-flush">
                    {{-- Comment 1 --}}
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between mb-2">
                            <h3 class="h6 mb-0">Secretaría - María López</h3>
                            <small class="text-gray-500">03/11/2025 14:20</small>
                        </div>
                        <p class="mb-0 small text-gray-700">Por favor, sube el formato de solicitud firmado. Puedes descargarlo desde la sección de documentos.</p>
                    </div>

                    {{-- Comment 2 --}}
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between mb-2">
                            <h3 class="h6 mb-0">Sistema</h3>
                            <small class="text-gray-500">02/11/2025 15:20</small>
                        </div>
                        <p class="mb-0 small text-gray-700">La validación inicial ha sido completada exitosamente.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <form>
                        <div class="mb-3">
                            <label for="nuevo_comentario" class="form-label small fw-bold">Agregar comentario</label>
                            <textarea class="form-control" id="nuevo_comentario" rows="3" placeholder="Escribe tu comentario o consulta..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                            </svg>
                            Enviar comentario
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Right column --}}
        <div class="col-12 col-lg-4">
            {{-- Documents --}}
            <div class="card border-0 shadow mb-4">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Documentos</h2>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 mb-3">
                        <button type="button" class="btn btn-primary btn-sm">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Subir documento
                        </button>
                    </div>

                    <small class="text-gray-600 fw-bold d-block mb-2">Documentos adjuntos</small>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-sm icon-shape-danger rounded me-2">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-0 fw-bold small">Solicitud_inicial.pdf</p>
                                    <small class="text-gray-500">180 KB</small>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-link text-gray-600 p-0">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>

                    <small class="text-gray-600 fw-bold d-block mb-2 mt-3">Documentos pendientes</small>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape icon-sm icon-shape-warning rounded me-2">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="mb-0 fw-bold small">Formato firmado</p>
                                    <small class="text-warning">Requerido</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Quick info --}}
            <div class="card border-0 shadow mb-4">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Información adicional</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-gray-600 fw-bold d-block mb-1">Tiempo estimado</small>
                        <p class="mb-0 small">3-5 días hábiles</p>
                    </div>
                    <div class="mb-3">
                        <small class="text-gray-600 fw-bold d-block mb-1">Responsable actual</small>
                        <p class="mb-0 small">Secretaría - María López</p>
                    </div>
                    <div>
                        <small class="text-gray-600 fw-bold d-block mb-1">Contacto</small>
                        <p class="mb-0 small">maria.lopez@cetam.gob.mx</p>
                        <p class="mb-0 small">Ext. 1234</p>
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="card border-0 shadow">
                <div class="card-header border-bottom">
                    <h2 class="fs-5 fw-bold mb-0">Acciones rápidas</h2>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Enviar mensaje
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            Programar cita
                        </button>
                        <button type="button" class="btn btn-outline-gray-600 btn-sm">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            Ver ayuda
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
