{
    $(document).ready(function () {
        let botonA = $("#botonA");
        let botonV = $("#botonV");
        let botonJ = $("#botonJ");
        let res = $("#resultado");

        let pulsar = function (fichero,objeto) {
            $.getJSON(fichero, function (data) {
                res.text("Tipo: "+ objeto.toUpperCase());
                res.append("<ul>");
                $.each(data[objeto], function (id, data2) {
                    res.append("<li>" + data2["tipo"] + "</li>");
                    if (objeto == "aceites") {
                        res.append("<li>" + data2["descripcion"] + "</li>");
                    }

                });
                res.append("</ul>");
            });
        }

        botonA.click(function () {
            pulsar("json/aceite.json","aceites");
        });
        botonV.click(function () {
            pulsar("json/jamones.json","jamones");

        });
        botonJ.click(function () {
            pulsar("json/vinos.json","vinos");

        });
    });
}
