  $(document).ready(function () {
    window.scrollTo(0, 70);
    $('.collapsible').collapsible();

    $.getJSON("json/datos.json", function (data) {
      $.each(data['datos'], function (id, datos2) {
        $("#datos").append('<div class="col s10">'+
          '<div class="col s6"><p>Nombre y Apellidos: '+datos2['nombre']+' '+datos2['apellidos']+'</p></div>'+
          '<div class="col s6"><p>Empresa: '+datos2['empresa']+'</p></div>'+
          '<div class="col s6"><p>Descripción: '+datos2['descripcion']+'</p></div>'+
          '<div class="col s6"><p>Redes: <a href="'+datos2['redes']+'">'+datos2['redes']+'</a></p></div>'+
          '<div class="col s6"><p>Patrocinador: '+datos2['patrocinio']+'</p></div>'+
          '<div class="col s6"><p>Fechas: '+datos2['rango']+'</p></div>'+
          '<div class="col s12"><p>Observaciones: '+datos2['observaciones']+'</p></div>'+
          '</div>'+
          '<div class="col s2"><img src="'+datos2['imagen']+'" class="responsive-img"></div>');
      });
      $.each(data['actividad'], function (id, datos2) {
        $("#actividad").append('<div class="col s8">'+
          '<div class="col s12"><p>Título: '+datos2['titulo']+'</p></div>'+
          '<div class="col s12"><p>Descripción Breve: '+datos2['descripcion_br']+'</p></div>'+
          '<div class="col s12"><p>Descripción Extensa: '+datos2['descripcion_ex']+'</p></div>'+
          '<div class="col s6"><p>Material Ponente: '+datos2['material_po']+'</p></div>'+
          '<div class="col s6"><p>Material Alumnos: '+datos2['material_al']+'</p></div>'+
          '<div class="col s6"><p>Asistentes: '+datos2['asistentes']+'</p></div>'+
          '</div>'+
          '<div class="col s4"><img src="'+datos2['url']+'" class="responsive-img"></div>');
      });
    });
    $('select').material_select();

    $('#rango1').datepicker({
      dateFormat: "dd/mm/yy",
      minDate: new Date(2017, 00, 30),
      maxDate: new Date(2017, 01, 3),
      dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" ],
      dayNamesMin: [ "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab" ],
      monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
      monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
      showAnim: "drop",
      onClose: function(select) {
        if (select) {
          $('#rango2').datepicker('option', 'disabled', false);
          $('#rango2').datepicker('option', 'minDate', select);
        }
      }
    }).datepicker("setDate", new Date(2017, 00, 30));

    $('#rango2').datepicker({
      disabled: true,
      dateFormat: "dd/mm/yy",
      minDate: new Date(2017, 00, 30),
      maxDate: new Date(2017, 01, 3),
      dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" ],
      dayNamesMin: [ "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab" ],
      monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
      monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
      showAnim: "drop",
      onClose: function(select) {
        if (select)
          $('#rango1').datepicker('option', 'maxDate', select);
      }
    });

    $('#modifica').on('click', function() {
      $("#caja1").dialog('open');
    });

    $("#form1").validate({
      debug: true,
      rules: {
        nombre1: {
          required: true,
          cadena: true
        },
        apellidos1: {
          required: true,
          cadena: true
        },
        empresa: {
          required: true
        },
        rango1: {
          required: true
        },
        rango2: {
          required: true
        }
      },
      messages: {
        nombre1: {
          cadena: "El nombre no es válido"
        },
        apellidos1: {
          cadena: "Los apellidos no son válidos"
        }
      }
    });

    $("#caja1").dialog({
      title: 'Modificar mis datos',
      autoOpen: false,
      modal: true,
      width: 700,
      buttons: {
        'Enviar': function() {
          if ($("#form1").valid()) {
            Materialize.toast('Has modificado tus datos!'+
              '<br>Nombre: '+$("#nombre1").val()+
              '<br>Apellidos: '+$("#apellidos1").val()+
              '<br>Empresa: '+$("#empresa").val()+
              '<br>Patrocinio: '+$("#patrocinio option:selected").html()+
              '<br>Fecha preferible desde: '+$("#rango1").val()+
              '<br>hasta: '+$("#rango2").val()+
              '<br>Observaciones: '+$("#Observaciones").val()
              , 5000)
            $(this).dialog('close');
          }else{
            Materialize.toast('Alguno de tus datos son incorrectos!', 1500)
          }
        },
        'Cancelar': function() {
          $(this).dialog('close');
        }
      }
    });

    $('#nueva').on('click', function() {
      $("#caja2").dialog('open');
    });

    $("#caja2").dialog({
      title: 'Nueva actividad',
      autoOpen: false,
      modal: true,
      width: 700,
      buttons: {
        'Añadir': function() {
          if ($("#form2").valid()) {
            let select1 = "";
            $('#ma_ponente :selected').each(function(i, selected){
              select1 += $(selected).text()+" ";
            });
            let select2 = "";
            $('#ma_alumno :selected').each(function(i, selected){
              select2 += $(selected).text()+" ";
            });
            Materialize.toast('Has añadido una actividad!'+
              '<br>Nombre: '+$("#nombre2").val()+
              '<br>Descripción breve: '+$("#des_breve").val()+
              '<br>Descripción extensa: '+$("#des_extensa").val()+
              '<br>URL de la imagen: '+$("#imagen").val()+
              '<br>Material ponente: '+select1+
              '<br>Material alumnos: '+select2+
              '<br>Asistentes: '+$("#asistentes").val()
              , 5000)
            $(this).dialog('close');
          }else{
            Materialize.toast('Alguno de tus datos son incorrectos!', 1500)
          }
        },
        'Cancelar': function() {
          $(this).dialog('close');
        }
      }
    });

    $("#form2").validate({
      debug: true,
      rules: {
        nombre2: {
          required: true,
          cadena: true
        },
        des_breve: {
          required: true,
          cadena: true
        },
        imagen: {
          required: true,
          url: true
        },
        asistentes: {
          required: true,
          number: true,
          min: 1
        }
      },
      messages: {
        nombre2: {
          cadena: "El formato del nombre no es válido."
        },
        des_breve: {
          cadena: "El formato de la descripcion no es válido."
        }
      }
    });
    $.validator.addMethod('cadena', function(value) {
      return /^([a-záéíóúñA-ZÁÉÍÓÚÑ]{3,}\s*)+$/.test(value.trim());
    });

  });
