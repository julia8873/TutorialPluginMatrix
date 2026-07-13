<?php

// permisos
defined('MOODLE_INTERNAL') || die();

$capabilities = [

    // Nombre de la capability. Formato obligatorio: tipo/nombreplugin:accion.
    // "addinstance" -> quién puede añadir este bloque

    // NOTA: cada capability declarado en access.php necesita su propia cadena de idioma:
    // al declarar block/holamundo:addinstance, moodle quita el 'block': holamundo:addinstance
    // y luego busca en lang/: $string['holamundo:addinstance']
    'block/holamundo:addinstance' => [

        // Riesgos de seguridad asociados a este permiso (solo informativo,
        // se muestra como icono de aviso en la gestión de roles).
        // RISK_SPAM: podría usarse para mostrar contenido no deseado.
        // RISK_XSS: podría usarse para inyectar código malicioso.
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        // Tipo de acción: 'write' o 'read'
        // Añadir un bloque modifica la página del curso -> 'write'.
        'captype' => 'write',

        // Nivel de la jerarquía Moodle donde aplica este permiso.
        // CONTEXT_BLOCK = el contexto del propio bloque.
        'contextlevel' => CONTEXT_BLOCK,

        // Roles "plantilla" que tienen este permiso ACTIVADO por defecto
        'archetypes' => [
            'editingteacher' => CAP_ALLOW, // profesor editor
            'manager'        => CAP_ALLOW, // gestor / administrador de curso
        ],

        // copia la configuración de permisos ya existente de la
        // capability nativa 'moodle/site:manageblocks', en vez de
        // definir manualmente rol por rol y contexto por contexto.
        'clonepermissionsfrom' => 'moodle/site:manageblocks',
    ],
];