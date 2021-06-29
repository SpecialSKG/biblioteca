<br>
<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="card text-white border-dark shadow mb-4">
							<div class="card-header"></div>

							<div class="modal-body text-center">

								<div class="card-body">
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">DUI:</label>&nbsp;
												<input type="text" id="duiClienteU" class="form-control" value="<?=$cliente->dui?>" minlength="0" maxlength="10" placeholder="Ingresar su Dui con Guion">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Nombre:</label>&nbsp;
												<input type="text" id="nombreClienteU" class="form-control" value="<?=$cliente->nombre?>" minlength="0" maxlength="50">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Nombre del Usuario:</label>&nbsp;
												<input type="text" id="usuarioClienteU" class="form-control" value="<?=$cliente->nombre_usuario?>" minlength="0" maxlength="20">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Contrasena del Usuario:</label>&nbsp;
												<input type="text" id="passClienteU" class="form-control" value="<?php echo base64_decode($cliente->contrasena_usuario) ?>" minlength="0" maxlength="20">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">E-mail:</label>&nbsp;
												<input type="text" id="emailClienteU" class="form-control" value="<?=$cliente->email?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Fecha de Nacimiento:</label>&nbsp;
												<input type="date" id="nacimientoClienteU" class="form-control" value="<?=$cliente->fecha_nacimiento?>" max="<?php echo date('2001-01-01') ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Telefono:</label>&nbsp;
												<input type="text" id="telefonoClienteU" class="form-control validarnumeros" value="<?=$cliente->telefono?>" minlength="0" maxlength="8">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Sexo:</label>&nbsp;
												<input type="text" id="sexoClienteU" class="form-control" value="<?=$cliente->sexo?>" minlength="0" maxlength="15">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Direccion:</label>&nbsp;
												<input type="text" id="direccionClienteU" class="form-control" value="<?=$cliente->direccion?>" minlength="0" maxlength="200">
											</div>
										</div>

										<div class="col-md-6">
											<input type="button" id="actualizar_cliente" value="Guardar" class="btn btn-primary btn-lg">
											<br><br>
											<a href="<?php echo base_url();?>Cliente_C/index" class="btn btn-outline-success btn-sm text-dark" style="float: center;">Retroceder</a>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>

</div>