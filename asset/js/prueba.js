$('#vamonos').click(function () {
	var     
	nadaStocks = $('#nadaStocks').val(),
	id_libro = $('#id_libro').val(),
	dui = $('#dui').val(),
	cantidades = $('#cantidad').val(),
	fecha_prestamo = $('#fecha_salida').val(),
	fecha_entregap = $('#fecha_entrega').val();

	if (dui.trim() === '' && cantidades.trim() === '' && fecha_prestamo === '' && fecha_entregap === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if(dui.length != 10){
		toastr.warning('El campo dui requiere exactamente de 10 caracteres!.','Alerta');
		return false;
	}else if(cantidades < 1){
		toastr.warning('No puedes prestar 0 unidades!.','Alerta');
		return false;
	}
	else if(cantidades > nadaStocks){
		toastr.warning('Las unidades disponibles son insuficientes!.','Alerta');
		return false;
	}else if(fecha_prestamo.trim() === ""){
		toastr.warning('El campo fecha de Salida debe estar completo!.','Alerta');
		return false;
	}else if(fecha_entregap.trim() === ""){
		toastr.warning('El campo fecha de entrega debe estar completo!.','Alerta');
		return false;
	} else {
		insertPrestamos(id_libro,dui,cantidades,fecha_prestamo,fecha_entregap)
	}

});

function insertPrestamos(id_libro,dui,cantidades,fecha_prestamo,fecha_entregap) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'prestamo_c/insertar_prestamo',
		type: 'post',
		dataType: 'json',
		data:{ id_libro,dui,cantidades,fecha_prestamo,fecha_entregap},
		dataType: 'json',
		beforesend: function(){},
		success: function(data){
			if (data.success === 1) {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
					},
					buttonsStyling: false,
				})

				swalWithBootstrapButtons.fire({
					title: 'Excelente',
					text: "Datos Guardados!",
					type: 'success',
					confirmButtonText: 'Ok',
					reverseButtons: false

				}).then((result) => {
					if (result.value) {
						document.location.href=baseurl+'prestamo_c/index';
					} 
				})
			}else{
				// alert('¡No Se Pudo Ingresar El Registro');
				Swal.fire(
					'Error',
					'No Se Pudo Ingresar El Registro',
					'error'
					)
			}
		},
		error: function(e){
			Swal.fire(
				'Error',
				'POSIBLEMENTE EL DUI DEL CLIENTE NO ESTE REGISTRADO',
				'error'
				)
			// alert('¡Ocurrio un error!');
			console.log(e);
		}

	});

}