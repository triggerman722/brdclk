<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/getnextdir.php");
require_once($rd."util/recursecopy.php");
require_once($rd."util/isdirector.php");

chdir('..');
$ld = getcwd();

$boardid = basename(dirname($ld, 1));
$dd = dirname($ld, 1);


$directors = json_decode(file_get_contents($dd.'/directors.json'), true);

if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/add.php");


?>
