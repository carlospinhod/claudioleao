<?php
	$ligaBD = mysqli_connect('localhost','brightt1_claudio','1o0AQVDk!;ag');
	if(!$ligaBD){
		echo "<br> Erro: Acesso negado ao Mysql";exit;
	}
	//ligarBD
	$escolhaBD = mysqli_select_db($ligaBD,'brightt1_admin');
	if(!$escolhaBD){
		echo "<br> Erro: Acesso negado à BD";exit;
	}
?>