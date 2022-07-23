function validar(e){
    /*VARIABLES*/
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var expresion;

    expresion = /\w+@\w+\.+[a-z]/;

    /*CAMPOS VACIOS*/
    if(name===""){
        alert("El campo NOMBRE esta vacio");
        return false;
    }
    else if (email===""){
        alert("El campo CORREO esta vacio");
        return false;
    }
    else if(pass===""){
        alert("El campo CONTRASEÑA esta vacio");
        return false;
    }

    /*LONGITUD*/
    if(name.length>30){
        alert("El nombre es muy largo");
        return false;
    }

    /*VALIDAR CORREO*/
    if(!expresion.test(email)){
        alert("El correo debe contener @ y un dominio");
        return false;
    }
    return true;
}

/*SOLO LETRAS*/
function sololetras(e){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    letras=" abcdefghijklmnñopqrstuvwxyz";
    especiales="8-37-38-46-164";
    teclado_especial=false;
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial==true;break;
        }
    }
    if(letras.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
}