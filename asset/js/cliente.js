$('#agregar_cliente').click(function(){

    var 
    dui = $('#duiCliente').val(),
    nombre = $('#nombreCliente').val(),
    nombre_usuario = $('#usuarioCliente').val(),
    contrasena_usuario = $('#passCliente').val(),
    email = $('#emailCliente').val(),
    fecha_nacimiento = $('#nacimientoCliente').val(),
    telefono = $('#telefonoCliente').val(),
    sexo = $('#sexoCliente').val(),
    direccion = $('#direccionCliente').val();

    if (dui.trim() === '' && nombre.trim() === '' && nombre_usuario.trim() === '' && contrasena_usuario.trim() === ''
        && email.trim() === '' && telefono.trim() === '' 
        && sexo.trim() === '' && direccion.trim() === '') 
    {
        toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
        return false;
    } else if (dui.trim() === ''){
        toastr.warning('Por favor ingrese su DUI!.','Alerta');
        return false;
    }else if (dui.length < 9) {
        toastr.warning('Su DUI no debe ser menor a 10 Caracteres!.', 'Alerta!');
        return false;
    }else if (dui.length > 10) {
        toastr.warning('Su DUI no debe ser mayor a 10 Caracteres!.', 'Alerta!');
        return false;
    }else if (nombre.trim() === ''){
        toastr.warning('Por favor ingrese su Nombre y Apellido!.','Alerta');
        return false;
    }else if (nombre.length < 10) {
        toastr.warning('Su Nombre debe de ser Completo!.', 'Alerta!');
        return false;
    }else if (nombre.length >= 40) {
        toastr.warning('Su Nombre no debe de ser mayor a 40 Caracteres!.', 'Alerta!');
        return false;
    }else if (nombre_usuario.trim() === ''){
        toastr.warning('Por favor ingrese su usuario!.','Alerta');
        return false; 
    }else if (nombre_usuario.length >= 20) {
        toastr.warning('Su usuario no debe de ser mayor a 20 Caracteres!.', 'Alerta!');
        return false;
    }else if (contrasena_usuario.trim() === ''){
        toastr.warning('Por favor ingrese su contraseña!.','Alerta');
        return false; 
    }else if (contrasena_usuario.length < 5) {
        toastr.warning('Su contraseña debe de ser mayor a 5 Caracteres!.', 'Alerta!');
        return false;
    }else if (contrasena_usuario.length >= 20) {
        toastr.warning('Su contraseña no debe de ser mayor a 20 Caracteres!.', 'Alerta!');
        return false;
    }else if (email.trim() === ''){
        toastr.warning('Por favor ingrese su correo!.','Alerta');
        return false; 
    }else if($('#emailCliente').val().indexOf('@', 0) == -1 || $('#emailCliente').val().indexOf('.', 0) == -1) {
        toastr.warning('Por favor ingrese un correo valido.', 'Alerta!');
        return false;
    }else if (fecha_nacimiento === ''){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento!.','Alerta');
        return false; 
    }else if (fecha_nacimiento >= '2001-01-01'){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento valida!.','Alerta');
        return false; 
    }else if (telefono.trim() === ''){
        toastr.warning('Por favor ingrese su Telefono!.','Alerta');
        return false; 
    }else if (telefono.length < 8) {
        toastr.warning('Su Telefono no debe de ser menor a 8 Caracteres!.', 'Alerta!');
        return false;
    }else if (sexo.trim() === ''){
        toastr.warning('Por favor ingrese su Sexo!.','Alerta');
        return false; 
    }else if (sexo.length < 5) {
        toastr.warning('Ingrese su sexo completo.', 'Alerta!');
        return false;
    }else if (direccion.trim() === ''){
        toastr.warning('Por favor seleccione un rol_!.','Alerta');
        return false;
    }else if (direccion.length >= 200) {
        toastr.warning('Su direccion no debe sobrepasar los 200 Caracteres.', 'Alerta!');
        return false;
    }else {
        insertCliente(dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion)
    }
});

