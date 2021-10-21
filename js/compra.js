

//AQUI TENGO QIE PONER EL CODIGO PARA DECIDIR SI ES MAÑANA O TARDE 
let day = new Date();

let fecha = day.getDate() + '-' + day.getMonth() + '-' + day.getFullYear();

let hora = day.getHours()
let minuts= day.getMinutes() ;
console.log(hora);


// LUEGO OCULTARE EL QUE NO TOQUE.. Y SABRÉ CUAL TENGO QUE ESCUCHAR


let mati_o_tarda = horaM(hora);

let carrito = document.getElementById(mati_o_tarda);

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

function horaM(horaMenu){
    let mati = document.getElementById("mati");
    let tarda = document.getElementById("tarda");
    if(horaMenu <=11 ){
       
        tarda.style.display = "none";

        return "mati";
    }else{
        
        mati.style.display = "none";
        return "tarda";
    }
}
//console.log (hora<"11:30");
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

