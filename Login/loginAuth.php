<?php
session_start();
$user = $_POST['username'];
$button = $_POST['button'];
$pass = md5($_POST['password']);
$connect = mysqli_connect('localhost','root','', 'ghost');

$digits = 5;
$randNum = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

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

$mail->Username = 'ghostsoftcompany@gmail.com'; 
$mail->Password = 'ghostcompany';
$mail->SetFrom('ghostsoftcompany@gmail.com', 'Ghost Software');


$duration = 3600;

  if (isset($button)) {

    $verify = mysqli_query($connect, "SELECT * FROM accounts WHERE username =
    '$user' AND password = '$pass'") or die("erro ao selecionar");
      if (mysqli_num_rows($verify)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        
        //setcookie("login",$user);
        $_SESSION["loggedIn"] = array(
            "start"=>time(),
            "duration"=>$duration,
            "user"=>$user


        );

        $mail->addAddress('luissouzasanto@gmail.com','');
          $mail->Subject = "Autenticaçâo de login";
          $mail->msgHTML('<h1>Seu código de verificação:</h1><br>' .$randNum);
          if($mail->send()){
            //echo"bala";

            header("Location:twoFactor.php");
          }

        
      }
  }
?>