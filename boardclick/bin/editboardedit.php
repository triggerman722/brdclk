<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $board = json_decode(file_get_contents($ld.'/board.json'), true);
    move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
    $board["photo_url"] = basename($_FILES['photo']['name']);
    $board['name'] = @$_REQUEST['boardname'];
    $board['description'] = @$_REQUEST['boarddescription'];
    file_put_contents($ld.'/board.json', json_encode($board));
    header("Location:/");
}



?>
