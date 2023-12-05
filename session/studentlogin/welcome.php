<?php

session_start();
if(isset($_SESSION['name'])) {
    echo"<h2>welcome".$_SESSION['name']."<h2>";
    echo"<br><a href='logout.php'><input type=button value=logout></a>";
}
else {
    if($_POST['name'] ==$name && $_POST['password'] ==$password && $_POST['email'] ==$email){
        $_SESSION['name'] =$name;
        echo"<script>location.href='welcome.php';</script>";
    }
    else{
    echo"<script>alert('username or Password is incorrect');</script>";
    header("Location:login.php");
}
}
?>