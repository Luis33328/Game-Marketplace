<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->IsSMTP(); 
$mail->CharSet = 'UTF-8';   
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;     
$mail->SMTPSecure = 'ssl'; 
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 465;



$user = $_POST['username'];
$pass = MD5($_POST['password']);
$email = $_POST['email'];
$connect = mysqli_connect('localhost','root','', 'ghost');
$query_select = "SELECT username FROM accounts WHERE username = '$user'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['username'];

$mail->Username = 'ghostsoftcompany@gmail.com'; 
$mail->Password = 'ghostcompany';
$mail->SetFrom('ghostsoftcompany@gmail.com', 'Ghost Software');


  if($user == "" || $user == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $user){

        echo"<script>
          alert('Esse login já existe');window.location.href='
          signUp.html';
        </script>";
        die();

      }else{
        $query = "INSERT INTO accounts (username, password, email) VALUES ('$user','$pass', '$email')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          $mail->addAddress($email,'');
          $mail->Subject = "Confirmação de conta";
          $mail->msgHTML("<h1>Para confirmar e ativar sua conta, clique no link abaixo:</h1><br> <a href='http://localhost/Game-Marketplace/Login/Login.html'>http://localhost/Game-Marketplace/Login/Login.html</a>");
          if($mail->send()){
            //echo"bala";

            echo"<script>
            //alert('Usuário cadastrado com sucesso!');
            window.location.href='../index.php'
          </script>";
          }
          else{
            echo"aff";
          }

          /**/
        }else{
          echo"<script>
            //alert('Não foi possível cadastrar esse usuário');
            window.location.href='signUp.php'
          </script>";
        }
      }
    }
?>