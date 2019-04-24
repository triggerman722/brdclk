<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nextdir=getNextDir($ld);
    recurse_copy($ld."/template/", $ld."/".$nextdir);

    $board = array();
    $board['name'] = $_REQUEST['name'];
    $board['description'] = $_REQUEST['description'];
    $board['isprivate'] = false;
    $board['photo_url'] = "rain.jpg";
    file_put_contents($ld."/".$nextdir."/board.json", json_encode($board));
    $directors = array();
    $directors[] = $username;
    file_put_contents($ld."/".$nextdir."/directors.json", json_encode($directors));

    header('Location: /boards/'.$nextdir.'/');
}


function getNextDir($base) {
$nextdir=1;
$dirs = scandir($base, 1);
for ($i = 0; $i < count($dirs); $i++) {
    if (is_numeric($dirs[$i])) {
        $nextdir = $dirs[$i] + 1;
    }
}
return $nextdir;
}
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 
?>
