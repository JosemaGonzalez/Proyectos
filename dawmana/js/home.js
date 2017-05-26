  $(document).ready(function () {
    let carteles = $('#cartel');
    let calendar = $('#calendar');
    let galPonentes = $("#lightgallery");
    let modales = $("#modales");
    $('.carousel').css("z-index","99");
    $('#patrocinadores').css("max-height",$(window).height()/1.8);
    $('#patrocinadores .container').css("max-height",$(window).height()/1.8);

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
        modales.append('<li style="display:none"><a href="#'+data2['url']+'" rel="modal:open">'+data2['titulo']+'</a><div style="display:none;" id="'+data2['url']+'"><div><h4>'+data2['titulo']+'</h4><h5>'+data2['ponente']+'</h5><p><b>Hora:</b> '+data2['hora']+' <b>Lugar:</b> '+data2['lugar']+' <b>Asistentes:</b> '+data2['asistentes']+'</p><p>'+data2['descripcion']+'</p></div></div></li>');
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
        right: 'prev,next,agendaWeek,listDay,listWeek'
      },
      views: {
        listDay: { buttonText: 'Hoy' },
        agendaWeek : {buttonText: 'Calendario'},
        listWeek: { buttonText: 'Semana' }
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
//poner un id al json, se le pone un contador y se le asigna el title a cada uno
$("body").on("click",function(){
  $(".fc-time-grid-event").attr("rel","modal:open");
  /*let num2=1;
  $.getJSON("json/actividades2.json", function (data) {
    $.each(data['actividades'], function (id, data2) {
      if(($("a[href='#m"+(num2)+"']")[0].hash)==data2['url']){
        console.log(id+1);
        console.log(num2);
        console.log($("a[href='#m"+(num2)+"']")[0].hash);
        $(".fc-time-grid-event").attr("id","m"+num2);
        $(".fc-time-grid-event").attr("title",data2['descripcion']);
        num2++;
      }
    });
  });*/
});

$('#acceso').on('click', function(event) {
  event.preventDefault();
  $("#caja1").dialog('open');
});
$("#form1").validate({
  debug: true,
  rules: {
    usuario: {
      required: true,
      minlength: 6,
      usuario: true
    },
    password: {
      required: true,
      minlength: 6,
      password: true
    }
  },
  messages: {
    usuario: {
      usuario: "El usuario tiene mínimo de 6 caracteres sin espacios"
    },
    password: {
      password: "La contraseña debe tener al menos un mínimo de 6 caracteres, que mezcle mayúsculas, minúsculas, números y caracteres de puntuación"
    }
  }
});

$.validator.addMethod('usuario', function(value) {
  return /^[\w]+$/.test(value.trim());
});

$.validator.addMethod('password', function(value) {
  return /^[A-Za-z0-9\d\W]*$/.test(value.trim())
  && /[A-Z]/.test(value.trim())
  && /[a-z]/.test(value.trim())
  && /[\d]/.test(value.trim())
  && /[\W]/.test(value.trim());
});
$("#caja1").dialog({
  title: 'Acceso',
  autoOpen: false,
  modal: true,
  width: 300,
  buttons: {
    'Iniciar sesión': function() {
      if ($("#form1").valid()) {
        $.getJSON("json/usuarios.json", function (data) {
          $.each(data['usuarios'], function (id, data2) {
            if($("#usuario").val()==data2["usuario"]){
              if($("#password").val()==data2["password"]){
               Materialize.toast('Login correcto!', 1500)
               setTimeout(function () {
                window.location.href = 'home2.html';
              }, 1510);
             }else{
              Materialize.toast('Login incorrecto!', 1000)
              $("#usuario").val("");
              $("#password").val("");
            }
          }
        });
        });
      }
    },
    'Cancelar': function() {
      $(this).dialog('close');
    }
  }
});

$('#registro').on('click', function(event) {
  event.preventDefault();
  $("#caja2").dialog('open');
});
$("#form2").validate({
  debug: true,
  rules: {
    nombre: {
      required: true,
      texto: true
    },
    apellidos: {
      required: true,
      texto: true
    },
    dni: {
      required: true,
      dni: true
    },
    email: {
      required: true,
      email: true
    },
    procedencia: {
      required: true,
      texto: true
    }
  },
  messages: {
    nombre: {
      texto: "El nombre no es válido"
    },
    apellidos: {
      texto: "Los apellidos no son válidos"
    },
    dni: {
      dni: "El DNI no es válido"
    },
    procedencia: {
      texto: "La procedencia no es válida"
    }
  }
});

$.validator.addMethod('dni', function(value) {
  return /^\d{8}[-]?[a-zA-Z]$/.test(value.trim());
});

$.validator.addMethod('texto', function(value) {
  return /^([a-záéíóúñA-ZÁÉÍÓÚÑ]{3,}\s*)+$/.test(value.trim());
});
$("#caja2").dialog({
  title: 'Registro de asistentes',
  autoOpen: false,
  modal: true,
  width: 600,
  buttons: {
    'Enviar': function() {
      if ($("#form2").valid()) {
        $(this).dialog('close');
        Materialize.toast('Registro correcto!'+
          '<br>Nombre: '+$("#nombre").val()+
          '<br>Apellidos: '+$("#apellidos").val()+
          '<br>Dni: '+$("#dni").val()+
          '<br>Email: '+$("#email").val()+
          '<br>Procedencia: '+$("#procedencia").val()
          , 5000)
      }else{
        Materialize.toast('Registro incorrecto!', 1000)
      }
    },
    'Cancelar': function() {
      $(this).dialog('close');
    }
  }
});
$.getJSON("json/patrocinadores.json", function (data) {
  $.each(data['patrocinadores'], function (id, data2) {
   $("#slides").append('<img src="'+data2['ruta']+'">');
 });
});
$("body").on("click",function(){

  $("#slides").slidesjs({
    width: 200,
    height: 100,
    navigation: {
      active: false,
      effect:"slide"
    },
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 2000,
        // [number] Time spent on each slide in milliseconds.
        auto: true,
        // [boolean] Start playing the slideshow on load.
        swap: false,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  $(".slidesjs-pagination-item a,.slidesjs-navigation").attr("class","oculto");
});
$.getJSON("json/clasificacion.json", function (data) {
  $.each(data['clasificacion'], function (id, data2) {
    if(data2['tipo']=="alumno"){
     $("#clasificacion1 tbody").append('<tr><td>'+data2['posicion']+'</td><td><a href="'+data2['urlcuenta']+'">'+data2['cuenta']+'</a></td><td><a href="'+data2['urltweet']+'">'+data2['tweet']+'</a></td></tr>');
   }
   if(data2['tipo']=="profe"){
     $("#clasificacion2 tbody").append('<tr><td>'+data2['posicion']+'</td><td><a href="'+data2['urlcuenta']+'">'+data2['cuenta']+'</a></td><td><a href="'+data2['urltweet']+'">'+data2['tweet']+'</a></td></tr>');
   }
   if(data2['tipo']=="otros"){
     $("#clasificacion3 tbody").append('<tr><td>'+data2['posicion']+'</td><td><a href="'+data2['urlcuenta']+'">'+data2['cuenta']+'</a></td><td><a href="'+data2['urltweet']+'">'+data2['tweet']+'</a></td></tr>');
   }
 });
});
});
