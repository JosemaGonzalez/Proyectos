let a = function() {

function piramide() {
    let str = "";
    for (var i = 1; i <= 9; i++) {
        for (var j = 1; j <= i; j++) {
            str =  str+i;
        }
            console.log(str)
            str="";
    }
}
piramide()
}()
