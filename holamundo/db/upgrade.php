<?php

// lógica para actualizar de una versión a otra
defined('MOODLE_INTERNAL') || die();

function xmldb_block_holamundo_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2025071300) {
        // crear tabla
        $table = new xmldb_table('block_holamundo_visitas');
        $field = new xmldb_field('idioma', XMLDB_TYPE_CHAR, '10', null, null, null, null, 'contador');

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        upgrade_block_savepoint(true, 2025071300, 'holamundo');
    }
}