<html>
    <head>
        <meta charset="utf-8" />
        <title>Meu Perfil</title>

        <script src="https://kit.fontawesome.com/50d53b2eac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <body>
        <?php
            //$connect = mysqli_connect('localhost','root','', 'ghost');

            session_start();

            //echo $_SESSION["loggedIn"]["user"];
            if(isset($_SESSION["loggedIn"])){
                $duration = $_SESSION["loggedIn"]["duration"];
                $start = $_SESSION["loggedIn"]["start"];

                if((time() - $start) > $duration){
                    unset($_SESSION["loggedIn"]["duration"]);
                    unset($_SESSION["loggedIn"]["start"]);
                    unset($_SESSION["loggedIn"]["user"]);
                    unset($_SESSION["loggedIn"]);
                }

            }

        ?>
        <div class="container">
            <div class="header">
                <div class="headContent">
                    

                    <div class="nav">
                        <a href="../index.html">Home</a>
                        <a href="">Biblioteca</a>
                        <a href="">Meu Perfil</a>
                        <a href="">Sobre</a>

                        <i id="heartIcon" class="fa-regular fa-heart"><span id="heartText">Favoritos</span></i>

                        <i id="cartIcon" class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <?php
                        
                        if(isset($_SESSION["loggedIn"])){
                            echo'
                            <div class="headerProf">
                                <a href="" id="headImg"><image src="public/images/iconBig.png" width="40" height="40"></image></a>
                                <a id="userHeader" href="">Usuario <i id="arrDownIcon" class="fa-solid fa-angle-down"></i></a>
        
                                <a id="headMoney" href="">R$ 00,00</a>

                                <a id="logout" href="logout.php">Sair</a>
                            </div>';
                        }

                        else{
                            echo'
                            <div class="loginButtonH">
                                <a href="Login/Login.html" >Fazer Login</a>
                            </div>';
                        }
                    ?>
                </div>

            </div>


            <div class="prof-back">
                <div class="content">
                    <?php
                        $connect = mysqli_connect('localhost','root','', 'ghost');

                        //$user = $_SESSION["loggedIn"]["user"];
                        $profImg = mysqli_query($connect, "SELECT profile_image from accounts where username = '" . mysqli_real_escape_string($connect, $_SESSION['loggedIn']['user']) . "' ");

                        echo $profImg->fetch_array()['id'] ?? '';;
                    
                        if($profImg != null){
                            echo'<img id="avBig" src="$profImg" />';
                        }
                        else{
  
                            echo'<img id="avBig" src="images/avatar_big.jpg" />';
                        }


                    ?>
                    
                    <div class="infoDisplay">
                        <?php
                        //$user = substr($_SESSION["loggedIn"]["user"]);

                        

                        $state = mysqli_query($connect, "SELECT state from accounts where username = '" . mysqli_real_escape_string($connect, $_SESSION['loggedIn']['user']) . "' ");    
                        $country = mysqli_query($connect, "SELECT country from accounts where username = '" . mysqli_real_escape_string($connect, $_SESSION['loggedIn']['user']) . "' ");
                        $about = mysqli_query($connect, "SELECT about from accounts where username = '" . mysqli_real_escape_string($connect, $_SESSION['loggedIn']['user']) . "' ");
                        
                            echo'<p><span id="nmDisplay">$SESSION["loggedIn"]["user"]</span></p>';
                            if($state != null || $country != null){
                                echo'<p><span id="inf">$state, $country</span></p>';
                            }
                            else{
                                echo'<p><span id="inf">Nada informado.</span></p>';
                            }
                            
                            
                            if($about != null){
                                echo'<span id="desc" style="white-space: pre-wrap;">$about</span>';
                            }

                            else{
                               echo'<span id="desc">Sem descrição.</span>';
                            }                                    


                        ?>
                    </div>

                    <div class="level">
                        <span id="lvlS">Nível</span>
                        <span id="lvlN">1</span>
                    </div>

                    <a href="edit">Editar perfil</a>
                </div>

                <div class="recent">
                    <span>Atividade recente</span>
                </div>

                <div class="ac1">
                    
                </div>

                <div class="ac2">
                    
                </div>

                <div class="ac3">
                    
                </div>

                <div class="games">
                    <span id="gm">Jogos</span>
                </div>

            </div>
        </div>
    </body>
</html>