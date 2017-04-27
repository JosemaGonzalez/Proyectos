{
  let estadosPosibles = ['No inicializado', 'Cargando', 'Cargado', 'Interactivo', 'Completado'];
  let tiempoInicial = 0;
  let enviar;
  let estados;
  let codigo;
  let recurso;
  let cabeceras;
  let contenidos;
  let tiempoFinal;
  let milisegundos;

  // Función de respuesta
  let muestraContenido = function() {
    tiempoFinal = new Date();
    milisegundos = tiempoFinal - tiempoInicial;

    estados.innerHTML += "[" + milisegundos + " mseg.] " + estadosPosibles[peticion.readyState] + "<br/>";

    if(peticion.readyState == 4) {//completo
      if(peticion.status == 200) {//respuesta correcta
        contenidos.innerHTML = peticion.responseText.transformaCaracteresEspeciales();
      }
      muestraCabeceras();
      muestraCodigoEstado();
    }
  }

  let muestraCabeceras = function() {
    cabeceras.innerHTML = peticion.getAllResponseHeaders().transformaCaracteresEspeciales();
  }

  let muestraCodigoEstado = function() {
    codigo.innerHTML = peticion.status + "<br/>" + peticion.statusText;
  }

  let cargaContenido = function() {
    // Borrar datos anteriores
    contenidos.innerHTML = "";
    estados.innerHTML = "";

    // Instanciar objeto XMLHttpRequest
    peticion = new XMLHttpRequest();

    // Preparar función de respuesta
    peticion.onreadystatechange = muestraContenido;

    // Realizar petición
    tiempoInicial = new Date();
    peticion.open('GET', recurso.value +'?nocache='+Math.random(), true);
    peticion.send(null);
  }


  let init = function(){
    estados = document.getElementById('estados');
    contenidos = document.getElementById('contenidos');
    cabeceras = document.getElementById('cabeceras');
    codigo = document.getElementById('codigo');

    // Cargar en el input text la URL de la página
    recurso = document.getElementById('recurso');
    recurso.value = location.href;

    // Cargar el recurso solicitado cuando se pulse el botón MOSTRAR CONTENIDOS
    enviar =  document.getElementById('enviar');
    enviar.addEventListener("click",cargaContenido);
  }

  window.onload =  init;

}

String.prototype.transformaCaracteresEspeciales = function() {
  return unescape(escape(this).
    replace(/%0A/g, '<br/>').
    replace(/%3C/g, '&lt;').
    replace(/%3E/g, '&gt;'));
}
