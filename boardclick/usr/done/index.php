<?php
$rd = $_SERVER['DOCUMENT_ROOT']."/bin/";
require_once($rd."util/session_basic.php");
$title="Pricing";
$body=<<<EOT
Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. Log into your PayPal account to view transaction details.

EOT;
require_once($_SERVER['DOCUMENT_ROOT']."/bin/util/base.php");
?>

