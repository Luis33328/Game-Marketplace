<?php

require_once 'firebase/JWT.php';
require_once 'firebase/SignatureInvalidException.php';
require_once 'firebase/BeforeValidException.php';
require_once 'firebase/ExpiredException.php';
require_once 'firebase/JWK.php';
require_once 'firebase/Key.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

/*$headers = apache_request_headers();
if(!isset($headers['loginValid'])){
    echo("<script>location.href = 'Login/login.html'</script>")
} |*/

$key = 'bolo';

$token = null;
$headers = apache_request_headers();
if(isset($headers['Authorization'])){
    $token = $headers['Authorization'];
} 

$decoded = JWT::decode($token, new Key($key, 'HS256'));

print_r($decoded);

$data = $_POST['data'];

echo(json_decode($data));
echo("<script>alert('oi')</script");

?>