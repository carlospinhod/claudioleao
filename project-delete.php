<?php
	include("conn.php");
	$id=$_GET["id"];
	$pergunta = "SELECT * FROM portfolio WHERE p_id='".$id."'";
	$resultado = mysqli_query($ligaBD,$pergunta);
	if(!$resultado){
		echo "<br><p>Ação Negada</p>";
	}
	$num_linhas = mysqli_num_rows($resultado);
	if(!$num_linhas){
	    echo "<br>Não existem registos<br>";
	}
	if($num_linhas==1){
		$project_delete = "DELETE FROM portfolio WHERE p_id ='".$id."';";
		$do_project_delete = mysqli_query($ligaBD,$project_delete);
		header('Location:admin.php');
	}
?>