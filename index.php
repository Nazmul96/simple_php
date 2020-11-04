<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if(($_REQUEST["username"]=="Nazmul")&&($_REQUEST["pass"]=="01718"))
        {
            echo "successfully login";
        }
        else
        {
            echo "<span style='color:red;'>wrong information plz try again</span> ".$_REQUEST["username"].$_REQUEST["pass"];
        }

    ?>
</body>
</html>