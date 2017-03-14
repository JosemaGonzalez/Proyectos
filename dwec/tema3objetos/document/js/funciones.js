function Agrega(){

    //obtenemos los valores de nuestra caja de texto
    var codigo=document.getElementById("txtCodigo").value;
    var nombre=document.getElementById("txtNombre").value;
    var precio=document.getElementById("txtPrecio").value;

    //creamos un objeto tr que anexaremos a nuestra tabla llamada tableProductos
    var TR= document.createElement("tr");

    //creamos 4 elementos td en donde iran los datos y uno cuarto donde ira un boton para eliminar
    var TD1=document.createElement("td")
    var TD2=document.createElement("td")
    var TD3=document.createElement("td");
    var TD4= document.createElement("td")

    //asignamos los valores a nuestros td por medio del atributo innerHTML, el cual tiene el contenido HTML de un Nodo
    TD1.innerHTML=codigo;
    TD2.innerHTML=nombre;
    TD3.innerHTML=precio;

    //A continuación asignamos contenido html a nuestro cuarto td
    //esta es una forma de crear elementos tambien, dando el codigo html a un Nodo
    TD4.innerHTML="<input type='button' value='Eliminar' onclick='Elimina(this)'>"

    //Ahora proseguimos a agregar los hijos TD al Padre TR
    //Esta es otra manera de crear elementos HTML, por medio de el metodo appendChild
    TR.appendChild(TD1);
    TR.appendChild(TD2);
    TR.appendChild(TD3);
    TR.appendChild(TD4);

    //Por ultimo asignamos nuestro TR a la tabla con id tablaProductos
    document.getElementById("tablaProductos").appendChild(TR)

    //limpiamos nuestros inputs para agregar ma datos, y ponemos el foco nuevamente en el input de codigo
    document.getElementById("txtCodigo").value=""
    document.getElementById("txtNombre").value="";
    document.getElementById("txtPrecio").value="";
    document.getElementById("txtCodigo").focus();
}
function Elimina(NodoBoton){

    //recibimos el boton como parametro, obtendremos el tr que lo contiene de la siguiente manera
    //Como nuestro boton es hijo de un td, y este td de el tr, debemos invocar dos veces parentNode
    //Esto para llegar a tener el TR
    var TR= NodoBoton.parentNode.parentNode;

    //ahora que ya tenemos el padre TR, podemos eliminarlo de la siguiente manera
    //junto a todos sus hijos

    document.getElementById("tablaProductos").removeChild(TR);
}
