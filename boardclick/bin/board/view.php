<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$board['name']." home!";
    $boardid = basename($ld);

if (count($directors)>0) {
    $listitems = "<ul class=\"list-unstyled\">";
    for($i=0;$i<count($directors);$i++){
        $usr = json_decode(file_get_contents($ud.$directors[$i]["username"]."/profile.json"),true);
        $roles="";
        for($y=0;$y<count($directors[$i]["roles"]);$y++) {
            $role=$directors[$i]["roles"][$y];
            $roles.=<<<EOT
<span class="badge badge-info mr-1">{$role}</span>
EOT;
        }
        $item=<<<EOI
<li class="media my-4">
    <img src="{$usr["photo_url"]}" class="rounded-circle mr-3" width="48px" height="48px" alt="{$usr["username"]}">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href="/usr/{$usr["username"]}">{$usr["username"]}</a></h5>
{$usr["description"]}
<p>{$roles}</p>
    </div>
  </li>
EOI;
        $listitems=$listitems.$item;
        $listitems= $listitems."</ul>";
    }
} else {
$listitems=<<<EOI
<div class="text-center mt-5">
<h1 class="text-muted mt-5">No directors found.</h1>

<a href="/boards/add" class="mt-4 btn btn-primary">Add a Director</a>
</div>
EOI;
}
$body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$board['photo_url']}">
   <div class="card-body">
    <h5 class="card-title">{$board['name']}</h5>
    <p class="card-text">{$board['description']}</p>
   </div>
  </div>
<div class="list-group mt-3">
  <a href="/boards/{$boardid}" class="list-group-item list-group-item-action active"><i class="fa fa-home"></i> Dashboard</a>
  <a href="bylaws" class="list-group-item list-group-item-action"><i class="fa fa-file"></i> Bylaws</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Committees</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Chat</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Compensation</a>
  <a href="/boards/{$boardid}/directors/" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Directors</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Dividends</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Executives</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Goals</a>
  <a href="/boards/{$boardid}/meetings/" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Meetings</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Options</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Proposals</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Resolutions</a>
  <a href="/boards/{$boardid}/edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
  <a href="committees" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Votes</a>
</div>
 </div>
 <div class="col-6">
{$listitems}
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
include($rd."util/base.php");
}
?>
