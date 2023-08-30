<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="road.jpeg" class="bd">
    <br> <br>
    <center>
<h1 class="in">login form</h1>
<h2>
   <?php
   error_reporting(0);
   session_start();
   session_destroy();
   print $_SESSION['loginMessage'];
   
   ?> 
</h2>
    </center>
    <br> <br> 
    <center>
        <div>
            <form action="login_check.php" method="POST" autocomplete="off" class="for">
                <label for=" " >username</label><br>
                <input type="text" name="username" id="a" placeholder="enter your name" required><br> <br>
                <label for=" ">password</label><br>
                <input type="password" name="password" id="a" placeholder="enter your password" required><br> <br>
                <input type="submit" name="submit" id="b" value="login" >

            </form>
        </div>
    </center>
    
</body>
</html>