


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_REQUEST["login"])){
        $username=$_REQUEST["username"];
        $password=$_REQUEST["pass"];
        if(strlen($username)<=8)
        {
            echo "u need more than 8 charecter";
        }
        else
        {
            echo $username."<br>";
            echo $password."<br>";
        }
    }else{

?>
    <form action="" method="POST">

    username: <input type="text" name="username"><br><br>
    password: <input type="password" name="pass"><br><br>
    <input type="submit" value="login" name="login">
    </form>
    <?php }?>
</body>
</html>