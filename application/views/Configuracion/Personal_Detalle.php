<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<div class="card text-white border-dark shadow mb-4">
				<div class="card-header"></div>

				<div class="modal-body text-center">

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-gray-800">Nombre
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="text" id="nombre_personalU" class="form-control" minlength="0" maxlength="30" value="<?= $obtP->nombre_personal ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">Usuario
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="text" id="usuario_personalU" class="form-control" minlength="0" maxlength="20" value="<?= $obtP->usuario_personal ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">Contraseña
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="text" id="pass_personalU" class="form-control" minlength="0" maxlength="20" value="<?php echo base64_decode($obtP->pass_personal) ?>">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="text-gray-800">Perfil
									<span class="text-danger">*</span>
								</label>
								<select disabled="" class="form-control select" id="rol_personalU">
									<option value=""></option>
									<?php foreach ($rolUser as $r): ?>
										<option value="<?= $r->id_rol ;?>"<?= $r->id_rol == $obtP->rol_personal  ? 'selected' : '' ?>>
											<?= $r->rol ;?>
										</option>
									<?php endforeach ;?>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">E-mail
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="email" id="email_personalU" class="form-control" minlength="0" maxlength="50" value="<?= $obtP->email_personal ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">Nacimiento
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="date" id="nacimiento_personalU" class="form-control" value="<?php echo date('2000-12-31') ?>" max="<?php echo date('2001-01-01') ?>" value="<?= $obtP->nacimiento_personal ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">Telefono
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="text" id="telefono_personalU" class="form-control validarnumeros" minlength="0" maxlength="8" value="<?= $obtP->telefono_personal ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="text-gray-800">Sexo
									<span class="text-danger">*</span>
								</label>
								<input disabled="" type="text" id="sexo_personalU" class="form-control" minlength="0" maxlength="15" value="<?= $obtP->sexo_personal ?>">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<a href="<?php echo base_url();?>Configuracion_C/leerPersonal" class="btn btn-outline-success text-dark btn-sm" style="float: center;">Retroceder</a>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
</div>
</div>