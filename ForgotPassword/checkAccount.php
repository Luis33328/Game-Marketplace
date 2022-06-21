<?php

include "../connect.php";


$user = $_POST['user'];
$pass = $_POST['pass'];
//$button = $_POST['button'];




    $verify = mysqli_query($connect, "SELECT password FROM accounts WHERE username =
    '$user'") or die("erro ao selecionar");
      if (mysqli_num_rows($verify)<=0){
        $obj["status"] = "unfound";

        echo json_encode($obj);
      }else{
        $query = "UPDATE accounts SET password = '$pass' WHERE username = '$user' ";
        $insert = mysqli_query($connect,$query);

        if($insert){
          $obj["status"] = "success";

          echo json_encode($obj);
        }
        else{
          $obj["status"] = "error";

          echo json_encode($obj);
        }
      }


?>