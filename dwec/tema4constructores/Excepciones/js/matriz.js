    Matriz = function(filas, columnas) {
        this.filas = filas;
        this.columnas = columnas;
        this.resultado = new Array(filas);
        for (let i = 0; i < filas; i++) {
            this.resultado[i] = new Array(columnas);
            for (let j = 0; j < columnas; j++) {
                this.resultado[i][j] = 0;
            }
        }
    }
    Matriz.prototype.sumar = function(matriz) {
        let arraySuma = new Matriz(this.filas, this.columnas);
        for (let i = 0; i < this.filas; i++) {
            for (let j = 0; j < this.columnas; j++) {
                arraySuma.resultado[i][j] = this.resultado[i][j] + matriz.resultado[i][j];
            }
        }
        return arraySuma;
    }

    Matriz.prototype.restar = function(matriz) {
        let arrayResta = new Matriz(this.filas, this.columnas);
        for (let i = 0; i < this.filas; i++) {
            for (let j = 0; j < this.columnas; j++) {
                arrayResta.resultado[i][j] = this.resultado[i][j] - matriz.resultado[i][j];
            }
        }
        return arrayResta;
    }

    Matriz.prototype.trasponer = function() {
        let arrayTraspuesta = new Matriz(this.columnas, this.filas);
        for (let i = 0; i < arrayTraspuesta.filas; i++) {
            for (let j = 0; j < arrayTraspuesta.columnas; j++) {
                arrayTraspuesta.resultado[i][j] = this.resultado[j][i];
            }
        }
        return arrayTraspuesta;
    }

    Matriz.prototype.multiplicar = function(matriz) {
        let arrayProducto = new Matriz(this.filas, matriz.columnas);
        for (let i = 0; i < this.filas; i++) {
            for (let j = 0; j < matriz.columnas; j++) {
                for (let k = 0; k < this.columnas; k++) {
                    arrayProducto.resultado[i][j] += this.resultado[i][k] * matriz.resultado[k][j];
                }
            }
        }
        return arrayProducto;
    }
