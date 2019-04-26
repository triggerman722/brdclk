<?php
if($_SERVER['REQUEST_METHOD'] === 'DELETE' || (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'delete')) {
    delTree($ld);
    header("Location:/boards/".$boardid);
}

?>
