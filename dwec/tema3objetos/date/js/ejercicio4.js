let date= new Date("2002/01/10");
let numero = 433;
let esFecha = function(argument) {
	if(argument instanceof Date)
		return true;
	return false;
}
console.log(esFecha(date));
console.log(esFecha(numero));
