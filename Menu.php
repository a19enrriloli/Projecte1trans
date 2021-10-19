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


    <div id="form">

        <div id="p10">

            <div>Articulo 1</div><img src="https://picsum.photos/100?blur&random=1" alt=""><br><button class="afegir">+</button><input type="text" id="ip10" value="0"><button class="treure">-</button>

        </div>

            <div id="p20"><div>Articulo 2</div><img src="https://picsum.photos/100?blur&random=2" alt=""><br><button class="afegir">+</button><input type="text" id="ip20" value="0"><button class="treure">-</button></div>

            <div id="p30"><div>Articulo 3</div><img src="https://picsum.photos/100?blur&random=3" alt=""><br><button class="afegir">+</button><input type="text" id="ip30" value="0"><button class="treure">-</button></div>

            <div id="p40"><div>Articulo 4</div><img src="https://picsum.photos/100?blur&random=4" alt=""><br><button class="afegir">+</button><input type="text" id="ip40" value="0"><button class="treure">-</button></div>

            <div id="p50"><div>Articulo 5</div><img src="https://picsum.photos/100?blur&random=5" alt=""><br><button class="afegir">+</button><input type="text" id="ip50" value="0"><button class="treure"> -</button></div>


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


let carrito = document.getElementById('form');

carrito.addEventListener('click', e => {

    if(e.target.classList.contains('afegir')){
        console.log("Has añadido el producto");
        console.log(e.target.parentNode.id); 
        añadirProducto(e,e.target.parentNode.id);

    }else if (e.target.classList.contains('treure')){
        console.log("Has retirado el producto");
        console.log(e.target.parentNode.id);
        retirarProducto(e,e.target.parentNode.id);
    }

});

function añadirProducto(e,idProducto){

    document.getElementById("i"+idProducto).value++;

}

function retirarProducto(e,idProducto){

    if (document.getElementById("i"+idProducto).value>0){
        document.getElementById("i"+idProducto).value--;




    }

}


function actualizarCarrito(){
    htmlStr="";
    linputs= document.querySelectorAll("#form :input");
    for (let index=0; index <linputs.lenght;index++){
        const element = linputs [index];
        if (element.value>0){
            htmlStr="Producto ".datos.productos[index].nombre + " --> "+ element.value + "unidades <br>";
        }
    }
    document.getElementById("listado")
}


</script>

</body>
</html>
