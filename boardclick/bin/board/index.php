<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
$ld = getcwd();
$boardid = basename($ld);

require_once($rd."session_mgmt.php");
$board = json_decode(file_get_contents($ld.'/board.json'), true);
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);
if ($board['isprivate']===true) {
    if (!isDirector($directors, $username)) {
        header("Location:/login");
        die();
    }
}

include(dirname(__FILE__)."/view.php");

function isDirector($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
