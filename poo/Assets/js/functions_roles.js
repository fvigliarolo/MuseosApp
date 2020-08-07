
/*Estructura de DataTables*/

var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
 
	tableRoles = $('#tableRoles').DataTable( { /*ID de la tabla*/
		"aProcessing":true,
		"aServerside":true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json" /*Idioma de visualizacion*/
		},
		"ajax":{
            "url": " "+base_url+"/Admin_roles/getRoles",
             /* Ruta a la funcion getRoles que esta en el controlador Admin_roles.php*/
		    "dataSrc":""
		},
		"columns":[/* Campos de la base de datos*/
			{"data":"Documento"},
			{"data":"Nombre"},
			{"data":"Apellido"},
			{"data":"Fecha_Nacimiento"},
			{"data":"Numero_Celular"},
			{"data":"Acciones"}
		],
		"responsieve":"true",
		"bDestroy": true,
		"iDisplayLength": 10, /*Mostrará los primero 10 registros*/
		"order":[[0,"desc"]] /*Ordenar de forma Desendente*/

	});
	//Capturamos los datos del formulario
	var formRol = document.querySelector("#formRol");
	formRol.onsubmit = function(e){
		e.preventDefault();   // hacemos que no se cierre la ventana del modal luego de hacer submit

		var intDocumento = document.querySelector('#modalFormRol_AdministradorDocumento').value;
		var strNombre = document.querySelector('#modalFormRol_AdministradorNombre').value;
		var strApellido = document.querySelector('#modalFormRol_AdministradorApellido').value;
		var strFecha = document.querySelector('#modalFormRol_AdministradorFecha').value;
		var strEmail = document.querySelector('#modalFormRol_AdministradorEmail').value;
		var intCelular = document.querySelector('#modalFormRol_AdministradorCelular').value;
		//var strNombre = documento.querySelector('#modalFormRol_AdministradorFoto').value;

		if(intDocumento=='' || strNombre=='' || strApellido=='' || strEmail=='' || intCelular=='')
		{
			swal("Atencion", "Todos los campos son obligatorios","error");
			return false;
		}
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxUrl = base_url+'/Admin_roles/setRol';
		var formData = new FormData(formRol);
		request.open("POST",ajaxUrl,true);
		request.send(formData); 

		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200)
			{
				if(request.responseText == 0){
					
					$('#modalFormRol').modal("hide");
					formRol.reset();
					swal("Roles de usuario", "Dato guardado correctamente", "success");
					tableRoles.ajax.reload(function () {});
				} else {
					swal("Error", "Verifique si ya existe el usuario", "error");
				} 
			}
			
		}




	}
});

$('#tableRoles').DataTable();

//esto es jquery

function openModal(){
    $('#modalFormRol').modal('show'); //como modalFormRol es un id, se lo referencia con '#'. Si fuera clase seria con un '.'
}