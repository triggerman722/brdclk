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
    $directors[] = $username;
    file_put_contents($ld."/".$nextdir."/directors.json", json_encode($directors));

    header('Location: ../meetings/'.$nextdir);
}

?>
