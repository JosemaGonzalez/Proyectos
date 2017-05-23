{
    $(document).ready(function () {
        let $img = $('img');
        let $cookie = $('#cookie');
        let $pagina = $('main');
        $cookie.hide();
        let altura =  $(window).height();
        $img.height(altura);
        if (!navigator.cookieEnabled) {
            $cookie.show();
            $pagina.hide();
        } else {
            $img.hide();
            $img.show({
                effect: "bounce",
                duration: 2000
            });
            window.setTimeout(function() {
             window.location.href = 'home.html';
             }, 4000);
        }
    });
}
