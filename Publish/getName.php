<?php

include "../connect.php";

$verify = mysqli_query($connect, "SELECT * FROM games WHERE id=(SELECT MAX(id) FROM games); ");

if (mysqli_num_rows($verify)<=0){

    $obj["status"] = "error";

    echo json_encode($obj);

}else{

    $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){

            $obj[$count]["title"] = $reg["title"];
            $obj[$count]["image"] = $reg["image"];
            $obj[$count]["developer"] = $reg["developer"];
            $count++;

        }

        echo json_encode($obj);
}



?>