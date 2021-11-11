<?php
include("conn.php");
?>
        <!DOCTYPE HTML>
        <html>
            <head>
                <title>Cláudio Leão Design</title>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                <link rel="stylesheet" href="assets/css/main.css" />
                <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
                <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
                <link rel="stylesheet" type="text/css" href="assets/css/default.css" />
                <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
                <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
                <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
                <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,700,300' rel='stylesheet' type='text/css'>
                
                <link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
                <link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
                <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-icon-72x72.png">
                <link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
                <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
                <link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
                <link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
                <link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
                <link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
                <link rel="icon" type="image/png" sizes="192x192"  href="images/icon/android-icon-192x192.png">
                <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
                <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
                <link rel="manifest" href="images/icon/manifest.json">
                <meta name="msapplication-TileColor" content="#ffffff">
                <meta name="msapplication-TileImage" content="images/icon/ms-icon-144x144.png">
                <meta name="theme-color" content="#ffffff">

                <meta name="description" content="Designer para Empresas e particulares, em S. João da Madeira, Aveiro." />
                <meta name="keywords" content="design,sjm,s. joão da madeira,design gráfico,imagem corporativa, criação de logo institucional, cartões de visita, brochuras, flyers, campanhas publicitárias,designer freelancer, Adobe, Cláudio Leão" />
                <meta name="author" content="Carlos Pinho Design" />
                <meta property="og:type" content="website" />
                <meta property="og:title" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro." />
                <meta property="og:description" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro. Saiba mais." />
                <meta property="og:url" content="http://www.claudioleao.pt/" />
                <meta property="og:image" content="http://claudioleao.pt/images/logo_cl.png" />
                <meta property="og:site_name" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro." />
                <meta name="twitter:card" content="summary" />
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
                <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
                <script type="text/javascript" src="assets/js/smooths.js"></script>
                <script>
                    $(document).ready(function(){
                        $(window).trigger('scroll');
                        $(window).bind('scroll', function () {
                            var pixels = 200; //number of pixels before modifying styles
                            if ($(window).scrollTop() > pixels) {
                                $('#header').addClass('scrolled');
                            } else {
                                $('#header').removeClass('scrolled');
                            }
                        }); 
                    });
                    $(document).ready(function(){
                        $(window).trigger('scroll');
                        $(window).bind('scroll', function () {
                            var pixels = 800; //number of pixels before modifying styles
                            if ($(window).scrollTop() > pixels) {
                                $('#banner').addClass('hide');
                                $('.s').addClass('hide');
                            } else {
                                $('#banner').removeClass('hide');
                                $('.s').removeClass('hide');
                            }
                        }); 
                    });
                    function ran_col() { //function name
                        var color = '#'; // hexadecimal starting symbol
                        var letters = ['eeb611','07d3cc','00fff6','bf0364','bf4e03','080b8d','8d0856','8d2e08','ff9c98']; //Set your colors here
                        color += letters[Math.floor(Math.random() * letters.length)];
                        document.getElementById('page-wrapper').style.background = color; // Setting the random color on your div element.
                    }
                    
                </script>
            </head>
            <body onload="return ran_col()">
                <a name="top"></a>
                <!-- Page Wrapper -->
                    <div id="page-wrapper" >

                        <!-- Header -->
                            <header id="header" class="alt">
                                <a href="index.php"><div class="logo"></div></a>
                                <nav>
                                    <a href="#sobremim">Sobre Mim</a>
                                    <a href="#portfolio">Portfólio</a>
                                    <a href="#contactos">Contactos</a>
                                </nav>
                            </header>

                        <!-- Banner -->
                            <section id="banner" class="bg">
                                
                                <div class="inner">
                                    <div class="s left">
                                        <h2>Your story, my design!</h2>
                                        <ul class="actions">
                                            <li><a href="#sobremim" class="button special">Sobre Mim</a></li>
                                            <li><a href="#contactos" class="button">Contactos</a></li>
                                        </ul>
                                    </div>
                                    <div class="s rights">
                                        <img src="images/moldura.png">
                                    </div>
                                </div>
                                
                            </section>

                        <!-- Wrapper --> <a name="sobremim"></a>
                            <section id="wrapper">

                                <!-- One -->
                                    <section id="one" class="wrapper spotlight style1">
                                        <div class="cont">
                                            <div class="container textbig">
                                                Design Gráfico<br>
                                                Design Editorial<br>
                                                Fotografia<br>
                                                Arte Final<br>
                                            </div>
                                            <div class="container right text">
                                                <p><span>O Design Gráfico é mais do que a minha profissão, a minha paixão, à qual me dedico há cerca de 10 anos.</span>
                                                    <br><br>Trabalho nas mais variadas vertentes de imagem gráfica, desde a concepção da imagem corporativa de uma marca, à imagem e decoração de eventos, passando pelo layout de websites e arte final. Dedico-me ainda à fotografia, nomeadamente de produto e interirores.<br>
                                                Siga o meu trabalho no <a href="https://www.behance.net/claudioleao" >Behance</a>, no <a href="https://www.facebook.com/claudioleaodesign/" >Facebook</a> ou <a href="#contactos" >Contacte-me</a> para mais informações!</p>  
                                            </div>
                                        </div>
                                    
                                    </section>

                                <!-- Two --><a name="portfolio"></a>
                                    <section id="two" class="wrapper alt spotlight style2">
                                        <?php
                                            $pergunta = "SELECT * FROM portfolio ORDER BY ordem ASC";
                                            $resultado = mysqli_query($ligaBD,$pergunta);
                                            ?>

                                            <div id="portfolio">
                                                <h2 class="major" >Portfólio</h2>
                                                <ul class="cbp-rfgrid">
                                                    <?php
                                                    $num_linhas = mysqli_num_rows($resultado);
                                                    $n=1;
                                                    while($dadosBD=mysqli_fetch_assoc($resultado)){
                                                       if($num_linhas%2==0){
                                                           echo '<li style="height: 100%;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                       }else{
                                                          if($n==1){
                                                              echo '<li style="height: 50%; width: 100%;
        max-height: 500px;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';

                                                              $n++;
                                                          }else{
                                                           echo '<li style="height: 100%;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                               $n++;
                                                        }
                                                       }
                                                    } 
                                                    
                                                     /*
                                                      if($num_linhas%2==0){
                                                           echo '<li style="height: 100%;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                       }else{
                                                          if($n!=$num_linhas){
                                                              echo '<li style="height: 100%;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                              $n++;
                                                          }else{
                                                           echo '<li style="height: 50%; width: 100%;
        max-height: 500px;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                              }
                                                       }
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     while($dadosBD=mysqli_fetch_assoc($resultado)){
                                                        echo '<li style="height: 100%;"><a href="project.php?id='.$dadosBD['p_id'].'"/><img src="images/'.$dadosBD['p_thumb'].'" alt="'.$dadosBD['p_tit'].'"> <div><h3>'.$dadosBD['p_tit'].'</h3><br><p>'.$dadosBD['p_desc1'].'</p></div></a></li>';
                                                        $nrt++;
                                                        if($nr==2){
                                                            $nr=1;
                                                        }else{
                                                            $nr++;
                                                        }
                                                    }
                                                    if($nrt>=$num_linhas){
                                                            if($nr==2){
                                                                //echo '<li><img src="images/project03_thumb.jpg"></li>';
                                                                
                                                            }
                                                        }*/
                                                ?>
                                            </ul>

                                            <p>&nbsp;</p>
                                        </div>
                                    </section>

                        <!-- Footer -->
                                
                            <section id="footer">
                                <div class="inner">
                                     <a name="contactos"></a>
                                    <h2 class="major">Get in touch</h2>
                                    <p>Contacte-me para mais informações, orçamentos, ou para discutir o seu próximo projeto!
