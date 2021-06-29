$("#upFile").on("click", function () {
	$("#imagenLibro").click();
	return false;
});

$("#imagenLibro").on("change", function() {
	$("#upFile").removeClass("btn-light");
	$("#upFile").addClass("btn-primary");
	$("#ico-btn-file").removeClass("fa-upload");
	$("#ico-btn-file").addClass("fa-check");
	return false;
});

$('#agregarLibros').click(function() {
	var 
	titulo = $('#tituloLibro').val(),
	identificador = $('#identificadorLibro').val(),
	categoria = $('#categoriaLibro').val(),
	autor = $('#autorLibro').val(),
	f_lanzamiento = $('#fLanzamientoLibro').val(),
	editorial = $('#editorialLibro').val(),
	stock = $('#stockLibro').val(),
	imagen = $('#imagenLibro').val();

	if (titulo.trim() === '' && identificador.trim() === '' && categoria === '' && autor === ''
		&& f_lanzamiento === '' && editorial === '' && stock.trim() === '' && imagen === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (titulo.trim() === ''){
		toastr.warning('Por favor ingrese su DUI!.','Alerta');
		return false;
	}else if (titulo.length < 3) {
		toastr.warning('Su Titulo no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (titulo.length > 50) {
		toastr.warning('Su Titulo no debe ser mayor a 50 Caracteres!.', 'Alerta!');
		return false;
	}else if (identificador.trim() === ''){
		toastr.warning('Por favor ingrese el identificador.','Alerta');
		return false;
	}else if (identificador.length > 11) {
		toastr.warning('El identificador no debe de ser mayor a 11 Caracteres!.', 'Alerta!');
		return false;
	}else if (categoria === ''){
		toastr.warning('Por favor seleccione una categoria!.','Alerta');
		return false; 
	}else if (autor === ''){
		toastr.warning('Por favor seleccione un Autor!.','Alerta');
		return false; 
	}else if (f_lanzamiento === ''){
		toastr.warning('Por favor seleccione la fecha de lanzamiento!.','Alerta');
		return false; 
	}else if (editorial === ''){
		toastr.warning('Por favor seleccione la editorial!.','Alerta');
		return false; 
	}else if (stock.trim() === ''){
		toastr.warning('Por favor ingrese el stock!.','Alerta');
		return false; 
	}else if (imagen === ''){
		toastr.warning('Por favor seleccione la imagen del libro.','Alerta');
		return false;
	}else {
		insertLibro(titulo, identificador, categoria, autor, f_lanzamiento, editorial,stock, imagen)
	}
	
});

function insertLibro(titulo, identificador, categoria, autor, f_lanzamiento, editorial,stock, imagen) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/agregarLibro',
		type: 'post',
		dataType: 'json',
		data:{ titulo, identificador, categoria, autor, f_lanzamiento, editorial, stock, imagen },
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
						document.location.href=baseurl+'Libro_C/index';
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

$("#upFileU").on("click", function () {
	$("#imagenLibroU").click();
	return false;
});

$("#imagenLibroU").on("change", function() {
	$("#upFileU").removeClass("btn-light");
	$("#upFileU").addClass("btn-primary");
	$("#ico-btn-file").removeClass("fa-upload");
	$("#ico-btn-file").addClass("fa-check");
	return false;
});

$('#actualizarLibro').click(function() {
	var 
	titulo = $('#tituloLibroU').val(),
	identificador = $('#identificadorLibroU').val(),
	categoria = $('#categoriaLibroU').val(),
	autor = $('#autorLibroU').val(),
	f_lanzamiento = $('#fLanzamientoLibroU').val(),
	editorial = $('#editorialLibroU').val(),
	stock = $('#stockLibroU').val(),
	imagen = $('#imagenLibroU').val(),
	id = $('#idLibroU').val()

	if (titulo.trim() === '' && identificador.trim() === '' && categoria === '' && autor === ''
		&& f_lanzamiento === '' && editorial === '' && stock.trim() === '' && imagen === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (titulo.trim() === ''){
		toastr.warning('Por favor ingrese su DUI!.','Alerta');
		return false;
	}else if (titulo.length < 3) {
		toastr.warning('Su Titulo no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (titulo.length > 50) {
		toastr.warning('Su Titulo no debe ser mayor a 50 Caracteres!.', 'Alerta!');
		return false;
	}else if (identificador.trim() === ''){
		toastr.warning('Por favor ingrese el identificador.','Alerta');
		return false;
	}else if (identificador.length > 11) {
		toastr.warning('El identificador no debe de ser mayor a 11 Caracteres!.', 'Alerta!');
		return false;
	}else if (categoria === ''){
		toastr.warning('Por favor seleccione una categoria!.','Alerta');
		return false; 
	}else if (autor === ''){
		toastr.warning('Por favor seleccione un Autor!.','Alerta');
		return false; 
	}else if (f_lanzamiento === ''){
		toastr.warning('Por favor seleccione la fecha de lanzamiento!.','Alerta');
		return false; 
	}else if (editorial === ''){
		toastr.warning('Por favor seleccione la editorial!.','Alerta');
		return false; 
	}else if (stock.trim() === ''){
		toastr.warning('Por favor ingrese el stock!.','Alerta');
		return false; 
	}else if (imagen === ''){
		toastr.warning('Por favor seleccione la imagen del libro.','Alerta');
		return false;
	}else {
		updateLibro(titulo, identificador, categoria, autor, f_lanzamiento, editorial,stock, imagen,id)
	}
	
});

function updateLibro(titulo, identificador, categoria, autor, f_lanzamiento, editorial,stock, imagen,id) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/Actualizar_Libro',
		type: 'post',
		dataType: 'json',
		data:{ titulo, identificador, categoria, autor, f_lanzamiento, editorial, stock, imagen,id },
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
						document.location.href=baseurl+'Libro_C/index';
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

$('#agregar_Categoria').click(function(){
	var 
	categoria = $('#nombreCategoria').val();

	if (categoria.trim() === ''){
		toastr.error('Por favor rellene el Campo!.','Alerta');
		return false;
	}else if (categoria.length < 3) {
		toastr.warning('Su Categoria no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (categoria.length > 20) {
		toastr.warning('Su Categoria no debe ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else {
		insertCategoria(categoria)
	}
});

function insertCategoria(categoria) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/agregarCategoria',
		type: 'post',
		dataType: 'json',
		data:{ categoria },
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
						document.location.href=baseurl+'Libro_C/categoria';
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


$('#actualizar_Categoria').click(function(){
	var 
	id_categoria = $('#idCategoriaU').val(),
	categoria = $('#nombreCategoriaU').val();

	if (categoria.trim() === ''){
		toastr.error('Por favor rellene el Campo!.','Alerta');
		return false;
	}else if (categoria.length < 3) {
		toastr.warning('Su Categoria no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (categoria.length > 20) {
		toastr.warning('Su Categoria no debe ser mayor a 20 Caracteres!.', 'Alerta!');
		return false;
	}else {
		updateCategoria(id_categoria, categoria)
	}
});

function updateCategoria(id_categoria,categoria) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/actualizarCategoria',
		type: 'post',
		dataType: 'json',
		data:{ id_categoria,categoria },
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
						document.location.href=baseurl+'Libro_C/categoria';
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

////////////////////////////////////////////////////

$('#agregar_Autor').click(function () {
	var  
	nombreAutor = $('#nombreAutor').val(),
	nacimientoAutor = $('#nacimientoAutor').val(),
	nacionalidadAutor = $('#nacionalidadAutor').val(),
	sexoAutor = $('#sexoAutor').val(),
	fotoAutor = document.getElementById("fotoAutor");

	if (nombreAutor.trim() === '' && nacimientoAutor === '' && nacionalidadAutor === '' 
		&& sexoAutor.trim() === '' && fotoAutor === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if (nombreAutor.trim() === ''){
		toastr.warning('Por favor ingrese un nombre completo!.','Alerta');
		return false;
	}else if (nombreAutor.length < 10) {
		toastr.warning('El nombre debe de ser mayor a 10 Caracteres!.', 'Alerta!');
		return false;
	}else if (nacimientoAutor === ''){
		toastr.warning('Por favor ingrese un año de nacimiento!.','Alerta');
		return false;
	}else if (nacionalidadAutor === ''){
		toastr.warning('Por favor ingrese una nacionalidad!.','Alerta');
		return false; 
	}else if (sexoAutor.trim() === ''){
		toastr.warning('Por favor ingrese el sexo!.','Alerta');
		return false;
	}else if (sexoAutor.length < 3) {
		toastr.warning('El sexo debe de ser mayor a 3 Caracteres!.', 'Alerta!');
		return false;
	// }else if (fotoAutor === ''){
	// 	toastr.warning('Por favor ingrese una foto!.','Alerta');
	// 	return false; 
	}else {
		insertAutor(nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor)
	}

});

function insertAutor(nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/agregarAutor',
		type: 'post',
		dataType: 'json',
		data:{ nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor},
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
						document.location.href=baseurl+'Libro_C/autorLibro';
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

function obtenerA(id_autor) {
	parametros = {
		"id_autor" : id_autor
	}

	$.ajax({
		data:{ id_autor },
		url:  baseurl+'Libro_C/obtenerAutor',
		type: 'post',
		beforesend: function(){},		success: function(response){
			data= $.parseJSON(response);
			if (data.length > 0) {
				$('#id_autorU').val(obt['id_autor']);
				$('#nombreAutorU').val(obt['nombreAutor']);
				$('#nacimientoAutorU').val(obt['nacimientoAutor']);
				$('#nacionalidadAutorU').val(obt['nacionalidadAutor']);
				$('#sexoAutorU').val(obt['sexoAutor']);
				$('#fotoAutor  ').val(obt['fotoAutor']);
			}else{
				alert('¡No Se Pudo Ingresar El Registro');
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

$('#editar_Autor').click(function () {
	var  
	nombreAutor = $('#nombreAutorU').val(),
	nacimientoAutor = $('#nacimientoAutorU').val(),
	nacionalidadAutor = $('#nacionalidadAutorU').val(),
	sexoAutor = $('#sexoAutorU').val(),
	// fotoAutor = $('#fotoAutor').val(),
	idAutorU = $('#idAutorU').val();

	if (nombreAutor.trim() === '' && nacimientoAutor === '' && nacionalidadAutor === '' 
		&& sexoAutor.trim() === '') 
	{
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	}else if (nombreAutor.trim() === ''){
		toastr.warning('Por favor ingrese un nombre completo!.','Alerta');
		return false;
	}else if (nombreAutor.length < 10) {
		toastr.warning('El nombre debe de ser mayor a 10 Caracteres!.', 'Alerta!');
		return false;
	}else if (nacimientoAutor === ''){
		toastr.warning('Por favor ingrese un año de nacimiento!.','Alerta');
		return false;
	}else if (nacionalidadAutor === ''){
		toastr.warning('Por favor ingrese una nacionalidad!.','Alerta');
		return false; 
	}else if (sexoAutor.trim() === ''){
		toastr.warning('Por favor ingrese el sexo!.','Alerta');
		return false;
	}else if (sexoAutor.length < 3) {
		toastr.warning('El sexo debe de ser mayor a 3 Caracteres!.', 'Alerta!');
		return false;
	// }else if (fotoAutor === ''){
	// 	toastr.warning('Por favor ingrese una foto!.','Alerta');
	// 	return false; 
	}else {
		updateAutor(nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor,idAutorU)
	}

});

function updateAutor(nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor,idAutorU) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/actualizarAutor',
		type: 'post',
		dataType: 'json',
		data:{ nombreAutor,nacimientoAutor,nacionalidadAutor,sexoAutor,idAutorU },
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
						document.location.href=baseurl+'Libro_C/autorLibro';
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


///////////////////////////////////////////////////////////////////////////////////


$('#agregar_Editorial').click(function() {
	var 
	editorialEdit = $('#editorialEdit').val(),
	paisEdit = $('#paisEdit').val(),
	telefonoEdit = $('#telefonoEdit').val(),
	direccionEdit = $('#direccionEdit').val();

	if (editorialEdit.trim() === '' && paisEdit.trim() === '' && telefonoEdit === '' && direccionEdit === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (editorialEdit.trim() === ''){
		toastr.warning('Por favor ingrese el nombre de la Editorial!.','Alerta');
		return false;
	}else if (editorialEdit.length < 5) {
		toastr.warning('Su Editorial no debe ser menor a 5 Caracteres!.', 'Alerta!');
		return false;
	}else if (editorialEdit.length > 50) {
		toastr.warning('Su Editorial no debe ser mayor a 50 Caracteres!.', 'Alerta!');
		return false;
	}else if (paisEdit === ''){
		toastr.warning('Por favor ingrese un Pais.','Alerta');
		return false;
	}else if (paisEdit.length < 3) {
		toastr.warning('Su Pais no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (telefonoEdit === ''){
		toastr.warning('Por favor ingrese un telefono!.','Alerta');
		return false; 
	}else if (telefonoEdit.length <= 7) {
		toastr.warning('Su telefono no debe ser menor a 8 Caracteres!.', 'Alerta!');
		return false;
	}else if (direccionEdit === ''){
		toastr.warning('Por favor ingrese una Direccion!.','Alerta');
		return false; 
	}else if (direccionEdit.length < 10) {
		toastr.warning('Su Direccion no debe ser menor a 10 Caracteres!.', 'Alerta!');
		return false;
	}else {
		insertEditorial(editorialEdit, paisEdit, telefonoEdit, direccionEdit)
	}
	
});

function insertEditorial(editorialEdit, paisEdit, telefonoEdit, direccionEdit) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/agregarEditorial',
		type: 'post',
		dataType: 'json',
		data:{ editorialEdit, paisEdit, telefonoEdit, direccionEdit },
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
						document.location.href=baseurl+'Libro_C/editorialLibro';
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



$('#actualizar_Editorial').click(function() {
	var 
	editorialEdit = $('#editorialEditU').val(),
	paisEdit = $('#paisEditU').val(),
	telefonoEdit = $('#telefonoEditU').val(),
	direccionEdit = $('#direccionEditU').val(),
	idEditorialU = $('#idEditorialU').val();

	if (editorialEdit.trim() === '' && paisEdit.trim() === '' && telefonoEdit === '' && direccionEdit === '') {
		toastr.error('Por favor Ingrese todos los Campos!.','Alerta');
		return false;
	} else if (editorialEdit.trim() === ''){
		toastr.warning('Por favor ingrese el nombre de la Editorial!.','Alerta');
		return false;
	}else if (editorialEdit.length < 5) {
		toastr.warning('Su Editorial no debe ser menor a 5 Caracteres!.', 'Alerta!');
		return false;
	}else if (editorialEdit.length > 50) {
		toastr.warning('Su Editorial no debe ser mayor a 50 Caracteres!.', 'Alerta!');
		return false;
	}else if (paisEdit === ''){
		toastr.warning('Por favor ingrese un Pais.','Alerta');
		return false;
	}else if (paisEdit.length < 3) {
		toastr.warning('Su Pais no debe ser menor a 3 Caracteres!.', 'Alerta!');
		return false;
	}else if (telefonoEdit === ''){
		toastr.warning('Por favor ingrese un telefono!.','Alerta');
		return false; 
	}else if (telefonoEdit.length <= 7) {
		toastr.warning('Su telefono no debe ser menor a 8 Caracteres!.', 'Alerta!');
		return false;
	}else if (direccionEdit === ''){
		toastr.warning('Por favor ingrese una Direccion!.','Alerta');
		return false; 
	}else if (direccionEdit.length < 10) {
		toastr.warning('Su Direccion no debe ser menor a 10 Caracteres!.', 'Alerta!');
		return false;
	}else {
		updateEditorial(editorialEdit, paisEdit, telefonoEdit, direccionEdit,idEditorialU)
	}
	
});

function updateEditorial(editorialEdit, paisEdit, telefonoEdit, direccionEdit,idEditorialU) {
	$.ajax({
		dataType: 'json',
		url:  baseurl+'Libro_C/actualizarEditorial',
		type: 'post',
		dataType: 'json',
		data:{ editorialEdit, paisEdit, telefonoEdit, direccionEdit,idEditorialU },
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
						document.location.href=baseurl+'Libro_C/editorialLibro';
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

