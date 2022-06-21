<?php

include "../connect.php";

session_start();

$user = $_SESSION["loggedIn"]["user"];

$query_select = "SELECT profile_image FROM accounts ";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);

$country = $_POST['country'];
$state = $_POST['state'];
$about = $_POST['about'];


if(isset($_FILES["file"])){
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $filename = basename($_FILES["file"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      //echo "A imagem ". htmlspecialchars( basename( $_FILES["image"]["name"])). "foi enviada.";

      $imageQ = "UPDATE accounts SET profile_image = '$filename' WHERE username = '$user' ";
      $insert = mysqli_query($connect,$imageQ);
    } 
    else {

      $obj["status"] = "error";
  
      echo json_encode($obj);
      //echo "Ocorreu um erro ao subir sua imagem.";
    }
}
  
  $countryQ = "UPDATE accounts SET country = '$country' WHERE username = '$user' ";
  $stateQ = "UPDATE accounts SET state = '$state' WHERE username = '$user' ";
  $aboutQ = "UPDATE accounts SET about = '$about' WHERE username = '$user' ";
  $insertC = mysqli_query($connect,$countryQ);
  $insertS = mysqli_query($connect,$stateQ);
  $insertA = mysqli_query($connect,$aboutQ);

  $obj["status"] = "sent";

  echo json_encode($obj);
  
?>