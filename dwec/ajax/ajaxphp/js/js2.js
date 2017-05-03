{
	let busqueda;
	let coincidencias;
	let xhr;

	let escribir = function(){
		if(xhr.readyState == 4) {
			if(xhr.status == 200) {
				coincidencias.innerHTML = xhr.responseText;
			}
		}
	}
	let buscar = function(){
		xhr = new XMLHttpRequest();
		if(xhr) {
			xhr.onreadystatechange = escribir;
			xhr.open("GET", "alumnos.php?busqueda="+busqueda.value , true);
			xhr.send(null);
		}
	}

	let init = function(){
		busqueda = document.getElementById("busqueda");
		coincidencias = document.getElementById("coincidencias");
		busqueda.addEventListener("keyup",buscar);
	}
	window.onload = init;
}
