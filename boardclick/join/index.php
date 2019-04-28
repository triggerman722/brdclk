<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("join.php");
} else {
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];

    if (file_exists('../usr/'.$username)) {
        header('Location:/join');
    }
    mkdir('../usr/'.$username);

    $crypted = password_hash($password, PASSWORD_BCRYPT);
    file_put_contents('../usr/'.$username.'/password.txt', $crypted);

    $profile = array();
    $profile['username'] = $username; 
    $profile['email'] = $email; 
    $profile['firstname'] = ""; 
    $profile['lastname'] = ""; 
    $profile['fullname'] = ""; 
    $profile['description'] = ""; 
    $profile['photo_url'] = ""; 
    $profile['banner_url'] = ""; 
    file_put_contents("../usr/".$username."/profile.json", json_encode($profile));

    require_once($_SERVER['DOCUMENT_ROOT']."/bin/util/mail/sendjoinemail.php");
    sendjoinemail($email, $username);
    header('Location:/login');

}


