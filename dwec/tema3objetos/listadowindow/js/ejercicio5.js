let init = function() {
    let mostrar = function(argu) {
        let content = document.getElementById("contenido");
        content.innerHTML = argu + "<br>";
    }
    reloj = function() {
        let date = new Date();
        let horas = date.getHours();
        let minutos = date.getMinutes();
        let segundos = date.getSeconds();
        let comhoras = new String(horas);
        let comminutos = new String(minutos);
        let comsegundos = new String(segundos);
        if (comhoras.length == 1) {
            horas = "0" + horas;
        }
        if (comminutos.length == 1) {
            minutos = "0" + minutos;
        }
        if (comsegundos.length == 1) {
            segundos = "0" + segundos;
        }

        mostrar(horas + ":" + minutos + ":" + segundos+" h");
        reloj();
    }
   // window.setInterval("reloj()", 900);

}
window.onload = init;
