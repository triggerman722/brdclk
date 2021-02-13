<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("login.php");
} else {
	@session_start();

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$crypted = file_get_contents('../usr/'.$username.'/password.txt');

	if (password_verify($password, $crypted))
        {
                $_SESSION['username'] = $username;
                if (isset($_SESSION['returnto'])) {
			header('Location:'.$_SESSION['returnto']);
		}
		else {
			header('Location:/boards');
		}
        }
        else
        {
                unset($_SESSION['username']);
                header('HTTP/1.0 401 Unauthorized');
		header('Location:/401');
        }
}
?>
