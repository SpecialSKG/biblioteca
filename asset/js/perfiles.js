$('#agregar_Personal').click(function () {
	var  
	nombre_personal = $('#nombre_personal').val(),
	usuario_personal = $('#usuario_personal').val(),
	pass_personal = $('#pass_personal').val(),
	rol_personal = $('#rol_personal').val(),
	email_personal = $('#email_personal').val(),
    nacimiento_personal = $('#nacimiento_personal').val(),
    telefono_personal = $('#telefono_personal').val(),
    sexo_personal = $('#sexo_personal').val();

	if (nombre_personal.trim() === '' && usuario_personal.trim() === '' && pass_personal.trim() === '' 
		&& rol_personal === '' && email_personal.trim() === '' && telefono_personal.trim() === '' && sexo_personal.trim() === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (nombre_personal.trim() === ''){
		toastr.warning('Por favor ingrese un nombre!.','Alerta');
		return false;
	}else if (nombre_personal.length >= 30) {
		toastr.warning('Los Datos no deben de ser mayor a 30 Caracteres!.', 'Alerta!');
		return false;
	}else if (usuario_personal.trim() === ''){
		toastr.warning('Por favor ingrese un usuario!.','Alerta');
		return false;
	}else if (usuario_personal.length >= 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (pass_personal.trim() === ''){
		toastr.warning('Por favor ingrese una contraseña!.','Alerta');
		return false; 
	}else if (pass_personal.length >= 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (rol_personal === ''){
		toastr.warning('Por favor seleccione un Perfil!.','Alerta');
		return false;
	}else if (email_personal.trim() === ''){
        toastr.warning('Por favor ingrese su correo!.','Alerta');
        return false; 
    }else if($('#email_personal').val().indexOf('@', 0) == -1 || $('#email_personal').val().indexOf('.', 0) == -1) {
        toastr.warning('Por favor ingrese un correo valido.', 'Alerta!');
        return false;
    }else if (nacimiento_personal === ''){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento!.','Alerta');
        return false; 
    }else if (nacimiento_personal >= '2001-01-01'){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento valida!.','Alerta');
        return false; 
    }else if (telefono_personal.trim() === ''){
        toastr.warning('Por favor ingrese su Telefono!.','Alerta');
        return false; 
    }else if (telefono_personal.length <= 7) {
        toastr.warning('Su Telefono no debe de ser menor a 8 Caracteres!.', 'Alerta!');
        return false;
    }else if (sexo_personal.trim() === ''){
        toastr.warning('Por favor ingrese su Sexo!.','Alerta');
        return false; 
    }else if (sexo_personal.length < 5) {
        toastr.warning('Ingrese su sexo completo.', 'Alerta!');
        return false;
    }else {
		insertPersonal(nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal)
	}

});

function insertPersonal(nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Configuracion_C/insertarPersonal',
		type: 'post',
		dataType: 'json',
		data:{ nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal },
		dataType: 'json',
		beforesend: function(){},
		success: function(data){
			if (data.success === 1) {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-lg btn-success',
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
						document.location.href=baseurl+'Configuracion_C/leerPersonal';
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
				'Consulte con el Administrador',
				'error'
				)
			// alert('¡Ocurrio un error!');
			console.log(e);
		}

	});

}


$('#actualizar_Personal').click(function () {
	var  
	nombre_personal = $('#nombre_personalU').val(),
	usuario_personal = $('#usuario_personalU').val(),
	pass_personal = $('#pass_personalU').val(),
	rol_personal = $('#rol_personalU').val(),
	email_personal = $('#email_personalU').val(),
    nacimiento_personal = $('#nacimiento_personalU').val(),
    telefono_personal = $('#telefono_personalU').val(),
    sexo_personal = $('#sexo_personalU').val(),
    id_personal = $('#id_personalU').val();

	if (nombre_personal.trim() === '' && usuario_personal.trim() === '' && pass_personal.trim() === '' 
		&& rol_personal === '' && email_personal.trim() === '' && telefono_personal.trim() === '' && sexo_personal.trim() === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (nombre_personal.trim() === ''){
		toastr.warning('Por favor ingrese un nombre!.','Alerta');
		return false;
	}else if (nombre_personal.length >= 30) {
		toastr.warning('Los Datos no deben de ser mayor a 30 Caracteres!.', 'Alerta!');
		return false;
	}else if (usuario_personal.trim() === ''){
		toastr.warning('Por favor ingrese un usuario!.','Alerta');
		return false;
	}else if (usuario_personal.length >= 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (pass_personal.trim() === ''){
		toastr.warning('Por favor ingrese una contraseña!.','Alerta');
		return false; 
	}else if (pass_personal.length >= 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (rol_personal === ''){
		toastr.warning('Por favor seleccione un Perfil!.','Alerta');
		return false;
	}else if (email_personal.trim() === ''){
        toastr.warning('Por favor ingrese su correo!.','Alerta');
        return false; 
    }else if($('#email_personalU').val().indexOf('@', 0) == -1 || $('#email_personalU').val().indexOf('.', 0) == -1) {
        toastr.warning('Por favor ingrese un correo valido.', 'Alerta!');
        return false;
    }else if (nacimiento_personal === ''){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento!.','Alerta');
        return false; 
    }else if (nacimiento_personal >= '2001-01-01'){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento valida!.','Alerta');
        return false; 
    }else if (telefono_personal.trim() === ''){
        toastr.warning('Por favor ingrese su Telefono!.','Alerta');
        return false; 
    }else if (telefono_personal.length <= 7) {
        toastr.warning('Su Telefono no debe de ser menor a 8 Caracteres!.', 'Alerta!');
        return false;
    }else if (sexo_personal.trim() === ''){
        toastr.warning('Por favor ingrese su Sexo!.','Alerta');
        return false; 
    }else if (sexo_personal.length < 5) {
        toastr.warning('Ingrese su sexo completo.', 'Alerta!');
        return false;
    }else {
		updatePersonal(nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal,id_personal)
	}

});

function updatePersonal(nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal,id_personal) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Configuracion_C/actualizarPersonal',
		type: 'post',
		dataType: 'json',
		data:{ nombre_personal,usuario_personal,pass_personal,rol_personal,email_personal,nacimiento_personal,telefono_personal,sexo_personal,id_personal },
		dataType: 'json',
		beforesend: function(){},
		success: function(data){
			if (data.success === 1) {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-lg btn-success',
					},
					buttonsStyling: false,
				})

				swalWithBootstrapButtons.fire({
					title: 'Excelente',
					text: "Datos Actualizados!",
					type: 'success',
					confirmButtonText: 'Ok',
					reverseButtons: false

				}).then((result) => {
					if (result.value) {
						document.location.href=baseurl+'Configuracion_C/Index';
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
				'Consulte con el Administrador',
				'error'
				)
			// alert('¡Ocurrio un error!');
			console.log(e);
		}

	});

}

//////////////////////////////////////////////////////////////////////////
/////////PERFIL//////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////


$('#Actualizar_Perfil').click(function () {
	var 
	nombre_user = $('#nombre_user').val(),
	user = $('#user').val(),
	pass = $('#pass').val(),
	rol_ = $('#rol_').val(),
	id_user = $('#id_user').val();

	if (nombre_user.trim() === '' && user.trim() === '' && pass.trim() === '' && rol_ === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (nombre_user.trim() === ''){
		toastr.warning('Por favor ingrese un nombre!.','Alerta');
		return false;
	}else if (nombre_user.length === 50) {
		toastr.warning('Los Datos no deben de ser mayor a 50 Caracteres!.', 'Alerta!');
		return false;
	}else if (user.trim() === ''){
		toastr.warning('Por favor ingrese un usuario!.','Alerta');
		return false;
	}else if (user.length === 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (pass.trim() === ''){
		toastr.warning('Por favor ingrese una contraseña!.','Alerta');
		return false; 
	}else if (pass.length === 20) {
		toastr.warning('Los Datos no deben de ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else if (rol_ === ''){
		toastr.warning('Por favor seleccione un rol_!.','Alerta');
		return false;
	} else {
		updatePerfiles(nombre_user,user,pass,rol_,id_user)
	}

});

function updatePerfiles(nombre_user,user,pass,rol_,id_user) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Configuracion_C/actualizarPerfiles',
		type: 'post',
		dataType: 'json',
		data:{ nombre_user,user,pass,rol_,id_user },
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
						document.location.href=baseurl+'Configuracion_C/Perfiles';
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
				'Consulte con el Administrador',
				'error'
				)
			// alert('¡Ocurrio un error!');
			console.log(e);
		}

	});

}