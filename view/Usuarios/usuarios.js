var tabla;

function init(){
    $("#menu_form").on("submit",function(e){
        guardaryeditar(e);	
    });

    
}

$(document).ready(function(){

    tabla= $('#usuario_data').DataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        "ajax":{
        url:"../../controller/usuario.php?op=listar",
        type : "post",					
            error: function(e){
                console.log(e.responseText);
            },
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
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
            "sSearch":         "Buscar:",
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
    });

  

});

$(document).on("click","#btnnuevo", function(){
    $('#titulo_crud').html('Usuario-Nuevo Registro');

    $('#menu_form')[0].reset();
    $('#modalcrud').modal('show');
});


function editar(usu_id){
    $.post("../../controller/usuario.php?op=mostrar",{usu_id : usu_id}, function(data, status){
        data = JSON.parse(data);
        $('#titulo_crud').html('Usuario-Editar');
        $('#usu_nom').val(data.usu_nom);
        $('#usu_ape').val(data.usu_ape);
        $('#usu_ape_mat').val(data.usu_ape_mat);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_pass').val(data.usu_pass);
        $('#fech_crea').val(data.fech_crea);
        $('#rol_id').val(data.rol_id);
        $('#usu_id').val(data.usu_id);


    }); 
    $("#modalcrud").modal('show');	
}

function eliminar(usu_id){
    swal.fire({
        title: "Eliminar!",
        text: "Desea Eliminar el Registro?",
        icon: "error",
        confirmButtonText: "<span><i class='la la-check'></i><span>Si</span></span>",
        confirmButtonClass: "btn btn-danger kt-btn kt-btn--pill kt-btn--air kt-btn--icon",
        showCancelButton: true,
        cancelButtonText: "<span><i class='la la-close'></i><span>No</span></span>",
        cancelButtonClass: "btn btn-secondary kt-btn kt-btn--pill kt-btn--icon"
    }).then((result) => {
        if (result.value) {
            $.post("../../controller/usuario.php?op=activarydesactivar",{usu_id : usu_id}, function(data, status){
                $('#usuario_data').DataTable().ajax.reload();	
                Swal.fire('Eliminado!','Registro Eliminado Correctamente.','success');
            }); 
        }
    }); 
}

function guardaryeditar(e){
    e.preventDefault();
	var formData = new FormData($("#menu_form")[0]);
    $.ajax({
        url: "../../controller/usuario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){    
            console.log(datos);
            $('#menu_form')[0].reset();
            $("#modalcrud").modal('hide');
            $('#usuario_data').DataTable().ajax.reload();	
            Swal.fire('Guardado!','Registro Guardado Correctamente.','success')
        }
    }); 
}

init();