<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
require_once($rd."util/getnextdir.php");
require_once($rd."util/recursecopy.php");
chdir('..');
$ld = getcwd();

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/add.php");

?>
