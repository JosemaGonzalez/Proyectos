{
    let init = function() {
        let content = document.getElementById("contenido");
        let mostrar = function(argu) {
            content.innerHTML = "<input type=\"button\" id=\"bajaLinea\" value=\"Ejecutar\">";
            content.innerHTML += argu;
        }


        let bajaLinea = function() {
            window.scroll(0, window.scrollY + 10);
            mostrar("Baja una línea");
        }
        document.getElementById("bajalinea").addEventListener("click", bajaLinea);

        document.getElementById("subelinea").onclick = function() {
            window.scroll(0, window.scrollY - 10);
            mostrar("Sube una línea");
        }
        document.getElementById("bajapagina").onclick = function() {
            window.scroll(0, window.scrollY + window.innerHeight);
            mostrar("Baja una página");
        }
        document.getElementById("subepagina").onclick = function() {
            window.scroll(0, window.scrollY - window.innerHeight);
            mostrar("Sube una página");
        }
        document.getElementById("inicio").onclick = function() {
            window.scrollTo(0, 0);
            mostrar("Va al inicio");
        }
        document.getElementById("final").onclick = function() {
            window.scroll(0, document.body.scrollHeight)
            mostrar("Va al final");
        }
    }

    window.onload = init;
}
