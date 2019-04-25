<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
require_once($rd."util/deltree.php");
chdir('..');
$ld = getcwd();

$directors = json_decode(file_get_contents($ld.'/directors.json'), true);

if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/delete.php");

?>
