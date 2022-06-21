//token.php

<?php

require_once 'Firebase/JWT.php';
require_once 'Firebase/SignatureInvalidException.php';
require_once 'Firebase/BeforeValidException.php';
require_once 'Firebase/ExpiredException.php';
require_once 'Firebase/JWK.php';
require_once 'Firebase/Key.php';

use \Firebase\JWT;
use \Firebase\Key;

$_POST;

$key = 'jwt_aula';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000,
    'user'=>'cleversonavelino@gmail.com',
    'permissoes' => [
        'telaUsuario' => 'read,write'
    ]
];

$jwt = JWT::encode($payload, $key, 'HS256');-

echo ($jwt);

?>

//validarToken.php

<?php

require_once 'Firebase/JWT.php';
require_once 'Firebase/SignatureInvalidException.php';
require_once 'Firebase/BeforeValidException.php';
require_once 'Firebase/ExpiredException.php';
require_once 'Firebase/JWK.php';
require_once 'Firebase/Key.php';

use \Firebase\JWT;
use \Firebase\Key;   


$key = 'jwt_aula';

$jwt = null;
$headers = apache_request_headers();
if(isset($headers['Authorization'])){
$jwt = $headers['Authorization'];
} 

$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($decoded);

?>


//index.html
function login() {
            $.post('token.php',
                {
                    login: 'cleversonavelino@gmail.com',
                    senha: '1234567'
                }, function (data) {
                    localStorage.setItem("token",data);
                    location.href = "dashboard.html";
                }).fail(function (response, textStatus, errorThrown) {
                    if (response.status == 404) {
                        console.log("erro");
                    }
                });
        }


//listar - onde o token deve ser passado

function listarUsuarios() {
            let token = localStorage.getItem("token");
            $.ajax({
            url: 'validarToken.php',
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': token
            },
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
               console.log(result);
            },
            error: function (error) {
                console.log(error);
            }
        });
        }