function insertCliente(dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion) {
    $.ajax({
        dataType: 'json',
        url:  baseurl+'Cliente_C/clientesAgrega',
        type: 'post',
        dataType: 'json',
        data:{ dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion },
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
                        document.location.href=baseurl+'Cliente_C/index';
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

///////////////////////////////////////////////////////////////////////////////

$('#actualizar_cliente').click(function(){

    var 
    dui = $('#duiClienteU').val(),
    nombre = $('#nombreClienteU').val(),
    nombre_usuario = $('#usuarioClienteU').val(),
    contrasena_usuario = $('#passClienteU').val(),
    email = $('#emailClienteU').val(),
    fecha_nacimiento = $('#nacimientoClienteU').val(),
    telefono = $('#telefonoClienteU').val(),
    sexo = $('#sexoClienteU').val(),
    direccion = $('#direccionClienteU').val();

    if (dui.trim() === '' && nombre.trim() === '' && nombre_usuario.trim() === '' && contrasena_usuario.trim() === ''
        && email.trim() === '' && telefono.trim() === '' 
        && sexo.trim() === '' && direccion.trim() === '') 
    {
        toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
        return false;
    } else if (dui.trim() === ''){
        toastr.warning('Por favor ingrese su DUI!.','Alerta');
        return false;
    }else if (dui.length < 10) {
        toastr.warning('Su DUI no debe ser menor a 10 Caracteres!.', 'Alerta!');
        return false;
    }else if (dui.length > 10) {
        toastr.warning('Su DUI no debe ser mayor a 10 Caracteres!.', 'Alerta!');
        return false;
    }else if (nombre.trim() === ''){
        toastr.warning('Por favor ingrese su Nombre y Apellido!.','Alerta');
        return false;
    }else if (nombre.length < 10) {
        toastr.warning('Su Nombre debe de ser Completo!.', 'Alerta!');
        return false;
    }else if (nombre.length >= 40) {
        toastr.warning('Su Nombre no debe de ser mayor a 40 Caracteres!.', 'Alerta!');
        return false;
    }else if (nombre_usuario.trim() === ''){
        toastr.warning('Por favor ingrese su usuario!.','Alerta');
        return false; 
    }else if (nombre_usuario.length >= 20) {
        toastr.warning('Su usuario no debe de ser mayor a 20 Caracteres!.', 'Alerta!');
        return false;
    }else if (contrasena_usuario.trim() === ''){
        toastr.warning('Por favor ingrese su contraseña!.','Alerta');
        return false; 
    }else if (contrasena_usuario.length < 5) {
        toastr.warning('Su contraseña debe de ser mayor a 5 Caracteres!.', 'Alerta!');
        return false;
    }else if (contrasena_usuario.length >= 20) {
        toastr.warning('Su contraseña no debe de ser mayor a 20 Caracteres!.', 'Alerta!');
        return false;
    }else if (email.trim() === ''){
        toastr.warning('Por favor ingrese su correo!.','Alerta');
        return false; 
    }else if($('#emailClienteU').val().indexOf('@', 0) == -1 || $('#emailClienteU').val().indexOf('.', 0) == -1) {
        toastr.warning('Por favor ingrese un correo valido.', 'Alerta!');
        return false;
    }else if (fecha_nacimiento === ''){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento!.','Alerta');
        return false; 
    }else if (fecha_nacimiento >= '2001-01-01'){
        toastr.warning('Por favor ingrese su Fecha de Nacimiento valida!.','Alerta');
        return false; 
    }else if (telefono.trim() === ''){
        toastr.warning('Por favor ingrese su Telefono!.','Alerta');
        return false; 
    }else if (telefono.length < 8) {
        toastr.warning('Su Telefono no debe de ser menor a 8 Caracteres!.', 'Alerta!');
        return false;
    }else if (sexo.trim() === ''){
        toastr.warning('Por favor ingrese su Sexo!.','Alerta');
        return false; 
    }else if (sexo.length < 5) {
        toastr.warning('Ingrese su sexo completo.', 'Alerta!');
        return false;
    }else if (direccion.trim() === ''){
        toastr.warning('Por favor seleccione un rol_!.','Alerta');
        return false;
    }else if (direccion.length >= 200) {
        toastr.warning('Su direccion no debe sobrepasar los 200 Caracteres.', 'Alerta!');
        return false;
    }else {
        updateCliente(dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion)
    }
});

function updateCliente(dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion) {
    $.ajax({
        dataType: 'json',
        url:  baseurl+'Cliente_C/clientesEdita',
        type: 'post',
        dataType: 'json',
        data:{ dui,nombre,nombre_usuario,contrasena_usuario,email,fecha_nacimiento,telefono,sexo,direccion },
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
                        document.location.href=baseurl+'Cliente_C/index';
                    } 
                })
            }else{
                // alert('¡No Se Pudo Ingresar El Registro');
                Swal.fire(
                    'Error',
                    'No Se Pudo Actualizar El Registro',
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