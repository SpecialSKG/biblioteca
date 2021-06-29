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
							<div class="card-header text-gray-800"><h3 align="center">Actualizar Reservas</h3></div>

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
											<input type="text" disabled="" class="form-control" id="nadaStockU" value="<?=$x->stock?>" style="text-align:center">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Ingrese Dui de Cliente:
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="duiU" class="form-control" maxlength="10" minlength="10"  value="<?= $x->dui?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Unidades a Reservar:
												<span class="text-danger">*</span>
											</label>
											<input type="text" id="cantidadU" class="form-control validarnumeros" min="1" max="<?=$x->stock?>" value="<?=$x->cantidad?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha de Retiro:
												<span class="text-danger">*</span>
											</label>
											<input type="date" id="fecha_salidaU" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  value="<?= $x->fecha_salida?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha de Entrega
												<span class="text-danger">*</span>
											</label>
											<input type="date" id="fecha_entregaU" class="form-control" min="<?php echo date('Y-m-d'); ?>" value="<?= $x->fecha_entrega?>">
										</div>
									</div>

									<div class="col-md-12">
										<input type="hidden" id="id_reservaUR" value="<?= $x->id_reserva?>">
										<input type="hidden" id="id_libroUR" value="<?= $x->id_libro?>">
										<input type="hidden" id="cantodad" value="<?= $x->cantidad?>">

										<input type="button" id="updateR" class="btn btn-primary btn-lg" value="Actualizar">
										<br><br>
										<a href="<?php echo base_url();?>reserva_c/index" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
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