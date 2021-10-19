<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>



<?php 
include("header.php");
?>
        
        <div>
            <h1>Menu</h1>
        </div>
    </div>

    <form id='form'>
    <h2>Productes mati </h2>
        <?php
        $data = file_get_contents("admin/Pmati.json");
        $products = json_decode($data, true);
        foreach ($products as $prod) {
            echo "<div>".$prod["nom"]."</br>";
            echo "<img src='img/productes/".$prod["ruta"]."' width=200px></br>"; 
            echo "<input type='button' value='+'>";
            echo $prod["preu"]."€ </div>";                
        }?>

    </form>

        <div id='tarda'>
        <h2>Productes tarda </h2>
        <?php


        $data = file_get_contents("admin/Ptarda.json");
        $products = json_decode($data, true);        
     
        foreach ($products as $prod) {

            echo $prod["nom"]."</br>";
            echo "<img src='img/productes/".$prod["ruta"]."' width=200px></br>"; 
            echo $prod["preu"]."€ </br></br>";
        }
    ?>
    </div>
    
    <!--
    <div id="form">

        <div id="p10">
            <div>Producte 1</div>
            <img src="img_productes/producte1.jpg" alt="" width="200px"><br>
            <button class="afegir">+</button>
            <input type="text" id="ip10" value="0">
            <button class="treure">-</button>
        </div>
    </div>
        -->


    <div>
        <form action="Validacio.php">
            <br><br>
            <input type="submit" name="boton" value="siguiente">
        </form>
    </div>
    <div>
        <form action="Pagina_Principal.php">
            <br><br>
            <input type="submit" name="boton" value="atras">
        </form>
    </div>


<script type="text/javascript" src="/js/codigo.js"></script>

</body>
<?php
    include ("footer.php");
?>
</html>
