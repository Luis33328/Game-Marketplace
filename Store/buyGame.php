<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];
$price = $_POST["price"];
$currency = $_POST["currency"];
$title = $_POST["title"];

$final = (double)$currency - (double)$price;
//echo $final;

if($final < 0){
    $final = 0;
    $obj["status"] = "poor";

    echo json_encode($obj);
}
else{

    $buy = "UPDATE `accounts` SET cash =  ROUND(cash - '$price', 2) WHERE username = '$user' ";
    $update = mysqli_query($connect,$buy);

    $lib = "INSERT INTO usergames (gameID, user) VALUES ('$title','$user') ";
    $insert = mysqli_query($connect,$lib);

    $obj["status"] = "rich";

    echo json_encode($obj);
}



?>