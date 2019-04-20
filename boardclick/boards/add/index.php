<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("addboard.php");
} else {
    $nextdir=getNextDir();
    mkdir("../".$nextdir);
    $board = array();
    $board['name'] = $_REQUEST['boardname'];
    $board['description'] = $_REQUEST['boarddescription'];
    $board['isprivate'] = false;
    file_put_contents("../".$nextdir."/board.json", json_encode($board));
    copy("../template/index.php", "../".$nextdir."/index.php");
    copy("../template/directors.json", "../".$nextdir."/directors.json");



    header('Location: /boards/'.$nextdir);
}


function getNextDir() {
$nextdir=1;
$dirs = scandir("../", 1);
for ($i = 0; $i < count($dirs); $i++) {
    if (is_numeric($dirs[$i])) {
        $nextdir = $dirs[$i] + 1;
    }
}
return $nextdir;
}
