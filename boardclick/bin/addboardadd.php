<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nextdir=getNextDir();
    mkdir("../".$nextdir);
    mkdir("../".$nextdir."/edit");
    mkdir("../".$nextdir."/delete");
    $board = array();
    $board['name'] = $_REQUEST['boardname'];
    $board['description'] = $_REQUEST['boarddescription'];
    $board['isprivate'] = false;
    $board['photo_url'] = "rain.jpg";
    file_put_contents("../".$nextdir."/board.json", json_encode($board));
    $directors = array();
    $directors[] = $username;
    file_put_contents("../".$nextdir."/directors.json", json_encode($directors));

    copy("../template/index.php", "../".$nextdir."/index.php");
    copy("../template/rain.jpg", "../".$nextdir."/rain.jpg");
    copy("../template/edit/index.php", "../".$nextdir."/edit/index.php");
    copy("../template/delete/index.php", "../".$nextdir."/delete/index.php");
    header('Location: /boards/'.$nextdir.'/');
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