let a = function() {

    function piramidedos() {
        let str = "";
        for (var i = 1; i <= 9; i++) {
            str = str.concat(i.toString());
            console.log(str)
        }
    }
    piramidedos()
}()
