<?php

include "../connect.php";

$user = $_POST['user'];

$verify = mysqli_query($connect, "SELECT email FROM accounts WHERE username =
    '$user'") or die("erro ao selecionar");
      if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "error";

        echo json_encode($obj);

      }else{

        $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){
            $obj[$count]["email"] = $reg["email"];

            echo json_encode($obj);

        }
      }

?>