<?php
require_once("../../session_mgmt.php");
$board = json_decode(file_get_contents('board.json'), true);
$directors = json_decode(file_get_contents('directors.json'), true);
if ($board['isprivate']===true) {
    if (!isDirectory($directors, $username)) {
        header("Location:/login");
        die();
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$board['name']." home!";
    include("../viewboard.php");
} else {
    include("../deleteboard.php");
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
