  $(document).ready(function () {
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
  });
