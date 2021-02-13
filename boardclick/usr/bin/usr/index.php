<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
$ld = getcwd();

$profile = json_decode(file_get_contents($ld.'/profile.json'), true);

include(dirname(__FILE__)."/view.php");

?>
