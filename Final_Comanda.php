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
   // echo $_SESSION["pedido"];
    //echo $_SESSION["precitot"];
    
    $valida = $_POST['nombre']."------".$_POST['numero']."------".$_POST['gmail'];
    
   // echo $valida;
    
    echo"<br>";
    if(isset($_COOKIE["comanda"])){
        
    }else{
        setcookie("comanda", 54321);
    }
    session_destroy();  
    
     $numero = rand();
        $fh = fopen("$numero.txt","wr") or die("Se produjo un error al crear el archivo");

        $texto = <<<_END
        Informacion del usuario:
        Nombre: $_POST[nombre]
        Telefono: $_POST[numero]
        Correo: $_POST[gmail]
        El pedido:  $_SESSION[pedido] $_SESSION[precitot]
_END;
        fwrite($fh, $texto);
        fclose($fh);

        echo "Se ha escrito sin problemas";

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
