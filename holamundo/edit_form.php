<?php
defined('MOODLE_INTERNAL') || die();

// CONFIGURACIÓN POR INSTANCIA

// por si el bloque tiene opciones configurables por cada instancia
// personalizar bloques para cada curso


class block_holamundo_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        // añadir un header en html
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        $mform->addElement('text', 'config_nombre', get_string('nombreasaludar', 'block_holamundo'));
        $mform->setType('config_nombre', PARAM_TEXT);
    }
}