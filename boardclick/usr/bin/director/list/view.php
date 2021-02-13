<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title=$username."'s meetings";
    $listitems = "<ul class=\"list-unstyled\">";
    for($i=0;$i<count($list);$i++){
        $item=<<<EOI
<li class="media my-4">
    <div class="media-body">
{$list[$i]}
    </div>
  </li>
EOI;
        $listitems=$listitems.$item;
    }
    $listitems= $listitems."</ul>";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="">
   <div class="card-body">
    <h5 class="card-title">{$username}</h5>
    <p class="card-text">{$username}</p>
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
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Options</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Proposals</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Resolutions</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Votes</a>
</div>
 </div>
 <div class="col-6">
{$listitems}
</div>
 <div class="col-3">
   <a href="/boards/{$boardid}/directors/add" class="btn btn-primary">Add</a>
 </div>
 </div>

EOT;
include($rd."util/base.php");
}
?>
