<?php
    include_once "userlist_model.php";
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['username']) && isset($_POST['password'])){
        if(preg_match("/^[a-z]+$/",$_POST['username']) && preg_match("/^[a-zA-Z0-9]+$/",$_POST['password'])){
           #afegir verificar si existeix usuari
            $newUser = ["username"=>$_POST['username'],
                        "password"=>$_POST['password'],
                        "rol"=>$_POST['rol']];
            $userList[] = $newUser;
            file_put_contents('userlist.json',json_encode($userList,JSON_PRETTY_PRINT));
        }
    }
    include_once "adduser_view.php";
?>
