<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
chdir('..');
$ld = getcwd();

$directors = json_decode(file_get_contents($ld.'/directors.json'), true);
if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

include(dir(__FILE__)."/view.php");

?>
