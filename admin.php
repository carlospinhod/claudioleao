<?php
	include("check.php");	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cláudio - Projects</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

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
            <li><a onClick="javascript: return confirm('Deseja fazer logout?');"href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="admin.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Projetos</li>
			</ol>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
                        Projetos
                        <a href="project-new.php"><button type="submit" class="btn btn-primary" style="float:right;">+ Novo Projeto</button></a>
                    </div>
                    
					<div class="panel-body">
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

                        ?>
                        
						<table data-toggle="table" data-url="tables/data1.json" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="titulo">Titulo</th>
						        <th data-field="thumb">Thumbnail</th>
                                <th data-field="desc">Descrição</th>
                                <th data-field="link">Link</th>
                                <th data-field="color">Cor</th>
                                <th data-field="delete">Apagar</th>
                                <th data-field="edit">Editar</th>
						    </tr>
						    </thead>
                            <?php
                                 for ($i=0;$i<$num_linhas;$i++){
                                    $dados = mysqli_fetch_array($resultado);
                                    if(!$dados){
                                        echo
                                        '<div class="alert bg-danger" role="alert">
                                            <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Erro: '.$erro.'Não conseguiu fazer leitura dos registos.
                                        </div>';
                                        exit;
                                    }
                                    $url=$dados['p_img1_url'];
                                    $urlThumb=$dados['p_thumb'];
                                    echo "<tr><td data-field='id'>".$dados['p_id']."</td>";
                                    echo "<td data-field='titulo'>".$dados['p_tit']."</td>"; 
                                    echo "<td data-field='thumb'><img src='images/".$urlThumb."' width='100'></td>";
                                    echo "<td data-field='desc'>".$dados['p_desc1']."</td>";
                                    echo "<td data-field='link'>".$dados['p_clientlink']."</td>";
                                    
                                    echo "<td data-field='color' style='color: #".$dados['p_headerBG'].";'>".$dados['p_headerBG']."</td>";
                                    echo "<td><a class='button_table' onClick=\"javascript: return confirm('Este passo vai apagar não só o projeto como os ficheiros ligados a ele. Quer apagar?');\" href='project-delete.php?id=".$dados['p_id']."' target='_self'><svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg></a></td>";
                                     echo "<td><a class='button_table' href='project-edit.php?id=".$dados['p_id']."' target='_self'><svg class='glyph stroked pencil'><use xlink:href='#stroked-pencil'></use></svg></a></td></tr>";

                                 }
                            ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
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
