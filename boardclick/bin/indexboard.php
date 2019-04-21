<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
$ld = getcwd();

require_once($rd."session_mgmt.php");

$board = json_decode(file_get_contents($ld.'/board.json'), true);
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);
if ($board['isprivate']===true) {
    if (!isDirectory($directors, $username)) {
        header("Location:/login");
        die();
    }
}

include($rd."viewboard.php");
include($rd."deleteboard.php");

function isDirectory($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
