<?php
    include('login2.php'); // Include Login Script
    if ((isset($_SESSION['username']) != '')){
		header('Location: admin.php');
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="assets/css/login.css">
        
        <meta name="robots" content="noindex, nofollow">
    </head>
<body>
        <div id="login">
            <form name='form-login' method="post" action="">
                <span class="fontawesome-user"></span>
                <input type="text" name="username" placeholder="Username">

                <span class="fontawesome-lock"></span>
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login">
                <div class="error" style="color:white;"><?php echo $error;?></div>
            </form>
            
            
        </div>
</body>
</html>
