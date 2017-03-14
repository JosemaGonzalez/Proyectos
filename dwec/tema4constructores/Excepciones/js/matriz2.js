{
    /**
     * Caja de opciones
     */
    let caja1;
    /**
     * opcion de la lista
     */
    let opciones;
    /**
     * dimensiones filas y columnas
     */
    let fila1;
    let columna1;
    let fila2;
    let columna2;
    /**
     * datos de las matrices
     */
    let numMatriz1;
    let numMatriz2;
    /**
     * boton para calcular matrices
     */
    let botonEnviar;
    /**
     * escritura del resultado
     */
    let escribir;
    /**
     * caja mostrar valores
     */
    let resulDimension;
    /**
     * variables de errores
     */
    let eEscritura = false;
    let eNumeros;
    let eMatriz;
    /**
     * Matrices
     */
    let matriz1;
    let matriz2;
    let matriz3 = [];

    let eTamano = function(message) {
        this.message = message;
    }

    let eDatos = function(message) {
        this.message = message;
    }

    let validaNumeros = function(num) {
        if (isNaN(num) || num < 0) {
            throw new eDatos("Debe introducir un número correcto");
        } else {
            return true;
        }
    }

    let validaMatriz = function(fila1, columna1, fila2, columna2) {
        if (opciones === "sumar" || opciones === "restar") {
            if (fila1 != fila2 || columna1 != columna2) {
                throw new eTamano("No coincide la matriz");
            } else {
                return true;
            }
        }
        if (opciones === "multiplicar") {
            if (fila1 != columna2) {
                throw new eTamano("No coincide la matriz");
            } else {
                return true;
            }
        }
    }

    let validaDimensiones = function() {
        try {
            eMatriz.innerHTML = "";
            fila1 = parseInt(document.getElementById("fila1").value);
            columna1 = parseInt(document.getElementById("columna1").value);
            if (opciones != "trasponer") {
                fila2 = parseInt(document.getElementById("fila2").value);
                columna2 = parseInt(document.getElementById("columna2").value);
                if (validaNumeros(fila1) && validaNumeros(columna1) && validaNumeros(fila2) && validaNumeros(columna2)) {
                    if (validaMatriz(fila1, columna1, fila2, columna2)) {
                        introducirDatos();
                    }
                }
            } else {
                if (validaNumeros(fila1) && validaNumeros(columna1)) {
                    introducirDatos();
                }
            }
        } catch (e) {
            eMatriz.innerHTML = e.message;
        } finally {
            resulDimension.style.display = "none";
        }
    }

    let elegirDimensiones = function() {
        caja1.style.display = "none";
        opciones = document.getElementById("opcion").value;
        if (opciones != "trasponer") {
            resulDimension.innerHTML =
                `Filas matriz 1 <input type='number' min='1' max='10' placeholder='0' id='fila1'/>
                <br><br>
                Columnas matriz 1 <input type='number' min='1' max='10' placeholder='0' id='columna1'/>
                <br><br>
                Filas matriz 2 <input type='number' min='1' max='10' placeholder='0' id='fila2'/>
                <br><br>
                Columnas matriz 2 <input type='number' min='1' max='10' placeholder='0' id='columna2'/>
                <br><br>
                <input type='submit' id='segundo' value='Enviar'></br>`;
        } else {
            resulDimension.innerHTML =
                `Filas matriz 1 <input type='number' min='1' max='10' placeholder='0' id='fila1'/>
                <br><br>
                Columnas matriz 1 <input type='number' min='1' max='10' placeholder='0' id='columna1'/>
                <br><br>
                <input type='submit' id='segundo' value='Enviar'></br>`;
        }
        document.getElementById("segundo").addEventListener("click", validaDimensiones);
    }

    let introducirDatos = function() {
        fila1 = parseInt(document.getElementById("fila1").value);
        columna1 = parseInt(document.getElementById("columna1").value);
        if (opciones == "trasponer") {
            numMatriz1.innerHTML += "Introducir números de la matriz</br>";
            for (let i = 0; i < fila1; i++) {
                for (let j = 0; j < columna1; j++) {
                    numMatriz1.innerHTML += "<input type='number' min='1' max='999' placeholder='0' id='matriz1fila" + i + "columna" + j + "'/>";
                    matriz3.push(parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value));
                }
                numMatriz1.innerHTML += "</br>";
            }
        } else {
            fila2 = parseInt(document.getElementById("fila2").value);
            columna2 = parseInt(document.getElementById("columna2").value);
            numMatriz1.innerHTML += "Introducir números 1ª matriz</br>";
            for (let i = 0; i < fila1; i++) {
                for (let j = 0; j < columna1; j++) {
                    numMatriz1.innerHTML += "<input type='number' min='1' max='999' placeholder='0' id='matriz1fila" + i + "columna" + j + "'/>";
                    matriz3.push(parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value));
                }
                numMatriz1.innerHTML += "</br>";
            }
            numMatriz2.innerHTML += "Introducir números 2ª matriz</br>";
            for (let i = 0; i < fila2; i++) {
                for (let j = 0; j < columna2; j++) {
                    numMatriz2.innerHTML += "<input type='number' min='1' max='999' placeholder='0' id='matriz2fila" + i + "columna" + j + "'/>";
                    matriz3.push(parseInt(document.getElementById("matriz2fila" + i + "columna" + j + "").value));
                }
                numMatriz2.innerHTML += "</br>";
            }
        }
        botonEnviar.style.display = "block";
        document.getElementById("tercero").addEventListener("click", realizarOperacion);
    }

    let realizarOperacion = function() {
        try {
            eNumeros.innerHTML = "";
            if (opciones == "trasponer") {
                for (let i = 0; i < fila1; i++) {
                    for (let j = 0; j < columna1; j++) {
                        if (!validaNumeros(parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value))) {
                            eEscritura = true;
                        }
                    }
                }
            } else {
                for (let i = 0; i < fila1; i++) {
                    for (let j = 0; j < columna1; j++) {
                        if (!validaNumeros(parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value))) {
                            eEscritura = true;
                        }
                    }
                }
                for (let i = 0; i < fila2; i++) {
                    for (let j = 0; j < columna2; j++) {
                        if (!validaNumeros(parseInt(document.getElementById("matriz2fila" + i + "columna" + j + "").value))) {
                            eEscritura = true;
                        }
                    }
                }
            }
            if (!eEscritura) {
                iniciarMatriz();
            }
        } catch (e) {
            eNumeros.innerHTML = "<br>" + e.message;
            escribir.innerHTML = "<br>";
        }
    }

    let iniciarMatriz = function() {
        if (opciones != "trasponer") {
            matriz1 = new Matriz(fila1, columna1);
            matriz2 = new Matriz(fila2, columna2);
        } else {
            matriz1 = new Matriz(fila1, columna1);
        }
        escribirEnMatriz();
    }

    let escribirEnMatriz = function() {
        if (opciones == "trasponer") {
            for (let i = 0; i < fila1; i++) {
                for (let j = 0; j < columna1; j++) {
                    matriz1.resultado[i][j] = parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value);
                }
            }
        } else {
            for (let i = 0; i < fila1; i++) {
                for (let j = 0; j < columna1; j++) {
                    matriz1.resultado[i][j] = parseInt(document.getElementById("matriz1fila" + i + "columna" + j + "").value);
                }
            }
            for (let i = 0; i < fila2; i++) {
                for (let j = 0; j < columna2; j++) {
                    matriz2.resultado[i][j] = parseInt(document.getElementById("matriz2fila" + i + "columna" + j + "").value);
                }
            }
        }
        operacion();
    }

    let operacion = function() {
        opciones = document.getElementById("opcion").value;
        switch (opciones) {
            case 'sumar':
                escribirHTML(matriz1.sumar(matriz2));
                break;
            case 'restar':
                escribirHTML(matriz1.restar(matriz2));
                break;
            case 'multiplicar':
                escribirHTML(matriz1.multiplicar(matriz2));
                break;
            case 'trasponer':
                escribirHTML(matriz1.trasponer());
                break;
            default:
                break;
        }
    }

    let escribirHTML = function(matriz) {
        escribir.innerHTML = "<br>Resultado<br>";
        for (let i = 0; i < matriz.filas; i++) {
            for (let j = 0; j < matriz.columnas; j++) {
                escribir.innerHTML += "" + matriz.resultado[i][j] + "    ";
            }
            escribir.innerHTML += "<br>";
        }
    }

    let init = function() {
        document.getElementById("primero").addEventListener("click", elegirDimensiones);
        resulDimension = document.getElementById("elegirDimension");
        eMatriz = document.getElementById("eMatriz");
        caja1 = document.getElementById("cajap");
        numMatriz1 = document.getElementById("introducirMatriz1");
        numMatriz2 = document.getElementById("introducirMatriz2");
        botonEnviar = document.getElementById("botonEnviar");
        eNumeros = document.getElementById("eNumeros");
        escribir = document.getElementById("resultado");
    }
    window.onload = init;
}
