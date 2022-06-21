<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];

$title = $_POST['title'];
$summary = $_POST['summary'];
$launchDate = $_POST['launchDate'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];
$tag4 = $_POST['tag4'];
$further = $_POST['further'];
$storePriceInp = $_POST['storePriceInp'];

if(isset($_FILES["image1"]) && isset($_FILES["image2"]) && isset($_FILES["image3"]) && isset($_FILES["image4"]) && isset($_FILES["image5"])){
  $target_dir = "../uploads/";

  $image1Dir = $target_dir . basename($_FILES["image1"]["name"]);
  $image2Dir = $target_dir . basename($_FILES["image2"]["name"]);
  $image3Dir = $target_dir . basename($_FILES["image3"]["name"]);
  $image4Dir = $target_dir . basename($_FILES["image4"]["name"]);
  $image5Dir = $target_dir . basename($_FILES["image5"]["name"]);

  $image1 = basename($_FILES["image1"]["name"]);
  $image2 = basename($_FILES["image2"]["name"]);
  $image3 = basename($_FILES["image3"]["name"]);
  $image4 = basename($_FILES["image4"]["name"]);
  $image5 = basename($_FILES["image5"]["name"]);



    $uploadOk = 1;
    //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $image1Dir) && move_uploaded_file($_FILES["image2"]["tmp_name"], $image2Dir) && move_uploaded_file($_FILES["image3"]["tmp_name"], $image3Dir) && move_uploaded_file($_FILES["image4"]["tmp_name"], $image4Dir) && move_uploaded_file($_FILES["image5"]["tmp_name"], $image5Dir)) {
      //echo "A imagem ". htmlspecialchars( basename( $_FILES["image"]["name"])). "foi enviada.";

      $query = "UPDATE games SET brief_description = '$summary', launch_date = '$launchDate', about = '$further', price = '$storePriceInp', storeImg1 = '$image1', storeImg2 = '$image2', storeImg3 = '$image3', storeImg4 = '$image4', storeImg5 = '$image5', tag1 = '$tag1', tag2 = '$tag2', tag3 = '$tag3', tag4 = '$tag4' WHERE title = '$title' ";

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