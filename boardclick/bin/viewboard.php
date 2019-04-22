<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$board['name']." home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$board['photo_url']}">
   <div class="card-body">
    <img src="{}" class="rounded-circle" style="margin-top:-50px;width:64px;">
    <h5 class="card-title">{$board['name']}</h5>
    <p class="card-text">{$board['description']}</p>
   </div>
  </div>
<div class="list-group mt-3">
  <a href="dashboard" class="text-small list-group-item list-group-item-action"><i class="fa fa-home"></i> Dashboard</a>
  <a href="bylaws" class="list-group-item list-group-item-action"><i class="fa fa-file"></i> Bylaws</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Committees</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Chat</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Compensation</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Directors</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Dividends</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Executives</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Goals</a>
  <a href="meetings/" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Meetings</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Options</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Proposals</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Resolutions</a>
  <a href="edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Votes</a>
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
include($rd."base.php");
}
?>
