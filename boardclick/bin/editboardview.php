<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to the ".$board['name']." home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">

<form method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="boardname" value="{$board['name']}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputDescription" name="boarddescription" rows="3">{$board['description']}</textarea>
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
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</form>


</div>
 <div class="col-3">
 </div>
 </div>

EOT;
include($rd."base.php");
}
?>
