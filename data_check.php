<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="project1";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("connection error");
}


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


    $sql="INSERT INTO admission(name,email,phone,message)
    VALUES('$name','$email','phone','$message')";

    $result=mysqli_query($data,$sql);

    if($result){
        $_SESSION['message']="your application sent successfully";
        header("location:index.php");
    }else{
        print "apply failed";
    }
}
?>