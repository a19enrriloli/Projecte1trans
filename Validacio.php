<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacio</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
            .div1{
                display: flex;
            }
            .div2{
                width: 3cm;
            }
    </style>
</head>

<body>

<?php 
include("header.php");
?>
    <div class="pag">
    <div>
        <div>
            <h1>Validacio</h1>
        </div>
        <?php
            $data = file_get_contents("admin/productes.json");
            $products = json_decode($data, true);
            $preuT=0;

          
            $prodActual=0;

            foreach ($_POST as $id => $value){

                if($value!=0){
                    echo "Nom del producte: ".$products[$prodActual]["nom"].
                    "<br>".
                    "Unitats: ".$value.
                    "<br>".
                    "Preu unitari: ".$products[$prodActual]["preu"]."€ ".
                    "<br>".
                    "Preu producte/s: ".$products[$prodActual]["preu"]*$value."€ ".
                    "<br><br>";
                    $preuT+=$products[$prodActual]["preu"]*$value;

                }
               
                $prodActual++; 
            }
            "<br><br>";
            echo "Preu total de la comanda: ".$preuT." € ";
           


            $comandaDefinitiva = "";
            $prodActual=0;
            $p= "";
            foreach ($_POST as $id => $value){

                if($value!=0){
                    $comandaDefinitiva .="\n Nom del producte: ".$products[$prodActual]["nom"].
                    "\n".
                    "Unitats: ".$value.
                    "\n".
                    "Preu unitari: ".$products[$prodActual]["preu"]."€ ".
                    "\n".
                    "Preu producte/s: ".$products[$prodActual]["preu"]*$value."€ "."\n"; 
                    $torn= $products[$prodActual]["torn"];
                    $preuT+=$products[$prodActual]["preu"]*$value; 
                    
                }
                $prodActual++; 
            }
            $preuTv=$preuT/2;
            $p.= "Preu total dels productes: ".$preuTv." € "."------";
            
            //echo $comandaDefinitiva;
            session_start();          
            $_SESSION["pedido"] = $comandaDefinitiva;
            $_SESSION["precitot"] = $p;
            $_SESSION["torn"] = $torn;
            ?>
    <form method="post" action="Final_Comanda.php">
		<input name="nombre"type="text" id="nom" maxlength="30" required placeholder="Pepe" />
		<input name="numero"type="text" id="telefon" maxlength="30" required placeholder="+34 000000000" />
		<input name="gmail"type="text" id="email" maxlength="30" required placeholder="correu@inspedralbes.cat"/>
        <input type="submit" value="Enviar" class="button"/>
        <a href="Menu.php"><button id="back-button" type="button" class="button">&#10094 Enrere</button></a>
	</form>
    <script type="text/javascript" src="js/validacio.js"></script>
</body>
<?php
    include ("footer.php");
    ?>
</html>