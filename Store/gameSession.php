<?php

include "../connect.php";


if(!isset($_COOKIE['title'])) {
    $obj["status"] = "error";

    echo json_encode($obj);
}
else{

    $title = $_COOKIE['title'];

    $verify = mysqli_query($connect, "SELECT * FROM games WHERE title =  '$title' ") or die("erro ao selecionar");
    if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "error";

        echo json_encode($obj);

    }else{
        $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){

            $obj[$count]["title"] = $reg["title"];
            $obj[$count]["image"] = $reg["image"];
            $obj[$count]["developer"] = $reg["developer"];
            $obj[$count]["brief_description"] = $reg["brief_description"];
            $obj[$count]["launch_date"] = $reg["launch_date"];
            $obj[$count]["about"] = $reg["about"];
            $obj[$count]["price"] = $reg["price"];
            $obj[$count]["storeImg1"] = $reg["storeImg1"];
            $obj[$count]["storeImg2"] = $reg["storeImg2"];
            $obj[$count]["storeImg3"] = $reg["storeImg3"];
            $obj[$count]["storeImg4"] = $reg["storeImg4"];
            $obj[$count]["storeImg5"] = $reg["storeImg5"];
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