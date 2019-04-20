<?php
$username=@$_REQUEST['u'];
if ($username==null) {
    header('Location:/404');
    die();
}
$userarray = json_decode(file_get_contents($username.'.json'), true);
$title=$userarray['username']."'s profile";
$body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{$userarray['banner_url']}">
   <div class="card-body">
    <img src="{$userarray['photo_url']}" class="rounded-circle" style="margin-top:-50px;width:64px;">
    <h5 class="card-title">{$userarray['fullname']}</h5>
    <p class="card-text">{$userarray['description']}</p>
   </div>
  </div>
 </div>
 <div class="col-6">
<div class="media border p-4">
  <img src="{$userarray['photo_url']}" class="mr-3 rounded-circle" style="width:48px" alt="...">
  <div class="media-body">
    <h5 class="mt-0">{$userarray['fullname']}</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
<div class="media mt-3">
  <img src="{$userarray['photo_url']}" class="mr-3 rounded-circle" style="width:32px" alt="...">
  <div class="media-body">
    <h5 class="mt-0">{$userarray['fullname']}</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
 at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
 </div>
</div>

<div class="media border p-4">
  <img src="{$userarray['photo_url']}" class="mr-3 rounded-circle" style="width:48px" alt="...">
  <div class="media-body">
    <h5 class="mt-0">{$userarray['fullname']}</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
<div class="media mt-3">
  <img src="{$userarray['photo_url']}" class="mr-3 rounded-circle" style="width:32px" alt="...">
  <div class="media-body">
    <h5 class="mt-0">{$userarray['fullname']}</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
 at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
 </div>
</div>




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
include("../base.php");



?>
