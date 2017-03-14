{
    let estado;
    const MIN_PESO = MIN_ANIMO = 1;
    const MAX_PESO = MAX_ANIMO = 15;
    let content;

    let imagen;
    let oculto;
    let nombre1;
    let raza1;
    let peso1;
    let fecha1;
    var gato;

    Gato = function(nombre, fecha, raza, peso) {
        this.nombre = nombre;
        this.fecha = fecha;
        this.raza = raza;
        if (peso < 1 || peso > 14) {
            mostrar("El peso del gato debe ser entre 1 y 15");
            return;
        } else {
            this.peso = parseInt(peso);
        }

        this.estado = "Jugando";
        this.animo = 5;
    }

    Gato.prototype.setPeso = function(peso) {
        if (this.peso >= MIN_PESO && this.peso <= MAX_PESO) {
            this.peso = peso;
        } else {
            mostrar(gato.gatoMuerto());
        }
    }

    Gato.prototype.getPeso = function() {
        return this.peso;
    }

    Gato.prototype.setAnimo = function(animo) {
        if (this.animo >= MIN_ANIMO && this.animo <= MAX_ANIMO) {
            this.animo = animo;
        } else {
            mostrar(gato.gatoMuerto());
        }
    }

    Gato.prototype.getAnimo = function() {
        return this.animo;
    }
    Gato.prototype.mostrarGato = function() {
        return "Nombre: " + this.nombre + ", Fecha de nacimiento: " + this.fecha + ", Raza: " + this.raza + ", Peso: " + this.peso + ", Estado actual: " + this.estado + ", Ánimo: " + this.animo;
    }
    Gato.prototype.gatoMuerto = function() {
        this.estado = "Muerto";
        imagen.src = "muerto.jpg";
        return "Tu gato ha muerto";
    }

    Gato.prototype.comer = function() {
        this.estado = "Comiendo";
        imagen.src = "comer.jpg";
        this.setPeso(this.getPeso++);
        this.setAnimo(this.getAnimo++);
        gato.mostrarGato();
    }
    Gato.prototype.dormir = function() {
        this.estado = "Durmiendo";
        imagen.src = "dormir.jpg";
        this.setAnimo(this.getAnimo--);
        gato.mostrarGato();

    }
    Gato.prototype.jugar = function() {
        this.estado = "Jugando";
        imagen.src = "jugar.jpg";
        this.setPeso(this.getPeso--);
        this.setAnimo(this.getAnimo++);
        gato.mostrarGato();
    }
    let ocultar = function() {
        oculto.style.display = 'block';
        gato = new Gato(nombre1.value, fecha1.value, raza1.value, parseInt(peso1.value));
        mostrar("Mi Gato <br>" + gato.mostrarGato());

    }
    let mostrar = function(argu) {
        content.innerHTML = argu + "<br>";
    }

    let init = function() {
        content = document.getElementById("contenido");
        oculto = document.getElementById("oculto");
        document.getElementById("crear").addEventListener("click", ocultar);
        imagen = document.getElementById("imagen");
        nombre1 = document.getElementById("nombre");
        fecha1 = document.getElementById("fecha");
        raza1 = document.getElementById("raza");
        peso1 = document.getElementById("peso");
        gato = new Gato("","","",5);
        document.getElementById("come").addEventListener("click", gato.comer);
        document.getElementById("juega").addEventListener("click", gato.jugar);
        document.getElementById("duerme").addEventListener("click", gato.dormir);


    }
    window.onload = init;
}
