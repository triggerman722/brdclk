<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $title="Welcome to ".$profile['username']."'s home!";
    $body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">

<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" value="{$profile['username']}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputDescription" name="description" rows="3">{$profile['description']}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <div class="custom-file">
         <input type="file" class="custom-file-input" id="customFile" name="photo">
         <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Banner</label>
    <div class="col-sm-10">
      <div class="custom-file">
         <input type="file" class="custom-file-input" id="customFile" name="banner">
         <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-12 d-flex justify-content-between ">
      <button type="submit" class="btn btn-primary">Edit</button>
      <button onclick="window.history.back()" class="btn btn-secondary ml-1">Cancel</button>
    </div>
  </div>
</form>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<style>
.nicEdit-panelContain, .nicEdit-button-undefined {

background-color: white !important;
opacity:1.0 !important;
}
.nicEdit-button-undefined {
border:0px solid white !important;
}
</style>
 <script type="text/javascript">
new nicEditor({iconsPath : '/img/nicEditorIcons.gif', buttonList : ['fontSize','bold','italic','underline','left', 'center','right','justify','ul', 'ol', 'indent','outdent','hr','forecolor','backcolor']}).panelInstance('inputDescription');


</script>

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
