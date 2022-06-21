<?php

if(!isset($_COOKIE['search'])) {
    $obj["status"] = "error";

    echo json_encode($obj);
}
else{

    $obj["status"] = "ok";
    $obj["cookie"] = $_COOKIE['search'];

    echo json_encode($obj);
}

?>