<?php
	require("check.php");
	
    $username = $_POST['user'];
	$pwold = $_POST['pw-old'];
	$pwnew = $_POST['pw-new'];
	$pwnew2 = $_POST['pw-new2'];

    $username = stripslashes($username);
    $pwold = stripslashes($pwold);
    $pwnew = stripslashes($pwnew);
    $pwnew2 = stripslashes($pwnew2);
    $username = mysqli_real_escape_string($ligaBD, $username);
    $pwold = mysqli_real_escape_string($ligaBD, $pwold);
    $pwnew = mysqli_real_escape_string($ligaBD, $pwnew);
    $pwnew2 = mysqli_real_escape_string($ligaBD, $pwnew2);
    $user=$_SESSION['username'];
    $pergunta = "SELECT id FROM users where username='".$user."';";
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
    
    $u_id=$_SESSION['uid'];
    
    if(!empty($username)){
        $changeuser = "UPDATE users SET username = '$username' WHERE id ='$u_id';";
        if(mysqli_query($ligaBD, $changeuser)){
            $_SESSION['username'] = $username;
            header('Location:logout.php');
        }
    }
    if(!empty($pwold) && !empty($pwnew) && !empty($pwnew2)){
        $pwold = md5($pwold);
        echo "<br>pw-old(md5): ".$pwold;
        $sql = "SELECT * FROM users WHERE password='$pwold' and id='$u_id';";
        $result=mysqli_query($ligaBD, $sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            if($pwnew==$pwnew2){
                $pwnew = md5($pwnew);
                echo "<br>pw-new(md5): ".$pwnew;
                $pwchange = "UPDATE users SET password = '$pwnew' WHERE id = '$u_id';";
                if(mysqli_query($ligaBD, $pwchange)){
                    $_SESSION['erro'] = 'Password alterada com sucesso sucesso!';
                    $_SESSION['type'] = '3';
                    header('Location:logout.php');
                    exit;
                    echo "<br>Password alterada com sucesso sucesso!";
                }
            }else{
                $_SESSION['erro'] = 'As novas passwords não combinam.';
                $_SESSION['type'] = '1';
                header('Location:admin-pw.php');
                exit;
            }
        }else{
                $_SESSION['erro'] = 'A Password antiga está errada.';
                $_SESSION['type'] = '1';
                header('Location:admin-pw.php');
                exit;
        }
    }
?>