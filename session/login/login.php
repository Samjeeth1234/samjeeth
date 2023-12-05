<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<style>
    body{
        background:url(hi2.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .one{
        border:1px solid black;
        border-radius:8px;
        width:100%;
        font-size:1.2em;
        margin-right:400px;
        box-sizing:border-box;
    }
    #btn{
        border:1px solid black;
        border-radius:8px;
        text-align:center;
        margin-left:10px;
        width:80px;
    }

</style>
<body>
    <div class="one">
        <form action="welcome.php" method="post">
            <center><h1 id="cen">log in</h1></center>
            <table align="center">
                <input type="text" class="out" name="uname" placeholder="Enter Name"><br><br>
                <input type="password" class="password" name="pass" placeholder="Enter Password"><br><br>
                <center><button type="submit" id="btn" >login</button></center>
        
            </table>
        </form>
    </div>
</body>
</html>