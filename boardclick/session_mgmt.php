<?php
session_start();
if (!isset($_SESSION['username']))
{
	$_SESSION['returnto'] = $_SERVER['REQUEST_URI']; 
        header('Location:/login');
}
$username=$_SESSION['username'];
?>