<br>Se quiser saber mais sobre mim e o meu trabalho, adicione-me nas seguintes redes:</p>
                                    <form method="post" action="contact.php">
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" />
                                </div>
                                <div class="field">
                                    <label for="subject">Assunto</label>
                                    <input type="text" name="subject" id="subject" />
                                </div>

                                <div class="field">
                                    <label for="message">Mensagem</label>
                                    <textarea name="message" id="message" rows="4"></textarea>
                                </div>
                                <ul class="actions">
                                    <li><input type="submit" value="Enviar Mensagem" /></li>
                                </ul>
                            </form>
                                    <ul class="contact">
                                        <li><p> <b>Cláudio Leão             Design</b><br>
                                            Rua Padre Oliveira
                                            3700-200 São João da Madeira<br>
                                            Aveiro, Portugal<br><br>
                                            criativo@claudioleao.pt
                                            </p></li>
                                        <li>
                                    <a href="https://www.facebook.com/claudioleaodesign/" class="button" target="_blank">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.behance.net/claudioleao" class="button" target="_blank">Behance</a>
                                </li>
                                    </ul>
                                    <ul class="copyright">
                                        <li>&copy; Cláudio Leão Inc. All rights reserved.</li><li>Programação: <a href="http://carlospinho.pt">Carlos Pinho</a></li>
                                    </ul>
                                    </div>
                                <div class="fab-container"><a href="#top" target="_blank">
                              <div tooltip="Back To Top" class="top fab"></div></a>
                          </div>
                                </section></section></div>
                <!-- Scripts -->
                    <script src="assets/js/skel.min.js"></script>
                    <script src="assets/js/jquery.min.js"></script>
                    <script src="assets/js/jquery.scrollex.min.js"></script>
                    <script src="assets/js/util.js"></script>
                    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
                    <script src="assets/js/main.js"></script>

            </body>
        </html>