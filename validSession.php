<?php

include "connect.php";

session_start();

//echo'<script>alert($_SESSION["loggedIn"]["user"])</script>';
if(isset($_SESSION["loggedIn"])){
    $duration = $_SESSION["loggedIn"]["duration"];
    $start = $_SESSION["loggedIn"]["start"];

    $user = $_SESSION["loggedIn"]["user"];

    if((time() - $start) > $duration){
        unset($_SESSION["loggedIn"]["duration"]);
        unset($_SESSION["loggedIn"]["start"]);
        unset($_SESSION["loggedIn"]["user"]);
        unset($_SESSION["loggedIn"]);
    }


    $verify = mysqli_query($connect, "SELECT * FROM accounts WHERE username =
    '$user'") or die("erro ao selecionar");
      if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "error";

        echo json_encode($obj);

      }else{
        $count = 0;

        while ( $reg = mysqli_fetch_assoc($verify)  ){

            $obj[$count]["username"] = $reg["username"];
            $obj[$count]["email"] = $reg["email"];
            $obj[$count]["country"] = $reg["country"];
            $obj[$count]["state"] = $reg["state"];
            $obj[$count]["about"] = $reg["about"];
            $obj[$count]["cash"] = $reg["cash"];
            $obj[$count]["profile_image"] = $reg["profile_image"];
            $count++;

        }

        echo json_encode($obj);

      }

}

else{
  $obj["logged"] = "false";
  echo json_encode($obj);
}


?>