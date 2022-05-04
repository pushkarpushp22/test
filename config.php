<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'sbc3';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'jhuTy$34#reRTgyfhU$re4rTg';
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbcollation' => 'utf8_unicode_ci',
);

$CFG->wwwroot   = 'http://68.183.81.163/sbc3';
$CFG->dataroot  = '/var/www/sbc3data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
