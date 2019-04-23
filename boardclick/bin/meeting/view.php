<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$meeting['photo_url']}">
   <div class="card-body">
    <h5 class="card-title">{$meeting['name']}</h5>
    <p class="card-text">{$meeting['description']}</p>
   </div>
  </div>
<div class="list-group mt-3">
  <a href="/boards/{$boardid}/meetings/{$meetingid}/agenda/" class="list-group-item list-group-item-action"><i class="fa fa-file-o"></i> Agenda</a>
  <a href="/boards/{$boardid}/meetings/{$meetingid}/edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
</div>
 </div>
 <div class="col-6">

</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."base.php");
}
?>
