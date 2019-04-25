<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">


<div class="card border-danger">
  <div class="card-body">
    <p>Are you sure you want to perform this delete?</p>

<form method="post">
 <div class="form-group row">
    <div class="col-sm-12 d-flex justify-content-between ">
      <input type=hidden name="_method" value="delete">
      <button type="submit" class="btn btn-danger">Delete</button>
      <button onclick="window.history.back()" class="btn btn-secondary ml-1">Cancel</button>
    </div>
  </div>

</form>

  </div>
</div>

</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."util/base.php");
}
?>
