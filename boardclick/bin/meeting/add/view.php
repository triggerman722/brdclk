<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$title="Add a new Meeting";
$body=<<<EOT
 <div class="row">
 <div class="col-3">
 </div>
 <div class="col-6">



<form method="post" id="form" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName" name="name" placeholder="Give it a name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputDescription" name="description" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAttachments" class="col-sm-2 col-form-label">Attachments</label>
    <div class="col-sm-10">
<label class="form-control pb-5">
<div class="row pl-2 mt-2">
<span class="pr-2">Drag or browse file files:</span><input type="file" class="pb-5" id="customFile" name="attachments[]" multiple>
</div>
</label>
    </div>
  </div>
<hr/>
 <div class="form-group row">
    <div class="col-sm-12 d-flex justify-content-between ">
      <button type="submit" class="btn btn-primary">Add</button>
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
new nicEditor({iconsPath : '/img/nicEditorIcons.gif', buttonList : ['fontSize','bold','italic','underline','left', 'center','right','justify','ul', 'ol','indent','outdent','hr','forecolor','backcolor']}).panelInstance('inputDescription');

</script>
</div>
 <div class="col-3">
 </div>
 </div>
EOT;
include($rd."util/base.php");
}
?>
