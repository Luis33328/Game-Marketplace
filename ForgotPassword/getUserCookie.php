<?php

include '../connect.php';

if(isset($_COOKIE['user'])){

    $obj['user'] = $_COOKIE['user'];
    echo json_encode($obj);
}

else{

    $obj['status'] = 'error';
    echo json_encode($obj);
}

?>