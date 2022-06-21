<?php

include "../connect.php";


if(!isset($_COOKIE['search'])) {
    $obj["status"] = "error";

    echo json_encode($obj);
}
else{

    $search = "%" .$_COOKIE['search'] ."%";

   //echo $search ;

    $verify = mysqli_query($connect, "SELECT * FROM `games` WHERE title LIKE '$search' ") or die("erro ao selecionar");
    if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "error";

        echo json_encode($obj);

    }else{
        $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){

            $obj[$count]["title"] = $reg["title"];
            $obj[$count]["image"] = $reg["image"];
            $obj[$count]["price"] = $reg["price"];
            $obj[$count]["tag1"] = $reg["tag1"];
            $obj[$count]["tag2"] = $reg["tag2"];
            $obj[$count]["tag3"] = $reg["tag3"];
            $obj[$count]["tag4"] = $reg["tag4"];
            $count++;

        }

        echo json_encode($obj);

    }
}




?>