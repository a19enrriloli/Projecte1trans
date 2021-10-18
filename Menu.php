...<!DOCTYPE html>
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

    <div class="productos">
        <table>
            <tr>
                <td>aa</td>
                <td>aa1</td>
            </tr>
            <tr>
                <td>bb</td>
                <td>bb1</td>
            </tr>
        </table>

        <!-- <div id="id_prod1">Producto 1</div> 
        <div id="id_prod2">Producto 2</div>
        <div id="id_prod3">Producto 3</div>
        <div id="id_prod4">Producto 4</div>
        <div id="id_prod5">Producto 5</div> -->
    </div>

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

<?php

    $num = strlen(string $bocata): int;
    $html .= "<ul>";
    for ($i=0;$i<= $num;$i++) {

        $html .= "<li>".$bocata."</li>";
        
    }
    $html .= "</ul>";

?>
</body>
</html>
