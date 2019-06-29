var url = 'http://proyecto01.test:8080/';
window.addEventListener("load", function(){

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