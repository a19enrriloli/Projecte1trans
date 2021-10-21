 const error = ["¡Introdueix nom!","Email incorrecte","Número de telefono incorrecto"];
 
 window.onload = function(){
     document.getElementById("nom").focus();
 }
 document.getElementById("submit").addEventListener("click", function(e){
    var i;

    if(comprovarNom()){
        alert(error[0]);
        e.preventDefault();
    }

    i = comprovarTel();
    if(i){
        alert(error[i]);
        e.preventDefault();
    }

    i = comprovarEmail();
    if(comprovarEmail()){
        alert(error[i]);
        e.preventDefault();
    }
 });


 function comprovarNom(){

    return (document.getElementById("nom").value == "") ? true : false;
 }

function comprovarTel(){
    let telefon = document.getElementById("telefon").Value, i;
    if(telefon == ""){ i = 3; }
    else if (!(/^[0-9]+$/.test(telefon))) { i = 3;}
    else { i = 3; }
    return i;
}


function comprovarEmail(){
    let email = document.getElementById("email").value, i;
    if(email == ""){ i = 2; }
    else if (!(/^[a-zA-Z0-9._-]+@inspedralbes.cat$/.exec(email))) { i = 2;}
    else { i = 2; }
    return i;
}