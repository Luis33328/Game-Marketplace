<?php
session_start();

include "../connect.php";

//$user = $_POST['username'];
//$button = $_POST['button'];
//$pass = md5($_POST['password']);

$message = $_POST['message'];

$iv = substr($message,0, 16);
$crypt = substr($message,16);


$key = '1564196849685165';

$decrypt = openssl_decrypt($crypt, 'aes-128-cbc', $key,  OPENSSL_ZERO_PADDING, $iv);

//echo $decrypt;

$decrypt = "[" . trim($decrypt) . "]";

//echo $decrypt;


$json = json_decode($decrypt, true);

//var_dump($json);

$user =  $json[0]['user'];
$pass =  $json[0]['pass'];

$digits = 5;
$randNum = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

require_once '../firebase/JWT.php';
require_once '../firebase/SignatureInvalidException.php';
require_once '../firebase/BeforeValidException.php';
require_once '../firebase/ExpiredException.php';
require_once '../firebase/JWK.php';
require_once '../firebase/Key.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;



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


$duration = 3600;

  //if (isset($button)) {

    $verify = mysqli_query($connect, "SELECT * FROM accounts WHERE username =
    '$user' AND password = '$pass'") or die("erro ao selecionar");
      if (mysqli_num_rows($verify)<=0){

        $obj["status"] = "incorrect";

        echo json_encode($obj);

      }else{

        $_POST;

        $key = 'bolo';
        $issuedAt = time();
        $expiration = $issuedAt + 60;
        $payload = [
            'iss' => 'http://example.org',
            'aud' => 'http://example.com',
            'iat' => $issuedAt,
            'nbf' => $issuedAt,
            'user'=> $user,
            'exp'=>$expiration,
            'permissions' => ['userOnly']
        ];

        $token = JWT::encode($payload, $key, 'HS256');
        if(!isset($_COOKIE["token"])) {
          setCookie("token", $token);
        }
          

        //echo ($jwt);

        //setcookie("login",$user);

        $query = mysqli_query($connect, "SELECT email FROM accounts WHERE username = '$user'");

        $email;

        while ( $reg = mysqli_fetch_assoc($verify)  ){
            $email = $reg["email"];

        }

        $_SESSION["loggedIn"] = array(
            "start"=>time(),
            "duration"=>$duration,
            "user"=>$user,
            "token"=>$token,
            "loginValid"=>$randNum,


        );


        $mail->addAddress($email,'');
          $mail->Subject = "Autenticaçâo de login";
          $mail->msgHTML('<h1>Seu código de verificação:</h1><br>' .$randNum);
          if($mail->send()){
            //echo"bala";
            $obj["status"] = "logged";
            echo json_encode($obj);
          }
          else{
            $obj["status"] = "error";
            echo json_encode($obj);
          }

        
      }
  //}
?>