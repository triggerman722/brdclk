<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/recursecopy.php");

chdir('../usr');
$ld = getcwd();

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/add.php");

?>
