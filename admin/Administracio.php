<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Menu</title>
</head>

<body>
    <?php 
    include("./header.php");
    ?>
    <div>
       
        <div>
            <h1 class="admin">Administracio</h1>
        </div>
    </div>
    <div class="tiquet">
    <?php
            $texto = file_get_contents("../comanda.txt");
            $texto = nl2br($texto);
            echo $texto;
    ?>
    </div>
    <div style="text-align: center;">
            <a href="../index.php"><button id="back-button" type="button" class="button">&#10094 Enrere</button></a>
    </div>
    
</body>


<?php
    include ("./footer.php");
    ?>
</html>
