<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
chdir('..');
$ld = getcwd();
$md = $ld."/meetings/";

require_once($rd."session_mgmt.php");

$meeting = json_decode(file_get_contents($md.'/meeting.json'), true);
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);

if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

include($rd."deletemeetingview.php");
include($rd."deletemeetingdelete.php");

function isDirector($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
