<?php
session_start();
if (!isset($_SESSION['username']))
{
        unset($username);
	$_SESSION['returnto'] = $_SERVER['REQUEST_URI']; 
        header('Location:/login');
} else {
        $username=$_SESSION['username'];
}
?>
