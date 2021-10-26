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

   <!-- Creamos un formulario donde mostraremos los productos guardados en nuestro archivo JSON -->
   <form action="Validacio.php" method="post">
    
    <?php
        $data = file_get_contents("admin/productes.json");
        $products = json_decode($data, true);
       foreach ($products as $prod) {
            echo "<div  id='".$prod["id"]."' class='".$prod["torn"]."'>".$prod["nom"]."</br>";
            echo "<img src='img/productes/".$prod["ruta"]."' width=350px height=300px></br>"; 
            echo $prod["preu"]."€ <br>";
            echo "<input type='button' value='+' class='afegir'></input>";
            echo "<input type='text' value='0' class='Caixatiquet' id='i".$prod["id"]."'>";
            echo "<input type='button' value='-' class='treure'></input><br><br></div>";
            
            
        }
        echo "<div><input type='submit' name='boton' value='siguiente'></input><br><br></div>";
    ?>

    <div  id="tiquet"></div>
    <div>
    <input type="button"  href="Pagina_Principal.php" value='atras'></button>
    </div>
    </form>
    <!-- Form de tarda -->
    <!--
        
    <?php
        $data = file_get_contents("admin/productes.json");
        $products = json_decode($data, true);
        echo "<div id='datosjson' > ".$data."</div>";
    ?>
    -->
   


<script type="text/javascript" src="js/compra.js"></script>


</body>
<?php
    include ("footer.php");
?>
</html>
