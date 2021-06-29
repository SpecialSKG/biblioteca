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
												<input type="text" id="duiClienteLU" class="form-control" value="<?=$clienteR->dui?>" minlength="0" maxlength="10" placeholder="Ingresar su Dui con Guion">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Nombre:</label>&nbsp;
												<input type="text" id="nombreClienteLU" class="form-control" value="<?=$clienteR->nombre?>" minlength="0" maxlength="50">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Nombre del Usuario:</label>&nbsp;
												<input type="text" id="usuarioClienteLU" class="form-control" value="<?=$clienteR->nombre_usuario?>" minlength="0" maxlength="20">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Contrasena del Usuario:</label>&nbsp;
												<input type="text" id="passClienteLU" class="form-control" value="<?php echo base64_decode($clienteR->contrasena_usuario) ?>" minlength="0" maxlength="20">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">E-mail:</label>&nbsp;
												<input type="text" id="emailClienteLU" class="form-control" value="<?=$clienteR->email?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Fecha de Nacimiento:</label>&nbsp;
												<input type="date" id="nacimientoClienteLU" class="form-control" value="<?= $clienteR->fecha_nacimiento ?>" max="<?php echo date('2001-01-01') ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Telefono:</label>&nbsp;
												<input type="text" id="telefonoClienteLU" class="form-control validarnumeros" value="<?=$clienteR->telefono?>" minlength="0" maxlength="8">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Sexo:</label>&nbsp;
												<input type="text" id="sexoClienteLU" class="form-control" value="<?=$clienteR->sexo?>" minlength="0" maxlength="15">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Direccion:</label>&nbsp;
												<input type="text" id="direccionClienteLU" class="form-control" value="<?=$clienteR->direccion?>" minlength="0" maxlength="200">
											</div>
										</div>

										<div class="col-md-6">
											<input type="button" id="actualizarRegistro" value="Guardar" class="btn btn-primary btn-lg">
											<br><br>
											<a href="<?php echo base_url();?>Libro_C/index" class="btn btn-outline-success btn-sm text-dark" style="float: center;">Retroceder</a>
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