<?php
if(isset($_COOKIE["comanda"])){
    header('Location: error.php ');
}
?>

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
        <h1 class="h1menu">Menu</h1>
    </div>

   <!-- Creamos dos formularios donde mostraremos los productos guardados en nuestro archivo JSON -->
    <form>
    <h2>Productes mati </h2>
    
    <?php
        $data = file_get_contents("admin/productes.json");
        $products = json_decode($data, true);
       foreach ($products as $prod) {
            echo "<div  id='".$prod["id"]."' class='".$prod["torn"]."'>".$prod["nom"]."</br>";
            echo "<img src='img/productes/".$prod["ruta"]."' width=300px height=300px></br>"; 
            echo $prod["preu"]."€ <br>";
            echo "<input type='button' value='+' class='afegir'></input>";
            echo "<input type='text' value='0' class='Caixatiquet' id='i".$prod["id"]."'>";
            echo "<input type='button' value='-' class='treure'></input><br><br></div>";
            
        }
       
    ?>
    </form>
    <!-- Form de tarda -->
    <?php
        $data = file_get_contents("admin/productes.json");
        $products = json_decode($data, true);
        echo "<div id='datosjson' > ".$data."</div>";
        echo "<div id='torn' > ".$products["torn"]."</div>";
    ?>
    <div id="tiquet"></div>
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


<script type="text/javascript" src="js/compra.js"></script>


</body>
<?php
    include ("footer.php");
?>
</html>
