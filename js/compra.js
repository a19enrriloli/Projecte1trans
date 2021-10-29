
// LUEGO OCULTARE EL QUE NO TOQUE.. Y SABRÉ CUAL TENGO QUE ESCUCHAR



let carrito = horaMenu();
 
let datosMenu = document.getElementById("datosjson").textContent;

let button = document.getElementById("seguent");

datosMenu = JSON.parse(datosMenu);
console.log(datosMenu);

function activarSeguent(button){
    let cajasTExto = document.getElementsByClassName("Caixatiquet");
    let i = 0;
    let comprat = false;
    button.disabled = true;

    button.style.backgroundColor = "grey";
    while(i < cajasTExto.length){
        if(cajasTExto[i].value != 0){
            
            comprat = true;
        }
        i++;
    }
    if(comprat==true){
        button.disabled = false;
        button.style.backgroundColor = "#6495ED";
    }


}

activarSeguent(button);

document.addEventListener('click', e => {

    if(e.target.classList.contains('afegir')){
        console.log("Has añadido el producto");
        console.log(e.target.parentNode.id); 
        añadirProducto(e,e.target.parentNode.id);


    }else if (e.target.classList.contains('treure')){
        console.log("Has retirado el producto");
        console.log(e.target.parentNode.id);
        retirarProducto(e,e.target.parentNode.id);

    }
    activarSeguent(button);
});

function añadirProducto(e,idProducto){

    document.getElementById("i"+idProducto).value++;
    crearTiquet(datosMenu);

}

function retirarProducto(e,idProducto){

    if (document.getElementById("i"+idProducto).value>0){
        document.getElementById("i"+idProducto).value--;
        crearTiquet(datosMenu);

    }

}


function crearTiquet(datosMenu){

    let tiquet = document.getElementById("tiquet");
    let cajasTExto = document.getElementsByClassName("Caixatiquet");
    let txt = "";
    let preuT = 0;
    let i = 0;
    while(i < cajasTExto.length){
        if(cajasTExto[i].value != 0){
            txt += "Article: " + datosMenu[i].nom;
            txt += "<br>";
            txt += "Unitats: " + cajasTExto[i].value;
            txt += "<br>";
            txt += "Preu Unitari: " + datosMenu[i].preu + "€";
            txt += "<br>";
            txt += "Preu total: " + datosMenu[i].preu * cajasTExto[i].value + "€";
            txt += "<br>";
            preuT += datosMenu[i].preu * cajasTExto[i].value;
            txt += "<br>";
        }
    i++;
    }
    txt += "IMPORT: " + preuT + "€";
    tiquet.innerHTML = txt;

}


function horaMenu(){
    
    let day = new Date();
    
    let horaM = day.getHours();
    let minuts= day.getMinutes() ;

    console.log('hora ' + horaM + ':' + minuts);
    //console.log(minuts);
    let mati = document.getElementsByClassName("mati");
    let tarda = document.getElementsByClassName("tarda");
    if(horaM < 11  ){

        for(let i=0;i < tarda.length;i++){
            tarda[i].style.display='none';
        }
        
    }else if(horaM==11 && minuts<=30){

        for(i=0;i < mati.length;i++){
            tarda[i].style.display='none';
        }
        
    }else{
        for(i=0;i < mati.length;i++){
            mati[i].style.display='none';
        }
        
    }
    
    return horaM;
}

