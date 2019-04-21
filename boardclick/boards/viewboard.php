<?php
$body=<<<EOT
 <div class="row">
 <div class="col-3">
  <div class="card">
   <img class="card-img-top" src="{}">
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
<form method="POST">
<input type="hidden" name="_method" value="delete" >
<input type="submit" class="btn btn-danger" value="Delete">
</form>
 </div>
 </div>

EOT;
include("../../base.php");



?>
