<?php

function isDirector($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value["username"]===$username) {
           return true;
       }
   }
   return false;
}

?>
