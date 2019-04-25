<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
chdir('..');
$ld = getcwd();
$meetingid = basename($ld);
$boardid = basename(dirname($ld, 2));

$meeting = json_decode(file_get_contents($ld.'/meeting.json'), true);
$directors = json_decode(file_get_contents($ld.'/directors.json'), true);

if (!isDirector($directors, $username)) {
    header("Location:/login");
    die();
}

include(dirname(__FILE__)."/view.php");
include(dirname(__FILE__)."/edit.php");


?>
