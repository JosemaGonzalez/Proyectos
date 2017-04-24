//JOSEMA GONZALEZ
Empleado= function(nombre,fecha,dni){
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

Empleado.prototype.calcularDias = function() {
	hoy = new Date();
	final = new Date(hoy.getFullYear(), 11, 31);
	let diferencia = final - hoy;
	return (Math.ceil(diferencia / (1000 * 60 * 60 * 24)));
}

Empleado.prototype.mostrarVentana = function() {
	ventana = window.open("", "Mi empleado", "width=500,height=400,bottom=0,right=0");
	ventana.document.write("<script src=\"js/salir.js\"></script><h2>Mi empleado - Josema González</h2>Hola mi nombre es " + empleado.getNombre() + "<br>Nací el " + empleado.getFecha() + "<br>Mi dni es " + empleado.getDni() + "<br>Para fin de año quedan " + empleado.calcularDias() + " días<br><input id=\"Cerrar\" type=\"submit\" value='Cerrar'/>");
	ventana.document.close();
}

