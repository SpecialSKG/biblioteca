$('#agregar_reserva').click(function () {
	var
	nadaStock = $('#nadaStock').val(),
	id_libro = $('#id_libro').val(),
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
	}else if(nadaStock < cantidad){
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
						document.location.href=baseurl+'reserva_c/index';
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
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$('#updateR').click(function () {
	var
	nadaStock = $('#nadaStockU').val(),
	dui = $('#duiU').val(),
	cantidad = $('#cantidadU').val(),
	fecha_salida = $('#fecha_salidaU').val(),
	fecha_entrega = $('#fecha_entregaU').val(),
	id_reserva = $('#id_reservaUR').val(),
	id_libro = $('#id_libroUR').val(),
	cantodad = $('#cantodad').val();

	if (dui.trim() === '' && cantidad.trim() === '' && fecha_salida === '' && fecha_entrega === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if(dui.length != 10){
		toastr.warning('El campo dui requiere exactamente de 10 caracteres!.','Alerta');
		return false;
	}else if(cantidad < 1){
		toastr.warning('No puedes reservar 0 unidades!.','Alerta');
		return false;
	}else if(nadaStock < cantidad){
		toastr.warning('No puedes reservar mas Unidades !!.','Alerta');
		return false;
	}else if(fecha_salida.trim() === ""){
		toastr.warning('El campo fecha de Salida debe estar completo!.','Alerta');
		return false;
	}else if(fecha_entrega.trim() === ""){
		toastr.warning('El campo fecha de entrega debe estar completo!.','Alerta');
		return false;
	} else {
		updateReserva(id_reserva,id_libro,dui,cantidad,fecha_salida,fecha_entrega)
	}

});

function updateReserva(id_reserva,id_libro,dui,cantidad,fecha_salida,fecha_entrega) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'reserva_c/updateReserva',
		type: 'post',
		dataType: 'json',
		data:{id_reserva, id_libro,dui,cantidad,fecha_salida,fecha_entrega},
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
						document.location.href=baseurl+'reserva_c/index';
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