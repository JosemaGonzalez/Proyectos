//JOSEMA GONZALEZ
function Empleado(nombre,fecha,dni){
    this.nombre = nombre;
    this.fecha = fecha;
    this.dni = dni;
}

Empleado.prototype.getNombre = function() {
	return this.nombre;
}

Empleado.prototype.getFecha = function() {
	return this.fecha;
}

Empleado.prototype.getDni = function() {
	return this.dni;
}
Empleado.prototype.crearNuevaVentana = function() {
    let hoy = new Date();
    let final = new Date(hoy.getFullYear(), 11, 31);
    let diferencia = final - hoy;
    diferencia = Math.ceil(diferencia / (1000 * 60 * 60 * 24));
    let nuevaVentana = window.open("", "");
    nuevaVentana.document.write("<h2>Nuevo empleado - Josema González</h2>" +
        "<div>Nombre " + this.getNombre() + "</div>" +
        "<div>Fecha Nacimiento " + this.getFecha() + "<div>" +
        "<div>Dni " + this.getDni() + "</div>" +
        "<div>Días hasta final de año " + diferencia + "</div>");
    nuevaVentana.document.close();
}
