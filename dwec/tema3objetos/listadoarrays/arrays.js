//1
let a = [100, 200, 300];
a.forEach(function(x) { alert(x); });
//2
0 in a //devuelve true
4 in a //deuvelve false
    //3
Array.isArray(a);
//4
function crearArray(argument) {
    let array = [];
    for (var i = 0; i <= argument; i++) {
        array.push(i);
    }
    console.log(array);
}
//5
let array = [];

function devolverArray() {
    for (var i = 0; i <= arguments.length - 1; i++) {
        array.push(arguments[i]);
    }
    console.log(array);
}
//6
function devolverArray2() {
    for (var i = 0; i <= arguments.length - 1; i++) {
        if (Array.isArray(arguments[i])) {
            arr = arguments[i];
            for (y in arr) {
                array.push(arr[y]);
            }
        } else
            array.push(arguments[i]);
    }
    console.log(array);
}
//7
function borrarUn(argument) {
    if (Array.isArray(argument)) {
        for (i in argument) {
            if (argument[i] == undefined) {
                argument.splice(i, 1);
            }
        }
    }

}
//8.1
let matriz = [10, 20, 30, 40, 50];
matriz.forEach(function(x) { console.log(x); });
//8.2
function mayorCero(elem, i) {
    return elem > 0;
}
[-10, 5, 4, -50].every(mayorCero); // false
[1, 2, 3, 4, 5].every(mayorCero); // true
//8.3
function mayorCero2(elem, i) {
    return elem > 0;
}
[-10, -20].some(mayorCero2); //false
[-10, 5, 4, -50].some(mayorCero2); //true
//8.4
function mayorCero3(elem, i) {
    return elem > 0;
}
[-10, 5, 4, 7, 8, -50].filter(mayorCero3);
//9.1

function anadirArray() {
    let array = new Array(10);
    t0 = performance.now();
    array.push(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    t1 = performance.now();
    console.log("Tiempo: " + (t1 - t0) + " milisegundos")
}
anadirArray();
function anadirArray2() {
    let array = new Array(10);
    t0 = performance.now();
    array.unshift(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    t1 = performance.now();
    console.log("Tiempo: " + (t1 - t0) + " milisegundos")
}
anadirArray2();
//9.2

function borrarArray() {
    let array = new Array(10);
    t0 = performance.now();
    for (var i = 0; i <= 10; i++) {
        array.pop(i);
    }
    t1 = performance.now();
    console.log("Tiempo: " + (t1 - t0) + " milisegundos")
}
borrarArray();
function borrarArray2() {
    let array = new Array(10);
    t0 = performance.now();
    for (var i = 0; i <= 10; i++) {
        array.shift(i);
    }
    t1 = performance.now();
    console.log("Tiempo: " + (t1 - t0) + " milisegundos")
    console.log(array);
}
borrarArray2();
