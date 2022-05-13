(function(){
    "use strict";

    peds = peds ? peds : {};
	peds.historial = peds.historial ? peds.historial : {};

    peds.historial.elements = {
        $tablaRegistro: $("#tablaRegistros"),
        $selectLength: $("#selectLenght"),
        $selectCurso: $("#selectCurso"),
        $btnDescargarReporteRegistros: $("#btnDescargarReporteRegistros")
    };

    peds.historial.uris = {
        historial: peds.base.url + "obtenerHistorial",
        descargarReporte: peds.base.url + "descargarHistorial"
    };

    var element = peds.historial.elements;
    var uri = peds.historial.uris;

    var tabla = element.$tablaRegistro.DataTable({
        'language': {
            "decimal":        "",
            "emptyTable":     "Ningún dato disponible en esta tabla",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered":   "(filtrado total de _MAX_ registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontraron resultados",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        'lengthMenu': [10, 25, 50,100],
        'paging': true,
        'info':true,
        'filter':true,
        'stateSave':true,
        "dom":"<'row'<'col-sm-6'><'col-sm-6'>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        'processing': true,
        'serverSide':true,
        'ajax':{
            "url":uri.historial,
            "type":"POST"
        },
        columnDefs:[{
            targets: [-1]
        }],
        "scrollX": true,
        'columns':[
            {
                data: 'id_alumno',
                render: function(data, type, row){
                    return row.id_alumno;
                },
                orderable: false,
                className: "noVis"
            },
            {
                data: 'nombreCompleto',
                "order": true,
                render: function(data, type, row){
                    return row.nombreCompleto;
                }
            },
            {
                data: 'alumno_universidad',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_universidad;
                }
            },
            {
                data: 'alumno_telefono',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_telefono;
                }
            },
            {
                data: 'alumno_correo',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_correo;
                }
            },
            {
                data: 'fecha_inicio',
                "order": true,
                render: function(data, type, row){
                    return row.fecha_inicio;
                }
            },
            {
                data: 'curso_nombre',
                "order": true,
                render: function(data, type, row){
                    return row.curso_nombre;
                }
            },
            {
                data: 'alumno_precio',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_precio;
                }
            },
            {
                data: 'alumno_descuento',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_descuento;
                }
            },
            {
                data: 'alumno_comision',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_comision;
                }
            },
            {
                data: 'alumno_total',
                "order": true,
                render: function(data, type, row){
                    return row.alumno_total;
                }
            }
        ]
    });

    tabla.column(0).search(0).draw();
    tabla.columns.adjust().draw();

    element.$selectLength.on("change", function(){
        var lengh = $(this).val();
        tabla.page.len(lengh).draw();
    });

    element.$selectCurso.on("change", function(){
        var data = this.value;
        tabla.column(0).search(data).draw();
    });

    element.$btnDescargarReporteRegistros.on("click", function(){

        var href = element.$btnDescargarReporteRegistros.attr("href",uri.descargarReporte + "/"+ element.$selectCurso.val());
        window.location.href = href;
    });

}());