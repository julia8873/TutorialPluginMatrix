<?php
// AJUSTES GLOBALES
// para configuraciones adicionales por el admin

defined('MOODLE_INTERNAL') || die();

// añade opción en Administración -> plugins -> bloques -> Hola mundo
// admin fija el nombre por defecto para TODO el sitio.
// podemos cambiar "Hola Mundo" a "Hola gente" pero se cambiaría en todo el sitio
// Si el profesor lo quiere cambiar solo para su asignatura, que use edit_form.php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext(
        'block_holamundo/nombredefecto',
        get_string('nombredefecto', 'block_holamundo'),
        '',
        'Mundo',
        PARAM_TEXT
    ));
}