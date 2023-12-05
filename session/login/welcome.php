<?php
$uname='bala';
$pass='123';
echo"Data:".$uname;
session_start();
if(isset($_SESSION['uname'])) {
    echo"<h2>welcome".$_SESSION['uname']."<h2>";
    echo"<a href='products.php'>Products</a></h2>";
    echo"<br><a href='logout.php'><input type=button value=logout></a>";
}
else {
    if($_POST['uname'] ==$uname && $_POST['pass'] ==$pass){
        $_SESSION['uname'] =$uname;
        echo"<script>location.href='welcome.php';</script>";
    }
    else{
    echo"<script>alert('username or Password is incorrect');</script>";
    header("Location:login.php");
}
}
?>