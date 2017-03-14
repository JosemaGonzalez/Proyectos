let variable = function() {
let valores = [true,5,false,"hola","adios",2];
alert('Elementos de texto\n' + (valores[3]>valores[4]));
alert("Elementos booleanos\n" + (valores[0]!=valores[2])+"\n"+"Elementos booleanos 2\n"+(valores[0]==valores[2]))
alert("Elementos numéricos\n" + (valores[1]+valores[5])+"\n"+"Elementos numéricos 2\n" + (valores[1]-valores[5])+"\n"+"Elementos numéricos 3\n" + (valores[1]*valores[5])+"\n"+"Elementos numéricos 4\n" + (valores[1]/valores[5])+"\n"+"Elementos numéricos 5\n" + (valores[1]%valores[5])+"\n")
}
()
