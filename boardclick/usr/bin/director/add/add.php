<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $directors = json_decode(file_get_contents($ld."/directors.json"), true);
    $directors[] = $_REQUEST['name'];
    file_put_contents($ld."/directors.json", json_encode($directors));

    header('Location: /boards/'.$boardid.'/directors/');
}


?>
