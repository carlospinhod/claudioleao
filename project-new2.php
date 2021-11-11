<?php
	require("check.php");
	
    $titulo = $_POST['tit'];
	$desc = $_POST['desc'];
	$link = $_POST['link'];
	$color = $_POST['color'];
    $dir = "images/";
    $filename1 = "";
    $filename0 = "";
    $relproj = $_POST['RelProj'];
    $desproj = $_POST['DesProj'];
    $ordem = $_POST['ordem'];
foreach ($_FILES["img"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK){
        $tmp_name = $_FILES["img"]["tmp_name"][$key];
        
        $name = $_FILES["img"]["name"][$key];
        $name=strtolower($name);
        $name= str_replace(' ', '_', $name);
        
        $imageFileType = pathinfo("images/$name",PATHINFO_EXTENSION);
        list($width, $height) = getimagesize('images/'.$name);
        echo $width."<br>".$height;
        if(file_exists("images/$name")) {
            $n = rand (0,9);
            $name =  pathinfo($_FILES['img']['name'][$key], PATHINFO_FILENAME);
            $name = "$name$n.$imageFileType";
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $_SESSION['erro'] = 'Apenas são permitidos ficheiros de imagem: JPG, JPEG, PNG e GIF';
            $_SESSION['type'] = '1';
            header('Location:admin-project.php');
            exit;
        }
        if($key == 0){
            $filename0 = $name;
            $filename0=strtolower($filename0);
            $filename0= str_replace(' ', '_', $filename0);
           
        }else{
            $filename1 = $name;
            $filename1=strtolower($filename1);
            $filename1= str_replace(' ', '_', $filename1);
            
        }
        move_uploaded_file($tmp_name, "images/$name");
    }
}
$project_new = "INSERT INTO portfolio VALUES (NULL, '".$titulo."', '".$filename0."', '".$desc."', '".$filename1."', '".$link."', '".$color."', '".$relproj."','".$desproj."', '".$ordem."');";
if(mysqli_query($ligaBD, $project_new)){
    $_SESSION['erro'] = 'Projeto inserido com sucesso!';
    $_SESSION['type'] = '3';
    header('Location:project-new.php');
}
?>