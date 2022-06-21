<?php

include "../connect.php";

session_start();

if(isset($_SESSION["loggedIn"])){
    $user = $_SESSION["loggedIn"]["user"];

    if(!isset($_COOKIE['title'])) {
        $obj["status"] = "error";
    
        echo json_encode($obj);
    }
    else{
    
        $title = $_COOKIE['title'];
    
        $query_select = "SELECT gameID FROM userGames WHERE gameID = '$title' && user = '$user'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
    
    
        if(isset($array)){
            $logarray = $array['gameID'];
    
            $obj["status"] = "same";
    
            echo json_encode($obj);
        }
        else{
            $logarray = null;
    
            $verify = mysqli_query($connect, "SELECT * FROM games WHERE title =  '$title' ") or die("erro ao selecionar");
            if (mysqli_num_rows($verify)<=0){
    
                $obj["status"] = "error";
    
                echo json_encode($obj);
    
            }else{
                $count = 0;
    
                while ( $reg = mysqli_fetch_assoc($verify)  ){
                    $obj[$count]["price"] = $reg["price"];
                    $count++;
    
                }
    
                echo json_encode($obj);
    
            }
        }
    
            
    }
}
    
else{

    if(!isset($_COOKIE['title'])) {
        $obj["status"] = "error";
    
        echo json_encode($obj);
    }
    else{
        $title = $_COOKIE['title'];

        $verify = mysqli_query($connect, "SELECT * FROM games WHERE title =  '$title' ") or die("erro ao selecionar");
        if (mysqli_num_rows($verify)<=0){

            $obj["status"] = "error";
    
            echo json_encode($obj);
    
        }else{
            $count = 0;
    
            while ( $reg = mysqli_fetch_assoc($verify)  ){
                $obj[$count]["price"] = $reg["price"];
                $count++;
    
            }
    
            echo json_encode($obj);
    
        }
    }

   
}







?>