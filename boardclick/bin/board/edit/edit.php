<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $board = json_decode(file_get_contents($ld.'/board.json'), true);
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
        $board["photo_url"] = "/boards/".$boardid."/".basename($_FILES['photo']['name']);
    }
    $board['name'] = @$_REQUEST['name'];
    $board['description'] = @$_REQUEST['description'];
    $board['isprivate'] = @$_REQUEST['isprivate'];
    file_put_contents($ld.'/board.json', json_encode($board));
    header("Location:../");
}

?>
