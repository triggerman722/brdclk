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
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$board['name']." home!";
    include($rd."viewboard.php");
} else {
    include($rd."deleteboard.php");
    die();
}

function isDirectory($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
