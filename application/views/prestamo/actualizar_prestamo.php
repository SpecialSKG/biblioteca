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
						<div class="card text-gray-800 border-dark shadow mb-4">
							<div class="card-header text-gray-800"><h3 align="center">Actualizar Prestamo</h3></div>

							<div class="modal-body text-center">

								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Titulo :</label><br>
											<label>Unidades disponibles :</label>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<input type="text" disabled="" class="form-control" value="<?=$x->titulo?>" style="text-align:center">
											<input type="text" disabled="" class="form-control" id="nadaStockss" value="<?=$x->stock?>" style="text-align:center">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Unidades a Reservar:
												<span class="text-danger">*</span>
											</label>
											<input type="number" id="cantidadesU" class="form-control validarnumeros" min="1" max="<?=$x->stock?>" value="<?= $x->cantidades?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha de Prestamo:
												<span class="text-danger">*</span>
											</label>
											<input type="date" id="fecha_prestamoU" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>" value="<?= $x->fecha_prestamo?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha de Entrega
												<span class="text-danger">*</span>
											</label>
											<input type="date" id="fecha_entregapU" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>" value="<?= $x->fecha_entregap?>">
										</div>
									</div>

									<div class="col-md-6">
										<input type="hidden" id="id_prestamoU" value="<?= $x->id_prestamo?>">
										<input type="hidden" id="id_libroU" value="<?= $x->id_libro?>">
										<input type="hidden" id="Pdate" value="<?= $x->cantidades?>">

										<input type="button" id="updatep" class="btn btn-primary btn-lg" value="Actualizar">
										<br><br>
										<a href="<?php echo base_url();?>prestamo_c/index" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
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