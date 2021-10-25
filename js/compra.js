
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
    if (e.target.getElementsByClassName("Caixatiquet") != 0){
        crearTiquet(e,e.target.parentNode.id);
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

        return "mati";
    }else if(hora==11 && minuts <=30){
        tarda.style.display = "none";

        return "mati";
        
    }else{
        mati.style.display = "none";
        return "tarda";
    }
}




var Pmati = JSON.parse(Pmati);
var Ptarda = JSON.parse(Ptarda);



function crearTiquet(e,idProducto){

    let tiquet = document.getElementById("tiquet");
    let Ctiquet = document.getElementsByClassName("Caixatiquet");
    let txt = "";
    for(let i = 0 ; i <= Ctiquet.length ; i++){
        if(Ctiquet[i].value != 0){
            txt += "Nom: "+idProducto;
        }
    }
    tiquet.innerHTML = txt;
}