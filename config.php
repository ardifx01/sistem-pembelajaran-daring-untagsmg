<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'untagsmg1_spada';
$CFG->dbuser    = 'untagsmg1_spada';
$CFG->dbpass    = '@Untagsmg1945';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 1;

$CFG->wwwroot   = 'https://spada.untagsmg.ac.id';
$CFG->dataroot  = '/home/untagsmg1/public_html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
