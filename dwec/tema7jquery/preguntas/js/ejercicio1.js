{
    $(document).ready(function() {

        let checkbox = $(".check:checked");
        let cad = "";
        let cad2 = "";
        let radio = $(".radio");

        for (let i = 0; i < checkbox.length; i++) {
            cad += checkbox[i].value;
            if ($(checkbox[i]).attr("checked") == true) {
                cad2 += checkbox[i].value;
            };
        }

        $("#spanCheck").html("checkbox marcado: " + cad);
        $("#spanAttr").html("checkbox marcado con attr: " + cad);

        for (let i = 0; i < radio.length; i++) {
            if ($(radio[i]).prop("checked") == true) {
                cad = radio[i].value;
            };
        }

        $("#spanRadio").html("radio marcado con prop: " + cad);
        $("#spanValue").html("radio marcado con val: " + $("input:radio:checked").val());
        $("#select").html("selected: " + $(".select option:selected").text());
    });
}
