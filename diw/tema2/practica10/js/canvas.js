window.onload = function() {
    function cargaContextoCanvas(idCanvas) {
        var elemento = document.getElementById(idCanvas);
        if (elemento && elemento.getContext) {
            var contexto = elemento.getContext('2d');
            if (contexto) {
                return contexto;
            }
        }
        return FALSE;
    }

    var contexto, contexto2;
    contexto = cargaContextoCanvas('usuario');

    if (contexto) {
        var escala = 2;
        contexto.fillStyle = '#5A5959';
        contexto.beginPath();
        contexto.arc(escala * 50, escala * 25, escala * 20, 0, Math.PI * 2, true);
        contexto.closePath;
        contexto.fill();

        contexto.beginPath();
        contexto.arc(escala * 50, escala * 90, escala * 40, Math.PI, Math.PI * 2, false);
        contexto.closePath;
        contexto.fill();
    }
    contexto2 = cargaContextoCanvas('pass');
    if (contexto2) {
    	var escala2=1.5;
    	contexto2.lineWidth = 20;
        contexto2.strokeStyle = '#5A5959';
        contexto2.beginPath();
        contexto2.moveTo(escala2*0, escala2*0);
        contexto2.lineTo(escala2*100, escala2*100);
        contexto2.moveTo(escala2*100, escala2*0);
        contexto2.lineTo(escala2*0, escala2*100);
        contexto2.moveTo(escala2*50, escala2*0);
        contexto2.lineTo(escala2*50, escala2*100);
        contexto2.moveTo(escala2*0, escala2*50);
        contexto2.lineTo(escala2*100, escala2*50);
        contexto2.stroke();
    }

}
