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
    <div class="col-sm-2">Roles</div>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="role_chairman" name="role_chairman" value="role_chairman">
            <label class="form-check-label" for="inputPrivate">Chairman</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="role_secretary" name="role_secretary" value="role_secretary">
            <label class="form-check-label" for="inputPrivate">Secretary</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="role_treasurer" name="role_treasurer" value="role_treasurer">
            <label class="form-check-label" for="inputPrivate">Treasurer</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="role_director" name="role_director" value="role_director">
            <label class="form-check-label" for="inputPrivate">Director</label>
        </div>
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
