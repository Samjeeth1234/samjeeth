<?php
session_start();
if(isset($_SESSION['uname'])){
    echo"<h2>welcome to product page</h2>";
    echo "<a href='welcome.php'><input type='button' value='welcome'></a>";
}else{
    echo"<script>location.href='logout.php';</script>";

}
?>