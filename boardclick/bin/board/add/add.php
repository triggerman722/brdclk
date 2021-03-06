<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nextdir=getNextDir($ld);
    recurse_copy($ld."/template/", $ld."/".$nextdir);

    $board = array();
    $board['board_id'] = $nextdir;
    $board['name'] = $_REQUEST['name'];
    $board['description'] = $_REQUEST['description'];
    $board['isprivate'] = !empty($_REQUEST['isprivate']);
    $board['photo_url'] = "/boards/".$nextdir."/rain.jpg";

    file_put_contents($ld."/".$nextdir."/board.json", json_encode($board));

    $directors = array();
    $director = array();
    $director['username'] = $username;
    $roles = array();
    $roles[] = 'ROLE_CHAIRMAN';
    $roles[] = 'ROLE_DIRECTOR';
    $roles[] = 'ROLE_TREASURER';
    $roles[] = 'ROLE_SECRETARY';
    $roles[] = 'ROLE_COMMITTEE_LEAD';

    $director['roles'] = $roles;
    $directors[] = $director;

    file_put_contents($ld."/".$nextdir."/directors.json", json_encode($directors));

    header('Location: /boards/'.$nextdir.'/');
}

?>
