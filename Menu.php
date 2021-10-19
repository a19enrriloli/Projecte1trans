<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <div class="pag" style="display: flex;">
        <div id="div1">
            <a href='Pagina_Principal.php'>
                <img src="logo.jpg" alt="Logo Pedralbes" width="200px">
            </a>
        </div>
        
        <div>
            <h1>Menu</h1>
        </div>
    </div>


    <?php

        $data = file_get_contents("admin/Pmati.json");
        $products = json_decode($data, true);
 
        echo "<div class='mati'>";
        echo "<b>Productes mati </b></br>";

        foreach ($products as $prod) {

            echo $prod["nom"]."</br>";
            echo "<img src= '".$prod["ruta"]."' width=200px></br>"; 
            echo $prod["preu"]."€ </br>";
                
        }

        echo "</div>";
        echo "<div class='tarda'>";

        $data = file_get_contents("admin/Ptarda.json");
        $products = json_decode($data, true);
        
        echo "</br><b>Productes tarda </b></br>";

        foreach ($products as $prod) {

            echo $prod["nom"]."</br>";
            echo "<img src= '".$prod["ruta"]."' width=200px></br>"; 
            echo $prod["preu"]."€ </br></br>";
        }

        echo "</div>"
        
    ?>
    
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
</html>
