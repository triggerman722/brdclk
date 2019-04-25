<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
$ld = getcwd();
$boardid = basename($ld);

$board = json_decode(file_get_contents($ld.'/board.json'), true);
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);
if ($board['isprivate']===true) {
    if (!isDirector($directors, $username)) {
        header("Location:/login");
        die();
    }
}

include(dirname(__FILE__)."/view.php");

?>
