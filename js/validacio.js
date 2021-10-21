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
        alert(error[1]);
        e.preventDefault();
    }

    if(comprovarEmail() == false){
        alert(error[2]);
        e.preventDefault();
    }
 });


 function comprovarNom(){

    return (document.getElementById("nom").value == "") ? true : false;
 }

function comprovarTel(){
    let telefon = document.getElementById("telefon").Value, i;
    if(telefon == ""){ i = 2; }
    else if (!(/^[0-9]+$/.test(telefon))) { i = 2;}
    
    return false;
}


function comprovarEmail(){
    let email = document.getElementById("email").value, i;
    if(email == ""){ i = 1; }
    else if (!(/^[a-zA-Z0-9._-]+@inspedralbes.cat$/.exec(email))) { i = 1;}
    return false;
}