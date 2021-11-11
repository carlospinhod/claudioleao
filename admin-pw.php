<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cláudio - Conta</title>

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
        
        <meta name="robots" content="noindex, nofollow">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Cláudio</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
            <li role="presentation" class="divider"></li>
			<ul class="nav menu">
			<li><a href="admin.php"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg> Projetos</a></li>
			<li role="presentation" class="divider"></li>
            <li><a href="admin-pw.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg>
 Conta</a></li>
            <li role="presentation" class="divider"></li>
            <li><a onClick="javascript: return confirm('Deseja fazer logout?');" href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Conta</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Conta</h1>
			</div>
		</div><!--/.row-->
				
		<?php
        $pergunta = "SELECT * FROM portfolio";
        $resultado = mysqli_query($ligaBD,$pergunta);
        if(!$resultado){
            echo "<br> Erro: Ação negada sobre a tabela";
            echo '<br><br><a href="admin.php"> Voltar </a>';
            exit;
        }
        $num_linhas = mysqli_num_rows($resultado);
        if(!$num_linhas){
            echo "<br> Erro: Não existem registos";
            exit;
        }
        if(!empty($_SESSION['erro'])){
            if($_SESSION['type']=='1'){
                echo '<div class="alert bg-danger" role="alert">
                <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Erro: '.$_SESSION['erro'].'
                </div>';
            }elseif($_SESSION['type']=='2'){
                echo '<div class="alert bg-warning" role="alert">
                <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> '.$_SESSION['erro'].'
                </div>';
            }
            else{
                echo '<div class="alert bg-success" role="alert">
                <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> '.$_SESSION['erro'].'
                </div>';
            }
            $_SESSION['erro']="";
        }
        $user= $_SESSION['username'];
        $pergunta = "SELECT id FROM users WHERE username='".$user."';";
        $resultado = mysqli_query($ligaBD,$pergunta);
        if(!$resultado){
            echo "<br> Erro: Ação negada sobre a tabela";
            echo '<br><br><a href="admin.php"> Voltar </a>';
            exit;
        }
        $num_linhas = mysqli_num_rows($resultado);
        if(!$num_linhas){
            echo "<br> Erro: Não existem registos";
            exit;
        }
        for ($i=0;$i<$num_linhas;$i++){
            $dados = mysqli_fetch_array($resultado);//leitura de um registo devolvido
        }
        
        ?>
        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Alterar Informações da Conta - <?php echo "<b><u>".$user."</b></u>"; ?> </div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" enctype="multipart/form-data" method="post" action="admin-pw2.php">
                                <p class="help-block">Deixar campo em branco caso não pretenda alterar o mesmo.</p>
								<div class="form-group">
									<input class="form-control" id="user" name="user" placeholder="Nome da Conta">
                                    <br>                                  
									<input class="form-control" type="password" name="pw-old" placeholder="Palavra passe Antiga">
                                    <br>
                                    <input class="form-control" type="password" name="pw-new" placeholder="Nova Palavra Passe">
                                    <br>
                                    <input class="form-control" type="password" name="pw-new2" placeholder="Confirmar Nova Palavra Passe">
                                    <br>
                                    <button type="submit" class="btn btn-primary" style="float:right;" onClick="javascript: return confirm('Pretende Fazer a alteração da password?');" >Alterar</button>
								</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
