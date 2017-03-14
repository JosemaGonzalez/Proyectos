window.onload=function(){
	let contenido=function () {
	let content =document.getElementById("contenido");
	content.innerHTML +="<li>window.outerHeight = "+window.outerHeight+" ,devuelve la altura de la ventana</li>";
	content.innerHTML +="<li>window.innerHeight ="+window.innerHeight+" ,devuelve la altura del área del contenido</li>";
	content.innerHTML +="<li>window.screen.availHeight ="+window.screen.availHeight+" ,el alto de la pantalla en pixeles disponible para el navegador</li>";
	content.innerHTML +="<li>window.screen.height ="+window.screen.height+" ,devuelve el alto de la pantalla</li>";
	content.innerHTML +="<li>window.document.clientHeight ="+window.document.body.clientHeight+" ,devuelve la altura del navegador</li>";
	}();
}
