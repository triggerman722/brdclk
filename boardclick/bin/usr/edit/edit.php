<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = json_decode(file_get_contents($ld.'/profile.json'), true);
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $ld."/".basename($_FILES['photo']['name']));
        $item["photo_url"] = "/usr/".$item["username"]."/".basename($_FILES['photo']['name']);
    }
    if (is_uploaded_file($_FILES['banner']['tmp_name'])) {
        move_uploaded_file($_FILES['banner']['tmp_name'], $ld."/".basename($_FILES['banner']['name']));
        $item["banner_url"] = "/usr/".$item["username"]."/".basename($_FILES['banner']['name']);
    }
    //$item['username'] = @$_REQUEST['username'];
    $item['description'] = @$_REQUEST['description'];
    file_put_contents($ld.'/profile.json', json_encode($item));
    header("Location:/usr/".$item['username']);
}



?>
