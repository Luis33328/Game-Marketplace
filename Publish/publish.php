<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];

$title = $_POST['titlePbl'];
$dev = $_POST['devPbl'];


if(isset($_FILES["file"]) && isset($_FILES["image"])){
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $target_image = $target_dir . basename($_FILES["image"]["name"]);
  $filename = basename($_FILES["file"]["name"]);
  $imagename = basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["image"]["tmp_name"], $target_image)) {
      //echo "A imagem ". htmlspecialchars( basename( $_FILES["image"]["name"])). "foi enviada.";

      $query = "INSERT INTO games (title, image, developer, file) VALUES ('$title', '$imagename', '$dev', '$filename')";

      $insert = mysqli_query($connect,$query);

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