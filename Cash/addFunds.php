<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];
$cash = $_POST["cash"];

$query = "UPDATE `accounts` SET cash = cash + '$cash' WHERE username = '$user' ";
$update = mysqli_query($connect,$query);

$obj["status"] = "ok";

echo json_encode($obj);

?>