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
  <a href="/boards" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Boards</a>
  <a href="/usr/{$profile['username']}/calendar/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Calendar</a>
  <a href="/usr/{$profile['username']}/tasks/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Tasks</a>
  <a href="/usr/{$profile['username']}/motions/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Motions</a>
  <a href="/usr/{$profile['username']}/documents/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Documents</a>
  <a href="/usr/{$profile['username']}/edit/" class="list-group-item list-group-item-action"><i class="fa fa-gear"></i> Settings</a>
</div>
 </div>
 <div class="col-6">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="What's your opinion?" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button">Post</button>
  </div>
</div>
<h3>Updates</h3>
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3 rounded-circle" style="width:64px;height:64px;background-image:url(/resources/img/m1.jpg);background-size:cover"  src="/resources/img/clear.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">joey</h5>
Raised a motion: "We should get a new land scaper."<p> Due: June 14, 2019 <span class="badge badge-info">draft</span></p>
<hr />
    </div>
  </li>
  <li class="media">
    <img class="mr-3 rounded-circle" style="width:64px;height:64px;background-image:url(/resources/img/m1.jpg);background-size:cover"  src="/resources/img/clear.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">reggie</h5>
Voted: <i>Motion to renew KPMG as Auditor for fiscal 2020</i> <p><span class="badge badge-primary">in favor</span> | Motion: <span class="badge badge-success">carried</span></p>
<hr />
    </div>
  </li>
  <li class="media">
    <img class="mr-3 rounded-circle" style="width:64px;height:64px;background-image:url(/resources/img/m1.jpg);background-size:cover"  src="/resources/img/clear.png" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Barbara Underall</h5>
Voted: <i>Motion to renew KPMG as Auditor for fiscal 2020</i> <span class"badge badge-danger">opposed</span> | Motion: <span class="badge badge-success">carried</span>
    </div>
  </li>
</ul>
</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."util/base.php");
}
?>
