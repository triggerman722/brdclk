<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");

chdir('..');
$ld = getcwd();
$usr = basename($ld);

if ($usr!==$username) {
    header("Location:/login");
    die();
}
$profile = json_decode(file_get_contents($ld.'/profile.json'), true);

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/edit.php");

?>
