<?php

    session_start();

    unset($_SESSION["loggedIn"]["duration"]);
    unset($_SESSION["loggedIn"]["start"]);
    unset($_SESSION["loggedIn"]["user"]);
    unset($_SESSION["loggedIn"]);
    
    header('Location: index.php');

?>