<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $item = array();
    $item['name'] = $_REQUEST['name'];
    $item['description'] = $_REQUEST['description'];
    $item['isprivate'] = false;
    file_put_contents($ld."/"."/item.json", json_encode($item));
    $directors = array();
    $directors[] = $username;
    file_put_contents($ld."/directors.json", json_encode($directors));

    header('Location: ../');
}


?>
