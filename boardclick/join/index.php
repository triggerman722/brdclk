<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("join.php");
} else {
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    if (file_exists('../usr/'.$username)) {
        header('Location:/join');
    }
    mkdir('../usr/'.$username);

    $crypted = password_hash($password, PASSWORD_BCRYPT);
    file_put_contents('../usr/'.$username.'/password.txt', $crypted);

    $director = array();
    $director['username'] = $username; 
    $director['firstname'] = ""; 
    $director['lastname'] = ""; 
    $director['fullname'] = ""; 
    $director['description'] = ""; 
    $director['photo_url'] = ""; 
    $director['banner_url'] = ""; 
    file_put_contents("../directors/".$username.".json", json_encode($director));

    header('Location:/login');

}


