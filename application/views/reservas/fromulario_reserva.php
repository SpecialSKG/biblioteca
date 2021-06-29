<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<div class="card text-gray-800 border-dark shadow mb-4">
				<div class="card-header text-gray-800"><h3 align="center">Registrar Reservas</h3></div>

				<div class="modal-body text-center">

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Titulo :</label><br>
								<label>Unidades disponibles de :</label>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<input type="text" disabled="" class="form-control" value="<?=$id->titulo?>" style="text-align:center">
								<input type="text" disabled="" class="form-control" id="nadaStock" value="<?=$id->stock?>" style="text-align:center">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Ingrese Dui de Cliente:
									<span class="text-danger">*</span>
								</label>
								<input type="text" id="dui" class="form-control" maxlength="10" minlength="10">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Unidades a Reservar:
									<span class="text-danger">*</span>
								</label>
								<input type="text" id="cantidad" class="form-control validarnumeros" min="1" max="<?=$id->stock?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Fecha de Retiro:
									<span class="text-danger">*</span>
								</label>
								<input type="date" id="fecha_salida" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Fecha de Entrega
									<span class="text-danger">*</span>
								</label>
								<input type="date" id="fecha_entrega" class="form-control" min="<?php echo date('Y-m-d'); ?>">
							</div>
						</div>

						<div class="col-md-12">
							<input type="hidden" id="id_libro" value="<?=$id->id_libro?>">
							<input type="button" id="agregar_reserva" class="btn btn-primary btn-lg" value="Hacer Reserva">
							<br><br>
							<a href="<?php echo base_url();?>Libro_C/index" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
</div>