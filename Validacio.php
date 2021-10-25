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

    <div>
        <form method="POST" >
            <div class="div1">
                <div class="div2">
                    <p>Nom</p>
                </div>
                <div>
                    <br>
                    <input type="text" id="nom" maxlength="30" required placeholder="Pepe"/>
                </div>
            </div>

            <div class="div1">
                <div class="div2">
                    <p>Telefono</p>
                </div>
                <div>
                    <br>
                    <input type="text" id="telefon" maxlength="30" required placeholder="+34 000000000"/>
                </div>
            </div>
            <div class="div1">
                <div class="div2">
                    <p>Email</p>
                </div>
                <div>
                    <br>
                    <input type="text" id="email" maxlength="30" required placeholder="correu@inspedralbes.cat"/>
                </div>
            </div>
    </div>
    <div>
        <form action="Final_Comanda.php">
            <br><br>
            <input type="submit" name="boton" value="enviar">
        </form>  
    </div>
    
    <div>
        <form action="Menu.php">
            <br><br>
            <input type="submit" name="boton" value="atras">
        </form>
    </div>
    <script type="text/javascript" src="js/validacio.js"></script>
</body>
<?php
    include ("footer.php");
    ?>
</html>