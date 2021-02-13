<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $agenda = json_decode(file_get_contents($ld.'/agenda.json'), true);
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
        $agenda["photo_url"] = "/boards/".$boardid."/meetings/".$meetingid."/".basename($_FILES['photo']['name']);
    }
    $agenda['name'] = @$_REQUEST['name'];
    $agenda['description'] = @$_REQUEST['description'];
    file_put_contents($ld.'/agenda.json', json_encode($agenda));
    header("Location:../");
}



?>
