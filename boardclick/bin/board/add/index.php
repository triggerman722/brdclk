<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
chdir('..');
$ld = getcwd();
$boardid = basename($ld);

require_once($rd."session_mgmt.php");
/* Won't have directors yet. 
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);

if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}
*/

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/add.php");

function isDirector($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
