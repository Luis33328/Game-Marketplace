<?php

    $connect = mysqli_connect('localhost','root','', 'ghost');

    if(!$connect) {
        
        die ("<script>alert(Falha na conexão com o banco.)</script>");
    }

?>