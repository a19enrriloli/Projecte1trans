<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    

    <title>Error</title>
</head>
<body>
  
    <?php 
        include("header.php");
    ?>
     <img  src="img/error.png" alt="Logo pp" width="300px" class="center"  >    
    <h1 style="text-align:center;">Error, ja has fet una comanda</h1>
    <h2 style="text-align:center;">Espera a demà per tornar a demanar </h2>
    <div style="text-align:center;">
        <form action="index.php">
            <br><br>
            <input type="submit" name="boton" value="<-" class="button">
        </form>
    </div>

</body>
<footer>
    <?php
        include("footer.php");
    ?>
</footer>
</html>
