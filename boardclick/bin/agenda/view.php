<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the home!";
    $sidebar="";
if (!isset($agenda)) {
$center=<<<EOI
<img class="img-fluid" src="/img/nothing.png"><br/><a href="/boards/{$boardid}/meetings/{$meetingid}/agenda/add" class="btn btn-primary">Add</a>
EOI;
} else {
$center=<<<EOI
<div class="card">
   <img class="card-img-top" src="{$agenda['photo_url']}">
   <div class="card-body">
    <h5 class="card-title">{$agenda['name']}</h5>
    <p class="card-text">{$agenda['description']}</p>
   </div>
  </div>
EOI;
$sidebar=<<<EOP
  <a href="/boards/{$boardid}/meetings/{$meetingid}/agenda/edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
EOP;
}
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
{$sidebar}
 </div>
 <div class="col-6">
{$center}
</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."util/base.php");
}
?>
