 const error = ["¡Nom Incorrecte!","¡Email Incorrecte!","¡Número de telefono Incorrecto!"];
 
 window.onload = function(){
     document.getElementById("nom").focus();
 }
 document.getElementById("submit").addEventListener("click", function(e){
    var i;

    if(comprovarNom()== false){
        alert(error[0]);
        e.preventDefault();
    }

    if(comprovarTel() == false){
        alert(error[2]);
        e.preventDefault();
    }

    if(comprovarEmail() == false){
        alert(error[1]);
        e.preventDefault();
    }
 });


 function comprovarNom(){

    return (document.getElementById("nom").value == "") ? false : true;
 }

function comprovarTel(){
    let telefon = document.getElementById("telefon").value;
    console.log(telefon);
    if(telefon == ""){
        return false;
    }else if (!(/^[0-9]+$/.test(telefon))){
        return false; 
    }
        return true;
}


function comprovarEmail(){
    let email = document.getElementById("email").value;
    if(email == ""){
        return false;
    }else if (!(/^[a-zA-Z0-9._-]+@inspedralbes.cat$/.exec(email))){
        return false;
    }
    return true;
}