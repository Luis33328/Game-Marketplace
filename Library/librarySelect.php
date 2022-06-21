<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];
$title = $_POST["title"];

$verify = mysqli_query($connect, "SELECT * FROM `games` WHERE title = '$title' ");
    if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "noRec";

        echo json_encode($obj);

    }else{
        $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){

            $obj[$count]["title"] = $reg["title"];
            $obj[$count]["heroLogoImg"] = $reg["heroLogoImg"];
            $obj[$count]["file"] = $reg["file"];
            $count++;

        }

        echo json_encode($obj);

    }


?>