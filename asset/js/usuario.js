                                                   /*Reserva del Usuario*/


$('#agregar_reserva').click(function () {
	var
	nadaStock = $('#nadaStock').val(),
	id_libro = $('#id_libro').val(),nadaStock
	dui = $('#dui').val(),
	cantidad = $('#cantidad').val(),
	fecha_salida = $('#fecha_salida').val(),
	fecha_entrega = $('#fecha_entrega').val();

	if (dui.trim() === '' && cantidad.trim() === '' && fecha_salida === '' && fecha_entrega === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if(dui.length != 10){
		toastr.warning('El campo dui requiere exactamente de 10 caracteres!.','Alerta');
		return false;
	}else if(cantidad < 1){
		toastr.warning('No puedes reservar 0 unidades!.','Alerta');
		return false;
	}else if(cantidad > nadaStock){
		toastr.warning('Las unidades disponibles son insuficientes!.','Alerta');
		return false;
	}
	else if(fecha_salida.trim() === ""){
		toastr.warning('El campo fecha de Salida debe estar completo!.','Alerta');
		return false;
	}else if(fecha_entrega.trim() === ""){
		toastr.warning('El campo fecha de entrega debe estar completo!.','Alerta');
		return false;
	} else {
		Insertr(id_libro,dui,cantidad,fecha_salida,fecha_entrega)
	}

});

function Insertr(id_libro,dui,cantidad,fecha_salida,fecha_entrega) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'reserva_c/insertar_reserva',
		type: 'post',
		dataType: 'json',
		data:{ id_libro,dui,cantidad,fecha_salida,fecha_entrega},
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
						document.location.href=baseurl+'Usuario_C/Index';
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
                                              /*Prestamo del Usuario */
                                              
$('#agregar_prestamo').click(function () {
	var     
	id_libro = $('#id_libro').val(),
	dui = $('#dui').val(),
	cantidades = $('#cantidades').val(),
	fecha_prestamo = $('#fecha_prestamo').val(),
	fecha_entregap = $('#fecha_entregap').val();

	if (dui.trim() === '' && cantidades.trim() === '' && fecha_prestamo === '' && fecha_entregap === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if(dui.length != 10){
		toastr.warning('El campo dui requiere exactamente de 10 caracteres!.','Alerta');
		return false;
	}else if(cantidades.trim() === ""){
		toastr.warning('El campo "Unidades a reservar" debe estar completo!.','Alerta');
		return false;
	}else if(fecha_prestamo.trim() === ""){
		toastr.warning('El campo fecha de Salida debe estar completo!.','Alerta');
		return false;
	}else if(fecha_entregap.trim() === ""){
		toastr.warning('El campo fecha de entrega debe estar completo!.','Alerta');
		return false;
	} else {
		insertPrestamo(id_libro,dui,cantidades,fecha_prestamo,fecha_entregap)
	}

});

function insertPrestamo(id_libro,dui,cantidades,fecha_prestamo,fecha_entregap) {
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
						document.location.href=baseurl+'Usuario_C/Index';
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