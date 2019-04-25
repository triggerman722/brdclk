<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">

<form method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" value="{$item['name']}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputDescription" name="description" rows="3">{$item['description']}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
      <input type="file" name="photo">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-12 d-flex justify-content-between ">
      <button type="submit" class="btn btn-primary">Edit</button>
      <button onclick="window.history.back()" class="btn btn-secondary ml-1">Cancel</button>
    </div>
  </div>
</form>

<div class="card border-danger">
  <div class="card-body">
      <a href="../delete" class="btn btn-danger">Delete</a>
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
