<?php
    $json = file_get_contents('userlist.json');

$userList = json_decode($json,true);
?>