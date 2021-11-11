<?php
	require("check.php");
	$id=$_SESSION['ID'];

    $titulo=NULL;
    $desc=NULL;
    $link=NULL;
    $color=NULL;
    if(isset($_POST['tit']) AND $_POST['tit'] != ''){
        $titulo = $_POST['tit'];
        $titup = "UPDATE portfolio set p_tit='".$titulo."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $titup)){
            echo "sucess on tit";
        }
    }
    echo $_POST['tit'];
    if(isset($_POST['desc']) AND $_POST['desc'] != ''){
        $desc = $_POST['desc'];
        $descup = "UPDATE portfolio set p_desc1='".$desc."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $descup)){
            echo "<br>sucess on desc";
        }
    }
    if(isset($_POST['link']) AND $_POST['link'] != ''){
        $link = $_POST['link'];
        $linkup = "UPDATE portfolio set p_clientlink='".$link."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $linkup)){
            echo "<br>sucess on link";
        }
    }
	if(isset($_POST['color']) AND $_POST['color'] != ''){
        $color = $_POST['color'];
        $colorup = "UPDATE portfolio set p_headerBG='".$color."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $colorup)){
            echo "<br>sucess on color";
        }
    }
	
    if(isset($_POST['RelProj']) AND $_POST['RelProj'] != ''){
        $relproj = $_POST['RelProj'];
        $relprojup = "UPDATE portfolio set p_rel='".$relproj."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $relprojup)){
            echo "<br>sucess on relprojup";
        }
    }
    if(isset($_POST['DesProj']) AND $_POST['DesProj'] != ''){
        $desproj = $_POST['DesProj'];
        $desprojup = "UPDATE portfolio set p_destaque='".$desproj."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $desprojup)){
            echo "<br>sucess on desprojup";
        }
    }
    if(isset($_POST['ordem']) AND $_POST['ordem'] != ''){
        $ordem = $_POST['ordem'];
        $ordemup = "UPDATE portfolio set ordem='".$ordem."' WHERE p_id=".$id.";";
        if(mysqli_query($ligaBD, $ordemup)){
            echo "<br>sucess on ordemup";
        }
    }


    $dir = "images/";
    $filename1 = NULL;
    $filename0 = NULL;

foreach ($_FILES["img"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK){
        $tmp_name = $_FILES["img"]["tmp_name"][$key];
        
        $name = $_FILES["img"]["name"][$key];
        $name=strtolower($name);
        $name= str_replace(' ', '_', $name);
        
        $imageFileType = pathinfo("images/$name",PATHINFO_EXTENSION);
        list($width, $height) = getimagesize('images/'.$name);
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
            if(move_uploaded_file($tmp_name, "images/$name")){
            if(isset($filename0)){
                $file1up = "UPDATE portfolio set p_img1_url='".$filename0."' WHERE p_id=".$id.";";
                if(mysqli_query($ligaBD, $file1up)){
                    echo "<br>sucess on file1 - ".$name;
                }
            } 
        }
            
        }else{
            $filename1 = $name;
            $filename1=strtolower($filename1);
            $filename1= str_replace(' ', '_', $filename1);
            if(move_uploaded_file($tmp_name, "images/$name")){
                if(isset($filename1)){
                        $file2up = "UPDATE portfolio set p_thumb='".$filename1."' WHERE p_id=".$id.";";
                        if(mysqli_query($ligaBD, $file2up)){
                            echo "<br>sucess on file2 - ".$name;
                        }
                    }
                }
        }
        
        
    }

    
}

header('Location:admin.php');
?>