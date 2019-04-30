<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
$ld = getcwd();

include(dirname(__FILE__)."/view.php");

?>
