<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $item = array();
    $item['name'] = $_REQUEST['name'];
    $item['description'] = $_REQUEST['description'];
    $item['isprivate'] = false;
    file_put_contents($ld."/"."/agenda.json", json_encode($item));

    header('Location: ../');
}


?>
