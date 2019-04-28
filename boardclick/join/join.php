<?php
$title="Join";
$body=<<<EOT
<div class="row">
 <div class="col-6 offset-3">

<form action="/join" method="post">
  <div class="form-group row">
    <label for="inputUserName" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUserName" name="username" placeholder="Choose a username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Enter your email address">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Join</button>
    </div>
  </div>
</form>

</div>
</div>
EOT;
require_once($_SERVER['DOCUMENT_ROOT']."/bin/util/base.php");

?>
