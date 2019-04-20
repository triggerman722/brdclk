<?php
require_once("../../session_mgmt.php");
$board = json_decode(file_get_contents('board.json'), true);
$directors = json_decode(file_get_contents('directors.json'), true);
if ($board['isprivate']===true) {
    if (!isDirector($directors, $username)) {
        header("Location:/login");
        die();
    }
}
$title="Welcome to the ".$board['name']." home!";
$body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$board['name']}">
   <div class="card-body">
    <img src="{}" class="rounded-circle" style="margin-top:-50px;width:64px;">
    <h5 class="card-title">{$board['name']}</h5>
    <p class="card-text">{$board['description']}</p>
   </div>
  </div>
 </div>
 <div class="col-6">

</div>
 <div class="col-3">
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
 </div>
 </div>
EOT;
include("../../base.php");

function isDirector($directors, $username) {
   foreach ($directors as $key => $value) {
       if ($value===$username) {
           return true;
       }
   }
   return false;
}

?>
