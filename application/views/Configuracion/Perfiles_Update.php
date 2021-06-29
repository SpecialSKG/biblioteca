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

								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Nombre Completo
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="nombre_user" class="form-control" minlength="0" maxlength="50" value="<?=$Obt->nombre_user ;?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Usuario
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="user" class="form-control" minlength="0" maxlength="20" value="<?=$Obt->user ;?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Contraseña
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="pass" class="form-control" minlength="0" maxlength="20" value="<?php echo base64_decode($Obt->pass) ;?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Perfil
												<span class="text-danger">*</span>
											</label>
											<select class="form-control select" id="rol_">
												<option value=""></option>
												<?php foreach ($Rol as $r): ?>
													<option value="<?= $r->id_rol ;?>"<?= $r->id_rol == $Obt->rol_  ? 'selected' : '' ?>>
														<?= $r->rol ;?>
													</option>
												<?php endforeach ;?>
											</select>
										</div>
									</div>

									<div class="col-md-12">
										<input type="hidden" id="id_user" value="<?=$Obt->id_user ;?>">
										<input type="button" class="btn btn-primary btn-lg" id="Actualizar_Perfil" value="Actualizar Perfil">
										<br><br>
										<a href="<?php echo base_url();?>Configuracion_C/Perfiles" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
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