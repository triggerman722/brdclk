<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$title="Add a new Director";
$body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">

<form method="post">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" placeholder="Director's name">
    </div>
  </div>
 <div class="form-group row">
    <div class="col-sm-12 d-flex justify-content-between ">
      <button type="submit" class="btn btn-primary">Add</button>
      <button onclick="window.history.back()" class="btn btn-secondary ml-1">Cancel</button>
    </div>
  </div>

</form>



</div>
 <div class="col-3">
 </div>
 </div>
EOT;
include($rd."util/base.php");
}
?>
