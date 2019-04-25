<?php
if($_SERVER['REQUEST_METHOD'] === 'DELETE' || (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'delete')) {
    unlink($ld."/agenda.json"); 
    header("Location:/boards/".$boardid."/meetings/".$meetingid);
}

?>
