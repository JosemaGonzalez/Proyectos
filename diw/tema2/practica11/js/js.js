{

    let init = function() {
        document.getElementById("abrir").addEventListener("click", abreMenu);
        document.getElementById("cerrar").addEventListener("click", cerrarMenu);

    }
    let abreMenu = function() {
        let menu = document.getElementById("menu");
        let cerrar = document.getElementById("cerrar");
        let mover = document.getElementById("body");
        menu.style.display = 'block';
        menu.style.width = '220px';
        cerrar.style.display = 'block';
        mover.style.transform = 'translateX(-100px)';
    }
    let cerrarMenu = function() {
        let menu = document.getElementById("menu");
        let mover = document.getElementById("body");
        let cerrar = document.getElementById("cerrar");
        if (menu.style.display == 'block') {
            menu.style.display = 'none';
            cerrar.style.display = 'none';
            mover.style.transform = 'translateX(0px)';

        }
    }
    window.onload = init;
}
