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

    <div>
        <h1>Finalització Comanda</h1>
    </div>
    
    <?php

        session_start();

        //echo $_SESSION["precitot"];
        
        $valida = $_POST['nombre']."------".$_POST['numero']."------".$_POST['gmail'];
        
        // echo $valida;
        
        echo"<br>";
        if(isset($_COOKIE["comanda"])){
            
        }else{
            setcookie("comanda", 54321);
        }
        

        $nombreFichero="comanda.txt";


        $fh = fopen($nombreFichero,"a+") or die("Se produjo un error al crear el archivo");

        $texto = <<<_END
            \n
            Informacio de l'usuari:
            Torn: $_SESSION[torn]
            Nom: $_POST[nombre]
            Telefono: $_POST[numero]
            Correu: $_POST[gmail]
            Comanda:  $_SESSION[pedido] $_SESSION[precitot]
        _END;
        fwrite($fh, $texto);
        fclose($fh);

        echo "La teva compra s'ha realitzat correctament";
        session_destroy();
    ?>
  

    <a href="Validacio.php"><button id="back-button" type="button">&#10094 Enrere</button></a>
    
    
</body>
<?php
    include ("footer.php");
?>
</html>
