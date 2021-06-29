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
											<label class="text-gray-800">Categoria
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="nombreCategoriaU" class="form-control" minlength="0" maxlength="50" value="<?=$categoria->categoria ;?>">
										</div>
									</div>

									<div class="col-md-12">
										<input type="hidden" id="idCategoriaU" value="<?=$categoria->id_categoria ;?>">
										<input type="button" class="btn btn-primary btn-lg" id="actualizar_Categoria" value="Actualizar">
										<br><br>
										<a href="<?php echo base_url();?>Libro_C/categoria" class="btn btn-outline-success btn-sm text-dark" style="float: center;">Retroceder</a>
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