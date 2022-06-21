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
$mail->SMTPSecure = 'tls'; 
$mail->Host = 'smtp-mail.outlook.com'; 
$mail->Port = 587;


/*$user = $_POST['username'];
$pass = MD5($_POST['password']);
$email = $_POST['email'];*/

//print_r($_POST);

$message = $_POST['message'];

$iv = substr($message,0, 16);
$crypt = substr($message,16);



$key = '1564196849685165';
//$iv = '4164149658496541';

$decrypt = openssl_decrypt($crypt, 'aes-128-cbc', $key,  OPENSSL_ZERO_PADDING, $iv);

//echo $decrypt;

$decrypt = "[" . trim($decrypt) . "]";

//echo $decrypt;


$json = json_decode($decrypt, true);

//var_dump($json);

$user =  $json[0]['user'];
$pass =  $json[0]['pass'];
$email =  $json[0]['email'];


$connect = mysqli_connect('localhost','root','', 'ghost');
$query_select = "SELECT username FROM accounts WHERE username = '$user'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);

if(isset($array)){
  $logarray = $array['username'];
}
else{
  $logarray = null;
}


$mail->Username = 'ghostsoftware@outlook.pt'; 
$mail->Password = 'ghostcompany1';
$mail->SetFrom('ghostsoftware@outlook.pt', 'Ghost Software');
// For most clients expecting the Priority header:
// 1 = High, 2 = Medium, 3 = Low
$mail->Priority = 1;
// MS Outlook custom header
// May set to "Urgent" or "Highest" rather than "High"
$mail->AddCustomHeader("X-MSMail-Priority: High");
// Not sure if Priority will also set the Importance header:
$mail->AddCustomHeader("Importance: High");


  if($user == "" || $user == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }
    else{
      if($logarray == $user){

        $obj["status"] = "nao";
        $obj["message"] = "aaaaa";

        echo json_encode($obj);

      }else{
        $query = "INSERT INTO accounts (username, password, email) VALUES ('$user','$pass', '$email')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          $mail->addAddress($email,'');
          $mail->Subject = "Confirmação de conta";
          $mail->msgHTML("<h1>Para confirmar e ativar sua conta, clique no link abaixo:</h1><br> <a href='http://localhost/Game-Marketplace/Login/Login.html'>http://localhost/Game-Marketplace/Login/Login.html</a>");
          if($mail->send()){
            //echo"bala";

            $obj["status"] = "sent";
            echo json_encode($obj);
          }
          else{
            
          }

          /**/
        }else{
          echo json_encode("outro");
        }
      }
    }
?>