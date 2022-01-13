var tabla;

function init(){
    $("#menu_form").on("submit",function(e){
        guardaryeditar(e);	
    });

    
}

function generatePDF(){
    const element = document.getElementById("pdf");

    html2pdf()
    .from(element)
    .save();
}

$(document).ready(function(){

    tabla= $('#reporte_data').DataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
       "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: '',// 'Bfrtip'  Definimos los elementos del control de tabla
        /* "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
               // 'copyHtml5',
                'excelHtml5',
               // 'csvHtml5',
                'pdfHtml5'
                ], */
        "ajax":{
        url:"../../controller/elabora.php?op=listar",
        type : "post",					
            error: function(e){
                console.log(e.responseText);
            },
        },
       "bDestroy": true,
       "responsive": true,
        "bInfo":true,
       "iDisplayLength": 1000000,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
           "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
           "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscador:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {          
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    }).DataTable();


});



init();