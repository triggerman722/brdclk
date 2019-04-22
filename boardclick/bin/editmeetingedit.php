<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meeting = json_decode(file_get_contents($ld.'/meeting.json'), true);
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
        $meeting["photo_url"] = "/boards/".$boardid."/meetings/".$meetingid."/".basename($_FILES['photo']['name']);
    }
    $meeting['name'] = @$_REQUEST['name'];
    $meeting['description'] = @$_REQUEST['description'];
    file_put_contents($ld.'/meeting.json', json_encode($meeting));
    header("Location:../");
}



?>
