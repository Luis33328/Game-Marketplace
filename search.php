<?php

    $text = $_POST["searchText"];

    if(!isset($text)){
        $obj["status"] = "error";
        echo json_encode($obj);
    }

    else{
        setcookie("search", $text, time() + (86400 * 30), "/");
        $obj["status"] = "ok";
        echo json_encode($obj);
    }
?>