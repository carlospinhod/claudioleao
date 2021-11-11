<?php
    include('conn.php');
    session_start();
    $user_check=$_SESSION['username'];
    $sql = mysqli_query($ligaBD, "SELECT username FROM users WHERE username='$user_check'");
    $row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $login_user=$row['username'];
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>