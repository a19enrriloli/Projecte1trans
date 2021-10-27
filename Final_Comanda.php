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
        //echo $_SESSION["precitot"];
        
        $valida = $_POST['nombre']."------".$_POST['numero']."------".$_POST['gmail'];
        
        // echo $valida;
        
        echo"<br>";
        if(isset($_COOKIE["comanda"])){
            
        }else{
            setcookie("comanda", 54321);
        }
        $minuts= date("i");
        $hora = date("H");
        $fecha = date("d-m-o");
        if($hora < 11  ){
            $fh = fopen("$fecha'mati.txt'","a+") or die("Se produjo un error al crear el archivo");
           
        } else if($hora==11 && $minuts<=30){
            $fh = fopen("$fecha'mati.txt'","a+") or die("Se produjo un error al crear el archivo");
        }else{
            $fh = fopen("$fecha'tarda.txt'","a+") or die("Se produjo un error al crear el archivo");
        }

        $texto = <<<_END
            \n
            Informacion del usuario:
            Hora: $hora:$minuts
            Nombre: $_POST[nombre]
            Telefono: $_POST[numero]
            Correo: $_POST[gmail]
            Comanda:  $_SESSION[pedido] $_SESSION[precitot]
        _END;
        fwrite($fh, $texto);
        fclose($fh);

        echo "Se ha escrito sin problemas";
        session_destroy();
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
