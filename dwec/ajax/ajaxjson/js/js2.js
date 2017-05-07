{
    let botonA, botonJ, botonV;
    let resultado;
    let xhr;

    let escribir = function (data, objeto) {
        resultado.innerHTML = "Tipo: "+objeto.toUpperCase() +"<br><br>";
        for (i in data) {
            for (j in data[objeto]) {
                resultado.innerHTML += data[objeto][j].tipo + "<br>";
                if (objeto == "aceites")
                    resultado.innerHTML += data[objeto][j].descripcion + "<br>";
            }
        }
    }

    let buscar = function (fichero, objeto) {
        xhr = new XMLHttpRequest();
        xhr.open("GET", fichero, true);
        xhr.onreadystatechange = function () {
            if (xhr.status == 200 && xhr.readyState == 4) {
                escribir(JSON.parse(xhr.responseText), objeto);
            }
        }
        xhr.send(null);
    }

    let init = function () {
        botonA = document.getElementById("botonA");
        botonJ = document.getElementById("botonJ");
        botonV = document.getElementById("botonV");
        resultado = document.getElementById("resultado");

        botonJ.addEventListener("click", function () {
            buscar("json/jamones.json", "jamones");
        });
        botonV.addEventListener("click", function () {
            buscar("json/vinos.json", "vinos");
        });
        botonA.addEventListener("click", function () {
            buscar("json/aceite.json", "aceites");
        });
    }

    window.onload = init;
}
