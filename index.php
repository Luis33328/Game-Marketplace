<html>
    <head>
        <meta charset="utf-8"/>
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
        <script src="https://kit.fontawesome.com/50d53b2eac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Home/css/style.css" />

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

        <title>Home</title>
    </head>

    <body>
        <?php
            session_start();

            echo'<script>alert($_SESSION["loggedIn"]["user"])</script>';
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
                        <a href="index.php">Home</a>
                        <a href="">Biblioteca</a>
                        <?php
                    
                            if(isset($_SESSION["loggedIn"])){
                                echo'<a href="Profile/profile.php">Meu Perfil</a>';
                            }
                            else{
                                echo'<a href="Login/login.php">Meu Perfil</a>';
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
                                <a href="" id="headImg"><image src="Home/img/iconBig.png" width="40" height="40"></image></a>
                                <a id="userHeader" href="">Usuario <i id="arrDownIcon" class="fa-solid fa-angle-down"></i></a>
        
                                <a id="headMoney" href="">R$ 00,00</a>

                                <a id="logout" href="logout.php">Sair</a>
                            </div>';
                        }

                        else{
                            echo'
                            <div class="loginButtonH">
                                <a href="Login/Login.php" >Fazer Login</a>
                            </div>';
                        }
                    ?>

                    <!---->

                    
                </div>

            </div>


            <div class="highlights">
                <a href="">
                    <div class="highlight fadeSt">
                        <image class="highImage" src="Home/img/RE2_hero_small.png" width="100%"></image>
                    </div>
                </a>

                <a href="">
                    <div class="highlight fadeSt">
                        <image class="highImage" src="Home/img/stardew_hero_small.png" width="100%"></image>
                    </div>
                </a>

                <a href="">
                    <div class="highlight fadeSt">
                        <image class="highImage" src="Home/img/cuphead_hero._small.png" width="100%"></image>
                    </div>
                </a>

                <a href="">
                    <div class="highlight fadeSt">
                        <image class="highImage" src="Home/img/maigo_hero_small.png" width="100%"></image>
                    </div>
                </a>

                <a href="">
                    <div class="highlight fadeSt">
                        <image class="highImage" src="Home/img/stanley_logo_small.png" width="100%"></image>
                    </div>
                </a>

                <div class="highDotsDiv">
                    <span class="highDots" ></span>
                    <span class="highDots" ></span>
                    <span class="highDots" ></span>
                    <span class="highDots" ></span>
                    <span class="highDots" ></span>
                </div>

                <!--<a class="prevHigh" onclick="plusSlidesHigh(-1)">&#10094;</a>
                <a class="nextHigh" onclick="plusSlidesHigh(1)">&#10095;</a>-->
            </div>

            


            <div class="publishers">
                <div class="publ1">
                    <a id="publiContent" href="">
                        <i id="sonyIcon" class="fa-brands fa-playstation"></i>
                        <span id="sonyText">Playstation</span>
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="capcomIcon" src="Home/img/capcom_logo.svg" />
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="fromSoftwareIcon" src="Home/img/fromSoftware_logo.svg" />
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="capcomIcon" src="Home/img/Valve_logo.svg" />
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="bandaiIcon" src="Home/img/bandai_logo.svg" />
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="konamiIcon" src="Home/img/konami_logo.svg" />
                    </a>
                </div>

                <div class="publ1">
                    <a id="publiContent" href="">
                        <img id="devolverIcon" src="Home/img/devolver_logo.svg" />
                    </a>
                </div>
            </div>

            <div class="promos">
                <span id="saleText">Promoções</span>

                <div class="sale1">
                    <div class="saleImageD">
                        <a href="">
                            <image id="saleImage" src="Home/img/RE2_H.jpg" width="460" height="215">
                                <span id="discountBanner">50%</span>
                            </image>
                        </a>
                        
                    </div>

                    <div class="expand">
                        <i id="angleRightIcon" class="fa-solid fa-angle-right"></i>
                    </div>
                    
                    <div class="saleContent">
                        <div class="saleRight">
                            <a id="saleTitle" href="">Resident Evil 2</a>
                            <div class="tags">
                                <span class="tag">Zombies</span>
                                <span class="tag">Terror</span>
                                <span class="tag">Remake</span>
                            </div>

                            <div class="platforms">
                                <i class="fa-brands fa-windows"></i>
                                <i class="fa-brands fa-apple"></i>
                            </div>

                            <div class="buySection">
                                <span id="discount">-50% 
                                    <div class="buyButtonPromo">
                                        <div class="buyButtonContent">
                                            <span id="oldPrice">R$98,90</span>
                                            <span id="discPrice">R$49,95</span>
                                        </div>
                                        
                                    </div>
                                </span>
                                    
                            </div>
                        </div>

                        <div class="saleLeft">

                            <div class="slideshow-container">

                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides fadeSt">
                                    <img class="storeImgB" src="Home/img/re2Img1.jpg" width="300" height="168" />
                    
                                </div>
                    
                                <div class="mySlides fadeSt">
                                    <img class="storeImgB" src="Home/img/re2Img2.jpg" width="300" height="168" />
                    
                                </div>
                    
                                <div class="mySlides fadeSt">
                                    <img class="storeImgB" src="Home/img/re2Img3.jpg" width="300" height="168" />
                    
                                </div>

                                <div class="mySlides fadeSt">
                                    <img class="storeImgB" src="Home/img/re2Img4.jpg" width="300" height="168" />
                    
                                </div>
                    
                                <div class="mySlides fadeSt">
                                    <img class="storeImgB" src="Home/img/re2Img5.jpg" width="300" height="168" />
                    
                                </div>
                    
                            </div>

                            <div class="dots">
                                <span class="dot" ></span>
                                <span class="dot" ></span>
                                <span class="dot" ></span>
                                <span class="dot" ></span>
                                <span class="dot" ></span>
                            </div>

                        </div>
                        
                    </div>
                </div>

                
                
            </div>

            <div class="forYou">
                <span id="forYouText">Recomendações</span>

                <div class="recGame fadeSt">
                    <a href="" id="recImg">
                        <img class="fyImg" src="Home/img/pWinter_H.jpg"height="305" width="575"  />
                    </a>

                    <div class="forYouContent">
                        <a href="" id="recTitle">Project Winter</a>
                        <div class="recTags">
                            <span class="tag">Multiplayer</span>
                            <span class="tag">Survival</span>
                            <span class="tag">PvP</span>
                        </div>

                        <div class="Platforms">
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-apple"></i>
                        </div>

                        <span id="recBuy">R$37,99</span>
                    </div>


                </div>

                <div class="recGame fadeSt">
                    <a href="" id="recImg">
                        <img class="fyImg" src="Home/img/RE3_h.jpg"height="305" width="575"  />
                    </a>

                    <div class="forYouContent">
                        <a href="" id="recTitle">Resident Evil 3</a>
                        <div class="recTags">
                            <span class="tag">Zombies</span>
                            <span class="tag">Terror</span>
                            <span class="tag">Remake</span>
                        </div>

                        <div class="Platforms">
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-apple"></i>
                        </div>

                        <span id="recBuy">R$129,99</span>
                    </div>


                </div>

                <div class="recGame fadeSt">
                    <a href="" id="recImg">
                        <img class="fyImg" src="Home/img/RE2_h.jpg"height="305" width="575"  />
                    </a>

                    <div class="forYouContent">
                        <a href="" id="recTitle">Resident Evil 2</a>
                        <div class="recTags">
                            <span class="tag">Zombies</span>
                            <span class="tag">Terror</span>
                            <span class="tag">Remake</span>
                        </div>

                        <div class="Platforms">
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-apple"></i>
                        </div>

                        <span id="recBuy">R$98,90</span>
                    </div>

    

                </div>

                

                <div class="recGame fadeSt">
                    <a href="" id="recImg">
                        <img class="fyImg" src="Home/img/nightDelivery_H.jpg"height="305" width="575"  />
                    </a>

                    <div class="forYouContent">
                        <a href="" id="recTitle">Night Delivery | 例外配達</a>
                        <div class="recTags">
                            <span class="tag">Indie</span>
                            <span class="tag">Terror</span>
                            <span class="tag">Atmosférico</span>
                        </div>

                        <div class="Platforms">
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-apple"></i>
                        </div>

                        <span id="recBuy">R$6,99</span>
                    </div>

                    
                </div>

                <div class="recGame fadeSt">
                    <a href="" id="recImg">
                        <img class="fyImg" src="Home/img/sekiro_H.jpg"height="305" width="575"  />
                    </a>

                    <div class="forYouContent">
                        <a href="" id="recTitle">Sekiro: Shadows Die Twice</a>
                        <div class="recTags">
                            <span class="tag">Difícil</span>
                            <span class="tag">História</span>
                            <span class="tag">Souls-Like</span>
                        </div>

                        <div class="Platforms">
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-apple"></i>
                        </div>

                        <span id="recBuy">R$199,90</span>
                    </div>

                </div>


                <div class="recDotsDiv">
                    <span class="recDots" ></span>
                    <span class="recDots" ></span>
                    <span class="recDots" ></span>
                    <span class="recDots" ></span>
                    <span class="recDots" ></span>
                </div>

                <a class="prev" onclick="plusSlidesRec(-1)">&#10094;</a>
                <a class="next" onclick="plusSlidesRec(1)">&#10095;</a>
            </div>
            
            
            
        </div>

        <div class="footer">
            <div class="footInf">
                <span id="rights">
                    © 2022 . Todos os direitos reservados. Todas as marcas comerciais são propriedade dos respectivos proprietários nos E.U.A. e outros países.
            IVA incluído em todos os preços onde aplicável.
                </span>
            </div>
            
            <div class="navFooter">
                <a href="">Sobre a empresa</a>
                <a href="">Trabalhe conosco</a>
                <a href="">Vale Presentes</a>
                <a href="">Política de privacidade</a>
            </div>
        </div>

        <script>
            
            var slideIndex = {val: 1}; 
            var recSlideIndex = {val: 1}; 
            var highSlideIndex = {val: 1};

            var flag = false;

            //alert(highSlideIndex[0]);
            
            /*function changeSlide(n){
                showSlides(slideIndex.val += n, "mySlides", "dot", slideIndex);
                showSlides(highSlideIndex.val += n, "highlight", "highDots", highSlideIndex);
                //alert(highSlideIndex);
            }*/
            
            function changeSlide(n, indexVal, name, dotName, index){
                showSlides(indexVal.val += n, name, dotName, index);
            }

            showSlides(highSlideIndex.val, "highlight", "highDots", highSlideIndex);
            showSlides(slideIndex.val, "mySlides", "dot", slideIndex);

            setInterval(function() {changeSlide(1, highSlideIndex, "highlight", "highDots", highSlideIndex)}, 5000);
            setInterval(function() {changeSlide(1, slideIndex, "mySlides", "dot", slideIndex)}, 4000);
            
            showSlides(recSlideIndex.val, "recGame", "recDots", recSlideIndex);
            

            // Controles do carousel
            function plusSlidesHigh(n) {
                showSlides(highSlideIndex.val += n, "highlight", "highDots", highSlideIndex);
            }

            function plusSlidesRec(n){
                showSlides(recSlideIndex.val += n, "recGame", "recDots", recSlideIndex);
            }
            
            
            function showSlides(n, name, dotName, index) {
                //alert(index );

                var i;
                var slides = document.getElementsByClassName(name);
                var dots = document.getElementsByClassName(dotName);
                if (n > slides.length) { index.val = 1 }
                if (n < 1) { index.val = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" activeSt", "");
                }

                if(name == "recGame"){
                    slides[index.val - 1].style.display = "flex";
                }
                else{
                    slides[index.val - 1].style.display = "block";
                }
                
                dots[index.val - 1].className += " activeSt";
            }

            var saleDiv = document.querySelector('.sale1');
            var saleContent = document.querySelector('.saleContent');
            var expand = document.querySelector('.expand');

            var show = false;
            var hasShowed = 0;
            var reset = false;


            //Checar o tamanho da tela
            /*$(window).on("mousemove", function() {
                if ($(window).width() <= 1200){
                    flag = true;
                } else {
                    flag = false;
                }
            })*/

            document.addEventListener('mousemove', function(){
                if ($(window).width() <= 1000){
                    flag = true;
                } else {
                    flag = false;
                }

                //alert(flag);
            });
    

            saleDiv.addEventListener('transitionend', () =>{
                    if(flag == false){
                        if(reset == false && show == false && hasShowed == 0){
                            //saleContent.style.opacity = 'block';
                            saleContent.style.display = 'flex';
                            saleContent.classList.toggle('fade');

                            show = true;
                            hasShowed = 1;
                        }

                        else if(reset == true){
                            
                            show = false;
                            reset = false;
                        }
                    }
                });


                saleDiv.addEventListener('mouseenter', () =>{
                    //
                    //saleContent.style.display = 'block';
                    if(flag == false){
                        saleContent.style.display = 'flex';
                        saleContent.style.transition = 'opacity 0.5s ease-in-out';
                        
                        if(show == false && hasShowed == 1){
                            hasShowed = 0;
                            reset = false;
                        }
                    }
                    
                });

                saleDiv.addEventListener('mouseleave', () =>{
                    //saleContent.style.display = 'none';
                    if(flag == false){
                        saleContent.style.display = 'none';
                        saleContent.style.transition = 'opacity 0.2s ease-in-out';
                        saleContent.classList.toggle('fade');
                        show = false;
                        reset = true;
                    }
                });
            
    
        </script>
    </body>

</html>