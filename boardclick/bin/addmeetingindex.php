<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
chdir('..');
$ld = getcwd();


require_once($rd."session_mgmt.php");

include($rd."addmeetingview.php");
include($rd."addmeetingadd.php");


?>

