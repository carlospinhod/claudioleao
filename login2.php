<?php
    session_start();
    include('conn.php');
    $error = "";
    if(isset($_POST["submit"])){
        if(empty($_POST["username"]) || empty($_POST["password"])){
            $error = "Both fields are required.";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($ligaBD, $username);
            $password = mysqli_real_escape_string($ligaBD, $password);
            $password = md5($password);
            $sql="SELECT id FROM users WHERE username='$username' and password='$password'";
            $result=mysqli_query($ligaBD, $sql);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if(mysqli_num_rows($result)==1){
                $_SESSION['username'] = $username;
                $_SESSION['uid'] = $row['id'];
                header("Location: admin.php");
            }else{
                $error="Incorrect username or password";
            }
        }
    }
?>