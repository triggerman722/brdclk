<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
$ud = $_SERVER['DOCUMENT_ROOT']."/usr/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
chdir('..');
$ld = getcwd();
$boardid = basename($ld);

$directors = json_decode(file_get_contents($ld.'/directors.json'), true);
if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

$list = $directors; 
include(dirname(__FILE__)."/view.php");

?>
