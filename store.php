<?php

    $title = $_POST["title"];

    if(!isset($title)){
        $obj["status"] = "error";
        echo json_encode($obj);
    }

    else{
        setcookie("title", $title, time() + (86400 * 30), "/");
        $obj["status"] = "ok";
        echo json_encode($obj);
    }
?>