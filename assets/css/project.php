<?php
	include("conn.php");
    if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
        header('Location:index.php');
		exit;
	}
    $pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
    $resultado = mysqli_query($ligaBD,$pergunta);
    $num_linhas = mysqli_num_rows($resultado);
    for ($i=0;$i<$num_linhas;$i++){
        $dados = mysqli_fetch_array($resultado);//leitura de um registo devolvido
    }
?>
<!DOCTYPE HTML >
<html lang="pt">
	<head>
		<title>Projeto - <?php echo $dados['p_tit']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/project.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="stylesheet" type="text/css" href="assets/css/default.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
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
        <meta name="keywords" content=" design,s. joão da madeira, design gráfico" />
        <meta name="author" content="Carlos Pinho Design" />
        <meta name="robots" content="index, follow"/>

        <meta property="og:type" content="website" />
        <meta property="og:title" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro." />
        <meta property="og:description" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro. Saiba mais." />
        <meta property="og:url" content="http://www.claudioleao.pt/" />
        <?php
        
        echo "<meta property='og:image' content='images/".$dados['p_thumb']."' />";
        
        ?>
        <meta property="og:site_name" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro." />
        
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content="Designer para Empresas e particulares, em S. João da Madeira, Aveiro."/>
        <meta name="twitter:title" content="Designer para empresas e particulares, em S. João da Madeira, Aveiro."/>
        <meta name="twitter:domain" content="http://www.claudioleao.pt/"/>
        <?php
        echo "<meta name='twitter:image:src' content='images/".$dados['p_thumb']."' />";
        
        ?>
        
        
        
        
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>
        <script src="https://use.fontawesome.com/44d99aa929.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				function filterPath(string) {
					return string
					.replace(/^\//,'')
					.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
					.replace(/\/$/,'');
				}
				$('a[href*=#]').each(function() {
					if ( filterPath(location.pathname) == filterPath(this.pathname)
						&& location.hostname == this.hostname
						&& this.hash.replace(/#/,'') ) {
						var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
					var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
					if ($target) {
						var targetOffset = $target.offset().top;
						$(this).click(function() {
							$('html, body').animate({scrollTop: targetOffset}, 1000);
							return false;
						});
					}
				}
			});
			}); 
		</script>
		<script type="text/javascript">
			var pxScrolled = 200;
			var duration = 500;

			$(window).scroll(function() {
				if ($(this).scrollTop() > pxScrolled) {
					$('.fab-container').css({'bottom': '0px', 'transition': '.3s'});
				} else {
					$('.fab-container').css({'bottom': '-72px'});
				} 
			});

			$('.top').click(function() {
				$('body').animate({scrollTop: 0}, duration);
			})
	</script>
        <script>
            $(document).ready(function(){
                    $(window).trigger('scroll');
                    $(window).bind('scroll', function () {
                        var pixels = 600; //number of pixels before modifying styles
                        if ($(window).scrollTop() > pixels) {
                            $('nav').addClass('fixed');
                        } else {
                            $('nav').removeClass('fixed');
                        }
                    }); 
            }); 
        </script>
	</head>
	<body>
	<a name="top"></a>
        <nav><a href="index.php#portfolio" class="back">Retroceder</a></nav>
	<?php
	$pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
	$resultado = mysqli_query($ligaBD,$pergunta);
	if(!$resultado){
	echo "<br><p>Ação Negada</p>";
	}
	$num_linhas = mysqli_num_rows($resultado);
	if(!$num_linhas){
	    echo "<br>Não existem registos<br>";
	}
	$dados = mysqli_fetch_array($resultado);
	/*Header*/
	echo "<section id='header' style='background-color:#".$dados['p_headerBG'].";'>";




	?>
				<div class="inner">
					<a href="index.php"><img src="images/logo_cl.png" width="20%" alt="logo claudio"></a>
					<?php
	                $pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
	                $resultado = mysqli_query($ligaBD,$pergunta);
	                if(!$resultado){
	                	echo "<br><p>Ação Negada</p>";
	                }
	                $num_linhas = mysqli_num_rows($resultado);
	                if(!$num_linhas){
	                	echo "<br>Não existem registos<br>";
	                }
	                
	                for ($i=0;$i<$num_linhas;$i++){
	                    $dados = mysqli_fetch_array($resultado);//leitura de um registo devolvido
	                    if(!$dados){
	                        echo "<br> Erro: Não conseguiu fazer leitura dos registos";
	                    }
	                    echo "<h1>".$dados['p_tit']."</h1>";
	                    echo "<p>".$dados['p_desc1']."</p>";
	                }
	                ?>
					</div>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="12u$ 12u$(medium) important(medium)">
						<?php
						$pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
		                $resultado = mysqli_query($ligaBD,$pergunta);
		                if(!$resultado){
		                	echo "<br><p>Ação Negada</p>";
		                }
		                $num_linhas = mysqli_num_rows($resultado);
		                if(!$num_linhas){
		                	echo "<br>Não existem registos<br>";
		                }
						for ($i=0;$i<$num_linhas;$i++){
		                    $dados = mysqli_fetch_array($resultado);//leitura de um registo devolvido
		                    if(!$dados){
		                        echo "<br> Erro: Não conseguiu fazer leitura dos registos";
		                    }
		                    $url=$dados['p_img1_url'];
                            $titulo=$dados['p_tit'];
		                   	echo "<span class='image fit'><img src='images/".$url."' alt='".$titulo."'/></span>";
	                	}
	                	?>
                            <div class="projectcall">
                                <ul class="actions uniform">
                                    <?php
                                    $pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
                                    $resultado = mysqli_query($ligaBD,$pergunta);
                                    $dados = mysqli_fetch_array($resultado);
                                    $urlcliente=$dados['p_clientlink'];
                                    echo "<li><a href='$urlcliente' class='button'>Visitar Projeto</a></li>";
                                    ?>
                                </ul>
                            </div>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="two" class="main style2 special">
                <h2>Projetos Relacionados</h2>
                <div id="portfolio">
				    <ul class="cbp-rfgrid">
					<?php
	                  $pergunta = "SELECT p_destaque FROM portfolio WHERE p_id='".$id."'";
	                  $resultado = mysqli_query($ligaBD,$pergunta);
                      $dados = mysqli_fetch_array($resultado);
                      $pergunta = "SELECT * FROM portfolio WHERE p_id='".$dados['p_destaque']."'";
	                  $resultado = mysqli_query($ligaBD,$pergunta);
                      $dados = mysqli_fetch_array($resultado);
	                  $url=$dados['p_thumb'];
                      $titulo=$dados['p_tit'];
	                  echo '<li class="wow fadeIn"><a href="project.php?id='.$dados['p_id'].'"/><img src="images/'.$url.'" alt="'.$dados['p_tit'].'"> <div><h3>'.$dados['p_tit'].'</h3><br><p>'.$dados['p_desc1'].'</p></div></a></li>';
                        
                      $pergunta = "SELECT p_rel FROM portfolio WHERE p_id='".$id."'";
	                  $resultado = mysqli_query($ligaBD,$pergunta);
                      $dados = mysqli_fetch_array($resultado);
                      $pergunta = "SELECT * FROM portfolio WHERE p_id='".$dados['p_rel']."'";
	                  $resultado = mysqli_query($ligaBD,$pergunta);
                      $dados = mysqli_fetch_array($resultado);
	                  $url=$dados['p_thumb'];
                      $titulo=$dados['p_tit'];
	                  echo '<li><a href="project.php?id='.$dados['p_id'].'"/><img src="images/'.$url.'" alt="'.$dados['p_tit'].'"> <div><h3>'.$dados['p_tit'].'</h3><br><p>'.$dados['p_desc1'].'</p></div></a></li>';
	                  
	                    ?>
				    </ul>
				</div>
            </section>

		<!-- Footer -->
			<section id="footer">
				<div class="fab-container"><a href="#top" target="_blank">
                    <div tooltip="Back To Top" class="top fab"></div></a>
				</div>
                <div>
                    <ul class="icons">

                        <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon alt fa-behance"><span class="label">Behance</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; Cláudio Leão Inc. All rights reserved.</li><li>Programação: <a href="https://facebook.com/carlospinhod">Carlos Pinho</a></li>
                    </ul>
                </div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
                <script src="assets/js/wow.min.js"></script>
      <script>
       new WOW().init();
     </script>

	</body>
</html>