
// LUEGO OCULTARE EL QUE NO TOQUE.. Y SABRÉ CUAL TENGO QUE ESCUCHAR


let mati_o_tarda = horaMenu();

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
    crearTiquet();

}

function retirarProducto(e,idProducto){

    if (document.getElementById("i"+idProducto).value>0){
        document.getElementById("i"+idProducto).value--;
        crearTiquet();

    }
}

function crearTiquet(datosMenu){

    let tiquet = document.getElementById("tiquet");
    let Cantidad = document.getElementsByClassName("Caixatiquet");
    let txt = "";
    let PreuT = 0;
    let i = 0;
    while(i < Cantidad.length){
        if(Cantidad[i].value != 0){
            txt += "Article: " + datosMenu[Cantidad[i].parentNode.id].nom;
            txt += "<br>";
            txt += "Unitats: " + Cantidad[index].value;
            txt += "<br>";
            txt += "preu Unitari: " + datosMenu[Cantidad[i].parentNode.id].preu;
            txt += "<br>";
            txt += "Preu total: " + datosMenu[Cantidad[i].parentNode.id].preu * Cantidad[i].value + "€";
            txt += "<br>";
            preuT += datosMenu[Cantidad[i].parentNode.id].preu * Cantidad[i].value;
            txt += "<br>";
        }
    i++;
    }
    txt += "Preu Total: " + PreuT + "€";
    tiquet.innerHTML = txt;

}


function horaMenu(){
    
    let day = new Date();
    
    let hora = day.getHours();
    let minuts= day.getMinutes() ;

    console.log('hora ' + hora + ':' + minuts);
    //console.log(minuts);
    let mati = document.getElementById("mati");
    let tarda = document.getElementById("tarda");
    if(hora < 11  ){
       
        tarda.style.display = "none";
        //mati.style.display = "flex";

        return "mati";
    }else if(hora==11 && minuts <=30){
        tarda.style.display = "none";
        //mati.style.display = "flex";
        return "mati";
        
    }else{
        mati.style.display = "none";
        return "tarda";
    }
}
