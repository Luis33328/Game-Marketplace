<?php

$connect = mysqli_connect('localhost','root','', 'ghost');
$query_select = "SELECT profile_image FROM accounts ";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$filename = basename($_FILES["image"]["name"]);

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "A imagem ". htmlspecialchars( basename( $_FILES["image"]["name"])). "foi enviada.";

    $query = "UPDATE accounts SET profile_image = '$filename' ";
    $insert = mysqli_query($connect,$query);

    header("Location:../Profile/profile.php");
      
    
  } 
  else {
    echo "Ocorreu um erro ao subir sua imagem.";
  }

    

    



?>