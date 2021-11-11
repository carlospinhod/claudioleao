<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cláudio - Novo Projeto</title>

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

				
		<?php
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
        
        ?>
        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Adicionar novo projeto de portfolio</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" enctype="multipart/form-data" method="post" action="project-new2.php">
							
								<div class="form-group">
                                    <label>Titulo</label>
									<input class="form-control" id="tit" name="tit" placeholder="Titulo">
                                    <br>
                                    
                                    <label>Imagem</label>
									<input type="file" name="img[]">
									 <p class="help-block">A imagem <u>deve</u> ter no minimo 1920px de largura e não tem limitação de altura.</p>
                                    <br>
                                    <label>Descrição do Projeto</label>
									<textarea type="text" class="form-control" rows="3" name="desc" id="desc" placeholder="Pequena Descrição do Projeto"></textarea>
                                    <br>
                                    
                                    <label>Thumbnail </label>
									<input type="file" name="img[]">
									 <p class="help-block">A imagem de capa deve ter 1900px de largura e 1307px de altura ou a mesma porporção.</p>
                                    <br>
                                    <label>Link do Projeto</label>
                                    <input type="url" class="form-control" id="link" name="link" placeholder="Link do projeto">
                                    <br>
                                    <label>Cor</label>
                                    <input class="form-control" name="color" placeholder="Código Hexadecimal da cor sem o #">
                                    <br>
                                    
                                     <br>
                                    <label>Projeto Relacionado</label>
                                    <select class="form-control" name="RelProj">
                                         
                                    <?php
                                        $que = "SELECT * FROM portfolio where p_id='".$id."'";
	                                    $ress = mysqli_query($ligaBD,$que);
                                        $dd = mysqli_fetch_array($ress);
                                        
                                        $query = "SELECT * FROM portfolio where p_id='".$dd['p_rel']."'";
	                                    $res = mysqli_query($ligaBD,$query);
                                        $num_linhas = mysqli_num_rows($res);
                                        $dddd = mysqli_fetch_array($res);
                                        if(!empty($dddd['p_rel'])){
                                            echo "<option value=".$dddd['p_id'].">".$dddd['p_id']." - ".$dddd['p_tit']."</option>";
                                        }
                                        
                                        $pergunta = "SELECT * FROM portfolio";
	                                    $resultado = mysqli_query($ligaBD,$pergunta);
                                        $num_linhas = mysqli_num_rows($resultado);
                                        for ($i=0;$i<$num_linhas;$i++){
                                            $dados = mysqli_fetch_array($resultado);
                                            if($dados['p_id']!=$dd['p_rel']){
                                                echo "<option value=".$dados['p_id'].">".$dados['p_id']." - ".$dados['p_tit']."</option>";
                                            }
                                         }?>
                                        
                                    </select>
                                    
                                    <br>
                                    <label>Projeto em Destaque</label>
                                    <select class="form-control" name="DesProj">
                                        <?php
                                        $que = "SELECT * FROM portfolio where p_id='".$id."'";
	                                    $ress = mysqli_query($ligaBD,$que);
                                        $dd = mysqli_fetch_array($ress);
                                        
                                        $query = "SELECT * FROM portfolio where p_id='".$dd['p_destaque']."'";
	                                    $res = mysqli_query($ligaBD,$query);
                                        $num_linhas = mysqli_num_rows($res);
                                        $dddd = mysqli_fetch_array($res);
                                        if(!empty($dddd['p_destaque'])){
                                            echo "<option value=".$dddd['p_id'].">".$dddd['p_id']." - ".$dddd['p_tit']."</option>";
                                        }
                                        
                                        $pergunta = "SELECT * FROM portfolio";
	                                    $resultado = mysqli_query($ligaBD,$pergunta);
                                        $num_linhas = mysqli_num_rows($resultado);
                                        for ($i=0;$i<$num_linhas;$i++){
                                            $dados = mysqli_fetch_array($resultado);
                                            if($dados['p_id']!=$dd['p_destaque']){
                                                echo "<option value=".$dados['p_id'].">".$dados['p_id']." - ".$dados['p_tit']."</option>";
                                            }
                                         }?>
                                    </select>
                                    <br>
                                    <label>Ordem</label>
                                    <input type="number" class="form-control" id="ordem" name="ordem" placeholder="1">
                                    
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Submeter Projeto</button>
								<button type="reset" class="btn btn-default">Apagar Dados Inseridos no Formurláio</button>
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
