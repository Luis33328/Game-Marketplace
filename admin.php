<?php
session_start();

$user = $_SESSION["loggedIn"]["user"];

if($user == "admin"){
    $login["logged"] = "admin";
    echo json_encode($login);
}

else{
    $login["logged"] = "error";
    echo json_encode($login);  
}


?>