{
	let btnSalir;
	let salir = function () {
		window.close();
	}
	let init = function(){
		btnSalir = document.getElementById("Cerrar");
		btnSalir.addEventListener("click", salir);
	}
	window.onload = init;
}
