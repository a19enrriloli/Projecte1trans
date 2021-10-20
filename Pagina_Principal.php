<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    

    <title>Cantina Pedralbes 2021</title>
</head>
<style>
    a{
      margin-left: 50px;  
    }
</style>
<body>
  
    <?php 
        include("header.php");
    ?>
            
    
        <div style="display: flex; width: 70%;">
    
            <div>
                <a href="Administracio.php"><b> Administracio </b></a> 
            </div>
            
        </div>
    </div>
    <div>

        <form action="Menu.php">
            <br><br>
            <input type="submit" name="boton" value="Menu">
        </form>

    </div>


</body>
<footer>
    <?php
        include("footer.php");
    ?>
</footer>
</html>
