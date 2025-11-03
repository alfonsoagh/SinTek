<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: proj.php
 * Fecha de creación: 02/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

return [
    // Slug configurable del proyecto para prefijar rutas: /p/<slug>
    // Personaliza vía entorno con CETAM_PROJ_SLUG
    'slug' => env('CETAM_PROJ_SLUG', 'sintek'),

    // (Opcional) Prefijo base para nombres de ruta, por convención 'proj'
    'route_name_prefix' => env('CETAM_PROJ_ROUTE_NAME_PREFIX', 'sintek'),
];
