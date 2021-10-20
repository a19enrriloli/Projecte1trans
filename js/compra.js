
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
    if (document.getElementById("i"+idProducto).value==0){
        console.log("#"+idProducto+"treure");
        e.target.style.display="none";
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
}
