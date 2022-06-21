<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$user = $_POST['user'];
$email = $_POST['email'];



$digits = 5;
$randNum = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);



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

$mail->addAddress($email,'');
          $mail->Subject = "Alterar Senha";
          $mail->msgHTML('<h1>Seu código de verificação:</h1><br>' .$randNum);
          if($mail->send()){
            setcookie("user", $user, time() + (86400 * 30), "/");
            setcookie("resetValid", $randNum, time() + (86400 * 30), "/");
            $obj["status"] = "ok";
            echo json_encode($obj);
          }
          else{
            $obj["status"] = "error";
            echo json_encode($obj);
          }

?>