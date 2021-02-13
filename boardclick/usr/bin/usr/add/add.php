<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];

    if (file_exists($ld."/".$username)) {
        header('Location:/join');
    }
    recurse_copy($ld."/template/", $ld."/".$username);

    $crypted = password_hash($password, PASSWORD_BCRYPT);
    file_put_contents($ld.'/'.$username.'/password.txt', $crypted);

    $profile = array();
    $profile['username'] = $username;
    $profile['email'] = $email;
    $profile['firstname'] = "";
    $profile['lastname'] = "";
    $profile['fullname'] = "";
    $profile['description'] = "";
    $profile['photo_url'] = "";
    $profile['banner_url'] = "";
    file_put_contents($ld."/".$username."/profile.json", json_encode($profile));

    require_once($_SERVER['DOCUMENT_ROOT']."/bin/util/mail/sendjoinemail.php");

    header('Location: /usr/'.$username);
}

?>
