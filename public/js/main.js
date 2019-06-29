var url_raiz = 'http://proyecto01.test:8080/';


window.addEventListener("load", function(){

    $(document).on("submit",".formentrada",function(e){
      e.preventDefault();
      var quien = $(this).attr("id");
      var formu = $(this);
      var varurl = "";
  
      if(quien=="f_crear_socio"){ var varurl = $(this).attr("action"); var div_resul = "capa_formularios"; }
  
      $("#"+div_resul+"").html( $("#cargador_empresa").html());
  
      $.ajax({
        // la URL para la petición
        url : varurl,
        data : formu.serialize(),
        type : 'POST',
        dataType : 'html',
        success : function(resul) { $("#"+div_resul+"").html(resul); },
        error : function(xhr, status) {
          $("#"+div_resul+"").html('Ha ocurrido un error, revise su conexion e intentelo nuevamente.');
        }
      });
    });


    $(document).ready(function() {

        //Author: Angel Rojas
        //Fecha Creacion: 28/08/2018
        //Fecha Actualización: 28/08/2018

        $('.agregarCarrito').click(function (e) {
            var curso = $(this).closest('div[class="card mb-4 shadow-sm"]').text();

            $('#curso').val(curso.trim().replace(/\s/g, "_"));
            $('#myModalNorm').modal();
        });

    });
  
  
  
  });
  

  
  function cargar_formulario(arg){
    //var urlraiz = $("#url_raiz_proyecto").val();
    var miurl = url_raiz + arg;
  
    mostrarFormulario();
  
    $.ajax({
    url: miurl
    }).done(function(resul){
      $("#capa_formularios").html(resul);
    }).fail(function(){
      $("#capa_formularios").html('<span>...Ha ocurrido un error, revise su conexión y vuelva a intentarlo...</span>');
    }) ;
  
  }
  
  function mostrarFormulario(){
    $("#capa_modal").modal();
    $("#capa_formularios").show();
    $("#capa_formularios").html($("#cargador_empresa").html());
  }
  