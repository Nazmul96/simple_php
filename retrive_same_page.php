
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["name"]) && isset($_REQUEST["roll"])){

        echo ($_REQUEST["name"])."<br>";
        echo ($_REQUEST["roll"]);
        }else{

    ?>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br><br>
        Roll: <input type="text" name="roll"><br><br>
        <input type="submit" value="submit">
    </form>
    <?php } ?>
</body>
</html>