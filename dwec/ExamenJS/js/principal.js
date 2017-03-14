{
    //JOSEMA GONZALEZ

    let detodo;
    let emple;
    let ventana1;
    let ventana2;

    let init = function () {
        detodo = document.getElementById("detodo");
        emple = document.getElementById("emple");
        detodo.addEventListener("click", abrirVentana1);
        emple.addEventListener("click", abrirVentana2);
    }
    let abrirVentana1 = function () {
       ventana1= window.open("ventana1.html", "De todo un poco", "width=600,height=200,top=500,left=0");

    }
    let abrirVentana2 = function () {
        ventana2 = window.open("ventana2.html", "Crear Empleado", "width=600,height=200,top=200,left=0");
    }
    window.onload = init;
}