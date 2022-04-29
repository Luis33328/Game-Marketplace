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

                        <!--<a href=""><img id="ghostLogo" src="public/images/teste_2.svg" /> </a>-->
                        <a href="../index.php">Home</a>
                        <a href="">Biblioteca</a>
                        <?php
                    
                            if(isset($_SESSION["loggedIn"])){
                                echo'<a href="../Profile/profile.php">Meu Perfil</a>';
                            }
                            else{
                                echo'<a href="../Login/login.php">Meu Perfil</a>';
                            }
                        ?>
                        
                        <a href="">Sobre</a>

                        <i id="heartIcon" class="fa-regular fa-heart"><span id="heartText">Favoritos</span></i>

                        <i id="cartIcon" class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <?php
                    
                        if(isset($_SESSION["loggedIn"])){
                            echo'
                            <div class="headerProf">
                                <a href="" id="headImg"><image src="../Home/img/iconBig.png" width="40" height="40"></image></a>
                                <a id="userHeader" href="">Usuario <i id="arrDownIcon" class="fa-solid fa-angle-down"></i></a>
        
                                <a id="headMoney" href="">R$ 00,00</a>

                                <a id="logout" href="../logout.php">Sair</a>
                            </div>';
                        }

                        else{
                            echo'
                            <div class="loginButtonH">
                                <a href="Login/Login.html" >Fazer Login</a>
                            </div>';
                        }
                    ?>

                    <!---->

                    
                </div>

            </div>

            <div class="nameEdit">
                <img id="editAvtr" src="../Home/img/iconBig.png" />

                <span id="editUser">Usuário</span>
            </div>

            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="editCont">
                    <h3 id="infSp">Informações</h3>
                    <div class="editProfileContent">
                        <div class="userInfo">
                                <p><span id="countrySp">País</span></p>
                                    <input type="text" name="country" />
                                <p><span id="stateSP">Estado</span></p>
                                    <input type="text" name="state" />
                                <p><span id="aboutSp">Sobre você</span></p>
                                <textarea id="about" type="text" name="about"></textarea>
                                
                            
                        </div>
                        <div class="uploadImg">
                            <h4>Alterar avatar</h4>
                            <p><img id="avMed" src="../Home/img/iconBig.png" /></p>

                            <span id="sizeSp">Tamanho recomendado: 150x150</span>
                            <label for="upFrm">Selecionar arquivo</label>
                            <p><input id="upFrm" type="file" name="image" accept="image/*" /></p>
                            <span id='file-name'></span>
                            <div class="submitBtns">
                                <a href="../Profile/profile.php" class="cancel">Cancelar</a> 
                                <input type="submit" class="upBtn" value="Salvar" /> 
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>

        <script>
        upFrm.onchange = evt => {
            const [file] = upFrm.files
            if (file) {
                avMed.src = URL.createObjectURL(file)
            }
        }


        var $input    = document.getElementById('upFrm'),
            $fileName = document.getElementById('file-name');

        //var name = $input.replace(/^.*\\/, "");

        $input.addEventListener('change', function(){
            $fileName.textContent = this.value.replace("C:\\fakepath\\", "");
        });

        </script>

    </body>


</html>