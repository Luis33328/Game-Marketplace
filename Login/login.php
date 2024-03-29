<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>

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

    <body class="bodyV2">
        <div class="container">
            <div class="header">
                <div class="headContent">
                    

                    <div class="nav">
                        <a href="../index.php">Home</a>
                        <a href="">Biblioteca</a>
                        <?php

                            session_start();
                    
                            if(isset($_SESSION["loggedIn"])){
                                echo'<a href="profile.php">Meu Perfil</a>';
                            }
                            else{
                                echo'<a href="../Login/login.php">Meu Perfil</a>';
                            }
                        ?>
                        <a href="">Sobre</a>

                        <i id="heartIcon" class="fa-regular fa-heart"><span id="heartText">Favoritos</span></i>

                        <i id="cartIcon" class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <!--<div class="headerProf">
                        <a href="" id="headImg"><image src="public/images/iconBig.png" width="40" height="40"></image></a>
                        <a id="userHeader" href="">Usuario <i id="arrDownIcon" class="fa-solid fa-angle-down"></i></a>

                        <a id="headMoney" href="">R$ 00,00</a>
                    </div>-->

                    <div class="loginButtonH">
                        <a href="login.php" >Fazer Login</a>
                    </div>
                </div>

            </div>


            <div class="loginSpace">
                <div class="loginLeft">
                    <form method="POST" action="loginAuth.php">
                        <div class="login">

                            <span id="loginText">Iniciar Sessão</span>

                            <input id="username" type="text" name="username" placeholder="Usuário" autocomplete="off" /> 
                            <input id="password" type="password" name="password" placeholder="Senha" autocomplete="off" /> 

                            <a id="forgot" href="../ForgotPassword/ForgotPassword.html">Esqueci minha senha</a>

                            <input id="button" type="submit" name="button" value="LOGIN" />

                            <div class="newUser">
                                <span id="newUserText">Não tem uma conta?</span>
                                <a id="newUserA" href="../SignUp/SignUp.html">Cadastre-se</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="loginRight">
                    
                </div>
            </div>
        </div>
        
    </body>
</html>