{{--
 * Company: CETAM
 * Project: ST
 * File: preguntas-frecuentes.blade.php
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
    {{-- Breadcrumb --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Preguntas frecuentes</li>
                </ol>
            </nav>
            <h2 class="h4">Preguntas frecuentes (FAQ)</h2>
            <p class="mb-0">Encuentra respuestas a las preguntas más comunes sobre el sistema y trámites</p>
        </div>
    </div>

    {{-- Search and Filter --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Buscar en preguntas frecuentes...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select">
                                <option value="">Todas las categorías</option>
                                <option value="tramites">Trámites</option>
                                <option value="cuenta">Mi cuenta</option>
                                <option value="documentos">Documentos</option>
                                <option value="sistema">Sistema</option>
                                <option value="convocatorias">Convocatorias</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category: Trámites --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="icon-shape icon-sm icon-shape-primary rounded me-3">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"></path>
                                <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"></path>
                            </svg>
                        </div>
                        <h2 class="fs-5 fw-bold mb-0">Trámites y solicitudes</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion" id="faqTramites">
                        {{-- Question 1 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tramites1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTramites1" aria-expanded="false" aria-controls="collapseTramites1">
                                    ¿Cómo puedo iniciar un nuevo trámite?
                                </button>
                            </h3>
                            <div id="collapseTramites1" class="accordion-collapse collapse" aria-labelledby="tramites1" data-bs-parent="#faqTramites">
                                <div class="accordion-body">
                                    <p>Para iniciar un nuevo trámite, sigue estos pasos:</p>
                                    <ol>
                                        <li>Ve a la sección <strong>Nuevo trámite</strong> desde el menú principal</li>
                                        <li>Selecciona el tipo de trámite que deseas iniciar del catálogo disponible</li>
                                        <li>Lee los requisitos y documentos necesarios</li>
                                        <li>Haz clic en el botón <strong>Iniciar trámite</strong></li>
                                        <li>Completa el formulario con tus datos</li>
                                        <li>Adjunta los documentos solicitados</li>
                                        <li>Revisa tu información y confirma el envío</li>
                                    </ol>
                                    <p class="mb-0">Recibirás una notificación con el folio de tu solicitud.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 2 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tramites2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTramites2" aria-expanded="false" aria-controls="collapseTramites2">
                                    ¿Cuánto tiempo tarda en procesarse mi trámite?
                                </button>
                            </h3>
                            <div id="collapseTramites2" class="accordion-collapse collapse" aria-labelledby="tramites2" data-bs-parent="#faqTramites">
                                <div class="accordion-body">
                                    <p>El tiempo de procesamiento depende del tipo de trámite:</p>
                                    <ul>
                                        <li><strong>Solicitud de vacaciones:</strong> 3-5 días hábiles</li>
                                        <li><strong>Solicitud de permiso:</strong> 2-4 días hábiles</li>
                                        <li><strong>Cambio de adscripción:</strong> 10-15 días hábiles</li>
                                        <li><strong>Registro de incapacidad:</strong> 1-2 días hábiles</li>
                                        <li><strong>Solicitud de beca:</strong> 15-30 días hábiles</li>
                                        <li><strong>Solicitud de promoción:</strong> 30-45 días hábiles</li>
                                    </ul>
                                    <p class="mb-0">Estos tiempos son estimados y pueden variar según la carga de trabajo del departamento.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 3 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tramites3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTramites3" aria-expanded="false" aria-controls="collapseTramites3">
                                    ¿Cómo puedo dar seguimiento a mi trámite?
                                </button>
                            </h3>
                            <div id="collapseTramites3" class="accordion-collapse collapse" aria-labelledby="tramites3" data-bs-parent="#faqTramites">
                                <div class="accordion-body">
                                    <p>Puedes dar seguimiento a tu trámite de varias formas:</p>
                                    <ul>
                                        <li><strong>Mis trámites:</strong> Accede a la sección Mis trámites donde verás el listado de todos tus trámites con su estado actual</li>
                                        <li><strong>Ver detalle:</strong> Haz clic en "Ver detalle" de cualquier trámite para ver la información completa, incluyendo el paso en el que se encuentra</li>
                                        <li><strong>Notificaciones:</strong> Recibirás notificaciones automáticas cuando tu trámite avance o requiera alguna acción</li>
                                    </ul>
                                    <p class="mb-0">Cada trámite muestra una barra de progreso con los pasos completados y pendientes.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 4 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="tramites4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTramites4" aria-expanded="false" aria-controls="collapseTramites4">
                                    ¿Puedo cancelar un trámite una vez iniciado?
                                </button>
                            </h3>
                            <div id="collapseTramites4" class="accordion-collapse collapse" aria-labelledby="tramites4" data-bs-parent="#faqTramites">
                                <div class="accordion-body">
                                    <p>Sí, puedes cancelar un trámite siempre y cuando no haya sido completado. Para cancelarlo:</p>
                                    <ol>
                                        <li>Ve al detalle del trámite que deseas cancelar</li>
                                        <li>Haz clic en el botón <strong>Cancelar trámite</strong> en la esquina superior derecha</li>
                                        <li>Confirma la cancelación</li>
                                    </ol>
                                    <p class="mb-0"><strong>Nota:</strong> Una vez cancelado, no podrás recuperar el trámite y tendrás que iniciarlo nuevamente si lo requieres.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category: Mi cuenta --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="icon-shape icon-sm icon-shape-success rounded me-3">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="fs-5 fw-bold mb-0">Mi cuenta y datos personales</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion" id="faqCuenta">
                        {{-- Question 1 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="cuenta1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuenta1" aria-expanded="false" aria-controls="collapseCuenta1">
                                    ¿Cómo puedo actualizar mis datos personales?
                                </button>
                            </h3>
                            <div id="collapseCuenta1" class="accordion-collapse collapse" aria-labelledby="cuenta1" data-bs-parent="#faqCuenta">
                                <div class="accordion-body">
                                    <p>Para actualizar tus datos personales:</p>
                                    <ol>
                                        <li>Ve a la sección <strong>Mis datos</strong> desde el menú principal</li>
                                        <li>Edita los campos que necesites actualizar (teléfono, dirección, email personal, etc.)</li>
                                        <li>Haz clic en el botón <strong>Guardar cambios</strong></li>
                                    </ol>
                                    <p><strong>Nota:</strong> Algunos campos como CURP, RFC, nombre y fecha de nacimiento no pueden ser editados por seguridad. Si necesitas modificarlos, contacta al Departamento de Recursos Humanos.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 2 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="cuenta2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuenta2" aria-expanded="false" aria-controls="collapseCuenta2">
                                    ¿Cómo cambio mi contraseña?
                                </button>
                            </h3>
                            <div id="collapseCuenta2" class="accordion-collapse collapse" aria-labelledby="cuenta2" data-bs-parent="#faqCuenta">
                                <div class="accordion-body">
                                    <p>Para cambiar tu contraseña:</p>
                                    <ol>
                                        <li>Ve a la sección <strong>Mis datos</strong></li>
                                        <li>En el panel lateral derecho, busca la sección "Seguridad"</li>
                                        <li>Haz clic en el botón <strong>Cambiar contraseña</strong></li>
                                        <li>Ingresa tu contraseña actual</li>
                                        <li>Ingresa tu nueva contraseña (debe tener al menos 8 caracteres)</li>
                                        <li>Confirma tu nueva contraseña</li>
                                        <li>Haz clic en <strong>Actualizar contraseña</strong></li>
                                    </ol>
                                    <p class="mb-0"><strong>Recomendación:</strong> Usa una contraseña segura que combine letras mayúsculas, minúsculas, números y símbolos.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 3 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="cuenta3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuenta3" aria-expanded="false" aria-controls="collapseCuenta3">
                                    ¿Qué hago si olvidé mi contraseña?
                                </button>
                            </h3>
                            <div id="collapseCuenta3" class="accordion-collapse collapse" aria-labelledby="cuenta3" data-bs-parent="#faqCuenta">
                                <div class="accordion-body">
                                    <p>Si olvidaste tu contraseña:</p>
                                    <ol>
                                        <li>En la página de inicio de sesión, haz clic en <strong>¿Olvidaste tu contraseña?</strong></li>
                                        <li>Ingresa tu correo electrónico institucional</li>
                                        <li>Recibirás un correo con un enlace para restablecer tu contraseña</li>
                                        <li>Haz clic en el enlace (válido por 24 horas)</li>
                                        <li>Ingresa y confirma tu nueva contraseña</li>
                                    </ol>
                                    <p class="mb-0">Si no recibes el correo, verifica tu carpeta de spam o contacta al soporte técnico.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category: Documentos --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="icon-shape icon-sm icon-shape-warning rounded me-3">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="fs-5 fw-bold mb-0">Documentos y archivos</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion" id="faqDocumentos">
                        {{-- Question 1 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="documentos1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocumentos1" aria-expanded="false" aria-controls="collapseDocumentos1">
                                    ¿Qué formatos de archivo puedo subir?
                                </button>
                            </h3>
                            <div id="collapseDocumentos1" class="accordion-collapse collapse" aria-labelledby="documentos1" data-bs-parent="#faqDocumentos">
                                <div class="accordion-body">
                                    <p>El sistema acepta los siguientes formatos de archivo:</p>
                                    <ul>
                                        <li><strong>Documentos:</strong> PDF, DOC, DOCX</li>
                                        <li><strong>Imágenes:</strong> JPG, JPEG, PNG</li>
                                        <li><strong>Hojas de cálculo:</strong> XLS, XLSX</li>
                                    </ul>
                                    <p><strong>Límites:</strong></p>
                                    <ul>
                                        <li>Tamaño máximo por archivo: 10 MB</li>
                                        <li>Máximo 5 archivos por carga</li>
                                    </ul>
                                    <p class="mb-0"><strong>Recomendación:</strong> Usa formato PDF para documentos oficiales y escaneados.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 2 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="documentos2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocumentos2" aria-expanded="false" aria-controls="collapseDocumentos2">
                                    ¿Cómo subo documentos a mi trámite?
                                </button>
                            </h3>
                            <div id="collapseDocumentos2" class="accordion-collapse collapse" aria-labelledby="documentos2" data-bs-parent="#faqDocumentos">
                                <div class="accordion-body">
                                    <p>Para subir documentos a tu trámite:</p>
                                    <ol>
                                        <li>Ve al detalle de tu trámite</li>
                                        <li>En el panel derecho, busca la sección "Documentos"</li>
                                        <li>Haz clic en el botón <strong>Subir documento</strong></li>
                                        <li>Selecciona el tipo de documento que vas a subir</li>
                                        <li>Haz clic en <strong>Seleccionar archivo</strong> o arrastra el archivo a la zona indicada</li>
                                        <li>Verifica que el archivo sea correcto</li>
                                        <li>Haz clic en <strong>Cargar</strong></li>
                                    </ol>
                                    <p class="mb-0">El documento aparecerá en la lista de documentos adjuntos de tu trámite.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 3 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="documentos3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocumentos3" aria-expanded="false" aria-controls="collapseDocumentos3">
                                    ¿Cómo descargo documentos y formatos?
                                </button>
                            </h3>
                            <div id="collapseDocumentos3" class="accordion-collapse collapse" aria-labelledby="documentos3" data-bs-parent="#faqDocumentos">
                                <div class="accordion-body">
                                    <p>Para descargar documentos:</p>
                                    <p><strong>Formatos y reglamentos generales:</strong></p>
                                    <ol>
                                        <li>Ve a la sección <strong>Convocatorias y documentos</strong></li>
                                        <li>Busca el documento que necesites en las listas de Reglamentos o Manuales y Formatos</li>
                                        <li>Haz clic en el nombre del documento o en el ícono de descarga</li>
                                    </ol>
                                    <p><strong>Documentos de tus trámites:</strong></p>
                                    <ol>
                                        <li>Ve al detalle de tu trámite</li>
                                        <li>En la sección de documentos, haz clic en el ícono de descarga junto al archivo que desees</li>
                                    </ol>
                                    <p class="mb-0">Los archivos se descargarán directamente a tu carpeta de descargas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category: Sistema --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="icon-shape icon-sm icon-shape-info rounded me-3">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="fs-5 fw-bold mb-0">Sistema y notificaciones</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion" id="faqSistema">
                        {{-- Question 1 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="sistema1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSistema1" aria-expanded="false" aria-controls="collapseSistema1">
                                    ¿Cómo funcionan las notificaciones?
                                </button>
                            </h3>
                            <div id="collapseSistema1" class="accordion-collapse collapse" aria-labelledby="sistema1" data-bs-parent="#faqSistema">
                                <div class="accordion-body">
                                    <p>El sistema envía notificaciones automáticas para mantenerte informado:</p>
                                    <ul>
                                        <li><strong>Actualizaciones de trámites:</strong> Cuando tu trámite avance o cambie de estado</li>
                                        <li><strong>Acciones requeridas:</strong> Cuando necesites subir documentos o completar algún paso</li>
                                        <li><strong>Recordatorios:</strong> Plazos próximos a vencer</li>
                                        <li><strong>Comentarios:</strong> Cuando el personal agregue observaciones a tu trámite</li>
                                        <li><strong>Convocatorias:</strong> Nuevas convocatorias publicadas</li>
                                    </ul>
                                    <p>Las notificaciones aparecen en:</p>
                                    <ul>
                                        <li>El icono de campana en la barra superior</li>
                                        <li>La sección <strong>Notificaciones</strong></li>
                                        <li>Tu correo electrónico institucional</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Question 2 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="sistema2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSistema2" aria-expanded="false" aria-controls="collapseSistema2">
                                    ¿Qué navegadores son compatibles con el sistema?
                                </button>
                            </h3>
                            <div id="collapseSistema2" class="accordion-collapse collapse" aria-labelledby="sistema2" data-bs-parent="#faqSistema">
                                <div class="accordion-body">
                                    <p>El sistema es compatible con las versiones más recientes de:</p>
                                    <ul>
                                        <li><strong>Google Chrome</strong> (recomendado)</li>
                                        <li><strong>Mozilla Firefox</strong></li>
                                        <li><strong>Microsoft Edge</strong></li>
                                        <li><strong>Safari</strong> (macOS)</li>
                                    </ul>
                                    <p><strong>Requisitos mínimos:</strong></p>
                                    <ul>
                                        <li>Conexión a internet estable</li>
                                        <li>JavaScript habilitado</li>
                                        <li>Cookies habilitadas</li>
                                        <li>Resolución mínima: 1024x768</li>
                                    </ul>
                                    <p class="mb-0"><strong>Nota:</strong> Para mejor experiencia, mantén tu navegador actualizado a la última versión.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Question 3 --}}
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="sistema3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSistema3" aria-expanded="false" aria-controls="collapseSistema3">
                                    ¿Qué hago si encuentro un error o problema técnico?
                                </button>
                            </h3>
                            <div id="collapseSistema3" class="accordion-collapse collapse" aria-labelledby="sistema3" data-bs-parent="#faqSistema">
                                <div class="accordion-body">
                                    <p>Si encuentras un problema técnico, sigue estos pasos:</p>
                                    <ol>
                                        <li><strong>Actualiza la página:</strong> Presiona F5 o Ctrl+R (Cmd+R en Mac)</li>
                                        <li><strong>Limpia el caché:</strong> A veces los archivos temporales causan problemas</li>
                                        <li><strong>Intenta en otro navegador:</strong> Verifica si el problema persiste</li>
                                        <li><strong>Toma una captura de pantalla:</strong> Del error o problema que observas</li>
                                        <li><strong>Contacta a soporte técnico:</strong>
                                            <ul>
                                                <li>Email: soporte@cetam.gob.mx</li>
                                                <li>Teléfono: 55-1234-5678 ext. 100</li>
                                                <li>Horario: Lunes a viernes de 9:00 a 18:00</li>
                                            </ul>
                                        </li>
                                    </ol>
                                    <p class="mb-0">Proporciona tu número de empleado, descripción del problema y la captura de pantalla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Help Section --}}
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <svg class="icon icon-sm me-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                </svg>
                <div>
                    <strong>¿No encontraste tu respuesta?</strong> Contacta al Departamento de Recursos Humanos al correo
                    <a href="mailto:rh@cetam.gob.mx" class="alert-link">rh@cetam.gob.mx</a> o al teléfono 55-1234-5678 ext. 200.
                </div>
            </div>
        </div>
    </div>
</div>
