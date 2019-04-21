<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $md = $ld."/meetings/";
    $nextdir=getNextDir($md);
    recurse_copy($md."/template/", $md."/".$nextdir);

    $meeting = array();
    $meeting['name'] = $_REQUEST['name'];
    $meeting['description'] = $_REQUEST['description'];
    $meeting['isprivate'] = false;
    $meeting['photo_url'] = "rain.jpg";
    file_put_contents($md."/".$nextdir."/meeting.json", json_encode($meeting));
    $directors = array();
    $directors[] = $username;
    file_put_contents($md."/".$nextdir."/directors.json", json_encode($directors));

    header('Location: ../meetings/');
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
