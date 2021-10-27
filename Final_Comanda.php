<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Final_Comanda</title>
</head>

<body>
    <?php 
    include("header.php");
    ?>
    <?php

    session_start();          
    echo $_SESSION["pedido"];
    echo $_SESSION["precitot"];
    
    $valida = $_POST['nombre']."------".$_POST['numero']."------".$_POST['gmail'];
    
    echo $valida;
    
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

    <a href="Validacio.php"><button type="button">Atras</button></a>
    
    
</body>
<?php
    include ("footer.php");
    ?>
</html>
