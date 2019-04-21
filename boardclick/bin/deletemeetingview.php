<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$meeting['name']." home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">


<div class="card border-danger">
  <div class="card-body">
<p>Are you sure you want to delete this meeting?</p>
<form method="post" >
      <input type=hidden name="_method" value="delete">
      <input type=submit class="btn btn-danger" value="Delete">
</form>
      <button class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
  </div>
</div>

</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."base.php");
}
?>
