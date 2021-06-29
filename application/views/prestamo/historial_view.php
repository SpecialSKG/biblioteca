
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<br>

							<!-- Page Heading -->
							<h1 class="h2 mb-2 text-gray-800 text-center">Historial Prestamo</h1>

							<!-- DataTales Example -->
							<div class="card shadow mb-4">

								<div class="card-body">

									<div class="table-responsive">

										<table class="table table-bordered table-hover text-center" id="hprestamo" width="100%" cellspacing="0">
											<thead class="thead-light">
												<tr>
													<th>Libro Reservado</th>
													<th>DUI del Cliente</th>
													<th>Cantidad</th>
													<th>Fecha de Entrega</th>
													<th>Fecha de Devolucion</th>
												</tr>
											</thead>

											<tbody>
												<?php foreach ($historial as $r){ ?>
													<tr>
														<td><?= $r->titulo?></td>
														<td><?= $r->dui?></td>
														<td><?= $r->cantidades?></td>
														<td><?= $r->fecha_prestamo?></td>
														<td><?= $r->fecha_entregap?></td>
													</tr>
												<?php }?>
											</tbody>
										</table>

									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
</body>