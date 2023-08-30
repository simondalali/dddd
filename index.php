<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){
    $message=$_SESSION['message'];

    print "<script type='text/javascript'>
      alert('$message');   
</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moshi technical school</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <label for="" class="logo">moshi technical  school</label>
        <ul>
            <li><a href="">home</a></li>
            <li><a href="">contacts</a></li>
            <li><a href="">admission</a></li>
            <li><a href="login.php" class="log"><button class="log">login</button></a></li>

        </ul>

    </nav>


    <div class="selection1">
        <label for="" class="scho">we teach students with care</label>
        <img class="image1"  src="image1.jpg" alt="">

    </div>

    <div class="container">
        <div class="row">
            <button class="col-md-4">
              <img class="welcome" src="foward.jpg" alt="">
</button>

            <button class="col-md-8">
                 <h1>welcome at moshi technical high school</h1>
                 <p>
                     among of the biggest scool in Tanzania 
                     have many students and facilities to full fill
                     the need of students,have both advanced and o-level,
                     levels for advance have PCM,PCB and CBG 
                     combination have enough teachers even study
                     resources
                 </p>

</button> 

        </div>

    </div>
    <br> <br>
    <hr>

    <center>our sorounding environment</center>
<br> <br> <br>

<button class="out">
    <img src="out.jpeg" alt="">
</button> 

<button class="out1">
    <h1>the school located beside of the center</h1>
    <p>always receive vister from outside 
        sometime receives leaders this due to the largest school,
        and located nearby the kilimanjaro centers 

    </p>
</button>
<br> <br>
<hr>
<center>
    <h1 >admission form</h1>
</center><br> <br> <br>
<div align="center" class="admission_form">
    <form action="data_check.php" method="POST" autocomplete="off">
        <div>
            <label for="" class="label1">name</label><br>
            <input type="text" name="name" id="" placeholder="enter your name"><br> <br>
        </div>

        <div>
            <label for="" class="label1">email</label><br>
            <input type="text" name="email" id="" placeholder="enter your email"><br> <br>
        </div>

        <div>
            <label for="">phone</label><br>
            <input type="number" name="phone" id="" placeholder="Enter your phone number"><br> <br>
        </div>

        <div>
            <label for="" class="label1">message</label><br>
            <textarea name="message" id="" cols="30" rows="5" placeholder="enter your message"></textarea><br> <br>
        </div>

        <div>
            
            <input type="submit" class="sub" name="submit" id="" value="apply">
        </div>
    </form>

</div>
<br> <br> <br>

<footer>
    <h1>all @copyright reserved by web tech knowledge</h1>
</footer>


</body>
</html>
