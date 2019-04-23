<?php
if($_SERVER['REQUEST_METHOD'] === 'DELETE' || (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'delete')) {
    delTree($ld);
    header("Location:/");
}

function delTree($dir) { 
   $files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    } 
    return rmdir($dir); 
} 


?>
