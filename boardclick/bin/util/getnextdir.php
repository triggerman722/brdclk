<?php

function getNextDir($base) {
$nextdir=1;
$dirs = scandir($base, 1);

for ($i = 0; $i < count($dirs); $i++) {
    if (is_numeric($dirs[$i])) {
        $nextdir = $dirs[$i] + 1;
        break;
    }
}
return $nextdir;
}

?>
