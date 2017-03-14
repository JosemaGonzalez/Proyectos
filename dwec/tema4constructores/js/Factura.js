{
    let content;
    let init = function() {
        content = document.getElementById("contenido");
    }
    let mostrar = function(argu) {
        content.innerHTML += argu + "<br>";
    }

    let Cliente = function(idCliente, nombre, direccion, nif) {
        this.idCliente = idCliente;
        this.nombre = nombre;
        this.direccion = direccion;
        this.nif = nif;
    }

    Cliente.prototype.muestraCliente = function() {
        return "Cliente: " + this.idCliente + ", Nombre: " + this.nombre + ", Dirección: " + this.direccion + ", Nif: " + this.nif;
    }

    let Linea = function(cantidad, descripcion, precioUnitario) {
        this.cantidad = cantidad;
        this.descripcion = descripcion;
        this.precioUnitario = precioUnitario;
        this.precio = cantidad * precioUnitario;
    }

    Linea.prototype.muestraLinea = function() {
        return "Cantidad: " + this.cantidad + ", Descripción: " + this.descripcion + ", Precio unitario: " + this.precioUnitario + ", Precio: " + this.precio;
    }

    let Factura = function(idFactura, cliente, elementos) {
        this.idFactura = idFactura;
        this.cliente = cliente;
        this.elementos = elementos;

    }

    Factura.prototype.muestraFactura = function() {
        let sumatorio = 0,
            sumatorio2 = 1.21;
        mostrar("Id Factura: " + this.idFactura);
        mostrar("Factura para: " + this.cliente.muestraCliente());
        mostrar("Artículos de la factura: ");
        for (let [indice, elemento] of this.elementos.entries()) {
            mostrar('Línea: ' + (indice + 1) + ' => ' + elemento.muestraLinea());
            sumatorio += elemento.precio;
        }
        sumatorio2 *= sumatorio;
        mostrar("Precio sin iva: " + sumatorio + ", Precio + iva: " + (sumatorio2.toFixed(2)));
    }

    let clien = new Cliente(1, "josema", "vdr", 12345);
    let lineas = [new Linea(1, "aaaa", 30), new Linea(2, "abba", 7), new Linea(3, "acca", 10), new Linea(4, "add", 23)];
    let factura = new Factura(1, clien, lineas);
    factura.muestraFactura();

}
window.onload = init;
}
