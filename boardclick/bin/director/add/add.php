<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $directors = json_decode(file_get_contents($ld."/directors.json"), true);
    $director = array();
    $director["username"] = strtolower($_REQUEST['name']);
    $roles = array();
    $roles[] = 'ROLE_DIRECTOR';

    if (isset($_REQUEST['role_chairman'])) {
        $roles[] = 'ROLE_CHAIRMAN';
    }
    if (isset($_REQUEST['role_secretary'])) {
        $roles[] = 'ROLE_SECRETARY';
    }
    if (isset($_REQUEST['role_treasurer'])) {
        $roles[] = 'ROLE_TREASURER';
    }
    
    $director["roles"] = $roles;
    $directors[] = $director;
    file_put_contents($ld."/directors.json", json_encode($directors));

    header('Location: /boards/'.$boardid.'/directors/');
}


?>
