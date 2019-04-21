<?php
$title="Ooops!! Nothing to see here";
$body=<<<EOT
<p class="display-1 text-center">401</p>
<p class="text-center">You are not allowed to see that. Click here to <a href="/login" class="btn btn-info">Login</a>.</p>
EOT;
require_once($_SERVER['DOCUMENT_ROOT']."/bin/base.php");
?>
