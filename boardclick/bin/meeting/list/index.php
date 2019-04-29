<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_mgmt.php");
require_once($rd."util/isdirector.php");
$ld = getcwd();
$boardid = basename(dirname($ld, 1));

$list = array();
$dirs = scandir($ld);
for ($i = 0; $i < count($dirs); $i++) {
    if (is_numeric($dirs[$i])) {
        $directors = json_decode(file_get_contents($dirs[$i].'/directors.json'), true);
        if(isDirector($directors, $username)) {
            $meeting = json_decode(file_get_contents($dirs[$i].'/meeting.json'), true);
            $list[] = $meeting;
        }
    }
}
include(dirname(__FILE__)."/view.php");

?>
