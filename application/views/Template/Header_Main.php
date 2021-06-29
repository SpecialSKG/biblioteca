<?php include_once 'application/config/private.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'asset/img/logo.png' ?>">

	<title><?= $page_title ;?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/main.css">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url() ;?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url() ;?>asset/css/sb-admin-2.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/toastr.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert2.min.css">

	<!-- Custom styles for this page -->
	<link href="<?php echo base_url() ;?>asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

				<?php if ($this->session->userdata('rol_') <= '2'): ?>
					<div class="header-left">
						<a href="<?php echo base_url() ;?>Usuario_C/Index" class="logo btn btn-outline-primary" role="button">
							<i class="fas fa-book"></i>
							<span>Biblioteca</span>
						</a>
					</div>
					<?php else:  ?>
						<div class="header-left">
							<a href="<?php echo base_url() ;?>Usuario_C/Index" class="logo btn btn-outline-primary" role="button">
								<i class="fas fa-book"></i>
								<span>Biblioteca</span>
							</a>
						</div>
					<?php endif ; ?>

					<!-- Sidebar Toggle (Topbar) -->
				<!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button> -->

				<!-- Topbar Search -->
				<!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form> -->

				
				<p class="text-secondary"  id="liveclock" style="
					text-align: center;
					margin-left: auto;
					margin-right: -15%;">
				</p>
				

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					<!-- Nav Item - Search Dropdown (Visible Only XS) -->
					<!-- <li class="nav-item dropdown no-arrow d-sm-none">
						<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search fa-fw"></i>
						</a> -->
						<!-- Dropdown - Messages -->
						<!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							<form class="form-inline mr-auto w-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li> -->



					<!-- Esto va en dentro del -->
					<!-- <a> cuando se quiere que sea desplegable -->
						<!--(data-toggle="dropdown") -->

						<!-- Nav Item - Alerts -->
						<!-- <li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="<?php// echo base_url() ;?>Cliente_C/index" id="alertsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user-friends"></i> Cliente
							</a>
						</li> -->

						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-book-open"></i> Libros
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url() ;?>Libro_C/index">Libros</a>

								<?php if ($this->session->userdata('rol_') <= '2'): ?>
									<a class="dropdown-item" href="<?php echo base_url() ;?>Libro_C/categoria">Categorias</a>
									<a class="dropdown-item" href="<?php echo base_url() ;?>Libro_C/autorLibro">Autor</a>
									<a class="dropdown-item" href="<?php echo base_url() ;?>Libro_C/editorialLibro">Editorial</a>
								<?php endif; ?>

								<div class="dropdown-divider"></div>
							</div>
						</li>

						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-box-open"></i> Gestionar
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php if ($this->session->userdata('rol_') <= '2'): ?>
									<a class="dropdown-item" href="<?php echo base_url();?>reserva_c/index">Reserva</a>

									<a class="dropdown-item" href="<?php echo base_url();?>prestamo_c/index">Prestamo</a>
								<?php endif; ?>

								<?php if ($this->session->userdata('rol_') === '3'): ?>
									<a class="dropdown-item" href="<?php echo base_url(); ?>reserva_c/mostrar_reserva/<?php echo $this->session->userdata('id_user') ?>">Historial Reserva</a>

									<a class="dropdown-item" href="<?php echo base_url(); ?>prestamo_c/mostrar_prestamo/<?php echo $this->session->userdata('id_user') ?>">Historial Prestamo</a>
									<div class="dropdown-divider"></div>
								<?php endif; ?>
							</div>
						</li>

						<?php if ($this->session->userdata('rol_') <= '2'): ?>
							<li class="nav-item dropdown no-arrow mx-1">

								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-archive"></i>
								</a>

								
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php if ($this->session->userdata('rol_') === '1'): ?>
										<a class="dropdown-item" href="<?php echo base_url() ;?>Configuracion_C/Perfiles">
											<i class="far fa-address-card"></i> Perfiles
										</a>
										<a class="dropdown-item" href="<?php echo base_url() ;?>Configuracion_C/leerPersonal">
											<i class="fas fa-users"></i> Personal
										</a>
										<?php elseif ($this->session->userdata('rol_') === '2'): ?>
											<a class="dropdown-item" href="<?php echo base_url() ;?>Cliente_C/index">
												<i class="fas fa-user-friends"></i> Cliente
											</a>
										<?php endif; ?>
										<a class="dropdown-item" href="<?php echo base_url() ;?>Cliente_C/vetadosClientes">
											<i class="fas fa-user-friends"></i> Vetados
										</a>
										<div class="dropdown-divider"></div>
									</div>
								</li>
							<?php endif; ?>

							<div class="topbar-divider d-none d-sm-block"></div>



							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?php echo $this->session->userdata('nombre_user') ?>
									</span>
									<!-- <img class="img-profile rounded-circle" src=""> -->
								</a>
								<!-- Dropdown - User Information -->
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
									<?php if ($this->session->userdata('rol_') <= '2'): ?>

										<a class="dropdown-item" href="<?php echo base_url() ;?>Configuracion_C/obtPersonal/<?php echo $this->session->userdata('id_user') ?>">
											<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
											Perfil
										</a>

										<?php else:  ?>
											<a class="dropdown-item" href="<?php echo base_url() ;?>Login_C/obtenerRegistro/<?php echo $this->session->userdata('id_user') ?>">
												<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
												Perfil
											</a>
										<?php endif; ?> 
								<!-- <a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Ajustes
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Registro de actividades
								</a> -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Cerrar sesión
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Logout Modal-->
				<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>

							<?php if ($this->session->userdata('user')): ?>
								<div class="modal-footer">
									<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
									<a class="btn btn-primary" href="<?php echo base_url() ;?>Login_C/logout/<?php echo $this->session->userdata('id_user') ?>">Cerrar sesión</a>
								</div>
							<?php endif; ?> 
						</div>
					</div>
				</div>

			</div>

		</div>

		<style>
			body{
				/*height: 100vh;*/
				background: url("<?php echo base_url('asset/img/fondo_pagina.jpg');?>");
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				overflow: scroll;
			}
			#content-wrapper {
				background: rgba(0, 0, 0, 0.0) !important;
				/*padding-bottom: 2.5rem !important;*/
			}
		</style>
	</head>
	<!-- <br><br> -->