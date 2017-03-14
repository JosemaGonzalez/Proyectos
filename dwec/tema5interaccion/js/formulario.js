{
    let inputNombre;
    let errorNombre;
    let inputApellidos;
    let errorApellidos;
    let inputSexo;
    let inputNivel;
    let inputIdiomas;
    let errorIdiomas;
    let inputPeso;
    let errorPeso;
    let inputEmail;
    let errorEmail;
    let inputDni;
    let errorDni;
    let inputFecha;
    let errorFecha;
    let inputTelefono;
    let errorTelefono;
    let inputCc;
    let errorCc;
    let inputUrl;
    let errorUrl;
    let inputEnviar;
    let completo;

    let init = function() {
        inputNombre = document.getElementById("nombre");
        inputApellidos = document.getElementById("apellidos");
        inputSexo = document.getElementById("sexo");
        inputNivel = document.getElementsByName("nivel");
        inputIdiomas = document.getElementsByClassName("idiomas");
        inputPeso = document.getElementById("peso");
        inputEmail = document.getElementById("email");
        inputDni = document.getElementById("dni");
        inputFecha = document.getElementById("fecha");
        inputTelefono = document.getElementById("telefono");
        inputCc = document.getElementById("cuenta");
        inputUrl = document.getElementById("url");
        inputEnviar = document.getElementById("submit");
        errorNombre = document.getElementById("errorNombre");
        errorApellidos = document.getElementById("errorApellidos");
        errorIdiomas = document.getElementById("errorIdiomas");
        errorPeso = document.getElementById("errorPeso");
        errorEmail = document.getElementById("errorEmail");
        errorDni = document.getElementById("errorDni");
        errorFecha = document.getElementById("errorFecha");
        errorTelefono = document.getElementById("errorTelefono");
        errorCc = document.getElementById("errorCuenta");
        errorUrl = document.getElementById("errorUrl");
        completo = document.getElementById("completo");
        inputNombre.addEventListener("blur", comprobarCadena);
        inputApellidos.addEventListener("blur", comprobarCadena2);
        //inputIdiomas.addEventListener("blur", comprobarIdiomas);
        inputPeso.addEventListener("blur", comprobarPeso);
        inputEmail.addEventListener("blur", comprobarEmail);
        inputDni.addEventListener("blur", comprobarDni);
        inputFecha.addEventListener("blur", comprobarFecha);
        inputTelefono.addEventListener("blur", comprobarTelefono);
        inputCc.addEventListener("blur", comprobarCc);
        inputUrl.addEventListener("blur", comprobarUrl);
        inputEnviar.addEventListener("click", comprobarDatos);
    }

    let comprobarCadena = function() {
    	errorNombre.innerHTML = validarCadena(inputNombre.value);
    }
    let comprobarCadena2 = function() {
    	errorApellidos.innerHTML = validarCadena(inputApellidos.value);
    }
    let comprobarIdiomas = function() {
    	errorIdiomas.innerHTML = validarIdiomas(inputIdiomas);
    }
    let comprobarPeso = function() {
    	errorPeso.innerHTML = validarPeso(inputPeso.value);
    }
    let comprobarEmail = function() {
    	errorEmail.innerHTML = validarEmail(inputEmail.value);
    }
    let comprobarDni = function() {
    	errorDni.innerHTML = validarDni(inputDni.value);
    }
    let comprobarFecha = function() {
    	errorFecha.innerHTML = validarFecha(inputFecha.value);
    }
    let comprobarTelefono = function() {
    	errorTelefono.innerHTML = validarTelefono(inputTelefono.value);
    }
    let comprobarCc = function() {
    	errorCc.innerHTML = validarCuenta(inputCc.value);
    }
    let comprobarUrl = function() {
    	errorUrl.innerHTML = validarUrl(inputUrl.value);
    }

    let comprobarDatos  = function(){
        let com = false;
        comprobarCadena();
        comprobarCadena2();
        comprobarIdiomas();
        comprobarPeso();
        comprobarEmail();
        comprobarDni();
        comprobarFecha();
        comprobarTelefono();
        comprobarCc();
        comprobarUrl();
        if(errorNombre.textContent!=""){
            com = true;
        }
        if(errorApellidos.textContent!=""){
            com = true;
        }
        if(errorIdiomas.textContent!=""){
            com = true;
        }
        if(errorPeso.textContent!=""){
            com = true;
        }
        if(errorEmail.textContent!=""){
            com = true;
        }
        if(errorDni.textContent!=""){
            com = true;
        }
        if(errorFecha.textContent!=""){
            com = true;
        }
        if(errorTelefono.textContent!=""){
            com = true;
        }
        if(errorCc.textContent!=""){
            com = true;
        }
        if(errorUrl.textContent!=""){
            com = true;
        }
        if(com==true){
            completo.innerHTML = "Formulario no validado";
        }else{
            completo.innerHTML = "Formulario correcto";
        }
    }
    window.onload = init;
}
