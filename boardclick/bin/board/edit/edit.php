<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = json_decode(file_get_contents($ld.'/board.json'), true);
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
        $item["photo_url"] = "/boards/".$boardid."/".basename($_FILES['photo']['name']);
    }
    $item['name'] = @$_REQUEST['name'];
    $item['description'] = @$_REQUEST['description'];
    $item['isprivate'] = @$_REQUEST['isprivate'];
    file_put_contents($ld.'/board.json', json_encode($item));
    header("Location:../");
}



?>
