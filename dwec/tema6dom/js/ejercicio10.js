{
    let h3;
    let cont = 1;
    let init = function() {
        h3 = document.getElementById("caja");
        arbolDom(document);
    }

    let arbolDom = function(nodoRaiz) {
        let hijos = nodoRaiz.childNodes;
        for (let i = 0; i < hijos.length; i++) {
            if (hijos[i].childNodes.length > 0) {
                arbolDom(hijos[i]);
            }
            if (hijos[i].attributes != undefined) {
                cont += hijos[i].attributes.length;
            }
            cont ++;
        }
        h3.innerHTML = "Hay " + cont + " nodos";
    }
    window.onload = init;
}
