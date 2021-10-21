<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>

<body>
    <?php 
    include("header.php");
    ?>
    <?php
    echo"<br>";
    if(isset($_COOKIE["comanda"])){
        
    }else{
        setcookie("comanda", 54321);
    }
    ?>
        
        <div>
            <h1>Finalització Comanda</h1>
        </div>
    </div>

    <div>
        <form action="Validacio.php">
            <br><br>
            <input type="submit" name="boton" value="atras">
        </form>
    </div>
    
</body>
<?php
    include ("footer.php");
    ?>
</html>
