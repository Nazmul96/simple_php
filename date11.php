<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="date.php" method="POST">
     Date of Birth: <input type="date" name="d" value="<?php echo date('d-m-Y');?>">
        <br><br>
        <input type="submit" value="submit">

    </form>
</body>
</html>