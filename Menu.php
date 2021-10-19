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

    <div class="productos">
        <div id="p1">
            <div>Producte 1 </div>
            <img src="producte1.jpg" alt="" width="200px"><br>
            <button class="afegir">+</button>
            <input type="text" id="id1" value=0>
            <button class="esborrar">-</button><br><br>
        </div>
        <div id="p2">
            <div>Producte 2 </div>
            <img src="producte2.jpg" alt="" width="200px"><br>
            <button class="afegir">+</button>
            <input type="text" id="id2" value=0>
            <button class="esborrar">-</button><br><br>
        </div>
        <div id="p3">
            <div>Producte 3 </div>
            <img src="producte3.jpg" alt="" width="200px"><br>
            <button class="afegir">+</button>
            <input type="text" id="id3" value=0>
            <button class="esborrar">-</button><br><br>
        </div>


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

    <script>
        let gallery = document.getElementById("productos");
        gallery.addEventListener("click", e =>{
            if (e.target.classList.contains("afegir")){
                console.log("Has hecho click en afegir");
                //Imprimo quien ha generado el evento
                console.log(e.target);

                //Imprimo el ID del padre de quien ha generado el evento
                console.log(e.target.parentNode.id);
                //Llamo a la funcion afegirProducte con el id del producto
                afegirProducte(e.target.parentNode.id);

                
            }
            else if (e.target.classList.contains("esborrar")){
                console.log("esborrar");
                treureProducte(e.target.parentNode.id);
            }

            function afegirProducte(idProducte){
                document.getElementById("i"+idProducte).value++;

            }

            function treureProducte(idProducte){
                if(document.getElementById("i"+idProducte).value > 0){
                    document.getElementById("i"+idProducte).value--;
                }
            }
        })
    </script>

</body>
</html>
