  $(document).ready(function () {
    let $img = $('.navbar-fixed img');
    let $nav = $(".navbar-fixed");
    let header = $("header").height();
    let carteles = $('#cartel');
    let calendar = $('#calendar');
    let galPonentes = $("#lightgallery");
    let modales = $("#modales");
    $('.section,.parallax-container').css("padding-top",header+10);
    $img.height($nav.height());
    $('.parallax').parallax();
    $('.carousel').css("z-index","99");
    $('.navbar-fixed').css("z-index","90");
    $('.parallax-container').height($(window).height());
    $('.section').height($(window).height());
    $('.section,.carousel').css("padding-top",$nav.height());
    $('.parallax-container').css("min-height",$nav.height());
    $('.modal').modal();
    $('.ancla').click(function(e) {
      e.preventDefault();
      let strAncla = $(this).attr('href');
      $('body,html').stop(true, true).animate({
       scrollTop: $(strAncla).offset().top}, 1000);
    });


    $.getJSON("json/carteles.json", function (data) {
      $.each(data['carteles'], function (id, data2) {
        carteles.append('<div class="col s3"><a class="gallery" data-fancybox="gallery" href="' + data2["ruta"] + '"><img src="'+data2['ruta'] +'" width="100"></a></div>');
      });
    });
    $.getJSON("json/ponentes.json", function (data) {
      $.each(data['ponentes'], function (id, data2) {
        let num=0;
        galPonentes.append('<li class="col s3 m2 l1" data-src="'+data2['imagen']+'" data-sub-html="<h4>'+data2['nombre']+'</h4><p>'+data2['descripcion']+'</p><p>'+data2['redes']+'</p>"><a href="#lg=1&slide='+num+'"><img class="responsive-img" src="'+data2['imagen']+'"></a></li>');
        num++;
      });
    });
    $.getJSON("json/actividades.json", function (data) {
      $.each(data['actividades'], function (id, data2) {
        modales.append('<li><a class="collapsible-header blue lighten-3 blue-text text-darken-2" href="#'+data2['url']+'">'+data2['titulo']+'</a><div id="'+data2['url']+'" class="modal"><div class="modal-content"><h4>'+data2['titulo']+'</h4><h5>'+data2['ponente']+'</h5><p><b>Hora:</b> '+data2['hora']+' <b>Lugar:</b> '+data2['lugar']+' <b>Asistentes:</b> '+data2['asistentes']+'</p><p>'+data2['descripcion']+'</p></div><div class="modal-footer"><a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat">Cerrar</a></div></div></li>');
      });
    });

    galPonentes.on("click",function(){
      $(this).lightGallery({
        autoplay:true
      });

    });

    let alturacal = $('.section').height()-80;
    $('.gallery').fancybox();
    calendar.fullCalendar({
      header: {
        right: 'agendaWeek,listDay,listWeek'
      },
      views: {
        listDay: { buttonText: 'Eventos Hoy' },
        listWeek: { buttonText: 'Eventos Semana' }
      },
      events: {
        url: 'php/get-events.php'
      },
      height:alturacal,
      minTime: '8:00',
      maxTime: '15:00',
      defaultView: 'agendaWeek',
      weekends: false,
      defaultDate:'2017-01-30',
      editable:false
    });

  });
