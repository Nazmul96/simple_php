<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        move_uploaded_file($_FILES["myfile"]["tmp_name"],"images/".$_FILES["myfile"]["name"]);
    ?>
</body>
</html>