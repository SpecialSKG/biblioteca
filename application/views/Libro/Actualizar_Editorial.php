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
									<div class="col-md-12">
										<div class="form-group">
											<label class="text-gray-800">Nombre de Editorial
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="editorialEditU" class="form-control" minlength="0" maxlength="50" value="<?= $edit->Editorial_e ?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Pais
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="paisEditU" class="form-control" minlength="0" maxlength="30" value="<?= $edit->Pais_e ?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="text-gray-800">Telefono
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="telefonoEditU" class="form-control validarnumeros" minlength="0" maxlength="8" value="<?= $edit->Telefono_e ?>">
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label class="text-gray-800">Direccion
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="direccionEditU" class="form-control" minlength="0" maxlength="200" value="<?= $edit->Direccion_e ?>">
										</div>

										<input type="hidden" id="idEditorialU" value="<?= $edit->id_editorial ?>">
										<input type="button" class="btn btn-primary btn-lg" id="actualizar_Editorial" value="Guardar Perfil">
										<br><br>
										<a href="<?php echo base_url();?>Libro_C/editorialLibro" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
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