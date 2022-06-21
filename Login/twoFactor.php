<?php

session_start();

if(isset($_SESSION["loggedIn"])){

    $obj["code"] = $_SESSION["loggedIn"]["loginValid"];

    echo json_encode($obj);

}
else{
    $obj["resetCode"] = $_COOKIE["resetValid"];

    echo json_encode($obj);
}

?>