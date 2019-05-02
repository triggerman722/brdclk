<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nextdir=getNextDir($ld);
    recurse_copy($ld."/template/", $ld."/".$nextdir);

    $meeting = array();
    $meeting['meeting_id'] = $nextdir;
    $meeting['board_id'] = $boardid;
    $meeting['name'] = $_REQUEST['name'];
    $meeting['description'] = $_REQUEST['description'];
    $meeting['isprivate'] = false;
    $meeting['photo_url'] = "/boards/".$boardid."/meetings/".$nextdir."/rain.jpg";
    file_put_contents($ld."/".$nextdir."/meeting.json", json_encode($meeting));
    $directors = array();
    $director = array();
    $director['username'] = $username;
    $roles = array();
    $roles[]='ROLE_DIRECTOR';
    $director['roles'] = $roles;
    $directors[] = $director;
    file_put_contents($ld."/".$nextdir."/directors.json", json_encode($directors));

$total = count($_FILES['attachments']['name']);
for( $i=0 ; $i < $total ; $i++ ) {
  $tmpFilePath = $_FILES['attachments']['tmp_name'][$i];
  if ($tmpFilePath != ""){
    $newFilePath = $ld."/".$nextdir."/attachments/" . $_FILES['attachments']['name'][$i];
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
//print $_FILES['attachments']['name'][$i];
    }
  }
}
    header('Location: ../meetings/'.$nextdir);
}

?>
