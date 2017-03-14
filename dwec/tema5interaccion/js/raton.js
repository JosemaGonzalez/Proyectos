{
    let xCliente;
    let yCliente;
    let xPagina;
    let yPagina;

    let escribir = function(mensaje) {
        document.getElementById("caja").innerHTML = '<p>' + mensaje + '</p>';
    }
    let escribir2 = function(mensaje) {
        document.getElementById("caja1").innerHTML = '<p>' + mensaje + '</p>';
    }
    let eventosRaton = function() {
        let evento = window.event;
        switch (evento.type) {
            case 'click':
                document.getElementById('caja').style.backgroundColor = '#786AFF';
                escribir2("Click");
                break;
            case 'dblclick':
                document.getElementById('caja').style.backgroundColor = '#E80606';
                escribir2("Doble Click");
                break;
            case 'mousedown':
                document.getElementById('caja').style.backgroundColor = '#5FFAED';
                escribir2("Mouse Down");
                break;
            case 'mouseenter':
                document.getElementById('caja').style.backgroundColor = '#D9ED33';
                escribir2("Mouse Enter");
                break;
            case 'mouseleave':
                document.getElementById('caja').style.backgroundColor = '#54D957';
                escribir2("Mouse Leave");
                break;
            case 'mousemove':
                xPagina = evento.pageX;
                yPagina = evento.pageY;
                xCliente = evento.clientX;
                yCliente = evento.clientY;
                xResolucion = evento.screenX;
                yResolucion = evento.screenY;
                escribir('Navegador X:' + xCliente + ' Y: ' + yCliente +
                    '<br>Página X:' + xPagina + ' Y:' + yPagina + '<br>Resolución X:' + xResolucion + ' Y:' + yResolucion + '');

                break;
            case 'mouseout':
                document.getElementById('caja').style.backgroundColor = '#C13CF3';
                escribir2("Mouse Out");
                break;
            case 'mouseover':
                document.getElementById('caja').style.backgroundColor = '#EC3B82';
                escribir2("Mouse Over");
                break;
            case 'mouseup':
                document.getElementById('caja').style.backgroundColor = '#F0994C';
                escribir2("Mouse Up");
                break;
        }
    }
    let init = function() {
        document.addEventListener("click", eventosRaton);
        document.addEventListener("dblclick", eventosRaton);
        document.addEventListener("mousedown", eventosRaton);
        document.addEventListener("mouseenter", eventosRaton);
        document.addEventListener("mouseleave", eventosRaton);
        document.addEventListener("mousemove", eventosRaton);
        document.addEventListener("mouseout", eventosRaton);
        document.addEventListener("mouseover", eventosRaton);
        document.addEventListener("mouseup", eventosRaton);
    }

    window.onload = init;
}
