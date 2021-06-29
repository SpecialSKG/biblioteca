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
												<label class="text-gray-800">Titulo
													<span class="text-danger">*</span>
												</label>
												<input type="text" id="tituloLibroU" class="form-control" minlength="0" maxlength="50" value="<?= $libro->titulo ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Identificador
													<span class="text-danger">*</span>
												</label>
												<input type="text" id="identificadorLibroU" class="form-control validarnumeros" value="<?= $libro->identificador ?>"
												minlength="0" maxlength="11">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Categoria
													<span class="text-danger">*</span>
												</label>
												<select id="categoriaLibroU" class="form-control select">
													<option value="">---</option>
													<?php foreach ($categoria as $c): ?>
														<option value="<?php echo $c->id_categoria ?>"
															<?php echo $c->id_categoria == $libro->id_categoria  ? 'selected' : '' ?>>
															<?php echo $c->categoria ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">autor
													<span class="text-danger">*</span>
												</label>
												<select id="autorLibroU" class="form-control select">
													<option value="">---</option>
													<?php foreach ($autor as $a): ?>
														<option value="<?php echo $a->id_autor ?>"
															<?php echo $a->id_autor == $libro->id_autor  ? 'selected' : '' ?>>
															<?php echo $a->nombre ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="text-gray-800">Lanzamiento
													<span class="text-danger">*</span>
												</label>
												<input type="date" id="fLanzamientoLibroU" class="form-control" minlength="0" maxlength="50" value="<?= $libro->fecha_lanzamiento ?>">
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="text-gray-800">editorial
													<span class="text-danger">*</span>
												</label>
												<select id="editorialLibroU" class="form-control select">
													<option value="">---</option>
													<?php foreach ($editorial as $e): ?>
														<option value="<?php echo $e->id_editorial ?>"
															<?php echo $e->id_editorial == $libro->id_editorial  ? 'selected' : '' ?>>
															<?php echo $e->Editorial_e ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
												<label class="text-gray-800">Stock
													<span class="text-danger">*</span>
												</label>
												<input type="text" id="stockLibroU" class="form-control" minlength="0" maxlength="50" value="<?= $libro->stock ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="text-gray-800">Fotografía Libro
													<span class="text-danger">*</span>
												</label>
												<br>
												<button class="btn btn-light btn-sm" id="upFileU">
													<i class="fa fa-upload" id="ico-btn-file" aria-hidden="true"></i>
												</button>

												<input type="file" id="imagenLibroU" style="display:none" enctype='multipart/form-data'>
												<img id='img-upload' value="<?php echo base_url('asset/img/') ?><?= $libro->imagen ?>" style=" border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 150px;" />
											</div>
										</div>

										<div class="col-md-6">
											<input type="hidden" id="idLibroU" value="<?=$libro->id_libro; ?>">
											<input type="button" id="actualizarLibro" value="Guardar" class="btn btn-primary btn-lg">
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

