<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to ".$profile['username']."'s the home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$profile['banner_url']}">
   <div class="card-body">
    <img src="/resources/img/clear.png" class="img-thumbnail rounded-circle" style="background-image:url({$profile['photo_url']});background-size:cover;margin-top:-50px;width:64px;height:64px;">
    <h5 class="card-title">{$profile['username']}</h5>
    <p class="card-text">{$profile['description']}</p>
   </div>
  </div>
<div class="list-group mt-3">
  <a href="/usr/{$profile['username']}/edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
</div>
 </div>
 <div class="col-6">

</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."util/base.php");
}
?>
