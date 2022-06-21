<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];

$title = $_POST['title'];

if(isset($_FILES["image1"]) && isset($_FILES["image2"]) && isset($_FILES["image3"])){
  $target_dir = "../uploads/";
  $target_image1 = $target_dir . basename($_FILES["image1"]["name"]);
  $target_image2 = $target_dir . basename($_FILES["image2"]["name"]);
  $target_image3 = $target_dir . basename($_FILES["image3"]["name"]);
  $image1 = basename($_FILES["image1"]["name"]);
  $image2 = basename($_FILES["image2"]["name"]);
  $image3 = basename($_FILES["image3"]["name"]);

    $uploadOk = 1;
    //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_image1) && move_uploaded_file($_FILES["image2"]["tmp_name"], $target_image2) && move_uploaded_file($_FILES["image3"]["tmp_name"], $target_image3)) {
      //echo "A imagem ". htmlspecialchars( basename( $_FILES["image"]["name"])). "foi enviada.";

      $query = "UPDATE games SET libImg = '$image1', heroImg = '$image2', heroLogoImg = '$image3' WHERE title = '$title'";

      $insert = mysqli_query($connect,$query);

      setcookie("title", $title, time() + (86400 * 30), "/");

      $obj["status"] = "sent";

      echo json_encode($obj);
    } 
    else {

      $obj["status"] = "error";
  
      echo json_encode($obj);
      //echo "Ocorreu um erro ao subir sua imagem.";
    }
}
else{
    $obj["status"] = "no_file";
  
      echo json_encode($obj);
}

  
  
?>